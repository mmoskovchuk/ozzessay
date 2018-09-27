<?php $top_block = array(
	array(
		title => "Best online essay writing helper</br> to make all the work for you",
		text => "
			<ul class='check-list'>
				<li>100% uniqueness</li>
				<li>Support 24/7</li>
				<li>Delivery on times</li>
			</ul>"
	),
	array(
		title => "A Reliable online guide for</br> academic paper writing",
		text => "Offer you a range of support to help you think through</br> and write an creative paper work"
	),
	array(
		title => "Help to resist procrastination</br> when you have an essay deadline",
		text => "Order any type of a university paper by just one click"
	),
);?>

<!--TOP-SLIDER-->
<section class="site_top-slider">
		<ul id="top_slider" class="site_top-slider__container">
			<?php foreach ($top_block as $k => $item) : ?>
				<li class="site_top-slider__slide site_top-slider__slide-<?php echo ++$k; ?>">
						<div class="container">
							<div class="site_top-slider__content">
								<div class="site_top-slider__title"><?php echo $item[title]; ?></div>
								<div class="site_top-slider__text"><?php echo $item[text]; ?></div>
							</div>
							<div class="big-btn-wrap">
								<a href="/order" class="btn btn-default big-btn">Order Your Paper Now</a>
							</div>
						</div>
				</li>
			<?php endforeach; ?>
		</ul>
</section>