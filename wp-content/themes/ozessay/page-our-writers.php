<?php
/**
 * Template Name: Our-writers
 */
?>

<?php get_header(); ?>

    <!--BREADCRUMB-->
<?php get_template_part('tpl-new/inc', 'tpl-breadcrumb'); ?>

    <!--TOP-BLOCK-->
<?php get_template_part('tpl-new/inc', 'tpl-top'); ?>

    <!--OUR WRITERS-->
    <section class="page_our-writers">
        <div class="container">
            <h2 class="page_our-writers__title">Select the Best Writer</h2>
            <div class="page_our-writers__desc">Browse the profiles of our top-rated writers and choose a professional<br>
                who feels right to you.
            </div>
            <div data-crm-widget="ourWriters"></div>
        </div>
    </section>

    <!--EMAIL-->
<?php get_template_part('tpl-new/inc', 'tpl-email'); ?>

    <!--CHAT-->
<?php get_template_part('tpl-new/inc', 'tpl-chat'); ?>

<?php get_footer(); ?>