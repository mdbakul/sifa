<?php
/**
 * Breadcrumbs for sifa theme.
 *
 * @package     sifa
 * @author      Theme_Pure
 * @copyright   Copyright (c) 2022, Theme_Pure
 * @link        https://www.weblearnbd.net
 * @since       sifa 1.0.0
 */



function sifa_breadcrumb_func() {
    global $post;  
    $breadcrumb_class = '';
    $breadcrumb_show = 1;

    if ( is_front_page() && is_home() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','sifa'));
        $breadcrumb_class = 'home_front_page';
    }
    elseif ( is_front_page() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','sifa'));
        $breadcrumb_show = 0;
    }
    elseif ( is_home() ) {
        if ( get_option( 'page_for_posts' ) ) {
            $title = get_the_title( get_option( 'page_for_posts') );
        }
    }
    elseif ( is_single() && 'post' == get_post_type() ) {
      $title = get_the_title();
    } 
    elseif ( is_single() && 'product' == get_post_type() ) {
        $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'sifa' ) );
    } 
    elseif ( is_single() && 'courses' == get_post_type() ) {
      $title = esc_html__( 'Course Details', 'sifa' );
    } 
    elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'sifa' ) . get_search_query();
    } 
    elseif ( is_404() ) {
        $title = esc_html__( 'Page not Found', 'sifa' );
    } 
    elseif ( is_archive() ) {
        $title = get_the_archive_title();
    } 
    else {
        $title = get_the_title();
    }
 


    $_id = get_the_ID();

    if ( is_single() && 'product' == get_post_type() ) { 
        $_id = $post->ID;
    } 
    elseif ( function_exists("is_shop") AND is_shop()  ) { 
        $_id = wc_get_page_id('shop');
    } 
    elseif ( is_home() && get_option( 'page_for_posts' ) ) {
        $_id = get_option( 'page_for_posts' );
    }

    $is_breadcrumb = function_exists('tpmeta_field')? tpmeta_field('sifa_check_bredcrumb') : 'on';

    $con1 = $is_breadcrumb && ($is_breadcrumb== 'on') && $breadcrumb_show == 1;

    $con_main = is_404() ? is_404() : $con1;
    
    if (  $con_main ) {
    $bg_img_from_page = function_exists('tpmeta_image_field')? tpmeta_image_field('sifa_breadcrumb_bg') : '';

    $hide_bg_img = function_exists('tpmeta_field')? tpmeta_field('sifa_check_bredcrumb_img') : 'on';
    // get_theme_mod
    $bg_img = get_theme_mod( 'breadcrumb_image' );
    $breadcrumb_padding = get_theme_mod( 'breadcrumb_padding' );
    $breadcrumb_bg_color = get_theme_mod( 'breadcrumb_bg_color', '#16243E' );
    $breadcrumb_shape_switch = get_theme_mod( 'breadcrumb_shape_switch', 'on' );
    if ( $hide_bg_img == 'off' ) {
        $bg_main_img = '';
    }else{  
        $bg_main_img = !empty( $bg_img_from_page ) ? $bg_img_from_page['url'] : $bg_img;
    }
        
    ?>
   
<!-- start banner here -->
<section class="pageheader overflow-hidden" data-background="<?php print esc_attr($bg_main_img);?>">
    <div class="container">
        <div class="pageheader__content go-up">            
            <h2><?php echo sifa_kses( $title ); ?></h2>
            <?php if(function_exists('bcn_display')) : ?>
                <nav aria-label="breadcrumb">
                    <?php bcn_display(); ?>
                </nav>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- end banner here -->

<?php
      }
}

add_action( 'sifa_before_main_content', 'sifa_breadcrumb_func' );

// sifa_search_form
function sifa_search_form() {
    ?>    

    <!-- search popup start -->    
    <div class="search__popup">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="search__wrapper">
                        <div class="search__top d-flex justify-content-between align-items-center">
                            <div class="search__logo">
                                <a href="index.html">
                                    <img src="assets/img/logo/logo.png" alt="">
                                </a>
                            </div>
                            <div class="search__close">
                                <button type="button" class="search__close-btn search-close-btn">
                                    <i class="fa-sharp fa-regular fa-square-xmark"></i>                                
                                </button>
                            </div>
                        </div>
                        <div class="search__form">
                            <form action="<?php print esc_url( home_url( '/' ) );?>">
                                <div class="search__input">                                    
                                    <input type="text" name="s" class="search-input" value="<?php print esc_attr( get_search_query() )?>"  placeholder="<?php print esc_attr__( 'Search...', 'sifa' );?>">                                    
                                    <button>
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <!-- search popup end -->
<?php
}
add_action( 'sifa_before_main_content', 'sifa_search_form' );