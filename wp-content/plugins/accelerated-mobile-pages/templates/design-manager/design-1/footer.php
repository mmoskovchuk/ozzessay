<?php
global $redux_builder_amp;
wp_reset_postdata(); ?>
<footer class="amp-wp-footer">
	<div id="footer">
	    <?php if ( has_nav_menu( 'amp-footer-menu' ) ) { ?>
            <div class="footer_menu">
               <?php // schema.org/SiteNavigationElement missing from menus #1229 ?>
                  <nav itemscope="" itemtype="https://schema.org/SiteNavigationElement">
                         <?php
                         $menu = wp_nav_menu( array(
                              'theme_location' => 'amp-footer-menu',
                              'link_before'     => '<span itemprop="name">',
                              'link_after'     => '</span>',
                              'echo' => false
                          ) );
                         $menu = apply_filters('ampforwp_menu_content', $menu);
                         $sanitizer_obj = new AMPFORWP_Content( $menu, array(), apply_filters( 'ampforwp_content_sanitizers', array( 'AMP_Img_Sanitizer' => array(), 'AMP_Style_Sanitizer' => array(), ) ) );
                         $sanitized_menu =  $sanitizer_obj->get_amp_content();
                         echo $sanitized_menu; ?>
                  </nav>
            </div>
        <?php } ?>
        <div class="footer-center">
            <div class="number"><p>NEED HELP? Contact us:</p>
                <a href="tel:+61290377008"><b>+61290377008</b></a>
            </div>
<!--            <div class="social-share">-->
<!--                <amp-social-share type="email" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined amp-social-share-email i-amphtml-layout" style="width: 60px; height: 44px;" role="button" tabindex="0"></amp-social-share>-->
<!--                <amp-social-share type="facebook" data-param-app_id="254325784911610" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined amp-social-share-facebook i-amphtml-layout" style="width: 60px; height: 44px;" role="button" tabindex="0"></amp-social-share>-->
<!--                <amp-social-share type="gplus" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined amp-social-share-gplus i-amphtml-layout" style="width: 60px; height: 44px;" role="button" tabindex="0"></amp-social-share>-->
<!--                <amp-social-share type="linkedin" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined amp-social-share-linkedin i-amphtml-layout" style="width: 60px; height: 44px;" role="button" tabindex="0"></amp-social-share>-->
<!--                <amp-social-share type="twitter" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined amp-social-share-twitter i-amphtml-layout" style="width: 60px; height: 44px;" role="button" tabindex="0"></amp-social-share>-->
<!--            </div>-->
            <div class="link-pages">
<!--                <a href="/" data-crm-widget="termsPopup" data-tab="privacy">Privacy policy</a>-->
<!--                <a href="/" data-crm-widget="termsPopup" data-tab="referral">Disclaimer</a>-->
<!--                <a href="/" data-crm-widget="termsPopup" data-tab="tos">Terms of service</a>-->
                <p class="text-footer">Copyright 2005-2017 OZessay.com.au<br></p>
            </div>
        </div>
<!--		<p class="copyright_txt">-->
<!--			--><?php
//			global $allowed_html;
//			echo wp_kses( ampforwp_translation($redux_builder_amp['amp-translator-footer-text'], 'Footer' ) , $allowed_html) ;
// 		    ?><!----><?php //echo esc_html( $this->get( 'blog_name' ) ); ?>
<!--		</p>-->

		
<!--    <p class="back-to-top">-->
<!--    --><?php //
//             if($redux_builder_amp['ampforwp-footer-top']=='1') { ?>
<!--              <a href="#top">--><?php //echo ampforwp_translation( $redux_builder_amp['amp-translator-top-text'], 'Top'); ?><!-- </a> -->
<!--             --><?php //}
//             if($redux_builder_amp['amp-footer-link-non-amp-page']=='1') {
//                if($redux_builder_amp['ampforwp-footer-top']=='1') { ?>
<!--                  | --><?php //ampforwp_view_nonamp();
//                }
//                else{
//                  ampforwp_view_nonamp();
//                }
//              } ?>
<!--    </p>-->
	</div>
</footer>
<?php do_action('ampforwp_global_after_footer'); ?>