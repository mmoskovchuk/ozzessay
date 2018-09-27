<?php $prices = array(
    array(
        icon => 'icon-puzzle',
        title => 'Type of work',
        text => 'Each type of service has different price. Editing is the cheapest one.',
    ),
    array(
        icon => ' icon-documents',
        title => 'Number of pages',
        text => 'The fewer pages you need, the lower the final price will be',
    ),
    array(
        icon => 'icon-trophy',
        title => 'Academic level',
        text => 'College and high school papers are cheaper than Ph.D. projects',
    ),
    array(
        icon => 'icon-hourglass',
        title => 'Deadline',
        text => 'Order in advance and pay less for your paper',
    ),
); ?>

<!--PRICES-INFO-->
<section class="site_prices-info">
    <div class="container">
        <div class="row">
            <?php foreach ($prices as $k => $item): ?>
                <div class="col-md-3 col-sm-6">
                    <div class="site_prices-info__item">
                        <div class="site_prices-info__icon"><i class="<?php echo $item[icon]; ?>"></i></div>
                        <div class="site_prices-info__title"><?php echo $item[title]; ?></div>
                        <div class="site_prices-info__text"><?php echo $item[text]; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>