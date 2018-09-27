<?php
$samples = array(
	array(
		'title' => 'Article Critique - Health and Social Care',
		'text' => 'Master\'s level, 8 pages',
		'file' => 'article-critique-health-and-social-care-masters-8pgs.pdf'
	),
	array(
		'title' => 'Assessment Essay - Sociology',
		'text' => 'College level, 4 pages',
		'file' => 'Assessment_College_lvl_4_pg_Kinship_Organization_Among_Indigenous_Australians.pdf'
	),
	array(
		'title' => 'Book Review - Literature',
		'text' => 'Bachelor\'s level, 1 page',
		'file' => 'literature-review-bachelors-8pgs.pdf'
	),
	array(
		'title' => 'Case Study - Law',
		'text' => 'Bachelor\'s level, 5 pages',
		'file' => 'Case_Study_Bachelor\'s_5_pg_Australian_Contract_Law.pdf'
	),
	array(
		'title' => 'Dissertation Chapter - Management',
		'text' => 'Master\'s level, 17 pages',
		'file' => 'Dissertation_Chapter_Master\'s_lvl_17_pg_Islamic_Banking.pdf'
	),
    array(
        'title' => 'Dissertation Proposal - Tourism',
        'text' => 'Bachelor\'s level, 13 pages',
        'file' => 'dissertation-proposal-tourism-sample (1).pdf'
    ),
    array(
        'title' => 'Essay - Law',
        'text' => 'Bachelor\'s level, 12 pages',
        'file' => 'Essay_Master\'s_lvl_14_pg_Copywright_Law_in_Australia.pdf'
    ),
    array(
        'title' => 'Essay - Nursing',
        'text' => 'College level, 6 pages',
        'file' => 'Essay_College_lvl_6_pg_Community_Nursing.pdf'
    ),
    array(
        'title' => 'Essay - Political Science',
        'text' => 'Master\'s level, 7 pages',
        'file' => 'essay-political-science-masters-7pgs.pdf'
    )
);
?>

<!--SAMPLES-->
<section class="site-samples">
	<h2>DOWNLOAD OUR SAMPLES</h2>
    <p>Check out the quality of our papers</p>
	<div class="container">
        <div class="row">
            <div class="aside-samples">
                <?php
                    $count = count($samples);
                    foreach ($samples as $k => $item):
                    ++$k; ?>
                        <div class="col-md-4">
                            <div class="aside-samples-block asb-<?php echo $k; ?>">
                                <div class="aside-samples-block__icon"></div>
                                <div class="aside-samples-block__title"><?php echo $item['title']; ?></div>
                                <div class="aside-samples-block__subtitle"><?php echo $item['text']; ?></div>
                                <a href="<?php bloginfo('template_url'); ?>/samples/<?php echo $item['file']; ?>" download="<?php echo $item['file']; ?>" class="aside-samples-block__link" tabindex="0" rel="nofollow">Essay Sample</a>
                            </div>
                        </div>
                <?php endforeach; ?>
            </div>
        </div>
	</div>
</section>