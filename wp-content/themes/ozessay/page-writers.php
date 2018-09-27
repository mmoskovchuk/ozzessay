<?php
/**
 * Template Name: Writers
 */
?>

<?php get_header(); ?>

<!--TOP-BLOCK-->
<section class="site_top-block">
	<div class="container">
		<div class="site_top-block__title">About Us</div>
		<div class="site_top-block__text">
			<p>We warmly welcome you at CustomWritingOnline.co.uk – a fast-developing academic writing company. We have emerged in UK web space seven years ago but have already managed to prove ourselves worth your trust.</p>
			<p>Our company’s mission is to provide students of diverse background and knowledge with quality academic assistance. To be precise, we help everybody involved in studies cope with the load of tasks and short time limits. And we do it perfectly well.</p>
		</div>
	</div>
</section>

<!--WRITERS-INFO-1-->
<section class="site_writers-info-1">
	<div class="section-title">
		<div class="container">Experienced and talented staff</div>
	</div>
	<div class="container">
		<div class="text-wrap">
			<p>
				We have assembled talented writers who we have been selecting for quite a long time. All our experts are degreed professionals with broad expertise in a range of subject fields. They possess knowledge and skills necessary to cope with academic assignments within short time period. And that’s not the limit. Everybody who joins our team has to demonstrate passion for writing and ability to work with people. Based on these criteria we employ the best and the most qualified individuals.
			</p>
			<ul class="circle-list">
                <img src="<?php bloginfo('template_url'); ?>/img/talented_staff_icon.png" alt="">
			</ul>
			<p>
				This goes about our support team as well. Our customer care department makes great contribution to the development of our company as well as our customers’ academic well-being. They are well-trained, courteous and very helpful. Working 24/7, our representatives are ready to accept your request any time.
			</p>
		</div>
	</div>
</section>

<?php get_template_part('inc', 'writers-slider'); ?>
<?php get_template_part('inc', 'testimonials'); ?>

<!--WRITERS-INFO-2-->
<section class="site_writers-info-2">
	<div class="section-title">
		<div class="container">Diversity of services</div>
	</div>
	<div class="container">
		<div class="row valign">
			<div class="col-md-6">
				<div class="text-wrap">
					<p>We solve any students’ academic problems in one place. At CustomWritingOnine.co.uk, there is an extensive list of academic offerings. You can choose among more than 60 subject areas, a great number of paper topics and various types of tasks. You may be a school graduate or a student who wants to take a doctoral program. Whatever your academic level is, we have solution matching its complexity.</p>
					<p>CustomWritingOnline.co.uk has lots of assets that separate us from our competitors and make our audience happy. First and foremost, this is quality academic writing, lots of students try to achieve. Secondly, this is clear and affordable pricing. Finally, this is our caring attitude to customers and their needs.</p>
					<p>You might say that lots of companies have similar features. But are you sure they work? Often they remain an advertisement called to attract more clients.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="img-wrap">
					<img src="<?php bloginfo('template_url'); ?>/img/writers-info.jpg" alt="<?php the_title(); ?>" />
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('inc', 'discount'); ?>

<?php get_footer(); ?>