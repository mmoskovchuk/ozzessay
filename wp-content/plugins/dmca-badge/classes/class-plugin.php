<?php
/**
 * Class DMCA_Badge_Plugin
 *

 * @property string $support_url
 * @property string $support_link
 * @property string $resend_password_url
 * @property string $resend_password_link
 * @property string $learn_more_url
 * @property string $admin_spinner_url
 * @property string $rest_api_url
 * @property string $button_url
 * @property string $sample_cert_image_url
 * @property string $protection_pro_link
 * @property string $compare_plans_url
 * @property string $upgrade_url
 * @property string $pro_video_url
 * @property string $recover_password_url
 *
 */
class DMCA_Badge_Plugin extends Sidecar_Plugin_Base {

  /**
   * @var bool True when authentication successful: Captured in filter_authentication_success_message() then used in set_postback_message()
   */
  var $authentication_success = false;

  /**
   * @var bool|string Allows message to be set in admin page+form specific hook and displayed in general set_postback_message()
   */
  var $postback_message = false;

  /**
   * @var array Post types available to display badges on.
   */
  private $_available_post_types = array(
    'post'  => 'post',
    'page'  => 'page',
    'media' => 'attachment'
  );

  /**
   * @var null|array Used to hold settings for a page load so $this->get_settings() only has to be called once.
   */
  private static $_page_load_settings;

  /**
   *
   */
  function initialize_plugin() {
    $this->plugin_title = __( 'DMCA Protection Badge for WordPress', 'dmca-badge' );
    $this->plugin_label = __( 'DMCA Protection Badge', 'dmca-badge' );
    $this->plugin_version = DMCA_BADGE_VER;

    $this->css_base = 'dmca-badge';

    $this->add_form( 'register', array( 'label' => 'Registration Details' ) );
    $this->add_form( 'authenticate', array( 'label' => 'Authentication Credentials' ) );
    $this->add_form( 'badge', array( 'label' => 'Badge Settings' ) );
    $this->add_form( 'theme', array( 'label' => 'Theme Settings' ) );

    /**
     * This must come after the forms have been added.
     */
    $this->set_api( new DMCA_API_Client() );

    add_action( 'widgets_init', array( $this, 'widgets_init' ) );

    add_action( 'template_redirect', array( $this, 'template_redirect' ) );

  }

  /**
   * Initialize Widget
   */
  function widgets_init() {
    register_widget( 'DMCA_Badge_Widget' );
  }

  /**
   * If has not been authenticated (i.e. does not have a grant) then the settings page should be the account tab.
   *
   * This was does so that the message on the plugins page would take them to the account page.
   *
   * @param string $url
   *
   * @return string
   */
  function filter_settings_url( $url ) {
    if ( ! $this->has_grant() )
      $url .= "&tab=account";
    return $url;
  }

  /**
   * @return DMCA_Badge_Plugin
   */
  static function this() {
    return parent::this();
  }

  function initialize_admin() {
    /**
     * Check to see if the option has been configured and if not redirect to appropriate tab.
     */
    add_action( 'admin_init', array( $this, 'admin_init' ) );

    /**
     * Display a message about what it needed to complete configuration.
     */
    add_action( 'admin_notices', array( $this, 'admin_notices' ) );

    $this->add_admin_page( 'settings', array( 'menu_title' => __( 'DMCA Badge', 'dmca-badge' ), ));

    $this->register_url( 'learn_more',    'http://www.dmca.com/Protection.aspx' );
    $this->register_url( 'admin_spinner',  admin_url( 'images/wpspin_light.gif' ) );
    $this->register_url( 'rest_api',      'https://www.dmca.com/rest');
    $this->register_url( 'support',       'http://www.dmca.com/Questions.aspx', array(
      'link_text' => __( 'support', 'dmca-badge' )
    ));
    $this->register_url( 'login',            'http://www.dmca.com/users/login.aspx', array(
      'link_text' => __( 'login', 'dmca-badge' )
    ));
    $this->register_url( 'resend_password',  'http://www.dmca.com/users/login.aspx', array(
      'link_text' => __( 'resend password', 'dmca-badge' )
    ));
    $this->register_url( 'protection_pro',  'http://www.dmca.com/ProtectionPro.aspx', array(
      'link_text' => __( 'Protection Pro', 'dmca-badge' ),
      'link_class'  => 'dmca-pro-link'
    ));
    $this->register_url( 'compare_plans',  'http://www.dmca.com/ProtectionPro.aspx#basicProPlan-span', array(
      'link_text' => __( 'compare plans', 'dmca-badge' )
    ));
    $this->register_url( 'upgrade',  'http://www.dmca.com/toolkit/signup.aspx?ad=wpdmcabp', array(
      'link_text' => __( 'upgrade', 'dmca-badge' )
    ));
    $this->register_url( 'pro_video',  'http://www.youtube.com/embed/rGZF5VFR-is?rel=0&autoplay=1', array(
      'link_text'   => __( 'Protection Pro video', 'dmca-badge' ),
    ));
    $this->register_url( 'recover_password',  'http://www.dmca.com/users/login.aspx', array(
      'link_text'   => __( 'recover password', 'dmca-badge' ),
    ));

    $this->register_image( 'logo_icon',         'dmca-logo.png' );
    $this->register_image( 'sample_cert_image', 'dmca-sample-certificate-450x225.png' );
    $this->register_image( 'pro_advert_image',  'dmca-go-pro-banner-ad-490x65.png' );

  }

