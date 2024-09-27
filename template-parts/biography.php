<?php
    $author_data = get_the_author_meta( 'description', get_query_var( 'author' ) );
    $author_info = get_the_author_meta( 'sifa_write_by');
    $facebook_url = get_the_author_meta( 'sifa_facebook' );
    $twitter_url = get_the_author_meta( 'sifa_twitter' );
    $linkedin_url = get_the_author_meta( 'sifa_linkedin' );
    $instagram_url = get_the_author_meta( 'sifa_instagram' );
    $sifa_url = get_the_author_meta( 'sifa_youtube' );
    $sifa_write_by = get_the_author_meta( 'sifa_write_by' );
    $author_bio_avatar_size = 180;
    if ( $author_data != '' ):
?>
   

<div class="blogsingle__author mt-4">                        
    <h5><?php echo esc_html__('Author post editor', "sifa");?></h5>
    <div class="author-content">
        <div class="thum">
            <a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )?>">
                <?php print get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size, '', '', [ 'class' => 'media-object img-circle' ] );?>  
            </a>
        </div>
        <div class="text"> 
            <h6 class="postbox__author-title"><a href="<?php print esc_url( get_author_posts_url( get_the_author_meta('ID')))?>"> <?php echo ucwords(get_the_author()); ?></a></h6>
            <p><?php the_author_meta( 'description' );?></p> 
            <ul>
                <li><a href="<?php echo esc_attr($facebook_url)?>"><i class="fa-solid fa-rss"></i></a></li>
                <li><a href="<?php echo esc_attr($linkedin_url)?>"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="<?php echo esc_attr($instagram_url)?>"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="<?php echo esc_attr($twitter_url)?>"><i class="fa-brands fa-square-x-twitter"></i></a></li>
            </ul>               
        </div>
    </div>
</div>
<?php endif;?>


