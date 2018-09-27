<!--SIDEBAR-->
<aside class="sidebar">
	<?php if (!dynamic_sidebar('sidebar')): ?>
        <!--- dadawd 1 -->

        <?php get_template_part('inc', 'email-collector'); ?>
        <!--- dadawd 2 -->

        <?php get_template_part('inc', 'aside-samples'); ?>

        <!--- dadawd 3 -->
        <?php get_template_part('inc', 'aside-simplePriceCalc'); ?>

        <?php get_template_part('inc', 'faq-random'); ?>

    <?php endif; ?>
</aside>
