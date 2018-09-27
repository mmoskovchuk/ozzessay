<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

            <div class="blog-post blog-post-n">

                <div class="blog-post-content <?php if( !has_post_thumbnail() ) { echo 'blog-post-content-max';} ?>">

                    <h2 class="article-title"><a href="<?php the_permalink(); ?>"><a href="<?php the_permalink(); ?>"><?php trim_title_words(20, '...'); ?></a></h2>
                    <div class="info-date">
                        <?php echo the_time('F j, Y'); ?> | GradeMiners
                    </div>
                    <div class="article-text text-justify ">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="btn-more">
                        <a class="read-more-btn" href="<?php the_permalink(); ?>"><?php _e('read more'); ?></a>
                    </div>
                </div>
            </div>

    <?php endwhile; ?>
<?php endif; ?>