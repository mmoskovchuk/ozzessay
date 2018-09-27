<?php $prices = array(
    array(
        icon => '/wp-content/themes/ozessay/img/prices/factors-prices-1.svg',
        title => 'TYPE OF TASK',
        text => 'Every assignment is different and has <br> various requirements, needs dissimilar <br> skills & efforts. Editing service is the <br> most economical.',
    ),
    array(
        icon => ' /wp-content/themes/ozessay/img/prices/factors-prices-2.svg',
        title => 'PAGE COUNT',
        text => 'The amount of pages matters. <br> The more pages you need, the <br> higher receipt you`ll get.',
    ),
    array(
        icon => '/wp-content/themes/ozessay/img/prices/factors-prices-3.svg',
        title => 'ACADEMIC LEVEL',
        text => 'Master\'s and Ph.D. thesis paper are <br> more valuable, thuswise will cost more <br> than college essay.',
    ),
    array(
        icon => '/wp-content/themes/ozessay/img/prices/factors-prices-4.svg',
        title => 'URGENCY',
        text => 'Time is money.<br> The more time our writers have to work <br> on your papers, the more budget- <br> friendly bill you`ll receive.',
    ),
); ?>

<?php get_header(); ?>

    <!--BREADCRUMB-->
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <ul class="breadcrumb-prices col-lg-6 col-md-6 col-sm-9 col-xs-9">
            <li><a href="/">Home</a></li>
            <li>/</li>
            <li> <?php the_title(); ?></li>
        </ul>
    </div>

    <!--TOP-BLOCK-->
    <section class="site_top-block">
        <div class="container hidden-sm hidden-xs">
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 site_top-block__wrapper">
                <h1 class="site_top-block__title">Price tag calculator</h1>
                <div class="site_top-block__desc">Learn how much your order will cost and understand the facts
                    that<br> influence the receipt amount.
                </div>
            </div>
            <div class="col-lg-5 col-md-5 flex-center">
                <div class="site_top-block__img-icon"></div>
            </div>
        </div>
        <div class="container hidden-lg hidden-md">
            <!--mobile-->
            <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                <div class="site_top-block__title flex-center">Price tag calculator</div>
                <div class="site_top-block__desc flex-center">Learn how much your order will cost and understand the
                    facts that<br> influence the receipt amount.
                </div>
            </div>
            <div class="hidden-lg hidden-md hidden-sm hidden-xs flex-center">
                <div class="site_top-block__img-icon"></div>
            </div>
        </div>
        <!--PRICES-->
        <section class="site_prices">
            <div class="container">
                <div class="site_prices__title">
                    <h2>Сalculate the Price</h2>
                </div>
                <div data-crm-widget="prices"></div>
            </div>
        </section>
    </section>

    <!--PRICES-INFO-->
    <section class="site_prices-info">
        <div class="container">
            <div class="row">
                <h2 class="site_prices-info__top-title">Factors that affect pricing</h2>
                <?php foreach ($prices as $k => $item): ?>
                    <div class="col-md-3 col-sm-12">
                        <div class="site_prices-info__item">
                            <div class="site_prices-info__icon"><img src="<?php echo $item[icon]; ?>"/></div>
                            <div class="site_prices-info__title"><?php echo $item[title]; ?></div>
                            <div class="site_prices-info__text"><?php echo $item[text]; ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!--EMAIL-->

    <section class="plagiarism_email">
        <div class="email_lead">
            <div class="container">
                <div class="email_lead-text row">
                    <div class="valign col-lg-12 col-md-12">
                        <div class="email_lead-text__block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="section-text">
                                <div class="section-text__desc-0">Place an order now & get a 7% discount</div>
                                <div class="section-text__desc-1 ">Try our service for free. No credit card is needed.
                                </div>
                            </div>
                        </div>
                        <div class="email_lead-text__block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div>
                                <?php
                                ob_start();
                                ?>
                                <div class="emailCollector">
                                    {email}
                                    <a type="submit" href="/order?EssayForm[code]=first7" class="collector-continue-btn" data-wow-duration="1s">order</a>
                                </div>
                                <?php
                                $params = json_encode([
                                    'theme' => 'raw',
                                    'template' => ob_get_clean()
                                ]);
                                ?>
                                <div data-crm-widget="emailCollector" data-params='<?php echo $params; ?>'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--CHAT-->
<!--    <section class="site_chat">-->
<!--        <div class="container">-->
<!--            <div class="site_chat__title">Need Help?</div>-->
<!--            <div class="site_chat__desc">Start a Live Chat with <span class="site_chat__bold">an Operator</span>,-->
<!--                contact us <a class="site_chat__color" href="tel:+61290377008">+61290377008</a> or send a message-->
<!--            </div>-->
<!--            <a href="https://m.me/ozessay" class="site_chat__btn">-->
<!--                Send a Message-->
<!--            </a>-->
<!--        </div>-->
<!--    </section>-->

    <!--CHAT-->
<?php get_template_part('tpl-new/inc', 'tpl-chat'); ?>

    <!--DISCOUNT-->
   <!-- <section class="site_discount">
        <div class="container">
            <div class="site_discount__title">Get <span>7%</span> off your first paper this month</div>
            <div class="site_discount__wrap">
                <a href="/order?dsc_code=first7" class="site_discount__btn">Start Order</a>
            </div>
        </div>
    </section>-->

<?php get_footer(); ?>