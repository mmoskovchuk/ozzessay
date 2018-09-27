<?php
$template_path = get_bloginfo('template_url');
$services = [
    [
        'icon' => 'icon-circle-compass',
        'img' => $template_path . '/img/services-info-front/service_info_1.svg'
    ],
    [
        'icon' => 'icon-tools',
        'img' => $template_path . '/img/services-info-front/service_info_2.svg'
    ],
    [
        'icon' => 'icon-lightbulb',
        'img' => $template_path . '/img/services-info-front/service_info_3.svg'
    ],
];

?>
<!--SERVICES-INFO-->
<?  // !!!!!!!!!!!!!  for text block use inc-services-info-text.php ?>

<section class="site_services-info">
	<div class="container">
		<div class="row">
			<?php foreach ($services as $item): ?>
                <div class="col-sm-4">
                    <div class="site_services-info__item">
                        <div class="site_services-info__icon"><i class="<?php echo $item['icon']; ?>"></i></div>
                        <div class="site_services-info__title"><img src="<?php echo $item['img']; ?>"/></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
	</div>
</section>