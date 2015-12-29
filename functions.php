<?php

include_once get_template_directory() . '/library/upfront_functions.php';
include_once get_template_directory() . '/library/class_upfront_debug.php';
include_once get_template_directory() . '/library/class_upfront_server.php';
include_once get_template_directory() . '/library/class_upfront_theme.php';

class Uf_fixer extends Upfront_ChildTheme {


    public function initialize() {
        add_filter('upfront_augment_theme_layout', array($this, 'augment_layout'));
        $this->add_actions_filters();
        add_action('wp_enqueue_scripts', array($this, 'add_scripts'));
        $this->populate_pages();
        add_filter("comment_form_field_author", array( $this, "comment_form_author" ));
        add_filter("comment_form_field_email", array( $this, "comment_form_email" ));
        add_filter("comment_form_field_url", array( $this, "comment_form_website" ));
        add_filter("comment_form_field_comment", array( $this, "comment_form_comment" ));
        add_filter( 'comment_form_defaults', array( $this, "comment_form_args" ) );

}

    public function get_prefix(){
        return 'uf-fixer';
    }

    public static function serve(){
        return new self();
    }

    public function populate_pages() {

    }
    
    public function add_scripts() {
        wp_enqueue_script('onoff', get_stylesheet_directory_uri() . '/js/jquery.onoff.min.js', array('jquery'));
        wp_enqueue_script('fixer-theme-script', get_stylesheet_directory_uri() . '/js/fixer-theme.js', array('jquery', 'onoff'));
    }

    protected function add_actions_filters() {
        // Include current theme style
        add_action('wp_head', array($this, 'enqueue_styles'), 200);
    }

    public function enqueue_styles() {
        wp_enqueue_style('current_theme', get_stylesheet_uri());
    }

    /**
     * Overrides default comment form args
     *
     * @since 1.0.0
     *
     * @param $args
     * @return mixed
     */
    public function comment_form_args( $args ){
        $args["label_submit"] = __("Submit", "uf_fixer");
        unset( $args["fields"]['url'] );
	    $args["comment_notes_before"] = "";
	    $args["comment_notes_after"] = "";
        return $args;
    }
    public function comment_form_author( $field ){
        $placeholder = __("What's your name?", "uf_fixer");
        $field = <<<FIELD
        <p class="comment-form-author">
          <input id="author" name="author" placeholder="{$placeholder}" type="text" value="" size="30" aria-required='true' />
        </p>
FIELD;
        return $field;
    }

    public function comment_form_email( $field ){
        $placeholder = __("Your email address", "uf_fixer");
        $field = <<<FIELD
        <p class="comment-form-email">
          <input id="email" name="email" placeholder="{$placeholder}" type="text" value="" size="30" aria-required='true' />
        </p>
FIELD;
        return $field;
    }

    public function comment_form_website( $field ){
        $placeholder = __("Your website url", "uf_fixer");
        $field = <<<FIELD
        <p class="comment-form-website">
          <input id="url" name="url" placeholder="{$placeholder}" type="text" value="" size="30" aria-required='true' />
        </p>
FIELD;
        return $field;
    }

    public function comment_form_comment( $field ){
        $placeholder = __("Type your comment here ...", "uf_fixer");
        $field = <<<FIELD
        <p class="comment-form-comment">
          <textarea id="comment" placeholder="{$placeholder}"  name="comment" cols="45" rows="8" aria-required="true"></textarea>
        </p>
FIELD;
        return $field;
    }

    public function augment_layout ($layout) {
        if (empty($layout['regions'])) return $layout;
        $layout['regions'] = $this->augment_regions($layout['regions']);
        return $layout;
    }

    public function augment_regions ($regions) {
        if ( isset( $this->_slider_imported ) && $this->_slider_imported ) return $regions;

        if (empty($regions) || !is_array($regions)) return $regions;
        foreach ($regions as $idx => $region) {
            if (empty($region['properties']) || !is_array($region['properties'])) continue;
            foreach($region['properties'] as $pidx => $prop) {
                if (empty($prop['name']) || empty($prop['value']) || 'background_slider_images' !== $prop['name']) continue;
                foreach ($prop['value'] as $order_id => $attachment_src) {
                    if (is_numeric($attachment_src)) continue; // A hopefully existing image.
                    $regions[$idx]['properties'][$pidx]['value'][$order_id] = $this->_import_slider_image($attachment_src);
                }
            }
        }

        $this->_slider_imported = true;
        return $regions;
    }
}

Uf_fixer::serve();

