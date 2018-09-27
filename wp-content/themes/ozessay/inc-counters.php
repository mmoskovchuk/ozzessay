<?php $counters = array(
	array(
		num => 928,
		text => 'British writers',
	),
	array(
		num => 12758,
		text => 'Customers',
	),
	array(
		num => 40506,
		text => 'Completed papers',
	),
	array(
		num => 86,
		text => 'Customer retention',
	),
); ?>

<!--COUNTERS-->
<section class="site_counters">
	<div class="container">
		<div class="row">
			<?php
				$count = count($counters);
				foreach ($counters as $k => $item) : ?>
				<div class="col-sm-6 col-md-3 site_counters__col site_counters__col-<?php echo ++$k; ?>">
					<div class="site_counters__item">
						<div class="site_counters__num"><span class="site_counter"><?php echo $item[num]; ?></span><?php if ($k === $count) echo "%"; ?></div>
						<div class="site_counters__text"><?php echo $item[text]; ?></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>