  /**
   * Returns the HTML for the badge.
   *
   * @return string
   */
  function get_badge_html() {
    $settings = $this->get_settings();
    $class = $this->css_base;
    if ( $settings['theme']['badge_alignment'] )
      $class = "{$class} {$settings['theme']['badge_alignment']}";

    $html = html_entity_decode( $settings['badge']['html'] );
    $html =<<<HTML
\n<div class="{$class}">{$html}</div>\n
HTML;

    return $html;
  }

  function initialize_admin_page( $admin_page ) {

    $admin_page->set_auth_form( 'authenticate' );

    switch( $admin_page->page_name ) {
      case 'settings':

        $admin_page->add_tab( 'about',    __( 'About', 'dmca-badge' ), array(
          'page_title' => __( 'Welcome to DMCA Protection Badge for WordPress', 'dmca-badge' ),
        ));
        $admin_page->add_tab( 'account',  __( 'Account', 'dmca-badge' ), array(
          'page_title'  => __( 'Your Account', 'dmca-badge' ),
          'forms'       => array( 'register', 'authenticate' ),
        ));
        $admin_page->add_tab( 'badges',  __( 'Badges', 'dmca-badge' ), array(
          'page_title' => __( 'Select a Badge', 'dmca-badge' ),
          'forms'      => array( 'badge' ),
        ));
        $admin_page->add_tab( 'theme',  __( 'Theme', 'dmca-badge' ), array(
          'page_title' => __( 'Theme Integration', 'dmca-badge' ),
          'forms'      => array( 'theme' ),
        ));
        $admin_page->add_tab( 'pro',  __( 'Go Pro', 'dmca-badge' ), array(
          'page_title' => __( 'Pro Features Video', 'dmca-badge' ),
        ));
        break;
    }

  }

  function initialize_form( $form ) {

    switch( $form->form_name ) {
      case 'authenticate':
        $form->add_button( 'save', __( 'Authenticate', 'dmca-badge' ) );
        $form->add_button( 'reset', __( 'Reset Defaults', 'dmca-badge' ), array('button_type' => 'secondary') );
        $form->add_field( 'email', array(
          'label' => __( 'Account Email', 'dmca-badge' ),
          'help'	  => __( 'The email address used for your account', 'dmca-badge' ),
          'validator' => FILTER_SANITIZE_EMAIL,
          'required' => true,
        ));
        $form->add_field( 'password', array(
          'label' => __( 'Account Password', 'dmca-badge' ),
          'help'	  => __( 'The password used for your DMCA account', 'dmca-badge' ),
          'required' => true,
        ));
        $form->add_field( 'authenticated', array(
          'type' => 'hidden',
          'required' => true,
        ));
        break;

      case 'register':
        $form->add_field( 'first_name', array(
          'label' => __( 'First Name', 'dmca-badge' ),
          'help'	  => __( '', 'dmca-badge' ),
          'required' => false,
        ));
        $form->add_field( 'last_name', array(
          'label' => __( 'Last Name', 'dmca-badge' ),
          'help'	  => __( '', 'dmca-badge' ),
          'required' => false,
        ));
        $form->add_field( 'new_email', array(
          'label' => __( 'Account Email', 'dmca-badge' ),
          'help'	  => __( '', 'dmca-badge' ),
          'validator' => FILTER_SANITIZE_EMAIL,
          'required' => false,
        ));
        $form->add_field( 'company_name', array(
          'label' => __( 'Company Name', 'dmca-badge' ),
          'help'	  => __( '', 'dmca-badge' ),
          'required' => false,
        ));
        $form->add_field( 'registered', array(
          'type'		=> 'hidden',
          'default' => false,
        ));
        $form->add_button( 'save', __( 'Register', 'dmca-badge' ), array('button_type' => 'primary', 'button_name' => 'submit') );
        $form->add_button( 'reset', __( 'Reset Defaults', 'dmca-badge' ), array('button_type' => 'secondary') );
        break;

      case 'badge':
        $form->add_button( 'save', __( 'Save Changes', 'dmca-badge' ) );
        $form->add_field( 'url', array(
          'type'		=> 'hidden',
          'required' => true,
        ));
        $form->add_field( 'html', array(
          'type'		=> 'textarea',
          'rows'		=> 5,  // Cols will be set with CSS
          'label'		=> __( 'Selected Badge:', 'dmca-badge' ),
          'help'		=> __( 'The HTML immediately above this help message and on the right will display your badge.<br> You may edit it if you like but your edits it will be replaced if you select another badge.', 'dmca-badge' ),
          'allow_html' => true,
          'required'	=> false
        ));
        break;

      case 'theme':
        $form->add_section( 'widgets_only', array('section_title' => 'Widgets Only?','section_handler' => $this->section_handler()) );
        $form->add_field( 'widgets_only', array(
          'type'		=> 'checkbox',
          'label'		=> __( '<strong>Only</strong> display badge using WordPress Widgets', 'dmca-badge' ),
          'required'	=> false,
          'section_name' => 'widgets_only'
        ));
        $form->add_section('singular_pages', array('section_title' => 'With Singular Templates?','section_handler' => $this->section_handler()) );
        $form->add_field( 'singular_pages_before_content', array(
          'type'		=> 'checkbox',
          'label'		=> __( '<strong>Before</strong> the content', 'dmca-badge' ),
          'required'	=> false,
          'section_name' => 'singular_pages'
        ));
        $form->add_field( 'singular_pages_after_content', array(
          'label'		=> __( '<strong>After</strong> the content', 'dmca-badge' ),
          'type'		=> 'checkbox',
          'required'	=> false,
          'section_name' => 'singular_pages'
        ));
        $form->add_section('archive_pages', array('section_title' => 'With Archive Templates?','section_handler' => $this->section_handler()) );
        $form->add_field( 'archive_pages_before_content', array(
          'type'		=> 'checkbox',
          'label'		=> __( '<strong>Before</strong> the content', 'dmca-badge' ),
          'required'	=> false,
          'section_name' => 'archive_pages'
        ));
        $form->add_field( 'archive_pages_after_content', array(
          'type'		=> 'checkbox',
          'label'		=> __( '<strong>After</strong> the content', 'dmca-badge' ),
          'required'	=> false,
          'section_name' => 'archive_pages'
        ));
        $form->add_field( 'archive_pages_before_excerpt', array(
          'type'		=> 'checkbox',
          'label'		=> __( '<strong>Before </strong> the excerpt', 'dmca-badge' ),
          'required'	=> false,
          'section_name' => 'archive_pages'
        ));
        $form->add_field( 'archive_pages_after_excerpt', array(
          'type'		=> 'checkbox',
          'label'		=> __( '<strong>After </strong> the excerpt', 'dmca-badge' ),
          'required'	=> false,
          'section_name' => 'archive_pages'
        ));
        $form->add_section('post_types', array('section_title' => 'Which Post Types?','section_handler' => $this->section_handler()) );
        $form->add_field( 'post_types_post', array(
          'type'		=> 'checkbox',
          'label'		=> __( '<strong>Posts</strong>', 'dmca-badge' ),
          'required'	=> false,
          'section_name'	=> 'post_types'
        ));
        $form->add_field( 'post_types_page', array(
          'type'		=> 'checkbox',
          'label'		=> __( '<strong>Pages</strong>', 'dmca-badge' ),
          'required'	=> false,
          'section_name'	=> 'post_types'
        ));
        $form->add_field( 'post_types_media', array(
          'type'		=> 'checkbox',
          'label'		=> __( '<strong>Media</strong>', 'dmca-badge' ),
          'required'	=> false,
          'section_name'	=> 'post_types'
        ));

        $form->add_section('post_alignment', array('section_title' => 'Align Badges How?','section_handler' => $this->section_handler()) );
        $form->add_field( 'badge_alignment', array(
          'label'		=> '&nbsp;',
          'type'		=> 'select',
          'options' 		=> array(
            false	        => __( 'Select an Alignment', 'dmca-badge' ),
            'none'	      => __( 'None', 'dmca-badge' ),
            'alignleft'	  => __( 'Left', 'dmca-badge' ),
            'alignright'	=> __( 'Right', 'dmca-badge' ),
            'aligncenter'	=> __( 'Center', 'dmca-badge' ),
          ),
          'required'	=> false,
          'section_name'	=> 'post_alignment'
        ));
        $form->add_button( 'save', __( 'Save Changes', 'dmca-badge' ) );
        break;

      case 'status':
        /**
         * Hidden field for tracking that the plugin has been fully configured
         */
        $form->add_field( 'configured', array(
          'type'		=> 'hidden',
          'default' => false,
        ));
        break;

    }
  }

