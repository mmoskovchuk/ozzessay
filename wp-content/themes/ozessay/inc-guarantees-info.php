<?php
$guarantees = array(
	array(
		icon => 'icon-profile-male',
		title => 'Confidentiality',
		text => 'Clients’ personal data and payments are strictly protected. Be sure, no one will find out that you order a paper here'
	),
	array(
		icon => 'icon-gift',
		title => 'Timely delivery',
		text => 'Missed deadline is the greatest students fear. We offer the fastest turnaround in the market & cope with the tiniest time limits set for paper completion'
	),
	array(
		icon => 'icon-wallet',
		title => 'Money back guarantee',
		text => 'The level of quality we provide is premium! Nevertheless, if you’re not 100% happy with the paper, you can ask for a refund'
	),
	array(
		icon => 'icon-clock',
		title => '24/7 Customer Support',
		text => 'The friendly support team is always online to help you solve any issue. Any questions? Feel free to connect with us via email, live chat or phone'
	),
);
?>

<!--GUARANTEES-INFO-->
<section class="site_guarantees-info">
	<div class="section-title">
		<div class="container">Strong Guarantees from CustomWritingOnline</div>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($guarantees as $k => $item): ?>
				<div class="col-sm-3">
					<div class="site_guarantees-info__item">
						<div class="site_guarantees-info__icon"><i class="<?php echo $item[icon]; ?>"></i></div>
						<div class="site_guarantees-info__title"><?php echo $item[title]; ?></div>
						<div class="site_guarantees-info__text"><?php echo $item[text]; ?></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>