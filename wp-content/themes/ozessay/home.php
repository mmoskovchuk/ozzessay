<?php get_header(); ?>
    <section сlass="blog-wrapper">

        <nav>
            <ul>
                <li class="load-content" data-index="1">Format</li>
                <li class="load-content" data-index="2">Samples</li>
                <li class="load-content" data-index="3">Structure</li>
                <li class="load-content" data-index="4">Tips</li>
                <li class="load-content" data-index="5">Topic</li>
                <li class="load-content" data-index="6">Type</li>
            </ul>
        </nav>
        <div id="content"></div>

        <div class="container">

            <div class="col-md-12 ">
                <?php /*if (!is_page() ('blog')) :*/ ?>
                <?php /*get_template_part('loop');*/ ?>
                <?php /*endif;*/ ?>
                <?php
                the_posts_pagination(array(
                    'show_all' => false,
                    'end_size' => 1,
                    'mid_size' => 1,
                    'prev_next' => true,
                    'prev_text' => __('<'),
                    'next_text' => __('>'),
                    'screen_reader_text' => __(''),
                ));
                ?>

            </div>

        </div>

    </section>

<?php get_footer(); ?>