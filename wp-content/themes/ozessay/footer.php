</div><?php //END MAIN ?>
<footer class="site_footer">
    <div class="container">
        <div class="footer__wrap_desc">
            <div class="footer__wrap">
                <div class="footer__left">
                    <figure class="footer__logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/img/Logo_footer.svg" alt="<?php bloginfo('name'); ?>"/>
                        </a>
                    </figure>
                </div>
                <div class="footer__right">
                    <div class="footer__navigation">
                        <div class="footer__item">
                            <p class="footer__title">Customer Info</p>
                            <?php
                            $nav_args = array(
                                'menu' => 'Footer(customer info)',
                                'container' => '',
                                'container_class'   =>'footer__item',
                                'menu_class' => 'footer__list',
                                'depth' => 1
                            );
                            wp_nav_menu($nav_args);
                            ?>
                        </div>
                        <div class="footer__item">
                            <p class="footer__title">Company info</p>
                            <?php
                            $nav_args = array(
                                'menu' => 'Footer(Company info)',
                                'container' => '',
                                'container_class'   =>'footer__item',
                                'menu_class' => 'footer__list',
                                'depth' => 1
                            );
                            wp_nav_menu($nav_args);
                            ?>
                        </div>
                        <div class="footer__item">
                            <p class="footer__title">Our Product</p>
                            <?php
                            $nav_args = array(
                                'menu' => 'Footer(Our Product)',
                                'container' => '',
                                'container_class'   =>'footer__item',
                                'menu_class' => 'footer__list',
                                'depth' => 1
                            );
                            wp_nav_menu($nav_args);
                            ?>
                            <?php
                            $nav_args = array(
                                'menu' => 'Footer(blog)',
                                'container' => '',
                                'menu_class' => 'footer__title footer__title_blog',
                                'depth' => 1
                            );
                            wp_nav_menu($nav_args);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__wrap footer__row-down">
                <div class="footer__left">
                    <div class="footer__copyright-main">
                        Ozessay.com.au is meant to assist students throughout their academic life by providing educational and sample writing materials. All products created by Ozessay.com.au are model assignments that can be used to prepare one’s own individual research. If customers opt to pass any of our products as their own, they do it at their own risk.
                    </div>
                    <div class="footer__terms">
                        <a href="#" data-crm-widget="termsPopup" data-tab="privacy">Privacy policy</a>
                        <a href="#" data-crm-widget="termsPopup" data-tab="referral">Disclaimer</a>
                        <a href="#" data-crm-widget="termsPopup" data-tab="tos">Terms of service</a>
                    </div>
                </div>
                <div class="footer__right">
                    <div class="footer__inter">
                        <div class="footer__inter-item">
                            <p class="footer__title">Follow Us</p>
                            <div class="footer__soc">
                                <a class="si si-facebook footer__link footer__link_fb" rel="nofollow" target="_blank" href="https://www.facebook.com/ozessay/" title="follow on Facebook"> <i class="fa fa-facebook"></i></a>
                                <a class="si si-twitter footer__link footer__link_tw" rel="nofollow" target="_blank" href="https://twitter.com/ozessay" title="follow on Twitter"> <i class="fa fa-twitter"></i></a>
                                <a class="si si-insta footer__link footer__link_in" rel="nofollow" target="_blank" href="https://www.instagram.com/ozessay_official/" title="follow on Instagram"> <i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="footer__inter-item">
                                <p class="footer__title">We Accept</p>
                            <div class="footer__inter-wrap">
                                <img class="footer-add-pp footer__inter-img" src="<?php bloginfo('template_url'); ?>/img/pay-pal.png" alt="ozessay writing pay-pal">
                                <img class="footer-add-mc footer__inter-img" src="<?php bloginfo('template_url'); ?>/img/mastercard.png" alt="ozessay writing pay-pal">
                                <img class="footer-add-v footer__inter-img" src="<?php bloginfo('template_url'); ?>/img/visa.png" alt="ozessay writing pay-pal">
                                <!--<a rel="nofollow" class="google-btn" target="_blank" href="https://play.google.com/store/apps/details?id=com.ozessay"> <img class="footer-add-gplay" width="160" style="width: 160px;" src="<?php /*bloginfo('template_url'); */?>/img/google-play-badge.svg" alt="ozessay writing google play"> </a>-->
                                <a href="//www.dmca.com/Protection/Status.aspx?ID=1181fa8b-a266-4261-960c-4a1ca015adb2" title="DMCA.com Protection Status" class="dmca-badge" rel="nofollow"> <img src="//images.dmca.com/Badges/dmca_protected_sml_120z.png?ID=1181fa8b-a266-4261-960c-4a1ca015adb2" alt="DMCA.com Protection Status"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="footer__copyright">Copyright 2005-2018 OZessay.com.au. A service of Insight Innovations LLC, Phoenix, AZ</p>
        </div>
        <div class="footer__wrap footer__wrap_mob">
            <div class="footer__left">
                <figure class="footer__logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/img/Logo_footer_mobile.svg" alt="<?php bloginfo('name'); ?>"/>
                    </a>
                </figure>
                <div class="footer__mob-row">
                    <div class="footer__inter-item">
                        <p class="footer__title">Follow Us</p>
                        <div class="footer__soc">
                            <a class="si si-facebook footer__link footer__link_fb" rel="nofollow" target="_blank" href="https://www.facebook.com/ozessay/" title="follow on Facebook"> <i class="fa fa-facebook"></i></a>
                            <a class="si si-twitter footer__link footer__link_tw" rel="nofollow" target="_blank" href="https://twitter.com/ozessay" title="follow on Twitter"> <i class="fa fa-twitter"></i></a>
                            <a class="si si-insta footer__link footer__link_in" rel="nofollow" target="_blank" href="https://www.instagram.com/ozessay_official/" title="follow on Instagram"> <i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="footer__inter-item">
                        <a href="//www.dmca.com/Protection/Status.aspx?ID=1181fa8b-a266-4261-960c-4a1ca015adb2" title="DMCA.com Protection Status" class="dmca-badge" rel="nofollow"> <img src="//images.dmca.com/Badges/dmca_protected_sml_120z.png?ID=1181fa8b-a266-4261-960c-4a1ca015adb2" alt="DMCA.com Protection Status"></a>
                    </div>
                </div>
            </div>
            <div class="footer__right">
                <div class="footer__inter">
                    <div class="footer__inter-item footer__inter-item_soc-mob">
                        <p class="footer__title">We Accept</p>
                        <img class="footer-add-pp footer__inter-img" src="<?php bloginfo('template_url'); ?>/img/pay-pal.png" alt="ozessay writing pay-pal">
                        <img class="footer-add-mc footer__inter-img" src="<?php bloginfo('template_url'); ?>/img/mastercard.png" alt="ozessay writing pay-pal">
                        <img class="footer-add-v footer__inter-img" src="<?php bloginfo('template_url'); ?>/img/visa.png" alt="ozessay writing pay-pal">
                    </div>
                    <div class="footer__copyright-main">
                        Ozessay.com.au is meant to assist students throughout their academic life by providing educational and sample writing materials. All products created by Ozessay.com.au are model assignments that can be used to prepare one’s own individual research. If customers opt to pass any of our products as their own, they do it at their own risk.
                    </div>
                    <div class="footer__terms">
                        <a href="#" data-crm-widget="termsPopup" data-tab="privacy">Privacy policy</a>
                        <a href="#" data-crm-widget="termsPopup" data-tab="referral">Disclaimer</a>
                        <a href="#" data-crm-widget="termsPopup" data-tab="tos">Terms of service</a>
                    </div>
                </div>
            </div>
            <p class="footer__copyright">Copyright 2005-2018 OZessay.com.au. A service of Insight Innovations LLC, Phoenix, AZ</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

