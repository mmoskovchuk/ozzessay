<!--customers-reviews-BLOCK BEGIN-->

<?php if (is_page('custom-writing')) { ?>

<section class="customers-reviews">
    <div class="container">
        <h2 class="site_secondary__title">We Keep Our Customers Happy</h2>
        <div class="customers-reviews__wrap">
            <p class="customers-reviews__sub-title">Check out our customer feedback</p>

            <!--<div class="customers-reviews__rate">
                <p class="rate-reviews__title">Overall Rating</p>
                <div class="rate-reviews__wrap">
                    <!--<span class="rate-reviews__value">4/5</span>-->
                 <!--   <div class="rate-reviews__stars">-->
                        <?php /*if(function_exists('the_ratings')) { the_ratings(); } */?>
                        <!--<figure class="rate-reviews__image">
                                <img itemprop="logo" src="<?php /*bloginfo('template_url'); */?>/img/reviews-stars.png" alt="<?php /*bloginfo('name'); */?>"/>
                            </figure>
                            <span class="rate-reviews__caption">based on 10 reviews</span>-->
                    <!--</div>
                </div>
            </div>-->

            <ul class="customers-reviews__main" id="js-customers-reviews-slider">
                <liu class="review-single">
                    <div class="review-single__header">
                        <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                        <span><i> Rashed A. </i> , Australia</span>
                    </div>
                    <p class="review-single__text">Management «very gooood work on time I will give him my work more and more thanks A+++++++++»</p>
                    <div class="review-single__footer">
                        <span class="review-single__subject">Subject</span>
                        <span class="review-single__subject review-single__subject_value">Management</span>
                    </div>
                </liu>

                <li class="review-single">
                    <div class="review-single__header">
                        <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                        <span>XiaoYi X. , China</span>
                    </div>
                    <p class="review-single__text">Other / Non-applicable «great writer ! effective communication ! gave me a peace of mind!»</p>
                    <div class="review-single__footer">
                        <span class="review-single__subject">Subject</span>
                        <span class="review-single__subject review-single__subject_value">Other / Non-applicable</span>
                    </div>
                </li>

                <li class="review-single">
                    <div class="review-single__header">
                        <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                        <span><i> Abdullah A </i> , Australia</span>
                    </div>
                    <p class="review-single__text">Law «Good»</p>
                    <div class="review-single__footer">
                        <span class="review-single__subject">Subject</span>
                        <span class="review-single__subject review-single__subject_value">Law</span>
                    </div>
                </li>

                <li class="review-single">
                    <div class="review-single__header">
                        <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                        <span>Dinah O. , Australia</span>
                    </div>
                    <p class="review-single__text">Religion «Excellent story and thank you writer 708»</p>
                    <div class="review-single__footer">
                        <span class="review-single__subject">Subject</span>
                        <span class="review-single__subject review-single__subject_value">Religion</span>
                    </div>
                </li>
                <li class="review-single">
                    <div class="review-single__header">
                        <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                        <span>Saif A. , Australia</span>
                    </div>
                    <p class="review-single__text">«perfect work 5 stars i really loved all the work done by the writer.specially after he added more materials to it which made the report much better...»</p>
                    <div class="review-single__footer">
                        <span class="review-single__subject">Subject</span>
                        <span class="review-single__subject review-single__subject_value">Engineering</span>
                    </div>
                </li>
                <li class="review-single">
                    <div class="review-single__header">
                        <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                        <span>NAWAF A. , Canada</span>
                    </div>
                    <p class="review-single__text">Political Science «I am happy for the great result.Thanks»</p>
                    <div class="review-single__footer">
                        <span class="review-single__subject">Subject</span>
                        <span class="review-single__subject review-single__subject_value">Political Science</span>
                    </div>
                </li>
                <li class="review-single">
                    <div class="review-single__header">
                        <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                        <span>Darcy C. , China</span>
                    </div>
                    <p class="review-single__text">Marketing «Very very good :)»</p>
                    <div class="review-single__footer">
                        <span class="review-single__subject">Subject</span>
                        <span class="review-single__subject review-single__subject_value">Marketing</span>
                    </div>
                </li>
                <li class="review-single">
                    <div class="review-single__header">
                        <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                        <span>Tammy O. , Australia</span>
                    </div>
                    <p class="review-single__text">Nursing «Thankyou so much for writing this for me.. I really appreciate the trouble you have gone to with this one. YOUR AWESOME SO THANKYOU»</p>
                    <div class="review-single__footer">
                        <span class="review-single__subject">Subject</span>
                        <span class="review-single__subject review-single__subject_value">Nursing</span>
                    </div>
                </li>
                <li class="review-single">
                    <div class="review-single__header">
                        <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                        <span>VIP Customer , Australia</span>
                    </div>
                    <p class="review-single__text">Engineering «it was good and as I expected Thanks so much»</p>
                    <div class="review-single__footer">
                        <span class="review-single__subject">Subject</span>
                        <span class="review-single__subject review-single__subject_value">Engineering</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php } ?>