  function the_settings_pro_tab() {
    $html =<<<HTML
<div class="pro-tab">
  <p>Learn more about DMCA's {$this->protection_pro_link} in the video below. <a href="{$this->upgrade_url}" class="strong">Click here</a> to upgrade <strong>now</strong>.</li></p>
  <iframe width="800" height="450" src="{$this->pro_video_url}" frameborder="0" allowfullscreen></iframe>
</div>
HTML;
    echo $html;
  }

  function the_settings_about_tab() {
    $this->register_url( 'local_go_pro_video', $this->get_current_admin_page()->get_tab_url('pro'), array(
      'link_text'   => __( 'Protection Pro video', 'dmca-badge' ),
    ));
    $html =<<<HTML
<div class="about-tab">
<img src="{$this->sample_cert_image_url}" alt="Sample content Protection certificate by DMCA.com" class="sample-cert" />
<p>DMCA.com offers FREE services to protect your site from content theft. To learn more about the program click here.</p>
<p>DMCA.com's protection systems track and verify each page on which you display a DMCA Badge. If someone steals your content while it is under DMCA.com protection DMCA.com will perform a free takedown service on your behalf.</p>
<p>Get access to more badges, verified account status and more by upgrading to {$this->protection_pro_link}.<p>
<p>Click below to:<p>
<ul>
  <li><a href="{$this->local_go_pro_video_url}" class="strong">Watch</a> the <strong>Go Pro video</strong></li>
  <li><a href="{$this->compare_plans_url}" class="strong">Compare</a> the Basic and Pro plans</li>
  <li><a href="{$this->upgrade_url}" class="strong">Upgrade</a> to Protection Pro <strong>now</strong></li>
</ul>
</div>
HTML;
    echo $html;
  }

