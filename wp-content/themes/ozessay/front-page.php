<?php get_header(); ?>
    <script>
        var sheet = document.createElement('style');
        sheet.innerHTML = "#content_block {display:none} .site_content-accordion__body {display:none}";
        document.head.appendChild(sheet);
    </script>

<?php //get_template_part('inc', 'top-slider'); ?>
<?php get_template_part('inc', 'main-calc'); ?>
<?php //get_template_part('inc', 'content-accordion'); ?>
<?php get_template_part('inc', 'features'); ?>
<?php get_template_part('inc', 'what-get'); ?>
<?php get_template_part('inc', 'feedback'); ?>
<?php get_template_part('inc', 'samples'); ?>
<?php /*get_template_part('inc', 'get-app'); */?>
<?php /*get_template_part('inc', 'blog-articles'); */?>
<?php get_template_part('inc', 'front-page-text'); ?>
<?php //get_template_part('inc', 'services-slider'); ?>
<?php //get_template_part('inc', 'counters'); ?>
<?php //get_template_part('inc', 'service-desc'); ?>
<?php //get_template_part('inc', 'writers-slider'); ?>
<?php //get_template_part('inc', 'testimonials'); ?>
<?php //get_template_part('inc', 'order-steps'); ?>

<?php get_template_part('inc', 'order-now-band'); ?>

    <!--<script>-->
    <!--	var content_block = document.getElementById('content_block');-->
    <!--	var order_steps = document.getElementById('order_steps');-->
    <!--	document.getElementById('main').insertBefore(content_block, order_steps);-->
    <!--	content_block.style.display = 'block';-->
    <!--</script>-->

<?php get_footer(); ?>