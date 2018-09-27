<?php
/*
    Plugin Name: CRM Proxy
    Plugin URI: http://govitall.com
    Description: plugin for orders placing
    Version: 0.1
    Author: CRM team
    Author URI: http://govitall.com
*/

add_action('init', 'buffer_start');
add_action('shutdown', 'buffer_end');
add_action('init', function () {
    include __DIR__ . '/../../special/config.php';
    /** @var array $config */

    $urlAliases = [             //  default urlAliases
        '@form'    => '/order',
        '@preview' => '/preview',
        '@terms'   => '/terms',
        '@prices'  => '/prices'
    ];
    $widgets    = [
        '@form'      => '<div data-crm-widget="form"></div>',
        '@preview'   => '<div data-crm-widget="preview"></div>',
        '@prices'    => '<div data-crm-widget="prices"></div>',
        '@terms'     => '<div data-crm-widget="terms"></div>',
    ];
    if (!empty($config['widgets']['settings']['urlAliases'])) {
        $urlAliases = array_merge($urlAliases, $config['widgets']['settings']['urlAliases']);
    }

    if(!empty($config['forms'])) {
        $urlAliasesNew = [];
        foreach ($config['forms'] as $form_key => $config_proxy_file) {
            $urlAliasesNew =  array_merge($urlAliasesNew, array_flip($config_proxy_file['aliases']));
        }

        $urlAliases = $urlAliasesNew;
    } else {
        $urlAliases = array_flip($urlAliases);
    }

    foreach ($urlAliases as $route => $alias) {
        if (preg_match('/^' . preg_quote($route, '/') . '([\/?]{1,1}.*?){0,1}$/is', $_SERVER['REQUEST_URI'])) {
            $content = $widgets[$alias];
            add_filter('the_content', function () use (&$content) {
                return $content;
            });
            break;
        }
    }
});

add_action('wp_head', function() {

    include __DIR__ . '/../../special/config.php';
    /** @var array $config */

    $ws_url = '/wp-content/special/proxy_order.php';

    if(!empty($config['forms'])) {
        foreach ($config['forms'] as $form_key => $form) {
            foreach($form['aliases'] as $alias) {
                if (preg_match('/^' . preg_quote($alias, '/') . '([\/?]{1,1}.*?){0,1}$/is', $_SERVER['REQUEST_URI'])) {
                    $ws_url = '/proxy_order/' . $form_key;
                    break;
                }
            }
        }
    }

    echo "<script>
    (function(w, d, s, u, p, a, m) {
        w['CrmWidgetObject'] = p;
        w[p] = w[p] || function() { (w[p].q = w[p].q || []).push(arguments) };
        a = d.createElement(s);
        m = d.getElementsByTagName(s)[0];
        a.async = 1;
        a.src = u;
        m.parentNode.insertBefore(a, m);
    })(window, document, 'script', '$ws_url', 'crmWidget');
</script>";

    // Register google analytics, facebook pixel id script and other
    $scheme = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https' : 'http';
    $url = $scheme . '://' . $_SERVER['HTTP_HOST'] . $ws_url . '?' . http_build_query(['r' => '/header']);
    // load through proxy_order.php to get full context
    readfile($url);
});

function buffer_start()
{
    ob_start("callback");
}

function buffer_end()
{
    ob_end_flush();
}

function callback($buffer)
{
    $buffer = preg_replace(
        '/<a([^>]*?)href=["\'][^>]*?\/terms["\']([^>]*?)>([^<]*?terms[^<]*?)<\/a>/is',
        '<a$1href="#" data-crm-widget="termsPopup" data-tab="tos"$2>$3</a>',
        $buffer
    );
    $buffer = preg_replace(
        '/<a([^>]*?)href=["\'][^>]*?\/terms["\']([^>]*?)>([^<]*?policy[^<]*?)<\/a>/is',
        '<a$1href="#" data-crm-widget="termsPopup" data-tab="privacy"$2>$3</a>',
        $buffer
    );

    return $buffer;
}