<?php
$guarantees = array(
	array(
		block_title => "Every customer is important to us, therefore, we give you 5 guarantees that can’t be beaten:"
	),
	array(
		icon => 'icon-trophy',
		title => 'Commitment to quality',
		text => 'No matter how demanding your requirements are or how complicated the task you assign to us is, we will deliver a quality For this, we have all necessary tools and resources. Besides that every paper is crafted by a pro writer, it is edited by an expert editor and scanned with digital tools. As a result, quality is guaranteed.'
	),
	array(
		icon => 'icon-happy',
		title => 'Customers’ satisfaction guarantee',
		text => 'We work with students and for students. Our main goal is to make you satisfied with our work. We reach it through compliance with our clients’ needs and excellent customer care service. You say, and we implement your ideas that work for your success.'
	),
	array(
		icon => 'icon-pencil',
		title => 'Zero tolerance to plagiarism',
		text => 'Plagiarism is one of the greatest threats waiting for a first-time customer in the academic writing industry. But with CustomWritingOnline.co.uk you can feel safe and confident of 100% authentic Every document is checked for copied material with plagiarism detection software.'
	),
	array(
		icon => 'icon-gift',
		title => 'On schedule delivery guarantee',
		text => 'We promise to meet your deadlines no matter how little time is left. Naturally there are tasks like a dissertation, for example, that require more time for completion, but still we will cope with them on schedule. Simply indicate the time limits, and we will deliver your paper ahead of the deadline.'
	),
	array(
		icon => 'icon-shield',
		title => 'Privacy guarantee',
		text => 'We understand that information you share with us is highly confidential, and you want nobody to access it. That’s why we guarantee total protection of all data you provide us with. Rest assured at CustomWritingOnline you are 100% safe and no one will ever find out that you have turned to us for help.'
	),
);
?>

<!--GUARANTEES-->
<section class="site_guarantees">
	<div class="section-title">
		<div class="container">5 Guarantees to Make You Confident of Success</div>
	</div>
	<div class="container">
		<div class="site_guarantees__top-block">
			<div class="row valign">
				<div class="col-sm-6">
					<div class="site_guarantees__top-img">
						<img src="<?php bloginfo('template_url'); ?>/img/guarantees.jpg" alt="<?php the_title(); ?>" />
					</div>
				</div>
				<div class="col-sm-6">
					<div class="site_guarantees__top-text">
						<p>When it goes about ordering from an online custom company, lots of customers report of a great number of fraudulent services. Unfortunately, accidents happen and even savvy online customers can fall victim to a scam resource. That’s why CustomWritingOnline has eliminated all dangers connected with online services.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="site_guarantees__items-wrap">
			<?php
				$count = count($guarantees);
				foreach ($guarantees as $k => $item) :
				++$k;
				$new_row = ($k % 2 == 0) ? false : true; ?>

				<?php if ($new_row) : ?><div class="row"><?php endif;?>

					<?php if ($k === 1) : ?>
						<div class="col-sm-6">
							<div class="site_guarantees__block-title"><?php echo $item[block_title]; ?></div>
						</div>
					<?php else : ?>

					<div class="col-sm-6">
						<div class="site_guarantees__item">
							<div class="site_guarantees__icon"><i class="<?php echo $item[icon]; ?>"></i></div>
							<div class="site_guarantees__desc">
								<div class="site_guarantees__title"><?php echo $item[title]; ?></div>
								<div class="site_guarantees__text"><?php echo $item[text]; ?></div>
							</div>
						</div>
					</div>

				<?php endif; ?>

				<?php if (!$new_row || $k === $count) : ?></div><?php endif; ?>

			<?php endforeach; ?>
		</div>
	</div>
</section>
