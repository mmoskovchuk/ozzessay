<section class="live-chat">
    <div class="plagiarism_email">
        <div class="email_lead">
            <div class="container">
                <div class="email_lead-text row">
                    <div class="valign col-lg-12 col-md-12">
                        <div class="email_lead-text__block col-lg-7 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-text">
                                <div class="section-text-0"> First-time customer?</div>
                                <div class="section-text-1 ">Place your order now & get 7% OFF!</div>
                            </div>
                        </div>
                        <div class="email_lead-text__block col-lg-5 col-md-12 col-sm-12 col-xs-12">
                            <div>
                                <?php
                                ob_start();
                                ?>
                                <div class="emailCollector">
                                    {email}
                                    <a type="submit" href="/order?EssayForm[code]=first7" class="collector-continue-btn" data-wow-duration="1s">Get started</a>
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
    </div>
    <!-- email-collector -->
    <div class="start-message">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                <h2>Need Help?</h2>
                <p>Start a live chat with <b>an operator</b>,<br>
                    contact us at <b style="color: #ce5017;">+61290377008</b> or send us a message.</p>
                <a href="https://m.me/ozessay" class="msg-btn"><i class="msg"></i>Send a message</a>
                </div>
            </div>
        </div>
    </div>
</section>