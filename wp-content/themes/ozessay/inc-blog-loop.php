<?php //if ($post->post_content != '') : ?>
	<!--CONTENT-->
	<section class="site_content">

                <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                ?>
                <?php $argsblog = array(
                    'post__in' => array(356, 28, 34, 36, 38, 60, 64, 68, 74, 76, 48, 46, 258, 242, 244, 793, 796, 800, 803, 806, 809, 812, 815, 818, 820),
                    'post_type' => 'page',
                    'post_status' => 'publish',
                    'paged'          => $paged,
                    'posts_per_page'=> 10
                );
                $my_query = new WP_Query ($argsblog) ?>
<!--                --><?php //if ( have_posts() ) : ?>
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li> / <?php the_title(); ?></li>
        </ul>
				<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>

                        <div class="col-md-3">
                            <?php $imagesurl =  get_template_directory_uri();?>
                            <?php $imageslink ='/img/article-og-image.jpg'; ?>
                            <a href="<?php the_permalink(); ?>" class="img-bag" style="background-image: url('<?php echo $imagesurl . $imageslink; ?>');"></a>
                        </div>
                        <div class="col-md-9">
							<h2 class="site_article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="site_article-text">
                                <?php the_excerpt(); ?>
							</div>
                        </div>
					</article>
				<?php endwhile; ?>
<!--			--><?php //endif; ?>

            <div class="site_blog-pagination">
                <?php
                if ( $my_query->max_num_pages > 1 ) :
                $big = 999999999;
                echo '<div class="pagination">';
                    echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
//                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'show_all' => false,
                    'end_size' => 2,
                    'mid_size' => 2,
                    'prev_next' => true,
                    'prev_text' => __('Prev'),
                    'next_text' => __('Next'),
                    'total' => $my_query->max_num_pages
                    ) );
                    echo '</div>';
                endif;

                wp_reset_postdata();

                ?>
            </div>

	</section>
<?php //endif; ?>
