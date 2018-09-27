<?php $writers = array(
	array(
		avatar => "1.jpg",
		orders => 677,
		experience => "2 years",
		specialization => "Sociology, HR, Psychology, Management",
		text_img => "writers_1.svg",
		text => "A senior writer with a passion for delivering an outstanding academic content. Excels at writing articles on psychology-related topics. On top of that, he was published multiple times in scientific periodicals. Always looks forward to making a contribution to clients’ education."
	),
	array(
		avatar => "2.jpg",
		orders => 480,
		experience => "8 years",
		specialization => "Business, Management, Computer Science",
        text_img => "writers_2.svg",
		text => "A premium writer who commits to doing the diligence on every paper. Earned tons of positive feedback from returning clients. In fact, he helped many clients in studying for their bachelor’s, master’s, and PhD degrees. His goal is to build a successful career in academic writing."
	),
	array(
		avatar => "3.jpg",
		orders => 567,
		experience => "4 years",
		specialization => "Biology, Biochemistry",
        text_img => "writers_3.svg",
		text => "Excels in two areas: biology and biochemistry. Has an impressive portfolio of essays, term papers and research papers on a wide range of topics. Helped dozens of students who struggle to write their dissertations in biology."
	),
	array(
		avatar => "4.jpg",
		orders => 657,
		experience => "2 years",
		specialization => "Biology, Biochemistry",
        text_img => "writers_4.svg",
		text => "Holds a Bachelor’s Degree in Science (Computer Science) and a Master of Science degree (Business Information Technology). She’s a dedicated writer who has served the needs of many students of all academic levels. Her forte are proficiency and timelines."
	),
	array(
		avatar => "5.jpg",
		orders => 766,
		experience => "4 years",
		specialization => "History, Linguistics, English, Religion, Nursing",
        text_img => "writers_5.svg",
		text => "The expert has been writing academic papers on a wide array of topics for over 4 years. His portfolio includes a number of MA and PhD projects. Customers come back to him for more papers as they have been impressed with his level of writing and style."
	),
	array(
		avatar => "6.jpg",
		orders => 968,
		experience => "4 years",
		specialization => "Healthcare, Medicine",
        text_img => "writers_6.svg",
		text => "Earned an advanced degree in two disciplines: Healthcare and Medicine. She is comfortable with all kinds of referencing styles including MLA, APA, Harvard, and Chicago. Aims for exceeding customer expectation in terms of quality, which is proven by dozens of returning clients."
	),
	array(
		avatar => "7.jpg",
		orders => 531,
		experience => "5 years",
		specialization => "Philosophy, English Literature, the Natural Sciences, Sociology",
        text_img => "writers_7.svg",
		text => "There are two principles that define his working ethics: excellence and exactness.Above all, his clients appreciate his diligence and open mind. Always follows clients’ instructions to a t, resulting in high-quality customized papers."
	),
	array(
		avatar => "8.jpg",
		orders => 789,
		experience => "3 years",
		specialization => "Religion and Theology, Philosophy, English, Literature, Political Science, Sociology, Psychology, Biology, Marketing",
        text_img => "writers_8.svg",
		text => "She has mastered all the formats of academic papers and produces quality pieces of writing free from plagiarism.When she takes on a paper, a client will sure get an amazing paper full of fresh insights into the topic. Her time-management skills have no peer."
	),
);?>

<!--WRITERS-SLIDER-->
<section class="site_writers-slider">
	<div class="section-title">
		<div class="container">Our writers</div>
	</div>
	<div class="container">
		<div id="writers_slider" class="site_writers-slider__container">
			<ul class="site_writers-slider__items-wrap">
			<?php foreach ($writers as $k => $item) : ?>
				<li data-rotateslider="slide" class="site_writers-slider__slide site_writers-slider__slide-<?php echo ++$k; ?>">
					<div  class="site_writers-slider__avatar" >
						<img src="<?php bloginfo('template_url'); ?>/img/writers/<?php echo $item[avatar]; ?>">
					</div>
					<div class="site_writers-slider__data-list">
						<div class="site_writers-slider__data">
							<span class="site_writers-slider__label">Rating:</span>
							<span class="site_writers-slider__rating">
								<?php for ($i = 0; $i < 5; $i++) : ?>
								<i class="f_icon-star"></i>
								<?php endfor; ?>
							</span>
						</div>
						<div class="site_writers-slider__data">
							<span class="site_writers-slider__label">Completed orders:</span>
							<span class="site_writers-slider__value"><?php echo $item[orders]; ?></span>
						</div>
						<div class="site_writers-slider__data">
							<span class="site_writers-slider__label">Writing experience:</span>
							<span class="site_writers-slider__value"><?php echo $item[experience]; ?></span>
						</div>
						<div class="site_writers-slider__data">
							<span class="site_writers-slider__label">Areas of work:</span>
							<span class="site_writers-slider__value"><?php echo $item[specialization]; ?></span>
						</div>
					</div>

                    <div class="site_writers-slider__text">
                        <img src="<?php bloginfo('template_url'); ?>/img/writers/<?php echo $item[text_img]; ?>">
                    </div>
					<!--<div class="site_writers-slider__text"><?php /*echo $item[text]; */?></div>-->
				</li>
			<?php endforeach; ?>
			</ul>
			<div data-rotateslider="nav" class="site_writers-slider__nav">
				<span class="site_writers-slider__arrow site_writers-slider__arrow-next f_icon-left-open" data-rotateslider="next"></span>
				<span class="site_writers-slider__arrow site_writers-slider__arrow-prev f_icon-right-open" data-rotateslider="prev"></span>
			</div>
		</div>
	</div>
</section>