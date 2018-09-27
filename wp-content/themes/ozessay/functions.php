<?php

include_once 'redirects.php';


function pagination_canonical() {
    if (preg_match('/\/(blog)$/is', $_SERVER['REQUEST_URI'])) {
        echo "" . '<link rel=\'next\' href=\'https://www.ozessay.com.au/blog/page/2\' />' . "\n";
    }
    if (preg_match('/\/page\/(2)$/is', $_SERVER['REQUEST_URI'])) {
        echo "" . '<link rel=\'next\' href=\'https://www.ozessay.com.au/blog/page/3\' />' . "\n";
    }
}

add_action('wp_head', 'pagination_canonical');


//ADD NO INDEX, NOFOLLOW META TAG
//--------------------------------------------------

if (preg_match('/\/page\/([0-9])$/is', $_SERVER['REQUEST_URI'])) {
    function noindex_meta_robots_blog()
    {
        echo "" . '<meta name="robots" content="noindex, follow" />' . "\n";
    }

    add_action('wp_head', 'noindex_meta_robots_blog');
}

function noindex_meta_robots()
{
    if (is_page(array('guarantees', 'download', 'success', 'cancel'))) {
        echo "" . '<meta name="robots" content="noindex, nofollow" />' . "\n";
    }
}

add_action('wp_head', 'noindex_meta_robots');

function noindex_meta_robots_sitemap()
{
    if (is_page(array('sitemap'))) {
        echo "" . '<meta name="robots" content="noindex, follow" />' . "\n";
    }
}

add_action('wp_head', 'noindex_meta_robots_sitemap');

//ADD FRAGMENT META TAG
//--------------------------------------------------
function fragment_meta()
{
    if (is_page('blog')) {
        echo "" . '<meta name="fragment" content="!" />' . "\n";
    }
}

add_action('wp_head', 'fragment_meta');

//ADDING JS AND CSS FILES
//--------------------------------------------------
function ox_adding_scripts()
{
    $order_form_pages = ['prices', 'order', 'preview'];
    if (!function_exists('is_login_page')) {
        function is_login_page()
        {
            return !strncmp($_SERVER['REQUEST_URI'], '/wp-login.php', strlen('/wp-login.php'));
        }
    }

    if (!is_admin() && !is_login_page()) {
        //if( !is_admin()){
        /*removed wp-embed.min.js*/
        wp_deregister_script('wp-embed');

        /*jquery*/
        wp_deregister_script('jquery');
        $infooter = !is_page($order_form_pages) ? true : false;
        wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), false, 'null', $infooter);
        wp_enqueue_script('jquery');
        /*WOW plugin for landings*/
        if (is_page('promo-back-to-school') || is_page('return-promo-back-to-school')) {
            /*wow js*/
            wp_enqueue_script('wow', get_template_directory_uri() . '/js/plugins/wow.min.js', array('jquery'), '', true);
        }

        /*js*/
        wp_enqueue_script('main-js', get_template_directory_uri() . '/js/scripts.min.js', array(), null, true);
        /*dmca*/
        wp_register_script('dmca', ("//images.dmca.com/Badges/DMCABadgeHelper.min.js"), false, 'null', $infooter);

        if (is_page('faq')) {
            /*faq js*/
            wp_enqueue_script('faq', get_template_directory_uri() . '/js/faq.js', array('jquery'), '', true);
        }

        /*bootstrap*/
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

        /*custom css*/
        wp_enqueue_style('custom', get_template_directory_uri() . '/style.min.css', array('bootstrap'));
    }
    if (is_page('about-us')) {
        /*counter-up*/
        wp_enqueue_script('counterup', get_template_directory_uri() . '/js/plugins/jquery.counterup.min.js', array('jquery'), '', true);
        /*owl-carousel*/
        wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/plugins/owl.carousel.min.js', array('jquery'), '', true);
    }
    /*add scripts for promo landings*/
    if (is_page('promo-back-to-school') || is_page('return-promo-back-to-school')) {
        /*animate*/
        wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
        /*countdown css*/
        wp_enqueue_style('countdown', get_template_directory_uri() . '/css/jquery.countdown.css');
        /*remove postratings-js*/
        wp_deregister_script('wp-postratings');
        /*remove postratings-css*/
        wp_dequeue_style('wp-postratings');
    }
}

