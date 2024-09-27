<?php

/**
 * sifa_scripts description
 * @return [type] [description]
 */
function sifa_scripts() {

    /**
     * all css files
    */ 

    wp_enqueue_style( 'sifa-fonts', sifa_fonts_url(), array(), '1.0.0' );
    if( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', SIFA_THEME_CSS_DIR.'bootstrap.rtl.min.css', array() );
    }else{
        wp_enqueue_style( 'bootstrap', SIFA_THEME_CSS_DIR.'bootstrap.min.css', array() );
    }    
    wp_enqueue_style( 'fontawasome', SIFA_THEME_CSS_DIR . 'fontawasome.css', [] );
    wp_enqueue_style( 'animate', SIFA_THEME_CSS_DIR . 'animate.css', [] );
    wp_enqueue_style( 'swiper-bundle', SIFA_THEME_CSS_DIR . 'swiper-bundle.min.css', [] );
    wp_enqueue_style( 'odometer', SIFA_THEME_CSS_DIR . 'odometer.css', [] );
    wp_enqueue_style( 'lightcase', SIFA_THEME_CSS_DIR . 'lightcase.css', [] );
    wp_enqueue_style( 'sifa-core', SIFA_THEME_CSS_DIR . 'sifa-core.css', [], time() ); 
    wp_enqueue_style( 'sifa-style', get_stylesheet_uri() );  

    // all js   
    wp_enqueue_script( 'bootstrap-bundle', SIFA_THEME_JS_DIR . 'bootstrap.bundle.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'swiper-bundle', SIFA_THEME_JS_DIR . 'swiper-bundle.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'odometer', SIFA_THEME_JS_DIR . 'odometer.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'isotope-pkgd', SIFA_THEME_JS_DIR . 'isotope.pkgd.min.js', [ 'imagesloaded' ], false, true );
    wp_enqueue_script( 'lightcase', SIFA_THEME_JS_DIR . 'lightcase.js', [ 'jquery' ], '', true );    
    wp_enqueue_script( 'viewport', SIFA_THEME_JS_DIR . 'viewport.jquery.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'custom', SIFA_THEME_JS_DIR . 'custom.js', [ 'jquery' ], false, true );
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'sifa_scripts' ); 

/*
Register Fonts
 */
function sifa_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'sifa' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?'. urlencode('family=Jost:wght@400;500;600;700;800;900&family=Kumbh+Sans:wght@400;500;600;700;800&display=swap');
    }
    return $font_url;
}