<?php
/**
 * Template Name: Plagiarism-checker
 *
 */
?>


<?php get_header(); ?>
    <!--BREADCRUMB-->
    <div class="container">
        <ul class="breadcrumb-plagiarism col-lg-6 col-md-6 col-sm-9 col-xs-9">
            <li><a href="/">Home</a></li>
            <li>/</li>
            <li> <?php the_title(); ?></li>
        </ul>
    </div>

    <!--PLAGCHECK-->
    <section class="plagiarism">
        <?php get_template_part('includes/inc', 'breadcrumbs'); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
                    <div class="plagiarism__info">
                        <div class="plagiarism__txt">
                            <h1 class="text-title">Instant Online Plagiarism Checker</h1><span
                                    class="text-low-0"> for Any Kind of
                            Text</span><br><span class="text-low-1"> Compare your texts with billions of online resources.<br>
                            Get an easy-to-understand report with a precise plagiarism score.</span>
                        </div>
                        <div class="plagiarism__txt">
                            <div class="discount">Only <span class="through">$25</span>&nbsp;<span
                                        class="discount-price">$10</span>for a custom-made report!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12">
                    <div class="plagiarism__form">
                        <div class="plagiarism__form-wrapper">
                            <form id="copy-check" name="copy-check" action="">
                                <div class="form__block">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#drop_checker" id="file_tab" aria-controls="drop_checker"
                                               role="tab"
                                               data-toggle="tab">Upload your file</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#text_checker" id="text_tab" aria-controls="text_checker"
                                               role="tab"
                                               data-toggle="tab">Check your text</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane  active" id="drop_checker">
                                            <label class="text-label" for="file_input">check your file</label>
                                            <input name="file_input" id="file_input" type="file">
                                            <div id="icon_block_drop">
                                                <img src="<?php bloginfo('template_url'); ?>/img/plagcheck/essays_icon.png"
                                                     alt="">
                                                <p class="text-center" id="file_name">some text</p>
                                            </div>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="text_checker">
                                            <label class="text-label" for="text_input">check your text</label>
                                            <textarea form="copy-check" name="text-field" id="text_input"
                                                      placeholder="Type your text here"></textarea>
                                        </div>
                                    </div>
                                    <div id="send_button">START ORDER</div>
                                </div>

                                <div id="pop-up-bg"></div>
                                <div id="pop-up-main">
                                    <div id="pop-up-body">
                                        <div id="close_btn" class="fa fa-times" aria-hidden="true"></div>
                                        <div id="pop-up-body-inner">
                                            <div class="pop-up-title"><span class="pop-up-title__orange">What email address</span><br>should we send a report to?</div>
                                            <div class="input-wrapper">
                                                <input name="user-email" placeholder="Email" id="user-email"
                                                       type="email">
                                                <input name="user-name" placeholder="Name" id="user-name" type="text">
                                                <span class="error-message">Please, fill the correct e-mail</span>
                                            </div>
                                            <div id="confirm" onclick="if(typeof(dataLayer)!='undefined')dataLayer.push(
{  'event' : 'GAEvent', 'eventCategory' : 'Form', 'eventAction' : 'submit', 'eventLabel' : undefined, 'eventValue' : undefined  }
)">Confirm
                                            </div>
                                            <div id="loader">
                                                Please hold on. You will now be redirected to PayPal checkout page.
                                                <div class="cssload-container">
                                                    <div class="cssload-whirlpool"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--CONTENT-->
    <section class="plagiarism-text">
        <div class="container">
            <div>
                <h3>How Do We Detect Plagiarism?</h3>
                <p>Our plagiarism detection module is an unalienable part of the website and the services we provide.
                    This module allows us to provide only original papers, as we have a zero tolerance policy towards
                    plagiarism. We also take immense pride in showing the actual report to our customers. This means
                    that all our customers without exception have the privilege of not simply looking at the similarity
                    index (this is another name for plagiarism score), but also have the ability to view the entire
                    report. In case you see that a certain part of your paper shows a similarity index that is too high
                    we recommend that you message your writer directly and ask him/her to explain this score. Very often
                    it happens that if the paper is high in citations, it will show a higher similarity index than a
                    regular paper. This is especially the case with legal papers, where a lot of quotations and
                    references to the active legislation need to be made. The machine checker is simply looking for
                    matches while running a search of its own, and it shows any matches as plagiarism. Therefore, in
                    this case, the final say is to be made by the support staff – after they review the paper they will
                    be able to determine whether the paper needs to be redone or not. However, if you need a revision
                    you can request it by clicking on the “Request a free revision” link of your control panel. Once you
                    click on it, a new window will appear, asking you for instructions. Simply fill it in – and you are
                    all set, the writer will then be alerted to revise the paper. If revisions don’t help and you want
                    to change your writer, let us know and our staff will review the case and do a quick reassign.</p>
                <p>
                    Our anti-plagiarism module was been launched in 2007 and serves us today. We continue to work on
                    improving its accuracy to achieve the best possible results. Therefore, we are checking all papers
                    not only against the text that is available online but also run a brief scan through our database of
                    papers. This helps us to ensure that all papers are truly authentic and are not similar to the works
                    completed in the past.
                </p>
                <p>
                    Our module works in the following manner: it is separating the text into small blocks, called
                    patterns. Then the system performs a web search by utilizing a so-called “Rabin-Karp” algorithm of
                    string text search, thus giving the most precise results, (it even includes sources where the parts
                    of the paper were copied from). This technology was invented back in 1987, and we found it to be an
                    adequate solution for our clients’ needs. The system is powered by such search engines as Yahoo!,
                    Google, MSN.
                </p>
                <p>
                    It has already been mentioned that the system is unable to tell whether a match is an instance of
                    plagiarism or a quotation. Because of this, whenever the paper’s similarity index goes beyond 20%,
                    it should be reviewed manually. If the highlighted phrase contains a reference of the original work,
                    then this can’t be considered plagiarism. If, however, the phrase does not indicate the original
                    author, this means the paper requires immediate attention. Such papers are reviewed by our team and
                    analyzed for authenticity in a manual mode.
                </p>
            </div>
        </div>
    </section>

    <!--EMAIL-->

    <section class="plagiarism_email">
        <div class="email_lead">
            <div class="container">
                <div class="email_lead-text row">
                    <div class="valign col-lg-12 col-md-12">
                        <div class="email_lead-text__block col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="section-text">
                                <div class="section-text__desc-0">Place an order now & get a 7% discount</div>
                                <div class="section-text__desc-1 ">Try our service for free. No credit card is needed.
                                </div>
                            </div>
                        </div>
                        <div class="email_lead-text__block col-lg-5 col-md-5 col-sm-12 col-xs-12">
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
    <section class="site_chat">
        <div class="container">
            <div class="site_chat__title">Need Help?</div>
            <div class="site_chat__desc">Start a Live Chat with <span class="site_chat__bold">an Operator</span>,
                contact us <a class="site_chat__color" href="tel:+61290377008">+61290377008</a> or send a message
            </div>
            <a href="https://m.me/ozessay" class="site_chat__btn">
                Send a Message
            </a>
        </div>
    </section>


<?php get_footer(); ?>