  function the_settings_account_tab() {
    $register_form_title =  __( 'Create A New FREE Account', 'dmca-badge' );
    $register_form_text =   __( 'To create your new free account fill in the fields. Once you click [Save Settings], check your email for a confirmation message.', 'dmca-badge' );
    $register_form_html =   $this->get_form( 'register' )->get_html();

    if ( $this->get_api()->is_grant() ) {
      $authenticate_form_title =     __( 'Already have an account?', 'dmca-badge' );
      $authenticate_form_text =      __( 'If you already have a DMCA Website Protection account, <strong>authenticate</strong> your email and password so you can use our authenticated badges.', 'dmca-badge' );
    } else {
      $authenticate_form_title =     __( 'Need to Switch Accounts?', 'dmca-badge' );
      $authenticate_form_text =      __( 'Your email address has been authenticated but if you need to switch accounts you can do so below.', 'dmca-badge' );
    }
    $recover_password_text = __( '<em>(If you need to recover your password, %sclick here</a>.)</em>', 'dmca-badge' );
    $recover_password_text = sprintf( $recover_password_text, "<a target=\"_blank\" href=\"{$this->recover_password_url}\">" );
    $authenticate_form_html = $this->get_form( 'authenticate' )->get_html();
    $html =<<<HTML
<div id="dmca-register-form">
<h3>{$register_form_title}</h3>
<p>{$register_form_text}</p>
{$register_form_html}
</div>
<div id="dmca-authenticate-form">
<h3>{$authenticate_form_title}</h3>
<p>{$authenticate_form_text} {$recover_password_text}</p>
{$authenticate_form_html}
</div>
HTML;
    echo $html;
  }

  function the_settings_badges_tab() {
    echo '<p>' . __( 'Select a DMCA Website Protection Badge by clicking on it.', 'dmca-badge' ) . '</p>';
    $settings = $this->get_settings();
    $account_id = $settings['authenticate']['AccountID'];
    $branding = __( 'Content Protection by DMCA.com', 'dmca-badge' );
    $badge_template = <<<HTML
<a href="http://www.dmca.com/Protection/Status.aspx?ID={$account_id}" title="{$branding}"><img src="{{badge_url}}?ID={$account_id}" alt="{$branding}"></a>
HTML;
    $badge_template = htmlentities( $badge_template );
    echo "<pre style=\"display:none\" id=\"badge-template\">{$badge_template}</pre>";
    echo $this->get_badges_html( $this->get_form_settings_value( 'badge', 'url' ) );
    echo $this->get_form( 'badge' )->get_html();
  }

  function the_settings_theme_tab() {
    $widgets_title = __( 'Display using WordPress Widgets?', 'dmca-badge' );
    $widgets_text = sprintf( __( "<p>Use the Widget to place a DMCA Website Protection Badge in your sidebar or footer. You can place a DMCA Website Protection Badge in your sidebar or footer by using the Widget. Go to the <a href='%s'>widgets configuration page</a> now.</p>", 'dmca-badge'), admin_url( 'widgets.php' ));
    $automatic_title = __( 'Display Around Your Content?', 'dmca-badge' );
    $automatic_text = __( '<p>The following settings enable you to automatically add DMCA Website Protection Badges at different places around your content. You can control whether the badge appears on a single post/page, on your front page, or an archive page.</p>' );
    $theme_form_html = $this->get_form( 'theme' )->get_html();
    $html =<<<HTML
<div class="theme-tab">
  <h2>{$widgets_title}</h2>
  <p>{$widgets_text}</p>
  <h2>{$automatic_title}</h2>
  <p>{$automatic_text}</p>
  {$theme_form_html}
</div>
HTML;
    echo $html;
  }

  function the_field_badge_images_html() {
    $badges_html = $this->display_badges( $this->rest_api_url );
    if ($badges_html) {
      return $this->display_badges( $this->rest_api_url );
    } else {
      add_action( 'admin_notices', 'badge_message' );
    }
  }

  function get_icon_html() {
    return <<<HTML
<span class="dmca-logo"><a target="_blank" href="{$this->learn_more_url}"><img height="80" width="218" style="background:none;" src="{$this->logo_icon_url}"></a></span>
<span class="dmca-advert"><a target="_blank" href="{$this->protection_pro_url}"><img height="65" width="490" style="background:none;" src="{$this->pro_advert_image_url}"></a></span>
HTML;
  }

  /**
   * Returns true if we are running during a submit of a plugin options update.
   *
   * @return bool
   */
  function is_submit_plugin_options_update() {
    global $pagenow;
    return 'options.php' == $pagenow && isset( $_POST['action'] ) && 'update' == $_POST['action'] && isset( $_POST['option_page'] );
  }

  private function _redirect_to_tab_with_error( $tab, $result ) {
    $settings = $this->get_settings();
    $settings->configured = false;
    $settings->update_settings();
    wp_redirect( $this->get_admin_page( 'settings' )->get_tab_url( $tab ) . $error );
    remove_action( "pre_update_option_{$this->option_name}", array( $this, 'pre_update_plugin_option' ), 11 );
    remove_action( "update_option_{$this->option_name}", array( $this, 'update_plugin_option' ), 10 );
    exit;
  }

  function section_handler() {
    return false;
  }

