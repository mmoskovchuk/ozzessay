
<?php if ( have_rows('group_post_link'))  {?>

<div class="similar-article-list clearfix">
    <p class="h3">You may also find useful</p>
    <?php
        $sitesurl =  get_template_directory_uri();
        $imagesdefault ='/img/article-og-image.jpg';

        if (have_rows('group_post_link')):
            while (have_rows('group_post_link')) : the_row();
                ?>
                    <?php $post_id = get_sub_field('post_link', false, false); ?>
                    <div class="similar-article">
                        <div class="similar-article-img">
                            <a href="<?php echo get_the_permalink($post_id); ?>" class="img-preview" style="background-image: url('<?php echo $sitesurl . $imagesdefault; ?>');"> </a>
                        </div>
                        <div class="similar-article-content">
                            <p class="h3"><a href="<?php echo get_the_permalink($post_id); ?>"><?php echo get_the_title($post_id); ?></a></p>
                            <p><?php echo get_sub_field('page_description'); ?></p>
                            <div class="meta-footer">
                                <div class="view-info">
                                    <span class="fa fa-star"> <?php echo get_sub_field('fake_rating'); ?>/5</span>
                                    <span class="fa fa-eye"> <?php echo get_sub_field('fake_views'); ?></span>
                                </div>
                                <a href="<?php echo get_the_permalink($post_id); ?>" class="read-more"> <?php echo get_sub_field('time_to_read'); ?> min. Click to read</a>
                            </div>
                        </div>
                    </div>

                <?php
            endwhile;
        endif;
    ?>
</div>

<?php } ?>
