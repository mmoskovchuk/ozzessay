<?php get_header(); ?>
    <div class="page-header">
        <div class="page-header-block">
            <div class="container">
                <h1 class="page-header-block__title"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
<div class="site_tpl-blog-post">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php get_template_part('loop'); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>