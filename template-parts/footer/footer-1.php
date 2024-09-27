<?php 

/**
 * Template part for displaying footer layout three
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sifa
*/


    $sifa_footer_logo = get_theme_mod( 'sifa_footer_logo' );
    $sifa_footer_top_space = function_exists('tpmeta_field') ? tpmeta_field('sifa_footer_top_space') : '0';
    $sifa_copyright_center = $sifa_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';
    //footer bg image & color
    $sifa_footer_bg_url_from_page = function_exists( 'tpmeta_image_field' ) ? tpmeta_image_field( 'sifa_footer_bg_image' ) : '';

    $sifa_footer_bg_color_from_page = function_exists( 'tpmeta_field' ) ? tpmeta_field( 'sifa_footer_bg_color' ) : '';

    $footer_bg_img = get_theme_mod( 'footer_bg_image' );
    $footer_bg_color = get_theme_mod( 'footer_bg_color' );
    
    $footer_copyright_switch = get_theme_mod( 'footer_copyright_switch', true );
    $footer_bottom_copyright_area_switch = get_theme_mod( 'footer_bottom_copyright_area_switch', true );

    // bg image
    $bg_img = !empty( $sifa_footer_bg_url_from_page['url'] ) ? $sifa_footer_bg_url_from_page['url'] : $footer_bg_img;

    // bg color
    $bg_color = !empty( $sifa_footer_bg_color_from_page ) ? $sifa_footer_bg_color_from_page : $footer_bg_color;
    // Email id 
   $header_top_email = get_theme_mod( 'header_email', __( 'sifa@support.com', 'sifa' ) );

    // Phone Number
   $header_top_phone = get_theme_mod( 'header_phone', __( '+88 01310-069824', 'sifa' ) );
   $footer_bottom_menu = get_theme_mod( 'footer_bottom_menu', __( '#', 'sifa' ) );


    // footer area links  switch
    $footer_area_links_switch = get_theme_mod( 'footer_area_links_switch', false );
    // footer area links 
    $footer_area_links = get_theme_mod( 'footer_area_links', __( '#', 'sifa' ) );

    $footer_social_switch = get_theme_mod( 'footer_social_switch', false );

    // footer_columns
    $footer_columns = 0;
    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    for ( $num = 1; $num <= $footer_widgets + 1; $num++ ) {
        if ( is_active_sidebar( 'footer-' . $num ) ) {
            $footer_columns++;
        }
    }

    switch ( $footer_columns ) {
    case '1':
        $footer_class[1] = 'col-lg-12';
        break;
    case '2':
        $footer_class[1] = 'col-lg-6 col-md-6';
        $footer_class[2] = 'col-lg-6 col-md-6';
        break;
    case '3':
        $footer_class[1] = 'col-sm-6 col-lg-4';
        $footer_class[2] = 'col-sm-6 col-lg-3';
        $footer_class[3] = 'col-sm-6 col-lg-4';
        break;
    case '4':
        $footer_class[1] = 'col-xl-3 col-lg-4 col-md-6 col-sm-6';
        $footer_class[2] = 'col-xl-3 col-lg-2 col-md-6 col-sm-6';
        $footer_class[3] = 'col-xl-3 col-lg-3 col-md-6 col-sm-6';
        $footer_class[4] = 'col-xl-3 col-lg-3 col-md-6 col-sm-6';
        break;
    default:
        $footer_class = 'col-xl-3 col-lg-3 col-md-6';
        break;
    }

?>

<!-- start footer section here -->
<section class="footer overflow-hidden"  style="background:url('<?php echo esc_url($bg_img);?>')">
    <?php if ( is_active_sidebar('footer-1') OR is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') ): ?>

    <div class="container">
        <div class="row g-4 justify-content-between">
            <?php
                if ( $footer_columns < 5 ) {
                print '<div class="col-sm-6 col-lg-4">';
                dynamic_sidebar( 'footer-1' );
                print '</div>';

                print '<div class="col-sm-6 col-lg-3">';
                dynamic_sidebar( 'footer-2' );
                print '</div>';

                print '<div class="col-sm-6 col-lg-4">';
                dynamic_sidebar( 'footer-3' );
                print '</div>';
                
                } else {
                    for ( $num = 1; $num <= $footer_columns; $num++ ) {
                        if ( !is_active_sidebar( 'footer-' . $num ) ) {
                            continue;
                        }
                        print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                        dynamic_sidebar( 'footer-' . $num );
                        print '</div>';
                    }
                }
            ?>               
        </div>
    </div>
    <?php endif; ?>    
</section>
<!-- end footer section here -->


 