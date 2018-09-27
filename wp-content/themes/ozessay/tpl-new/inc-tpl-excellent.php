<!--EXCELLENT-BLOCK BEGIN-->

<?php if (is_page('custom-writing')) { ?>

<section class="excellent">
    <div class="container">
        <div class="excellent__wrap">
            <?php the_post(); ?>
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php } ?>

<?php if (is_page('dissertation-proposal-help')) { ?>

    <section class="excellent-dissertation">
        <div class="container">
            <div class="excellent__wrap">
                <?php the_post(); ?>
                <?php the_content(); ?>
                <a href="https://www.ozessay.com.au/order" class="excellent-dissertation__link">WRITE ME A PROPOSAL</a>
            </div>
        </div>
    </section>

<?php } ?>

<?php if (is_page('dissertation-writing-service')) { ?>

    <section class="excellent">
        <div class="container">
            <div class="excellent__wrap">
                <?php the_post(); ?>
                <?php the_content(); ?>
            </div>
        </div>
    </section>

<?php } ?>

<?php if (is_page('thesis')) { ?>

    <section class="excellent">
        <div class="container">
            <div class="excellent__wrap">
                <?php the_post(); ?>
                <?php the_content(); ?>
            </div>
        </div>
    </section>

<?php } ?>

<!--EXCELLENT-BLOCK END-->