<script>
    $(function () {
        ZopimClear(".<?php
            $site_url = get_site_url();
            $find = array('http://', 'https://', '/', 'track.');
            $replace = '';
            $output = str_replace($find, $replace, $site_url);
            echo $output;
            ?>");
    });
</script>

<?php if (is_page_template('default') && !is_front_page()) { ?>
    <?php
    $pagearray = array(
        'homeUrl' => get_home_url(),
        'sitelogo' => get_home_url().'/wp-content/themes/ozessay/img/logo.png',
        'pageUrl' => get_the_permalink(),
        'headline' => get_the_title(),
        'imgUrl' => get_home_url().wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full")[0],
        'imgheight' => wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full")[1],
        'imgwidth' => wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full")[2],
        'description' => get_post_meta($post->ID, '_aioseop_description')[0],
        'published' => get_the_date('c'),
        'dateModified' => get_the_modified_date('c'),
    );
    ?>
    <!-- schema.org Article -->
    <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "Article",
                    "mainEntityOfPage": {
                        "@type": "WebPage",
                        "@id": "<?php echo $pagearray['pageUrl'] ?>"
                    },
                    "headline": "<?php echo $pagearray['headline'] ?>",
                    "image": {
                        "@type": "ImageObject",
                        "url": "<?php echo $pagearray['imgUrl'] ?>",
                        "height": "<?php echo $pagearray['imgheight'] ?>",
                        "width": "<?php echo $pagearray['imgwidth'] ?>"
                    },
                    "datePublished": "<?php echo $pagearray['published'] ?>",
                    "dateModified": "<?php echo $pagearray['dateModified'] ?>",
                    "author": {
                        "@type": "Person",
                        "name": "Emily Green"
                    },
                    "publisher": {
                        "@type": "Organization",
                        "name": "Insight Innovations LLC",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "<?php echo $pagearray['sitelogo'] ?>",
                            "width": 217,
                            "height": 59
                        }
                    },
                    "description": "<?php echo $pagearray['description'] ?>"
                }
    </script>
<?php } ?>
</body>
</html>