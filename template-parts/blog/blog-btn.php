<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sifa
 */

$sifa_blog_btn = get_theme_mod( 'sifa_blog_btn', 'Read More' );
$sifa_blog_btn_switch = get_theme_mod( 'sifa_blog_btn_switch', true );

?>
<?php if ( !empty( $sifa_blog_btn_switch ) ): ?>
<div class="blogbtn">
    <a href="<?php the_permalink();?>" class="custom-btn"><?php print esc_html( $sifa_blog_btn );?></a>
</div>
<?php endif;?>
