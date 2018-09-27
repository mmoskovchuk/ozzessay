<?php
/**
 * Template Name: Services
 */
?>

<?php get_header(); ?>

<!--TOP-BLOCK-->
<section class="site_top-block">
	<?php get_template_part('inc', 'services-info'); ?>
</section>

<?php get_template_part('inc', 'samples'); ?>
<?php get_template_part('inc', 'services-tabs'); ?>
<?php get_template_part('inc', 'services-slider'); ?>
<?php get_template_part('inc', 'guarantees-info'); ?>
<?php get_template_part('inc', 'discount'); ?>

<?php get_footer(); ?>