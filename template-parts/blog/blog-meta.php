<?php 

/**
 * Template part for displaying post meta
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sifa
 */

$categories = get_the_terms( $post->ID, 'category' );
$sifa_blog_date = get_theme_mod( 'sifa_blog_date', true );
$sifa_blog_comments = get_theme_mod( 'sifa_blog_comments', true );
$sifa_blog_author = get_theme_mod( 'sifa_blog_author', true );
$sifa_blog_cat = get_theme_mod( 'sifa_blog_cat', false );

?>

<ul>
    <?php if ( !empty($sifa_blog_author) ): ?>
        <li>
            <a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>">
                <i class="fa-regular fa-user"></i>
                <?php print get_the_author();?>
            </a>
        </li>
    <?php endif;?>

    <?php if ( !empty($sifa_blog_cat) ): ?>
        <?php if ( !empty( $categories[0]->name ) ): ?>
            <li> <a href="<?php print esc_url(get_category_link($categories[0]->term_id)); ?>">         
                    <i class="fa-solid fa-user"></i>
                        <?php echo esc_html($categories[0]->name); ?>
                </a> 
        </li>
        <?php endif;?>
    <?php endif;?>

    <?php if ( !empty($sifa_blog_date) ): ?>
        <li>
            <i class="fa-sharp fa-regular fa-calendar-days"></i>
            <?php the_time( get_option('date_format') ); ?>
        </li>
    <?php endif;?>

    <?php if ( !empty($sifa_blog_comments) ): ?>
        <li>
            <a href="<?php comments_link();?>">
                <i class="fa-regular fa-comments"></i>
                <?php comments_number();?>
            </a>
        </li>
    <?php endif;?>
</ul>
