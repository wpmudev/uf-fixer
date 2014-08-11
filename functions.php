<?php

include_once get_template_directory() . '/library/upfront_functions.php';
include_once get_template_directory() . '/library/class_upfront_debug.php';
include_once get_template_directory() . '/library/class_upfront_server.php';
include_once get_template_directory() . '/library/class_upfront_theme.php';

class Uf_fixer extends Upfront_ChildTheme {
    public function initialize() {
         if (!upfront_is_builder_running()) {
            add_filter('upfront_get_layout_properties', array($this, 'get_layout_properties'), 10, 2);
        }
        add_filter('upfront_augment_theme_layout', array($this, 'augment_layout'));
        $this->add_actions_filters();
        $this->populate_pages();
        $this->install_element_alternative_styles();
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

    protected function install_element_alternative_styles(){
        $this->import_element_styles();
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
        unset( $args["comment_notes_before"] );
        unset( $args["comment_notes_after"] );
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

    public function get_layout_properties($properties, $args) {
        if ($this->incorrect_stylesheet($args['stylesheet'])) return $properties;

        $this->theme = $args['stylesheet'];

        $settings_file = sprintf(
            '%ssettings.php',
            trailingslashit(dirname(__FILE__))
        );
        if (file_exists($settings_file)) {
            include $settings_file;
        }
        if (!empty($layout_properties)) {
            $properties = json_decode(stripslashes($layout_properties), true);
        }
        if (!empty($typography)) {
            $properties[] = array(
                'name' => 'typography',
                'value' => json_decode(stripslashes($typography))
            );
        }
        if (!empty($layout_style)) {
            $properties[] = array(
                'name' => 'layout_style',
                'value' => addslashes($layout_style)
            );
        }

        return $properties;
    }
    protected function incorrect_stylesheet($stylesheet) {
        if(empty($stylesheet) || $stylesheet === 'theme' || $stylesheet === 'upfront') return true;
        return false;
    }

    public function augment_layout ($layout) {
        if (empty($layout['regions'])) return $layout;
        $layout['regions'] = $this->augment_regions($layout['regions']);
        return $layout;
    }

    public function augment_regions ($regions) {
        if ($this->_slider_imported) return $regions;

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

    private function _import_slider_image ($filepath) {
        $filepath = trailingslashit(get_stylesheet_directory()) . $filepath;
        $key = $this->get_prefix() . '-slider-images';
        $images = get_option($key, array());
        if (!empty($images[$filepath])) return $images[$filepath];
        if (!file_exists($filepath)) return $filepath;
        // else import image
        $wp_upload_dir = wp_upload_dir();
        $pfx = !empty($wp_upload_dir['path']) ? trailingslashit($wp_upload_dir['path']) : '';
        if (!function_exists('wp_generate_attachment_metadata')) require_once(ABSPATH . 'wp-admin/includes/image.php');
        $filename = basename($filepath);
        while (file_exists("{$pfx}{$filename}")) {
            $filename = rand() . $filename;
        }
        @copy($filepath, "{$pfx}{$filename}");
        $wp_filetype = wp_check_filetype(basename($filename), null);
        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
            'post_mime_type' => $wp_filetype['type'],
            'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
            'post_content' => '',
            'post_status' => 'inherit'
        );
        $attach_id = wp_insert_attachment($attachment, "{$pfx}{$filename}");
        $attach_data = wp_generate_attachment_metadata( $attach_id, "{$pfx}{$filename}" );
        wp_update_attachment_metadata( $attach_id, $attach_data );

        $images[$filepath] = $attach_id;
        update_option($key, $images);

        return $attach_id;
    }
}

Uf_fixer::serve();