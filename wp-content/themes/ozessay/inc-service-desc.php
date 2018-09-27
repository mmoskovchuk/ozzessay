<?php
$basic_services = array(
	"Fast turnaround",
	"Automated writer assigning",
	"Direct communication with a writer via your personal track",
	"Free online support 24/7",
	"Full compliance with the standards of academic writing ",
	"Free QAD check",
	"Free title and referencing pages",
	"Double or single spacing",
	"Free plagiarism check",
);
$additional_services = array(
	array (
		item => "Top writer",
		price => "cost +30%"
	),
	array (
		item => "Plagiarism report",
		price => "$14,99"
	),
	array (
		item => "High priority order",
		price => "$9,99"
	),
	array (
		item => "1-page summary",
		price => "$24,99"
	),
	array (
		item => "Extra QAD check",
		price => "Extra charge"
	),
	array (
		item => "Updates via text messages",
		price => "$3,99"
	)
);
?>

<!--SERVICE INCLUDE-->
<section class="site_service-desc">
	<div class="section-title">
		<div class="container">Our service include</div>
	</div>
	<div class="container site_service-desc__wrap">
		<div class="row equal-cols">
			<div class="col-md-6">
				<!--BASIC SERVICES-->
				<div class="site_service-desc__block site_service-desc__basic">
					<div class="site_service-desc__title">Basic Services</div>
					<div class="site_service-desc__list">
						<ul class="site_check-list">
							<?php foreach ($basic_services as $k => $item): ?>
								<li>
									<?php echo $item; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="site_service-desc__basic-price-block">
						<div class="site_service-desc__basic-text">Price for 1 page from</div>
						<div class="site_service-desc__basic-price">$10</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<!--ADDITIONAL SERVICES-->
				<div class="site_service-desc__block site_service-desc__additional">
					<div class="site_service-desc__title">Additional Services</div>
					<div class="site_service-desc__list">
						<ul class="site_check-list">
							<?php foreach ($additional_services as $k => $item): ?>
								<li>
									<span class="site_service-desc__text"><?php echo $item[item]; ?></span>
									<span class="site_service-desc__price"><?php echo $item[price]; ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="site_service-desc__additional-info">
						 Our additional services will streamline order processing and boost your paper’s quality. You can choose one or several additional services on the order form.
					</div>
				</div>
			</div>
		</div>
		<div class="big-btn-wrap">
			<a href="/order" class="btn btn-default big-btn">Order now</a>
		</div>
	</div>
</section>