function fixer_dispatch_posts_layout ($args, $slug, $default_file) {
    if ('uposts' !== $slug) return $args;
    if (empty($args['layout'])) return $args;

    if (!empty($args['properties']['limit']))
    {
        if ($args['properties']['limit'] == 3) {
            $layout = Upfront_ThisPostView::find_postlayout('archive', 'blog-main', false);
        } elseif ($args['properties']['limit'] == 8) {
            $layout = Upfront_ThisPostView::find_postlayout('archive', 'blog-page', false);
        } else {
            $layout = Upfront_ThisPostView::find_postlayout('archive', 'items', false);
        }
    }

    $args['layout'] = $layout;
    return $args;
}
add_filter('upfront-theme-template_arguments', 'fixer_dispatch_posts_layout', 10, 3);



/**
 * Temporary version check nag
 */
if (!is_admin()) {
    function upfront_version_check_script () {
        if (function_exists('upfront_exporter_is_running') && upfront_exporter_is_running()) return false; // Not in exporter
        if (version_compare(wp_get_theme('upfront')->Version, '1.0-alpha-1', 'ge')) return false;
?>
<style type="text/css">
.mfp-bg.uf-upgrade-notice {
    background:#fff;
    background:rgba(255,255,255,.75);
}
.uf-upgrade-notice .mfp-close {
    display:none;
}
.upfront-version_compatibility-nag {
    margin: 0 auto;
    width: 90%;
    max-width: 600px;
    background: #fff;
    text-align: center;
    padding: 40px;
    box-shadow: 0 0 20px 0px rgba(0,0,0,.15);
    box-sizing: border-box;
}
.upfront-version_compatibility-nag p {
    font:normal 100 22px/1.7 'Open Sans', Helvetica Neueu, Helvetica, Arial, sans-serif; 
    margin-bottom: 2em;
    color:#777D82;
}
.upfront-version_compatibility-nag a {
    font:normal 100 18px 'Open Sans', Helvetica Neueu, Helvetica, Arial, sans-serif; 
    border-radius: 5px;
    margin: 10px 20px;
    text-decoration: none;
    display: inline-block;
    padding: 10px 25px;
    background-image: linear-gradient(-180deg, rgba(0,0,0,0.00) 0%, rgba(0,0,0,0.05) 100%);
    box-shadow: 0px 1px 0px 0px rgba(0,0,0,0.10);
}
.upfront-version_compatibility-nag a.update {
    color: #fff;
    background: #1FCD8F;
    padding: 15px 30px;

}
.upfront-version_compatibility-nag a.boot,
.upfront-version_compatibility-nag a.cancel {
    color: #777D82;
    background: #F0F0F0;
}

.upfront-version_compatibility-nag a.update:hover, 
.upfront-version_compatibility-nag a.boot:hover {
    background-image: linear-gradient(-180deg, rgba(0,0,0,0.08) 0%, rgba(0,0,0,0.00) 100%);
}
</style>
<script type="text/javascript">
;(function ($, undefined) {

    /**
     * Overridden Upfront.Application.start
     *
     * Actual application starting.
     *
     * @return {Boolean}
     */
    function application_override () {
        _nag = $.magnificPopup.open({
            items: {
                src: '' + 
                    '<div class="upfront-version_compatibility-nag">' +
                        '<p>You have recently upgraded your theme. Please Upgrade to <b>Upfront 1.0</b> in order to be able to edit this theme.</p>' +
                        '<div>' +
                            '<a class="cancel" href="#cancel">Cancel</a>' +
                            '<a class="update" href="<?php echo esc_url(admin_url("themes.php")); ?>">Upgrade Upfront</a>' +
                        '</div>' +
                    '</div>' +
                '',
                type: 'inline'
            },
            mainClass: 'uf-upgrade-notice'
        });
        $(".upfront-version_compatibility-nag")
            .find('a[href="#cancel"]')
                .off("click")
                .on('click', function (e){
                    if (e.preventDefault) e.preventDefault();
                    if (e.stopPropagation) e.stopPropagation();

                    $.magnificPopup.close();
                    return false;
                })
            .end()
        ;
        return false;
    }

    (function boot () {
        if (!((window.Upfront || {}).Events || {}).on) return setTimeout(boot);
        Upfront.Events.on("application:loaded:layout_editor", function () {
            // Monkeypatch the Application.start method so we can't run whatsoever
            Upfront.Application.start = application_override;
        });
    })();

})(jQuery);
</script>
<?php
    }
    add_action('wp_footer', 'upfront_version_check_script');
}