<?php if (is_page('dissertation-proposal-help')) { ?>

    <section class="customers-reviews">
        <div class="container">
            <h2 class="site_secondary__title">What Keeps Our Customers Coming Back</h2>
            <div class="customers-reviews__wrap">
                <p class="customers-reviews__sub-title">Check out the latest testimonials about our dissertation proposal writing service.</p>

                <!--<div class="customers-reviews__rate">
               <p class="rate-reviews__title">Overall Rating</p>
               <div class="rate-reviews__wrap">
                   <!--<span class="rate-reviews__value">4/5</span>-->
                <!--   <div class="rate-reviews__stars">-->
                <?php /*if(function_exists('the_ratings')) { the_ratings(); } */?>
                <!--<figure class="rate-reviews__image">
                                <img itemprop="logo" src="<?php /*bloginfo('template_url'); */?>/img/reviews-stars.png" alt="<?php /*bloginfo('name'); */?>"/>
                            </figure>
                            <span class="rate-reviews__caption">based on 10 reviews</span>-->
                <!--</div>
            </div>
        </div>-->

                <ul class="customers-reviews__main" id="js-customers-reviews-slider">
                    <liu class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span><i> Noah R. </i> , Australia</span>
                        </div>
                        <p class="review-single__text">I placed many orders with OZessay and they never disappointed me. Last time I ordered a dissertation proposal. And it was written just the way I wanted. Thank you for your service!</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Social & Political Sciences</span>
                        </div>
                    </liu>

                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>XiaoYi X. , China</span>
                        </div>
                        <p class="review-single__text">I’m an international student and I find it hard to write essays, not to mention dissertation. This site is my solution to study issues. Always good quality and fast help. Thank for you!</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">English, Literature & Philology</span>
                        </div>
                    </li>

                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span><i> Kaitlyn W. </i> , Australia</span>
                        </div>
                        <p class="review-single__text">I’m impressed with their work! I’ve given them my dissertation proposal and a methodology, and they both came with excellent quality. You can bank on this service for such type of tasks.</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Journalism & Mass Communication</span>
                        </div>
                    </li>

                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Mia M. , Australia</span>
                        </div>
                        <p class="review-single__text">I had a family emergency and had no time to write my proposal . I looked up this company and placed an order with them. The work was perfectly done, and I got great feedback on it. Thnx!</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Other/Non-applicable</span>
                        </div>
                    </li>
                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Lian C. , China</span>
                        </div>
                        <p class="review-single__text">I hired a writer to write my dissertastion proposal. It came out to be organised and well formatted. I loved the wrok! I think I will be contacting them for my future academic needs.</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Health Sciences & Nursing</span>
                        </div>
                    </li>
                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Yamha A. , UAE</span>
                        </div>
                        <p class="review-single__text">Timely services, great quality of work! I liked communicating with my writer and the way they structured my paper. Didn’t find any mistakes in it. Customer service is friendly and attentive.</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Finance & Accounting</span>
                        </div>
                    </li>
                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Huan Y. , China</span>
                        </div>
                        <p class="review-single__text">After some waiting I received a top-quality dissertation proposal. My instructions were met and formatting was done as I asked. You are my great savior !</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Other/Non-applicable</span>
                        </div>
                    </li>
                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Adan G. , UAE</span>
                        </div>
                        <p class="review-single__text">I’m thankful to this company and the writer for completing my dissertation proposal on time. The work delivered was perfect and the price was affordable. I won’t return to my old writing service!</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Computer Sciences & Information Technology</span>
                        </div>
                    </li>
                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Layla D. , Australia</span>
                        </div>
                        <p class="review-single__text">I’ve tried many writing services, but nobody has treated me and my papers the way OZessay did. They always understand my instructions, answer my questions 24/7 and deliver amazing work!</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Business & Management</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<?php } ?>

