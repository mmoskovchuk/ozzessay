<?php
/**
 * Template Name: Preview
 *
 */
?>

<?php get_header(); ?>

    <article class="article of-preview">
        <div class="section">
            <div class="article__content">
                <div class="ofs ofs-preview">
                    <div class="ofs-heading text-left">
                        <div class="container">
                            <div class="ofs-order-title">SUCCESS!</div>
                        </div>
                    </div>
                    <?php

                    ob_start();

                    ?>

                    <div class="ofs-section text-left">

                        <div class="ofs-preview-personal ofs-grid ofs-grid-3 dark-slate-gray-bg">
                            <div class="container">
                                <div class="ofs-order-header-title">THANK YOU, CUSTOMER! YOUR ORDER HAS BEEN RECEIVED! </div>
                                <div class="ofs-order-header-subtitle">ORDER SUMMARY</div>
                                <div class="ofs-block fix-width">
                                    <div class="ofs-line order-num"><span class="control-label">YOUR ORDER NUMBER IS:</span> {id}</div>
                                    <div class="ofs-line"><span class="control-label">TYPE OF PAPER:</span> {type_of_work}</div>
                                    <div class="ofs-line"><span class="control-label">SUBJECT:</span> {paper_subject}</div>
                                    <div class="ofs-line"><span class="control-label">COMPLEXITY LEVEL:</span> {level_work}</div>
                                    <div class="ofs-line"><span class="control-label">DEADLINE:</span> {urgency}</div>
                                </div>
                                <div class="ofs-order-header-subtitle">ORDER SUMMARY</div>
                                <div class="ofs-order-header-text">
                                    <p>If you want us to start working on your order, please click the "Pay" button to activate order</p>
                                    <p>The information on this page is being transmitted via 2048-bit SSL secure channel, the highest level of security commercially available, and will not be accessible to third party. Your personal and payment information are safe with us.</p>
                                </div>
                            </div>
                        </div>

                        <div class="ofs-preview-personal ofs-grid ofs-grid-3 white-full-bg">
                            <div class="container">
                                <div class="ofs-order-header-title">SELECT TYPE OF PAYMENT</div>
                                {paypal_button}
                                {g2s_button}
                            </div>
                        </div>

                        <div class="ofs-preview-personal ofs-grid ofs-grid-3 light-yellow-bg">
                            <div class="container">
                                <div class="ofs-block">
<!--                                    <div class="ofs-line"><span class="control-label">Discount:</span> {discount}</div>-->
                                    <div class="ofs-line"><span class="control-label">Bonus money used:</span> {bonus_used}</div>
                                </div>
                                <div class="ofs-total">
                                    <div class="ofs-price-new">
                                        Grand Total:  <span class="ofs-price-new-label">{total}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php

                    $params = json_encode([
                        'theme' => 'raw',
                        'template' => ob_get_clean(),
                        'service_it' => '<span class="ofs-service">{service}</span>',
                        'paypal_button_ot' => '<div class="ofs-paypal">{paypal_button}</div>',
                        'g2s_button_ot' => '<div class="ofs-g2s">{g2s_button}</div>'
                    ]);

                    ?>

                    <div data-crm-widget="preview" data-params='<?php echo $params; ?>'></div>



                </div><!--ofs-->
            </div>
        </div>
    </article>
    <?php get_template_part('inc', 'livechat'); ?>

<?php get_footer(); ?>