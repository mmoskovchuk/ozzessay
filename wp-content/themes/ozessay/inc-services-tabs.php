<?php
//TYPES
$types = array(
	"Admission/Application Essay",
	"Annotated Bibliography",
	"Argumentative Essay",
	"Article",
	"Assignment",
	"Book Report/Review",
	"Case Study",
	"Coursework",
	"Dissertation",
	"Dissertation Chapter - Abstract",
	"Dissertation Chapter - Introduction Chapter",
	"Dissertation Chapter - Literature Review",
	"Dissertation Chapter - Methodology",
	"Dissertation Chapter - Results",
	"Dissertation Chapter - Discussion",
	"Dissertation Chapter - Hypothesis",
	"Dissertation Chapter - Conclusion Chapter",
	"Editing",
	"Essay",
	"Formatting",
	"Lab Report",
	"Math Problem",
	"Movie Review",
	"Personal Statement",
	"PowerPoint Presentation plain",
	"PowerPoint Presentation with Speaker Notes",
	"Proofreading",
	"Paraphrasing",
	"Research Paper",
	"Research Proposal",
	"Scholarship Essay",
	"Speech/Presentation",
	"Statistics Project",
	"Term Paper",
	"Thesis",
	"Thesis Proposal",
);

$types = array_values($types);
?>

<!--SERVICES-TABS-->
<section class="site_services-tabs">
	<div class="section-title">
		<div class="container">Types and Subjects</div>
	</div>
	<div class="container">

		<div data-tabs="tablist" class="site_services-tabs__tablist">
			<div data-tabs="tablist-item" class="site_services-tabs__tablist-item active-tab">Types</div>
			<div data-tabs="tablist-item" class="site_services-tabs__tablist-item">Subjects</div>
		</div>

		<div data-tabs="content" class="site_services-tabs__content">
			<div class="site_services-tabs__content-item site_services-tabs__content-types active-tab">
				<div class="row">
					<?php $cols = 4; $count = count($types); $items_in_col = ceil($count / $cols); $index = 0; ?>
					<?php for ($i = 1; $i <= $cols; $i++) : ?>
						<div class="col-sm-3">
							<ul>
							<?php for ($j = 0; $j < $items_in_col && $index < $count; $j++, $index++) : ?>
								<li><?php echo $types[$index]; ?></li>
							<?php endfor; ?>
							</ul>
						</div>
					<?php endfor; ?>
				</div>
			</div>
			<div class="site_services-tabs__content-item site_services-tabs__content-subjects">
				<div class="row">
					<div class="site_services-tabs__col col-md-3">
					<div class="site_services-tabs__wrap">
						<div class="site_services-tabs__list-title">Arts &amp; Humanities</div>
						<ul>
							<li>Visual Arts and Film Studies</li>
							<li>Religion and Theology</li>
							<li>Philosophy</li>
							<li>History</li>
							<li>English</li>
							<li>Music</li>
							<li>Literature</li>
							<li>Linguistics</li>
							<li>Ethics</li>
							<li>Archaeology</li>
							<li>Anthropology</li>
						</ul>
					</div>
					<div class="site_services-tabs__wrap">
						<div class="site_services-tabs__list-title">Law</div>
						<ul>
							<li>Law</li>
						</ul>
					</div>
				</div>

					<div class="site_services-tabs__col col-md-3">
						<div class="site_services-tabs__wrap">
							<div class="site_services-tabs__list-title">Social Sciences</div>
							<ul>
								<li>Geography</li>
								<li>Psychology</li>
								<li>Sociology</li>
								<li>Gender &amp; Sexual Studies</li>
								<li>Human Resources (HR)</li>
								<li>Journalism, mass media and communication</li>
								<li>Political Science</li>
							</ul>
						</div>
						<div class="site_services-tabs__wrap">
							<div class="site_services-tabs__list-title">Sciences</div>
							<ul>
								<li>Biology</li>
								<li>Chemistry</li>
								<li>Physics (including Earth and space sciences)</li>
								<li>Microbiology</li>
								<li>Astronomy</li>
								<li>Mathematics</li>
								<li>Statistics</li>
								<li>Earth and Space sciences</li>
							</ul>
						</div>
					</div>

					<div class="site_services-tabs__col col-md-3">
						<div class="site_services-tabs__wrap">
							<div class="site_services-tabs__list-title">Information Technology</div>
							<ul>
								<li>Computer sciences and Information technology</li>
								<li>Logic and programming</li>
								<li>Systems science</li>
							</ul>
						</div>
						<div class="site_services-tabs__wrap">
							<div class="site_services-tabs__list-title">Applied sciences</div>
							<ul>
								<li>Agriculture</li>
								<li>Architecture</li>
								<li>Design and Technology</li>
								<li>Engineering and Construction</li>
								<li>Environmental studies</li>
								<li>Health sciences and medicine</li>
								<li>Education</li>
								<li>Nursing</li>
								<li>Military sciences</li>
								<li>Family and consumer science</li>
							</ul>
						</div>
					</div>

					<div class="site_services-tabs__col col-md-3">
						<div class="site_services-tabs__wrap">
							<div class="site_services-tabs__list-title">Economics</div>
							<ul>
								<li>Macro &amp; Micro economics</li>
								<li>Business</li>
								<li>Marketing</li>
								<li>Management</li>
								<li>Finance and Accounting</li>
								<li>E-commerce</li>
								<li>Tourism</li>
								<li>Logistics</li>
							</ul>
						</div>

						<div class="site_services-tabs__wrap">
							<div class="site_services-tabs__list-title">Other</div>
							<ul>
								<li>Creative writing</li>
								<li>Other</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>