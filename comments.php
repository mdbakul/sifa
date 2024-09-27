<?php
// Check if comments are allowed
if (comments_open()) :
    ?>
    <div id="comments" class="blogsingle__leavecoments">
        <?php
        // Display the comments list
        if (have_comments()) :
            ?>
            <h5>
                <?php
                $comment_count = get_comments_number();
                echo esc_html($comment_count) . ' ' . _n('Comment', 'Comments', $comment_count, 'textdomain');
                ?>
            </h5>
            <div class="blogsingle__comments mb-5">
                <div class="content">
                    <ul>
                        <?php
                        wp_list_comments(array(
                            'style'       => 'ul',
                            'short_ping'  => true,
                        ));
                        ?>
                    </ul>
                </div>
            </div>

            <?php
            // Display comment pagination if needed
            the_comments_pagination(array(
                'prev_text' => esc_html__('Previous', 'textdomain'),
                'next_text' => esc_html__('Next', 'textdomain'),
            ));
        endif;

        // Display the comment form
        comment_form();
        ?>
    </div><!-- .comments-area -->
<?php endif; ?>