<?php if (is_page('dissertation-writing-service')) { ?>

    <section class="customers-reviews">
        <div class="container">
            <h2 class="site_secondary__title">Why Students Trust Our Dissertation Writing Service Since 2005?</h2>
            <div class="customers-reviews__wrap">
                <p class="customers-reviews__sub-title">Take a look at some of the latest testimonials we’ve received from our customers.</p>

                <!--<div class="customers-reviews__rate">
               <p class="rate-reviews__title">Overall Rating</p>
               <div class="rate-reviews__wrap">
                   <!--<span class="rate-reviews__value">4/5</span>-->
                <!--   <div class="rate-reviews__stars">-->
                <?php /*if(function_exists('the_ratings')) { the_ratings(); } */?>
                <!--<figure class="rate-reviews__image">
                                <img itemprop="logo" src="<?php /*bloginfo('template_url'); */?>/img/reviews-stars.png" alt="<?php /*bloginfo('name'); */?>"/>
                            </figure>
                            <span class="rate-reviews__caption">based on 10 reviews</span>-->
                <!--</div>
            </div>
        </div>-->

                <ul class="customers-reviews__main" id="js-customers-reviews-slider">
                    <liu class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span><i> Will P. </i> , Australia</span>
                        </div>
                        <p class="review-single__text">OZessay is a great timesaver and a huge help for students in a pinch. My experience with them showed me that they deliver excellent quality dissertations and can be trusted.</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Law</span>
                        </div>
                    </liu>

                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Shen T. , China</span>
                        </div>
                        <p class="review-single__text">If you not have time to write dissertation, I recommend this site. I like quality and friendly support. Thank you so much! I will recommend your site ot my friend.</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Psychology</span>
                        </div>
                    </li>

                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span><i> Rahaf R. </i> , UAE</span>
                        </div>
                        <p class="review-single__text">This company has the best price quality ratio and I like that they are available 24/7. I  often have question and they react fast. Always on time snd always professional work!</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Other/Non-applicable</span>
                        </div>
                    </li>

                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Amelie S. , Australia</span>
                        </div>
                        <p class="review-single__text">a month ago I ordered my dissertation methodology from a top expert, and it was one of the best decisions I ever made. the writer did an awesome job! i will definitely use them again ☺</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Journalism & Mass Communication</span>
                        </div>
                    </li>
                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Aiden S. , Australia</span>
                        </div>
                        <p class="review-single__text">I have used this site a few times, and have always been satisfied with the quality. These guys are fast, reliable and reachable 24/7. And they do care about customer satisfaction!</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Computer Sciences & Information Technology</span>
                        </div>
                    </li>
                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Kong S. , China</span>
                        </div>
                        <p class="review-single__text">This company are great. I’m not very good on writte English but they alwys help me. Thank you. 5 star!!!!</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">English, Literature & Philology</span>
                        </div>
                    </li>
                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Xavier G. , Australia</span>
                        </div>
                        <p class="review-single__text">If you got stuck on your dissertation or don’t have enough time to write it, visit this dissertation writing service. I was pleased with the quality of work and a 15% discount! Thnx!</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Marketing</span>
                        </div>
                    </li>
                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Firyal J. , UAE</span>
                        </div>
                        <p class="review-single__text">I have been a customer of this company for two years already.  Every time they deliver outstanding papers and never miss my deadlines.  You will never regret using them !</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Other/Non-applicable</span>
                        </div>
                    </li>
                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Luke G. , Australia</span>
                        </div>
                        <p class="review-single__text">A year ago my friend told me about this website. I was hesitant at first but ordered my dissertation here. The quality was decent, and it was absolutely unique as promised. Thank you!</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Social & Political Sciences</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<?php } ?>


