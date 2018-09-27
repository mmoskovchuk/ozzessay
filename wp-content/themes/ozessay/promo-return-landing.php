<?php
/**
 * Template Name: Promo-return-landing
 *
 */
?>
<!DOCTYPE html>
<html>
<head lang="en-AU">

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name=“robots” content=“noindex,nofollow”>
    <title><?php wp_title(). '|' . bloginfo('name'); ?></title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<!--MAIN-PROMO-->
<div>
    <!--Promo-Header-->
    <section class="promo-header return-header">
        <div class="container">
            <nav>
                <a class="site-brand">
                    <img src="<?php bloginfo('template_url'); ?>/img/promo-landing/ozessay.svg">
                </a>
                <ul>
                    <li>
                        <a href="https://www.ozessay.com.au/order?dsc_code=back2study" class="btn-order-now none">order now</a>
                        <a href="https://www.ozessay.com.au/customers/login" class="btn-sign-in">sign in</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container header-text-block">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <h1>Grab Your Back - to - School<br>
                        Discount on Academic Writing!</h1>
                    <div class="get-started-block">
                        <a href="https://www.ozessay.com.au/order?dsc_code=back2study" class="btn-get-started">Get started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 20% off -->
    <section class="off-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <img src="<?php bloginfo('template_url'); ?>/img/promo-landing/20_off.svg">
                </div>
                <div class="col-lg-8 col-md-8">
                    <h2>Hey, we have something<br>
                        to get you ready for study!</h2>
                    <h3>Hurry up!</h3>
                    <p>20% OFF discount on all types of writing services</p>
                    <small>Valid Aug 29 - Sept 3</small>
                </div>
            </div>
        </div>
    </section>

    <!-- This semester -->
    <section class="this-semester">
        <div class="container">
            <div class="row reverse-column">
                <div class="col-lg-8 col-md-8">
                    <h3>We want you to ace this semester<br>
                        starting from its first day!</h3>
                    <p>Use this special offer to get an outstanding paper with <b>20% OFF</b>. All subjects and academic levels covered.</p>
                    <div class="wow flipInX" data-wow-offset="200">
                        <a class="btn-discount" href="https://www.ozessay.com.au/order?dsc_code=back2study">Grab my discount</a>
                        <span>76 people use code</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <img src="<?php bloginfo('template_url'); ?>/img/promo-landing/this-semester.svg">
                </div>
            </div>
        </div>
    </section>

    <!-- Timer -->
    <section class="timer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Days left</h3>
                </div>
                <div class="col-lg-8 col-lg-offset-2 box-shadow">
                    <div id="countdown" class="wow flipInY" data-wow-offset="200"></div>
                    <p id="note"></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Guaratee -->
    <section class="guarantee">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"><h2>Get the Most out of Writing Help<br>with Our Additional Services</h2></div>
                <div class="col-lg-4 col-md-4 wow flipInX" data-wow-offset="200">
                    <img src="<?php bloginfo('template_url'); ?>/img/promo-landing/1.svg">
                    <h3>TOP WRITER</h3>
                    <p>Your order will be assigned to a top-rated expert in your field of study.</p>
                </div>
                <div class="col-lg-4 col-md-4 wow flipInX" data-wow-offset="200">
                    <img src="<?php bloginfo('template_url'); ?>/img/promo-landing/2.svg">
                    <h3>PLAGIARISM REPORT</h3>
                    <p>Get a certified proof that the delivered paper is plagiarism-free.</p>
                </div>
                <div class="col-lg-4 col-md-4 wow flipInX" data-wow-offset="200">
                    <img src="<?php bloginfo('template_url'); ?>/img/promo-landing/3.svg">
                    <h3>HIGH PRIORITY</h3>
                    <p>With the High Priority status, your order will be the first to get a writer.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Follow us -->
    <section class="follow-us-return">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 user">
                    <img src="<?php bloginfo('template_url'); ?>/img/promo-landing/follow-us.svg">
                </div>
                <div class="col-lg-6 col-md-6">
                    <h2 class="return-h2">Want to be updated on
                        our exclusive discounts?</h2>
                    <h3>sign up now!</h3>
                    <div class="text-us wow flipInY" data-wow-offset="200">
                        <a href="https://www.ozessay.com.au/customers/login" class="btn-subscribe">Subscribe</a>
                    </div>
                    <h4>Let’s be friends!</h4>
                    <div class="follow-links wow flipInY" data-wow-offset="200">
                        <p><a href="https://www.facebook.com/ozessay/"><img src="<?php bloginfo('template_url'); ?>/img/promo-landing/fb.svg">Like us on Facebook</a></p>
                        <p><a href="https://www.instagram.com/ozessay_official/"><img src="<?php bloginfo('template_url'); ?>/img/promo-landing/inst.svg">Follow us on Instagram</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php get_footer(); ?>