  /**
   * Note: This sets self::$_page_load_settings which is used in $this->_post_types_gets_badge().
   *
   */
  function template_redirect() {
    global $wp_query;

    /**
     * self::$_page_load_settings is used in $this->_post_types_gets_badge().
     */
    self::$_page_load_settings = $this->get_settings();

    $theme_settings = self::$_page_load_settings['theme'];

    if ( ! $theme_settings['widgets_only'] ) {
      /**
       * We want Badges for more than Widgets..
       */
      if ( $wp_query->is_singular ) {
        /**
         * Integrate into singular templates.
         */
        if ( $this->_post_types_gets_badge() ) {

          if ( ! empty( $theme_settings['singular_pages_before_content'] ) )
            add_filter( 'the_content', array( $this, '_prepend_badge' ) );

          if ( ! empty( $theme_settings['singular_pages_after_content'] ) )
            add_filter( 'the_content', array( $this, '_append_badge' ) );
        }
      } else {
        /**
         * Integrate into archive templates.
         */
        if ( $theme_settings['archive_pages_before_content'] )
          add_filter( 'the_content', array( $this, '_prepend_badge_archive' ) );

        if ( $theme_settings['archive_pages_after_content'] )
          add_filter( 'the_content', array( $this, '_append_badge_archive' ) );

        if ( $theme_settings['archive_pages_before_excerpt'] )
          add_filter( 'the_excerpt', array( $this, '_prepend_badge_archive' ) );

        if ( $theme_settings['archive_pages_after_excerpt'] )
          add_filter( 'the_excerpt', array( $this, '_append_badge_archive' ) );

      }
    }
  }

  /**
   * Append button to element in the loop.
   */
  function _prepend_badge( $content ) {
    if ( in_the_loop() ) {
      $content = $this->get_badge_html() . $content;
    }
    return $content;
  }

  /**
   * Append button to element in the loop.
   */
  function _append_badge( $content ) {
    if ( in_the_loop() ) {
      $content .= $this->get_badge_html();
    }
    return $content;
  }

  /**
   * Prepend button to element in archive view *if* the post type should get one.
   */
  function _prepend_badge_archive( $content ) {
    return $this->_post_types_gets_badge() ? $this->_prepend_badge( $content ) : $content;
  }

  /**
   * Append button to element in archive view *if* the post type should get one.
   */
  function _append_badge_archive( $content ) {
    return $this->_post_types_gets_badge() ? $this->_append_badge( $content ) : $content;
  }

  /**
   * Return true if the passed post type is configured to get a badge.
   *
   * Note: This uses self::$_page_load_settings which is set in template_redirect().
   *
   * @return bool
   */
  private function _post_types_gets_badge() {
    global $post;
    $settings = self::$_page_load_settings;
    return $settings['theme']["post_types_{$this->_available_post_types[$post->post_type]}"];
  }

  /**
   * @param string $message
   */
  function admin_messages($message) {
    $icon_html = $this->has_url( 'logo_icon' ) ? "<span class=\"sidecar-logo-icon\"></span><img src=\"{$this->logo_icon_url}\" /></span>" : '';
    $html = <<<HTML
<div id="message" class="error settings-error">
    <p>{$icon_html}{$message}</p>
</div>
HTML;
    echo $html;
  }

  function badge_message() {
    $icon_html = $this->has_url( 'logo_icon' ) ? "<span class=\"sidecar-logo-icon\"></span><img src=\"{$this->logo_icon_url}\" /></span>" : '';
    $badge_error_message = "There seems to be a problem retrieving the badges, please refresh this page.";
    $html = <<<HTML
<div id="message" class="updated settings-step">
    <p>{$icon_html} {$badge_error_message}</p>
</div>
HTML;
    echo $html;
  }

  /**
   * Clear form fields for registration on settings load.
   *
   * The register form fields are only needed on postback during registration
   * or if there was an error during registration. Otherwise clear them when
   * $plugin->get_form_settings( 'register' ) is called.
   *
   * @param array $form_settings
   *
   * @return array
   *
   * @todo This will need to be renamed 'get_setting_register'
   */
  function filter_form_settings_register( $form_settings ) {
    /**
     * If on load this registered is not missing and true but not on a postback
     */
    if ( ! empty( $form_settings['registered'] ) && ! isset( $_POST['dmca_badge_settings'] ) ) {
      /**
       * Clear the form field
       */
      $form_settings = array_fill_keys( array_keys( $form_settings), false );
      /**
       * Restore the true value for $form_settings['registered'].
       */
      $form_settings['registered'] = true;
    }
    return $form_settings;
  }

  function process_form_register( $form_settings ) {
    $update_email = false;
    $info = $form_settings;
    $info['email'] = $info['new_email'];
    unset( $info['new_email'] );
    $response = $this->get_api()->register( $info );
    if ( $response->has_error() ) {
      $form_settings['registered'] = false;
      $error = $response->get_error();
      switch($error->code) {
        case 'CREDENTIALS_EXIST':
          /**
           * Rewrite the message so we can pass thru __(...,'dmca-badge') for translation.
           */
          $message = __( "<p>A DMCA.com account already exists for the email <em>%s</em>.</p><p>Please authenticate with this email and your password instead.</p>", 'dmca-badge' );
          $message = sprintf( $message, $info['email'] );
          $update_email = true;
          break;
        default:
          $message = __( "Registration failed: <em>%s</em>. Please try again or contact %s for help.", 'dmca-badge' );
          $message = sprintf( $message, rtrim( $error->message, '.' ), $this->support_link );
          break;
      }
      $response->message = $message;
    } else {
      $form_settings['registered'] = true;
      $message =<<<HTML
Registration succeeded for <a href="mailto:{$info['email']}">{$info['email']}</a>.</br></br>
Please look for an email from <em>"DMCA Support"</em> that will have your password, then login from this page.</br></br>
If you do not receive an email in a reasonable time please visit the {$this->resend_password_link} page on DMCA.com.
HTML;
      $response->message = __( $message, 'dmca-badge' );
      $update_email = true;
    }

    if ( $update_email )
      $this->update_form_setting( 'authenticate', 'email', $form_settings['email'] = $info['email'] );

    return $form_settings;
  }

