<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie7"><![endif]-->
<!--[if IE 8]>
<html class="ie8"><![endif]-->
<!--[if IE 9]>
<html class="ie9"><![endif]-->
<!--[!(IE)]><!-->
<html><!--<![endif]-->
<head lang="en-AU">

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php wp_title(). '|' . bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <meta name="google-site-verification" content="HnG7Z4mOT4T7xenjJhyEfQpwLFim3r2kocg2WEcmink">
    <meta property="fb:pages" content="226029197499074">
    <meta property="fb:app_id" content="450442595010148">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>

    <link href="/favicon.ico" rel="shortcut icon">
    <link rel="apple-touch-icon" href="/favicon.ico" sizes="180x180">
    <link rel="icon" type="image/png" href="/favicon.ico" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon.ico" sizes="16x16">
    <link rel="mask-icon" href="/favicon.ico" color="#5bbad5">
    <meta name="msapplication-config" content="https://ozessay-a.akamaihd.net/images/icon/browserconfig.xml?v=23">
    <meta name="application-name" content="OZessay">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- schema.org -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "OZessay",
        "description": "OzEssay is the best essay writing service in Australia. Hire professional essay writer and get help with any type of assignment online.",


        "url": "https://www.ozessay.com.au/",
        "telephone": "+61290377008",
        "sameAs": [
            "https://www.facebook.com/ozessay/",
            "https://twitter.com/ozessay",
            "https://plus.google.com/+OzessayAu",
            "https://www.youtube.com/channel/UCg3_kp4pxBDjAaTISWqbLIg",
            "https://pinterest.com/ozessay/",
        ],
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "12601 N Cave Creek Rd",
            "addressLocality": "Phoenix",
            "postalCode": "85022",
            "addressCountry": "United States"
        }
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "https://www.ozessay.com.au/",
        "contactPoint": [
        { "@type": "ContactPoint",
          "telephone": "+6-129-037-7008",
          "customer support": "customer support service"
        }
      ]
    }
    </script>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!--HEADER-->
<header class="site_header" id="header">
    <div class="contact-row hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-left">
                    <div class="site_header__phone">
                        <a class="site_header__link" href="tel:+61290377008">+61290377008</a>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <div class="site_header__social">
                        <span>Add to contacts</span>
                        <a class="site_header__icon shf" href="https://m.me/ozessay"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header__wrap">
            <div class="mobile-nav" id="mobile_nav"></div>
            <div class="header__main-logo">
                <div itemscope itemtype="https://schema.org/Organization" class="site_header__logo">
                    <a itemprop="url" href="<?php echo home_url(); ?>">
                        <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/logo_header.svg" alt="<?php bloginfo('name'); ?>"/>
                    </a>
                </div>
            </div>

            <div class="hidden-xs hide-on-mobile">
                <nav class="nav" id="nav">
                    <?php
                    $nav_args = array(
                        'menu' => 'Header(new)',
                        'container' => '',
                        'menu_class' => 'menu menu-header-new',
                        'menu_id' => 'nav-menu3',
                        'depth' => 4
                    );
                    wp_nav_menu($nav_args);
                    ?>
                    <ul class="header__additional">
                        <li class="additional__item js-additional">
                            <span>Customer Info</span>
                            <ul class="additional__sub">
                                <li class="additional__sub-item"><a href="/ordering-procedure" class="additional__sub-link">How to order</a></li>
                                <li class="additional__sub-item"><a href="/faq" class="additional__sub-link">F.A.Q.</a></li>
                                <li class="additional__sub-item"><a href="/is-it-safe-to-buy-essays-online" class="additional__sub-link">Is It Safe?</a></li>
                                <li class="additional__sub-item"><a href="/how-to-communicate-with-your-writer" class="additional__sub-link">Communicate with essay writers</a></li>
                                <li class="additional__sub-item"><a href="/guarantees" class="additional__sub-link">Satisfaction guarantee</a></li>
                                <li class="additional__sub-item"><a href="/accepted-payments" class="additional__sub-link">Payment Methods</a></li>
                            </ul>
                        </li>
                        <li class="additional__item js-additional">
                            <span>Company info</span>
                            <ul class="additional__sub">
                                <li class="additional__sub-item"><a href="/about-us" class="additional__sub-link">About Us</a></li>
                                <li class="additional__sub-item"><a href="/writing-career" class="additional__sub-link">Writing career</a></li>
                                <li class="additional__sub-item"><a href="/manual-writers-term-papers" class="additional__sub-link">Manual for Writers</a></li>
                                <li class="additional__sub-item"><a href="/warning" class="additional__sub-link">Warning</a></li>
                            </ul>

                        </li>
                        <li class="additional__item js-additional">
                            <span>Our Product</span>
                            <ul class="additional__sub">
                                <li class="additional__sub-item"><a href="/affiliate-program" class="additional__sub-link">Affiliate program</a></li>
                                <li class="additional__sub-item"><a href="/plagiarism-check" class="additional__sub-link">Plagiarism check</a></li>
                            </ul>
                        </li>
                        <li class="additional__item js-additional">
                            <a href="#0">Blog</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="">
                <div class="order-btn-wrap">
                    <a href="/order" class="order-btn">
                        <button>Order now</button>
                    </a>
                </div>
            </div>

            <div class="">
                <div class="login-btn-wrap">
                    <?php if (1) : // hidden button ?>
                        <a href="/customers/login" class="btn login-btn" rel="nofollow">Sign In</a>
                    <?php endif; ?>

                    <!--                    <div data-crm-widget="loginTooltip"></div>-->
                </div>
            </div>



        </div>
    </div>
</header>

<!--MAIN-->
<div id="main" class="site_main">