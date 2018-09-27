<?php
$samples = array(
    array(
        title => 'Analysis - Literature',
        text => 'College level, 4 pages',
        file => 'Analysis-Literature.pdf'
    ),
    array(
        title => 'Book Review - Literature',
        text => 'Bachelor\'s level, 7 pages',
        file => 'Analysis-Literature.pdf'
    ),
    array(
        title => 'Case Study - Business',
        text => 'Bachelor\'s level, 14 pages',
        file => 'Study-Business.pdf'
    ),
    array(
        title => 'Essay - Economics',
        text => 'Bachelor\'s level, 6 pages',
        file => 'Essay-Economics.pdf'
    ),
    array(
        title => 'Essay - Health and Social ',
        text => 'Master\'s level, 4 pages',
        file => 'HealthandSocial .pdf'
    ),
    array(
        title => 'Essay - Marketing',
        text => 'Bachelor\'s level, 2 pages',
        file => 'Essay-Marketing.pdf'
    ),
    array(
        title => 'Essay - Political Science',
        text => 'Bachelor\'s level, 15 pages',
        file => 'PoliticalScience.pdf'
    ),
    array(
        title => 'Essay - Sociology',
        text => 'Bachelor\'s level, 12 pages',
        file => 'Essay-Sociology.pdf'
    ),
    array(
        title => 'PHD Proposal Outline - Education',
        text => 'Master\'s level, 4 pages',
        file => 'PHD-Education.pdf'
    ),
);
?>


<!-- side bar samples -->

<!--<div class="aside-samples">
    <div class="aside-samples__title">FREE SAMPLES</div>

    <?php
/*    $rand_keys = array_rand($samples, 2);
    */?>
    <div class="aside-samples-block asb-<?php /*echo $rand_keys[0]+1; */?>">
        <div class="aside-samples-block__icon"></div>
        <div class="aside-samples-block__title"><?php /*echo $samples[$rand_keys[0]][title]; */?></div>
        <div class="aside-samples-block__subtitle"><?php /*echo $samples[$rand_keys[0]][text]; */?></div>
        <a href="<?php /*bloginfo('template_url'); */?>/samples/<?php /*echo $samples[$rand_keys[0]][file]; */?>" download="<?php /*echo $samples[$rand_keys[0]][file]; */?>" class="aside-samples-block__link" tabindex="0"  rel="nofollow">Essay Sample</a>
    </div>
    <div class="aside-samples-block asb-<?php /*echo $rand_keys[1]+1; */?>">
        <div class="aside-samples-block__icon"></div>
        <div class="aside-samples-block__title"><?php /*echo $samples[$rand_keys[1]][title]; */?></div>
        <div class="aside-samples-block__subtitle"><?php /*echo $samples[$rand_keys[1]][text]; */?></div>
        <a href="<?php /*bloginfo('template_url'); */?>/samples/<?php /*echo $samples[$rand_keys[1]][file]; */?>" download="<?php /*echo $samples[$rand_keys[1]][file]; */?>" class="aside-samples-block__link" tabindex="0" rel="nofollow">Essay Sample</a>
    </div>
</div>-->


<div class="aside-samples">
    <div class="aside-samples__title">FREE SAMPLES</div>

    <?php
    $rand_keys = array_rand($samples, 2);
    ?>
    <div class="aside-samples-block asb-<?php echo $rand_keys[0]+1; ?>">
        <div class="aside-samples-block__icon"></div>
        <div class="aside-samples-block__title">Here you can find a list of sample papers</div>
        <!--<div class="aside-samples-block__subtitle"><?php /*echo $samples[$rand_keys[0]][text]; */?></div>-->
        <a href="/sample-papers" class="aside-samples-block__link" tabindex="0"  rel="nofollow">Essay Sample</a>
    </div>
    <!--<div class="aside-samples-block asb-<?php /*echo $rand_keys[1]+1; */?>">
        <div class="aside-samples-block__icon"></div>
        <div class="aside-samples-block__title"><?php /*echo $samples[$rand_keys[1]][title]; */?></div>
        <div class="aside-samples-block__subtitle"><?php /*echo $samples[$rand_keys[1]][text]; */?></div>
        <a href="/sample-papers" class="aside-samples-block__link" tabindex="0" rel="nofollow">Essay Sample</a>
    </div>-->
</div>
