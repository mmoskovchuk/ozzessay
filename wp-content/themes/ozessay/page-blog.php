<?php
/**
 * Template Name: Blog
 */

?>

<?php get_header(); ?>
    <div class="page-header">
        <div class="page-header-block">
            <div class="container">
                <h1 class="page-header-block__title">Blog</h1>
            </div>
        </div>
    </div>
    <div class="site_tpl-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <?php get_template_part('inc-blog-loop', get_post_format()); ?>

                </div>

            </div>
        </div>
    </div>

<?php get_footer(); ?>
