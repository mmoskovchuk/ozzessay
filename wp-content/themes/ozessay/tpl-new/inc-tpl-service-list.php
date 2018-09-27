<!--SCHEME-BLOCK BEGIN-->

<section class="service-list">
    <div class="container">
       <h2 class="site_secondary__title">Various of Custom Writing Services</h2>
        <div class="service-list__wrap">

            <!--First Column-list -->
            <?php if (have_rows('list_of_services')): ?>
            <ul class="service-list__items">
                <?php while (have_rows('list_of_services')) : the_row(); ?>
                <li class="service-list__item">
                    <a href="<?php echo get_sub_field('service_link'); ?>"><?php echo get_sub_field('service_name'); ?></a>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif;?>

            <!--Second Column-list -->
            <?php if (have_rows('list_of_services_number_two')): ?>
            <ul class="service-list__items">
                <?php while (have_rows('list_of_services_number_two')) : the_row(); ?>
                <li class="service-list__item">
                    <a href="<?php echo get_sub_field('service_link'); ?>"><?php echo get_sub_field('service_name_two'); ?></a>
                </li>
                <?php endwhile;?>
            </ul>
            <?php endif;?>
            <button class="see-all-services js-see-all">See All</button>
            <!--Third Column-list -->
            <?php if (have_rows('list_of_services_number_three')): ?>
            <ul class="service-list__items service-list__items_hide">
                <?php while (have_rows('list_of_services_number_three')) : the_row(); ?>
                <li class="service-list__item">
                    <a href="<?php echo get_sub_field('service_link'); ?>"><?php echo get_sub_field('service_name'); ?></a>
                </li>
                <?php endwhile;?>
            </ul>
            <?php endif;?>

            <!--Fourth Column-list -->
            <?php if (have_rows('list_of_services_number_four')): ?>
            <ul class="service-list__items service-list__items_hide">
                <?php while (have_rows('list_of_services_number_four')) : the_row(); ?>
                <li class="service-list__item">
                    <a href="<?php echo get_sub_field('service_link'); ?>"><?php echo get_sub_field('service_name'); ?></a>
                </li>
                <?php endwhile;?>
            </ul>
            <?php endif;?>

            <!--Fifth Column-list -->
            <?php if (have_rows('list_of_services_number_five')): ?>
            <ul class="service-list__items service-list__items_hide">
                <?php while (have_rows('list_of_services_number_five')) : the_row(); ?>
                <li class="service-list__item">
                    <a href="<?php echo get_sub_field('service_link'); ?>"><?php echo get_sub_field('service_name'); ?></a>
                </li>
                <?php endwhile;?>
            </ul>
            <?php endif;?>


        </div>
    </div>
</section>

<!--SCHEME-BLOCK END-->