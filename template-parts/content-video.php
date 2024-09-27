<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sifa
 */

 $sifa_video_url = function_exists('tpmeta_field')? tpmeta_field('sifa_post_video') : '';
 $categories = get_the_terms( $post->ID, 'category' );
$sifa_blog_cat = get_theme_mod( 'sifa_blog_cat', false );
$sifa_singleblog_social = get_theme_mod( 'sifa_singleblog_social', false );
$social_shear_col= $sifa_singleblog_social ? "col-lg-7 col-md-7" : "col-xl-12 col-md-12 col-lg-12";

if ( is_single() ): 
?> 

<article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item tp-postbox-item-wrapper mb-80 format-image' );?>>
    <?php if ( has_post_thumbnail() ): ?>
    <div class="tp-postbox-thumb p-relative mb-25">
        <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
        </a>
        <?php if ( !empty($sifa_video_url) ): ?>
        <div class="tp-postbox-thumb-btn">
            <a class="play-btn popup-video" href="<?php echo esc_url($sifa_video_url); ?>"><i
                    class="fa-solid fa-play"></i>
            </a>
        </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    <!-- blog meta -->
    <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>

    <h3 class="tp-postbox-title2"><?php the_title();?></h3>
    <?php the_content();?>
        <?php
            wp_link_pages( [
                'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'sifa' ),
                'after'       => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after'  => '</span>',
            ] );
        ?>
    <div class="tp-postbox-share-wrapper">
        <div class="row">
            <div class=" <?php echo esc_attr($social_shear_col); ?>">
                <?php echo sifa_get_tag(); ?>
            </div>
            <?php sifa_blog_social_share() ?>
        </div>
    </div>
</article>

<?php else: ?>
<article id="post-<?php the_ID();?>" <?php post_class( 'tp-postbox-item mb-50 format-video' );?>>
    <?php if ( has_post_thumbnail() ): ?>
    <div class="tp-postbox-thumb p-relative">
        <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
        </a>
        <?php if ( !empty($sifa_video_url) ): ?>
        <div class="tp-postbox-thumb-btn">
            <a class="play-btn popup-video" href="<?php echo esc_url($sifa_video_url); ?>"><i
                    class="fa-solid fa-play"></i></a>
        </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    <div class="tp-postbox-content">
        <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
        <h3 class="tp-postbox-title">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h3>
        <div class="tp-postbox-text">
            <?php the_excerpt();?>
        </div>
        <!-- blog btn -->
        <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>
    </div>
</article>
<?php
endif;?>