<?php $services_slider = array(
	array(
		title => "High priority order",
		text => "1-text.svg",
		img => "1.gif",
		price => "9.99"
	),
	array(
		title => "TOP Writer",
		text => "2-text.svg",
		img => "2.gif",
		price => "cost + 30%"
	),
	array(
		title => "Plagiarism Report",
		text => "3-text.svg",
		img => "3.gif",
		price => "14.99"
	),
	array(
		title => "SMS inform",
		text => "4-text.svg",
		img => "4.gif",
		price => "3.99"
	),
	array(
		title => "1-page summary",
		text => "5-text.svg",
		img => "5.gif",
		price => "24.99"
	),
	array(
		title => "Double check",
		text => "6-text.svg",
		img => "6.png",
		price => "Extra charge"
	),
);?>

<!--SERVICES-SLIDER-->
<section class="site_services-slider">
	<div class="section-title">
		<div class="container">Request additional services to instantly boost your paper</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-7 col-md-8">
				<ul id="services_slider_1" class="site_services-slider-1">
				<?php foreach ($services_slider as $k => $item) : ?>
					<li class="site_services-slider-1__slide site_services-slider-1__slide-<?php echo ++$k; ?>">
						<div class="site_services-slider-1__image">
							<img src="<?php bloginfo('template_url'); ?>/img/services-slider/<?php echo $item[img]; ?>" alt="<?php echo $item[title]; ?>" />
						</div>
					</li>
				<?php endforeach; ?>
				</ul>
			</div>
			<div class="col-sm-5 col-md-4">
				<ul id="services_slider_2" class="site_services-slider-2">
				<?php foreach ($services_slider as $k => $item) : ?>
					<li class="site_services-slider-2__slide site_services-slider-2__slide-<?php echo ++$k; ?>">
						<div class="site_services-slider__content">
							<?php if (0) : // hidden text ?>
								<div class="site_services-slider-2__title"><?php echo $item[title]; ?></div>
								<div class="site_services-slider-2__text"><?php echo $item[text]; ?></div>
								<div class="site_services-slider-2__price"><?php if ($k !== 2 && $k !== 6) echo '$'; ?><span><?php echo $item[price]; ?></span></div>
							<?php endif; // end hidden text ?>
							<div class="site_services-slider-2__img-text"><img src="<?php bloginfo('template_url'); ?>/img/services-slider/<?php echo $item[text]; ?>" alt="<?php echo $item[title]; ?>" /></div>
						</div>
					</li>
				<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
	<div id="services_slider_controls" class="site_services-slider__pagination"></div>
</section>