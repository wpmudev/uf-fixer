<?php

include_once get_template_directory() . '/library/class_upfront_debug.php';
include_once get_template_directory() . '/library/class_upfront_server.php';
include_once get_template_directory() . '/library/class_upfront_theme.php';

class Uf_fixer extends Upfront_ChildTheme {
	public function initialize() {
		$this->add_actions_filters();
		$this->populate_pages();
		$this->install_element_alternative_styles();
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
}

Uf_fixer::serve();