<?php if (is_page('thesis')) { ?>

    <section class="customers-reviews">
        <div class="container">
            <h2 class="site_secondary__title">Why Students Trust Our Dissertation Writing Service Since 2005?</h2>
            <div class="customers-reviews__wrap">
                <p class="customers-reviews__sub-title">Take a look at some of the latest testimonials we’ve received from our customers.</p>

                <!--<div class="customers-reviews__rate">
               <p class="rate-reviews__title">Overall Rating</p>
               <div class="rate-reviews__wrap">
                   <!--<span class="rate-reviews__value">4/5</span>-->
                <!--   <div class="rate-reviews__stars">-->
                <?php /*if(function_exists('the_ratings')) { the_ratings(); } */?>
                <!--<figure class="rate-reviews__image">
                                <img itemprop="logo" src="<?php /*bloginfo('template_url'); */?>/img/reviews-stars.png" alt="<?php /*bloginfo('name'); */?>"/>
                            </figure>
                            <span class="rate-reviews__caption">based on 10 reviews</span>-->
                <!--</div>
            </div>
        </div>-->

                <ul class="customers-reviews__main" id="js-customers-reviews-slider">
                    <liu class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span><i> Will P. </i> , Australia</span>
                        </div>
                        <p class="review-single__text">OZessay is a great timesaver and a huge help for students in a pinch. My experience with them showed me that they deliver excellent quality dissertations and can be trusted.</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Law</span>
                        </div>
                    </liu>

                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Shen T. , China</span>
                        </div>
                        <p class="review-single__text">If you not have time to write dissertation, I recommend this site. I like quality and friendly support. Thank you so much! I will recommend your site ot my friend.</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Psychology</span>
                        </div>
                    </li>

                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span><i> Rahaf R. </i> , UAE</span>
                        </div>
                        <p class="review-single__text">This company has the best price quality ratio and I like that they are available 24/7. I  often have question and they react fast. Always on time snd always professional work!</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Other/Non-applicable</span>
                        </div>
                    </li>

                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Amelie S. , Australia</span>
                        </div>
                        <p class="review-single__text">a month ago I ordered my dissertation methodology from a top expert, and it was one of the best decisions I ever made. the writer did an awesome job! i will definitely use them again ☺</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Journalism & Mass Communication</span>
                        </div>
                    </li>
                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Aiden S. , Australia</span>
                        </div>
                        <p class="review-single__text">I have used this site a few times, and have always been satisfied with the quality. These guys are fast, reliable and reachable 24/7. And they do care about customer satisfaction!</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Computer Sciences & Information Technology</span>
                        </div>
                    </li>
                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Kong S. , China</span>
                        </div>
                        <p class="review-single__text">This company are great. I’m not very good on writte English but they alwys help me. Thank you. 5 star!!!!</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">English, Literature & Philology</span>
                        </div>
                    </li>
                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Xavier G. , Australia</span>
                        </div>
                        <p class="review-single__text">If you got stuck on your dissertation or don’t have enough time to write it, visit this dissertation writing service. I was pleased with the quality of work and a 15% discount! Thnx!</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Marketing</span>
                        </div>
                    </li>
                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Firyal J. , UAE</span>
                        </div>
                        <p class="review-single__text">I have been a customer of this company for two years already.  Every time they deliver outstanding papers and never miss my deadlines.  You will never regret using them !</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Other/Non-applicable</span>
                        </div>
                    </li>
                    <li class="review-single">
                        <div class="review-single__header">
                            <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/yellow-quote.png" alt="<?php bloginfo('name'); ?>"/>
                            <span>Luke G. , Australia</span>
                        </div>
                        <p class="review-single__text">A year ago my friend told me about this website. I was hesitant at first but ordered my dissertation here. The quality was decent, and it was absolutely unique as promised. Thank you!</p>
                        <div class="review-single__footer">
                            <span class="review-single__subject">Subject</span>
                            <span class="review-single__subject review-single__subject_value">Social & Political Sciences</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<?php } ?>


<!--customers-reviews-BLOCK END-->