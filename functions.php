<?php

include_once get_template_directory() . '/library/class_upfront_debug.php';
include_once get_template_directory() . '/library/class_upfront_server.php';
include_once get_template_directory() . '/library/class_upfront_theme.php';

class Uf_fixer extends Upfront_ChildTheme {
    public function initialize() {
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
}

Uf_fixer::serve();