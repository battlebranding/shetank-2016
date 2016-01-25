<?php

class SheTank_Branded_Theme {

	protected static $single_instance = null;

	static function init() {
		if ( self::$single_instance === null ) {
			self::$single_instance = new self();
		}
		return self::$single_instance;
	}

	public function hooks() {
		add_action( 'wp_enqueue_scripts', array( $this, 'theme_enqueue_styles' ) );
	}

	public function theme_enqueue_styles() {
		wp_enqueue_style( 'branded', get_stylesheet_directory_uri() . '/style.css' );
	}

}

add_action( 'after_setup_theme', array( SheTank_Branded_Theme::init(), 'hooks' ) );
