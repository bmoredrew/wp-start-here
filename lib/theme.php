<?php
// Change Some_Theme to ProjectPrefix_Theme
// Change site- to yoursite-
class Some_Theme
{

	public static function $instance;

	public static function init()
	{
		null === self::$instance && self::instance = new self();
		return self::$instance;
	}

	private function __construct()
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );
	}

	public function wp_enqueue_scripts()
	{
		// CSS
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
		wp_enqueue_style( 'site-styles', get_template_directory_uri() . '/assets/css/main.css' );

		// JS
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins.js', array( 'jquery' ) );
		wp_enqueue_script( 'site-scripts', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ) );
	}

}

Some_Theme::init();