<?php $services = array(
    array(
        'icon' => 'icon-delivery',
        'title' => 'On-time Delivery',
        'text' => 'We meet even the shortest deadlines',
    ),
    array(
        'icon' => 'icon-tools',
        'title' => 'Affordable Prices',
        'text' => 'Everything is student-friendly here, including prices',
    ),
    array(
        'icon' => 'icon-lightbulb',
        'title' => 'Stress-Free Service',
        'text' => 'Track the progress of your order from your personal account',
    ),
); ?>

<!--FEATURES-->
<section class="site_features-info">
    <div class="container">
        <div class="row">
            <?php foreach ($services as $k => $item): ?>
                <div class="col-sm-4">
                    <div class="site_features-info__item">
                        <div class="site_features-info__icon"><i class="<?php echo $item['icon']; ?>"></i></div>
                        <div class="site_features-info__title"><?php echo $item['title']; ?></div>
                        <div class="site_features-info__text"><?php echo $item['text']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>