  /**
   * Only here so PhpStorm won't flag an error when using DMCA specific properties or methods.
   *
   * @return bool|DMCA_API_Client
   */
  function get_api() {
    return parent::get_api();
  }

  /**
   * @param string $message
   *
   * @return string
   */
  function filter_authentication_success_message( $message ) {
    /**
     * Don't set here, set in $this->set_postback_message()
     */
    $this->authentication_success = true;

    /**
     * Return false so count( get_settings_errors() will be zero for set_postback_message().
     */
    return false;
  }

  /**
   * Check to see if the user has specified a URL on the Badge Settings page.
   * 'url' is the value we need for a badge so we check against it.
   *
   * @param array $info
   */
  function set_postback_badge_settings_message( $info ) {
    if ( empty( $info->form_values['url'] ) )
      $this->postback_message = __( 'Please select a badge.', 'dmca-badge' );
  }

  /**
   * Check to see if the user has specified an Image Alignment on the Theme Settings page.
   * 'badge_alignment' is the only value that must have an option for this form, so we check against it.
   *
   * @param array $info
   */
  function set_postback_theme_settings_message( $info ) {
    $messages = array();

    if ( empty( $info->form_values['widgets_only'] ) ) {

      if ( $this-> _needs_template_selection( $info->form_values ) )
        $messages[] = __( 'Select one or more Singular or Archive Template locations.', 'dmca-badge' );

      if ( $this-> _needs_post_type_selection( $info->form_values ) )
        $messages[] = __( 'Select one or more Post Types.', 'dmca-badge' );

      if ( $this-> _needs_badge_alignment_selection( $info->form_values ) )
        $messages[] = __( 'Select a Badge Alignment.', 'dmca-badge' );

      if ( count( $messages ) ) {
        $message = '<li>' . implode( '</li><li>', $messages ) . '</li>';
        $this->postback_message = sprintf( __( '<p>Please select <em>"Only display badge using WordPress Widgets"</em>, or:</p><ul>%s</ul>', 'dmca-badge' ), $message );
      }
    }
  }

  /**
   * Allow testing for all elements of an array whose name/key matches a regex being empty or not.
   *
   * Returns true if all matching elements are empty, false otherwise.
   *
   * @param Sidecar_Plugin_Settings $settings
   * @param string $regex
   *
   * @return bool
   */
  private function _all_settings_empty( $settings, $regex ) {
    $empty = true;
    if ( method_exists( $settings, 'get_values' ) )
      $settings = $settings->get_values();
    foreach( $settings as $name => $value ) {
      if ( preg_match( "#{$regex}#", $name ) && $settings[$name] ) {
        $empty = false;
        break;
      }
    }
    return $empty;
  }

  /**
   * @param Sidecar_Admin_Page $admin_page
   * @param Sidecar_Form $form
   * @param array $info
   */
  function set_postback_message( $admin_page, $form, $info ) {
    /**
     * If Sidecar has not already set an "error" message...
     */
    if ( 0 == count( get_settings_errors() ) ) {
      if ( $this->postback_message ) {
        $message_type = 'error';
        $message = $this->postback_message;
      } else {
        $message_type = 'updated';
        $settings = $this->get_settings();

        $needs_theme = 'theme' != $form->form_name && $this->_needs_theme_settings( $settings['theme'] );
        $needs_badges = 'badge' != $form->form_name && $this->_needs_badge_setting( $settings['badge'] );

        /**
         * If we were authenticating then it is a special case and set the message here.
         * 'url' is the value we need for a badge so we check against it.
         */
        if ( $this->authentication_success ) {
          $message = sprintf( __( 'Authentication Successful. ', 'dmca-badge' ) );
        } else {
          $message = sprintf( __( 'Settings saved. ', 'dmca-badge' ) );
        }

        $next_message = false;
        if ( $needs_badges ) {
          $next_tab = 'badges';
          $next_message = __( 'To select your badge, %s.', 'dmca-badge' );
        } else if ( $needs_theme ) {
          $next_tab = 'theme';
          $next_message = __( 'To set your theme options, %s.', 'dmca-badge' );
        } else if ( empty( $settings->configured ) ) {
          $next_tab = 'about';
          $next_message = __( 'To complete your DMCA Protection Badge configuration, %s.', 'dmca-badge' );
        }

        if ( $next_message ) {
          $link = $admin_page->get_tab_link( $next_tab, __( 'click here', 'dmca-badge' ) );
          $message .= sprintf( $next_message, $link );
        }

      }

      if ( $message )
        add_settings_error( 'general', 'settings_updated', $message, $message_type );
    }

  }

  /**
   * @return array|bool
   */
  function get_badge_urls() {
    $grant   = $this->get_api()->get_grant();
    $account_id = $grant[ 'AccountID' ];
    $badges_urls  = get_transient( $transient_key = 'badges_urls' );
    if ( ! $badges_urls ) {
      if ( $account_id ) {
        $badges_urls = $this->get_api()->get_registered_badges_urls( array( 'AccountID' => $account_id ) );
      } else {
        $badges_urls = $this->get_api()->get_anonymous_badge_urls();
      }
      set_transient( $transient_key, $badges_urls, 60*60*24 /* 1 day */ );
    }
    return $badges_urls;
  }

