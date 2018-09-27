<?php
function addAccordion ( $text ){
	$pattern = '/(<(h[1-6])>[\w\s\/$%#{}[\].:\\@!,+();&<>"\'^*?=~`]*?<\/h[1-6]>)/i';
	$result = preg_replace($pattern, "</div><div data-accordion='header' class='site_content-accordion__header'>$1</div><div data-accordion='body' class='site_content-accordion__body'>", $text);
	$pos = strpos($result, '</div>');
	return substr_replace($result, '', $pos, 6) . '</div>';
}
add_filter('the_content', 'addAccordion');
?>

<!--CONTENT-ACCORDION-->
<section id="content_block" class="site_content-accordion">
	<div class="section-title">
		<div class="container">Answers on questions</div>
	</div>
	<div class="container">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
							<div data-accordion="container" class="site_content-accordion__container">
								<?php the_content(); ?>
							</div>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>
	</div>
</section>