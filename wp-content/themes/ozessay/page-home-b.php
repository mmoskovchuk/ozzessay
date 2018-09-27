<?php
/**
 * Template Name: Home-b
 *
 */
?>


<?php get_header(); ?>
    <script>
        var sheet = document.createElement('style');
        sheet.innerHTML = "#content_block {display:none} .site_content-accordion__body {display:none}";
        document.head.appendChild(sheet);
    </script>

<?php get_template_part('tpl-new/inc', 'tpl-main-calc'); ?>
<?php get_template_part('tpl-new/inc', 'tpl-benefits'); ?>
<?php get_template_part('tpl-new/inc', 'tpl-how-to-start'); ?>
<?php get_template_part('tpl-new/inc', 'tpl-experience'); ?>
<?php get_template_part('tpl-new/inc', 'tpl-solutions'); ?>
<?php get_template_part('tpl-new/inc', 'tpl-first-class-writers'); ?>
<?php get_template_part('tpl-new/inc', 'tpl-testimonials-new'); ?>
<?php get_template_part('tpl-new/inc', 'tpl-email-new'); ?>
<?php get_template_part('tpl-new/inc', 'tpl-front-page-content'); ?>
<?php get_template_part('tpl-new/inc', 'tpl-chat-new'); ?>

    <!--<script>-->
    <!--	var content_block = document.getElementById('content_block');-->
    <!--	var order_steps = document.getElementById('order_steps');-->
    <!--	document.getElementById('main').insertBefore(content_block, order_steps);-->
    <!--	content_block.style.display = 'block';-->
    <!--</script>-->

<?php get_footer(); ?>