  /**
   * @param bool|string $default_url
   *
   * @return string
   */
  function get_badges_html( $default_url = false ) {
    $badge_urls = $this->get_badge_urls();
    $badges_html = array(  );
    $column = 1;
    foreach( $badge_urls as $badge_url ) {
      $badges_html[$badge_url] =<<<HTML
<div class="badge-option-wrapper"><img src="{$badge_url}" /></div>
HTML;
    }
    if ( isset( $badges_html[$default_url] ) ) {
      /**
       * Show the selected one first
       */
      $html = str_replace( '<img', '<img class="selected"', $badges_html[$default_url] );
      unset( $badges_html[$default_url] );
      array_unshift($badges_html,$html );
    }
    return '<div class="badge-option-rows">' . implode( "\n", $badges_html ) . '</div>';
  }

  function admin_enqueue_scripts() {
    $version = $this->plugin_version . WP_DEBUG ? '-' . rand(1,100000) : false;
    wp_enqueue_script( "{$this->plugin_name}_admin_script", plugins_url( "{$this->plugin_slug}/js/admin-script.js", $this->plugin_slug ), array( 'jquery' ), $version, true );
    wp_enqueue_style( "{$this->plugin_name}_admin_styles", plugins_url( "{$this->plugin_slug}/css/admin-style.css", $this->plugin_slug ), array(), $version );
  }

  /**
   * If it's theme tab we've already validated in $this->set_postback_theme_settings_message() hook so bypass.
   * 'badge_alignment' is the only value that must have an option for this form, so we check against it.
   */
  /**
   * @param bool|Sidecar_Settings_Base $theme_settings
   *
   * @return bool
   */
  private function _needs_theme_settings( $theme_settings = false ) {
    if ( ! $theme_settings )
      $theme_settings =  $this->get_form_settings( 'theme' );
    return ! $this->_widgets_only_selected( $theme_settings ) && (
      $this-> _needs_template_selection( $theme_settings ) ||
      $this-> _needs_post_type_selection( $theme_settings ) ||
      $this-> _needs_badge_alignment_selection( $theme_settings )
    );
  }

  /**
   */
  private function _widgets_only_selected( $theme_settings ) {
    return $theme_settings['widgets_only'];
  }

  /**
   */
  private function _needs_template_selection( $theme_settings ) {
    return $this->_all_settings_empty( $theme_settings, '^(singular|archive)_pages_(before|after)_content$' );
  }

  /**
   */
  private function _needs_post_type_selection( $theme_settings ) {
    return $this->_all_settings_empty( $theme_settings, '^post_types_(post|page|media)$' );
  }

  /**
   */
  private function _needs_badge_alignment_selection( $theme_settings ) {
    return empty( $theme_settings['badge_alignment'] );
  }

  /**
   * If it's badge tab we've already validated in $this->set_postback_badge_settings_message() hook so bypass.
   * 'url' is the value we need for a badge so we check against it.
   *
   * @param bool|Sidecar_Settings_Base $badge_settings
   *
   * @return bool
   */
  private function _needs_badge_setting( $badge_settings = false ) {
    if ( ! $badge_settings )
      $badge_settings = $this->get_form_settings( 'badge' );
    return ! $badge_settings['url'];
  }

  /**
   * Look to see if we need to configure. If we do redirect to the most appropriate tab.
   */
  function admin_init() {
    $settings = $this->get_settings();
    if ( ! $settings->configured ) {
      $admin_page = $this->get_current_admin_page();
      if ( $admin_page && $admin_page->is_page_url() ) {
        $tab = $admin_page->get_current_tab();
        if ( 'pro' != $tab->tab_slug ) {
          if ( ! $this->has_grant() ) {
            $next_tab_slug = 'account';
          } else if ( $this->_needs_badge_setting() ) {
            $next_tab_slug = 'badges';
          } else if ( $this->_needs_theme_settings() ) {
            $next_tab_slug = 'theme';
          } else {
            $next_tab_slug = 'about';
            /**
             * If they made it to here they are fully configured.
             */
            $settings->configured = true;
            $settings->update_settings();
          }
          $tab_slugs = array_flip( array( 'account', 'badges', 'theme', 'about' ) );
          /**
           * If the next tab we need is not the current tab and it's not one we need to do later, redirect to it.
           */
          if ( $next_tab_slug != $tab->tab_slug && $tab_slugs[$next_tab_slug] < $tab_slugs[$tab->tab_slug] ) {
            wp_redirect( $admin_page->get_tab_url( $next_tab_slug ) );
            exit;
          }
        }
      }
    }

    if ( isset( $_REQUEST[ 'page' ] ) && $_REQUEST[ 'page' ] === 'dmca-badge-settings' )
      add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
  }
  /**
   */
  function admin_notices() {
    $settings = $this->get_settings();
    if ( ! $settings->configured && 0 == count( get_settings_errors() ) ) {
      $admin_page = $this->get_current_admin_page();
      if ( $admin_page && $admin_page->is_page_url() ) {
        $message = false;
        $tab = $admin_page->get_current_tab();

        $configure_message = __( 'Your %s plugin needs to be configured.', 'dmca-badge' );
        $configure_message = sprintf( $configure_message, $this->plugin_label );

        switch ( $tab->tab_slug ) {
          case 'account':
            if ( $this->has_grant() ) {
              if ( $this->_needs_badge_setting() ) {
                $message = $configure_message . __( ' Please %s to set your badge.', 'dmca-badge' );
                $message = sprintf( $message, $admin_page->get_tab_link( 'badges', __( 'click here', 'dmca-badge' ) ) );
              } else if ( $this->_needs_theme_settings() ) {
                $message = $configure_message . __( ' Please %s to set your theme options.', 'dmca-badge' );
                $message = sprintf( $message, $admin_page->get_tab_link( 'theme', __( 'click here', 'dmca-badge' ) ) );
              }
            } else {
              $message = __( 'Please first create a new DMCA.com account <em>if you do not already have one.</em><br/><br/>Once you have an account, authenticate with your DMCA.com credentials.', 'dmca-badge' );
            }
            break;
          case 'badges':
            if ( $this->_needs_badge_setting() ) {
              $message = __( 'Please select a protection badge to display on your website.', 'dmca-badge' );
            } else {
              $message = $configure_message . __( ' Please %s to set your theme options.', 'dmca-badge' );
              $message = sprintf( $message, $admin_page->get_tab_link( 'theme', __( 'click here', 'dmca-badge' ) ) );
            }
            break;
          case 'theme':
            $message = __( 'Please select your theme options.', 'dmca-badge' );
            break;
        }
        if ( $message )
          add_settings_error( 'general', 'settings_updated', $message, 'error' );
      }
    }
  }

