<?php $services = array(
	array(
		icon => 'icon-circle-compass',
		title => 'Academic writing',
		text => 'We offer wide choice of subjects and paper types. We can produce anything from a simple essay to dissertation. No matter how complicated your assignment is or what topic you have to write on - quality guaranteed.',
	),
	array(
		icon => 'icon-tools',
		title => 'Formatting &amp; Editing',
		text => 'Editing and formatting are essential part of the writing process. Therefore our experts proofread your paper and format it according to the required style guide. You always get your task honed to perfection!',
	),
	array(
		icon => 'icon-lightbulb',
		title => 'Plagiarism check',
		text => 'Unique content is a priority for us. We write all papers from scratch and additionally do deep plagiarism check with special software. Such procedure ensures content uniqueness. Our clients get only 100% original paper.',
	),
); ?>

<!--SERVICES-INFO-->
<section class="site_services-info">
	<div class="container">
		<div class="row">
			<?php foreach ($services as $k => $item): ?>
				<div class="col-sm-4">
					<div class="site_services-info__item">
						<div class="site_services-info__icon"><i class="<?php echo $item[icon]; ?>"></i></div>
						<div class="site_services-info__title"><?php echo $item[title]; ?></div>
						<div class="site_services-info__text"><?php echo $item[text]; ?></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>