<section class="email__new">
    <div class="email_lead">
        <div class="container">
            <div class="email_lead-text row">
                <div class="valign col-lg-12 col-md-12">
                    <div class="email_lead-text__block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-text">
                            <div class="section-text__desc-0">First-time customer?</div>
                            <div class="section-text__desc-1 ">Place your order now & get 7% OFF!</div>
                        </div>
                    </div>
                    <div class="email_lead-text__block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div>
                            <?php
                            ob_start();
                            ?>
                            <div class="emailCollector">
                                {email}
                                <a type="submit" href="/order?EssayForm[code]=first7" class="collector-continue-btn" data-wow-duration="1s">GET STARTED</a>
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