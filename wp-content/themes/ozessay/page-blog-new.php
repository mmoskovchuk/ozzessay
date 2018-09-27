<?php
/**
 * Template Name: Blog-new
 */

?>

<?php get_header(); ?>


<section сlass="blog">

    <div class="blog-top">
        <div class="container">
            <div class="col-md-12">
                <div class="blog-top__wrap">
                    <h1>Blogs</h1>
                </div>
            </div>
        </div>
    </div>

    <!--BREADCRUMB-->
    <?php get_template_part('tpl-new/inc', 'tpl-breadcrumb-blog'); ?>
    <!--END BREADCRUMB-->
    </div>

    <div class="container blog-wrapper">
        <div class="col-md-3">
            <h2 class="blog__title-nav">Categories</h2>
            <div id="number-posts"></div>

            <nav class="blog__nav-tag">
                <ul>
                    <h3 class="blog__nav-tag-item" data-index="1">Format</h3>
                    <h3 class="blog__nav-tag-item" data-index="2">Samples</h3>
                    <h3 class="blog__nav-tag-item" data-index="3">Structure</h3>
                    <h3 class="blog__nav-tag-item" data-index="4">Tips</h3>
                    <h3 class="blog__nav-tag-item" data-index="5">Topic</h3>
                    <h3 class="blog__nav-tag-item" data-index="6">Type</h3>
                </ul>
            </nav>

        </div>

        <div class="col-md-9 blog__content-wrap">
            <div class="blog__content-filter-wrap">
                <button id="letter-filter">A to Z &#8195;<i class="fa fa-long-arrow-down" aria-hidden="true"></i> </button>
                <button id="date-filter">Date &#8195;<i class="fa fa-long-arrow-down" aria-hidden="true"></i> </button>
            </div>
            <div class="blog__content-block">
                <div id="content">start content</div>
            </div>


        </div>
    </div>


</section>

<?php get_footer(); ?>
