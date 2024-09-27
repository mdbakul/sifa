 <?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sifa
 */
$categories = get_the_terms( $post->ID, 'category' );
$sifa_blog_cat = get_theme_mod( 'sifa_blog_cat', false );
$sifa_singleblog_social = get_theme_mod( 'sifa_singleblog_social', false );
  
$social_shear_col= $sifa_singleblog_social ? "col-xl-6 col-lg-6 col-md-6" : "col-xl-12 col-md-12 col-lg-12";

if ( is_single() ) : ?>
 <div id="post-<?php the_ID();?>" <?php post_class('blogsingle__bodycontent format-image' );?>>
    <?php if ( has_post_thumbnail() ): ?>
        <div class="thum imghover">
            <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
        </div>
    <?php endif; ?>
    <div class="blogsingle__content  bg-white">
        <div class="heading">
            <h4 class="tp-postbox-title2"><?php the_title();?></h4>        
            <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
        </div>
        <?php the_content();?>                  
       
        <?php if(has_tag()) : ?> 
            <div class="tagbutton-icon">                
                <?php echo sifa_get_tag(); ?> 
                <?php sifa_blog_social_share() ?>
            </div>
        <?php endif; ?>
    </div>
</div>
 <?php else: ?> 

<div class="col-md-6">
    <div class="blog__item">
        <div class="blog__inner blog__inner--innerblogpage">
        <?php if ( has_post_thumbnail() ): ?>
            <div class="thumb">                
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
                </a>
            </div>
        <?php endif; ?>
            <div class="content bg-white"> 
                <div class="text">
                    <?php get_template_part( 'template-parts/blog/blog-meta' ); ?> 
                    <h6>
                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                    </h6>
                </div>
                <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>
            </div>
        </div>
    </div>
</div>

 <?php endif;?>