  /**
   * Run on activation after initialization() but before _activate().
   *
   * Convert v1.x settings to 2.x settings.
   */
  function activate() {
    $old_settings = get_option( 'dmca_badge' );
    if ( $before_v2_0 = ! empty( $old_settings ) ) {

      $email = '';
      $password = '';

      /**
       * Convert old settings to new settings
       */
      $settings = $this->get_settings();

      if ( isset( $old_settings['free_email'] ) )
        $email = $old_settings['free_email'];

      if ( isset( $old_settings['pro_username'] ) )
        $email = $old_settings['pro_username'];

      if ( isset( $old_settings['pro_password'] ) )
        $password = $old_settings['pro_password'];

      $authenticate = array(
        'email'         => $email,
        'password'      => $password,
        'AccountID'     => 0
      );

      $api = $this->get_api();
      $response = $api->authenticate( $authenticate );
      $authenticate["authenticated"] = !$response->has_error();
      $authenticate['AccountID'] = $response->grant['AccountID'];

      $badge_html = isset( $old_settings['badge'] ) ? $old_settings['badge'] : false;
      $badge = array(
        'html' => $badge_html,
        'url' => $badge_html ? preg_replace( '#^.+&lt;img src=&quot;(http.*?)&quot;.*$#', '$1', $badge_html ) : false,
      );

      $theme = array(
        'singular_pages_before_content'   => in_array( 'before_content', $old_settings['singular'] ),
        'singular_pages_after_content'    => in_array( 'after_content', $old_settings['singular'] ),
        'archive_pages_before_content'    => in_array( 'before_content', $old_settings['multiple'] ),
        'archive_pages_after_content'     => in_array( 'after_content', $old_settings['multiple'] ),
        'archive_pages_before_excerpt'    => in_array( 'before_excerpt', $old_settings['multiple'] ),
        'archive_pages_after_excerpt'     => in_array( 'after_excerpt', $old_settings['multiple'] ),
        'post_types_post'                 => in_array( 'post', $old_settings['post_types'] ),
        'post_types_page'                 => in_array( 'page', $old_settings['post_types'] ),
        'post_types_media'                => in_array( 'attachment', $old_settings['post_types'] ),
        'badge_alignment'                 => isset( $old_settings['alignment'] ) ? $old_settings['alignment'] : 'none',
      );

      $settings->set_values_deep(array(
        "badge"         => $badge,
        "theme"         => $theme,
        "authenticate"  => $authenticate
      ));

      $settings->installed_version = $this->plugin_version;
      $settings->configured = $this->is_configured();
      $settings->save_settings();

      /**
       * Archive then get rid of old settings
       */
      $this->_archive_option( 'dmca_badge' );
      delete_option( 'dmca_badge' );

      /**
       * Now effectively rename the widget's option_name if the new one does not already exist.
       */
      $this->_rename_option( 'widget_dmca_widget', 'widget_dmca_widget_badge', true );

    }
  }

  /**
   * Return true if the plugin has all necessary settings
   * @return bool
   */
  function is_configured() {
    return $this->is_authenticated() && !( $this->_needs_badge_setting() && $this->_needs_theme_settings() );
  }

  /**
   * Return false if any required settings/fields are not set.
   *
   * Sidecar currently can only handle 'required' for a single field and no concept of field groups besides forms.
   * Theme settings in this plugin require one value for each of three field groups within one form.
   *
   * @param bool $has_required_settings
   * @param array $settings
   *
   * @return bool
   */
  function filter_has_required_settings( $has_required_settings, $settings ) {
    return $has_required_settings && ! $this->_needs_theme_settings( $settings['theme'] ) ;
  }

  /**
   * Rename keys in wp_options table (key field name => 'option_name')
   *
   * @param string $old_option_name
   * @param string $new_option_name
   * @param bool $archive
   */
  private function _rename_option( $old_option_name, $new_option_name, $archive = false ) {
    if ( ! get_option( $new_option_name ) )
      update_option( $new_option_name, get_option( $old_option_name ) );
    if ( $archive ) {
      $this->_archive_option( $old_option_name );
    }
    delete_option( $old_option_name );
  }
  /**
   * Rename keys in wp_options table (key field name => 'option_name')
   *
   * @param string $option_name
   */
  private function _archive_option( $option_name ) {
    $i = 1;
    while ( get_option( $archive_option_name = "{$option_name}-archived-{$i}" ) )
      $i++;
    update_option( $archive_option_name, get_option( $option_name ) );
  }

  /**
   *
   */
  private function badge_reset_page() {

  }
}
new DMCA_Badge_Plugin();