add_action('wp_enqueue_scripts', 'ox_adding_scripts');

//#asyncload
function ox_async_scripts($url)
{
    if (strpos($url, '#asyncload') === false)
        return $url;
    else if (is_admin())
        return str_replace('#asyncload', '', $url);
    else
        return str_replace('#asyncload', '', $url) . "' async='async";
}

add_filter('clean_url', 'ox_async_scripts', 11, 1);

add_action('wp_head', 'head_seo_meta_tags', 1);

//ADDING CRITICAL CSS (only for front-page)
//--------------------------------------------------
//render-blocking styles
$css_files = array(
    'bootstrap',
    'custom'
);

add_action('wp_enqueue_scripts', 'ox_adding_critical_css');

function ox_adding_critical_css()
{
    if (!is_front_page() && !is_page(array('dissertation-proposal-help', 'dissertation-writing-service'))) return;

    global $wp_styles, $css_files;

    if (empty($css_files)) return;

    $registered_styles = $css_files;
    $css_files = array();

    foreach ($registered_styles as $item) {
        $s = $wp_styles->registered[$item]->src;
        $css_files[$item] = $s;
    }

    $critical_css = load_template_part('css/critical.css');
    echo '<meta name="description" content="OzEssay is the best essay writing service in Australia. Hire professional essay writer and get help with any type of assignment online." /><style>' . $critical_css . '</style>';

    global $css_files;

    foreach ($css_files as $key => $item) {
        wp_deregister_style($key);
        echo "<noscript><link rel='stylesheet' href='$item'/></noscript>";
    }

    function hook_non_critical_css()
    {
        global $css_files;

        foreach ($css_files as $key => $item) {
            echo '<script>function loadCSS(e,t,n){"use strict";var i=window.document.createElement("link");var o=t||window.document.getElementsByTagName("script")[0];i.rel="stylesheet";i.href=e;i.media="only x";o.parentNode.insertBefore(i,o);setTimeout(function(){i.media=n||"all"})}loadCSS("' . $item . '");</script>';
        }
    }

    add_action('wp_footer', 'hook_non_critical_css');
}

function load_template_part($template_name, $part_name = null)
{
    ob_start();
    get_template_part($template_name, $part_name);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}

//REWOVE SOME META TAGS AND UNNECESSARY LINKS
//--------------------------------------------------
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');

//remove wpemoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

//remove wp-json
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

//REMOVE LOGIN-PAGE ERRORS
//--------------------------------------------------
add_filter('login_errors', create_function('$a', "return null;"));


//REGISTRATION MENU
//--------------------------------------------------
register_nav_menus(array(
    'nav' => 'Navigaton',
    'footer' => 'Footer Menu',
));

//REGISTRATION SIDEBAR
//--------------------------------------------------
register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
));

//CUSTOM EXCERPT ('Read More' btn)
//--------------------------------------------------
// custom excerpt length
function ox_custom_excerpt_length($length)
{
    return 50;
}

add_filter('excerpt_length', 'ox_custom_excerpt_length', 999);

// add more link to excerpt
function ox_custom_excerpt_more($more)
{
    global $post;
    return '... <div class="more-btn-wrap"><a class="btn btn-default more-btn" href="' . get_permalink($post->ID) . '">' . 'Read More' . '</a></div>';
}

add_filter('excerpt_more', 'ox_custom_excerpt_more');


//ENABLE THUMBNAILS (posts preview img)

add_theme_support('post-thumbnails');
function true_unset_image_sizes($sizes)
{
    unset($sizes['thumbnail']); // миниатюра
    unset($sizes['medium']); // средний
    unset($sizes['large']); // большой
    return $sizes;
}

add_filter('intermediate_image_sizes_advanced', 'true_unset_image_sizes');

add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more)
{
    global $post;
    return '<a href="' . get_permalink($post->ID) . '">Read More</a>';
}

add_amp_theme_support('AMP-featured-image');

function trim_title_words($count, $after)
{
    $title = get_the_title();
    $words = explode(' ', $title);
    if (count($words) > $count) {
        array_splice($words, $count);
        $title = implode(' ', $words);
    } else $after = '';
    echo $title . $after;
}