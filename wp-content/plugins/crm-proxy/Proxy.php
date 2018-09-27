<?php

namespace crm\middleware;

use Exception;

/**
 * Class Proxy
 * @package crm\middleware
 */
class Proxy
{
    /**
     * @var string
     */
    private $resourceUrl = 'http://crm-middleware.mcemcw.com';

    /**
     * @var array
     */
    private $settings = [];

    /**
     * @param string $resourceUrl
     * @return $this
     */
    public function setResourceUrl($resourceUrl)
    {
        $this->resourceUrl = rtrim($resourceUrl, '/');
        return $this;
    }

    /**
     * Resolve requested url
     * @return string
     */
    private function getRoute()
    {
        if (isset($_GET['r'])) {
            $route = urldecode($_GET['r']);
            parse_str(parse_url($route, PHP_URL_QUERY), $out);
            $_GET = array_merge($out, $_GET);
            return parse_url($route, PHP_URL_PATH) . ($_GET ? '?' . http_build_query($_GET) : '');
        } else {
            if (strpos($_SERVER['REQUEST_URI'], $_SERVER['SCRIPT_NAME']) === 0) {
                return '/?' . http_build_query($_GET);
            }
            return $_SERVER['REQUEST_URI'];
        }
    }

    /**
     * @return mixed
     */
    public function run()
    {
        $url = $this->resourceUrl . $this->getRoute();
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
        curl_setopt($ch, CURLOPT_COOKIE, http_build_query($_COOKIE, null, ';'));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->getHeaders());

        if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
            curl_setopt($ch, CURLOPT_POST, true);
            if ($postData = $this->getPostData()) {
                // do not serialize postData cause there can be files
                curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
            }
        }

        $response = curl_exec($ch);
        if ($response === false) {
            $this->logError(date('Y-m-d H:i:s: ') . curl_error($ch) . PHP_EOL);
            curl_close($ch);
            exit;
        } else {
            curl_close($ch);
        }

        $split = explode("\r\n\r\n", $response, 2);
        $headers = explode("\r\n", $split[0]);
        $content = isset($split[1]) ? $split[1] : '';

        foreach ($headers as $header) {
            header($header, false);
        }

        echo $content;
    }

    /**
     * Get user IP
     *
     * @return String
     */
    private function getIP()
    {
        $ip = null;
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    /**
     * @return array
     * @throws Exception
     */
    private function getHeaders()
    {
        $headers = [
            'Host-Proxy: ' . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : null),
            'Host-Proxy-User-Ip: ' . $this->getIP(),
            'Proxy-Script-Name: ' . $_SERVER['SCRIPT_NAME'],
            'Proxy-Settings: ' . json_encode($this->settings),
            'Proxy-Server: ' . json_encode($_SERVER),
            'Cache-Control: no-cache',
            'Server-API-Mode: CRM'
        ];

        $isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';

        if ($isAjax) {
            $headers[] = "X-Requested-With: XMLHttpRequest";
        }

        return $headers;
    }

    /**
     * Collect post and files data
     * @return array
     */
    private function getPostData()
    {
        // curl does not support multidimensional post array
        $postData = $this->preparePostData($_POST);

        if ($_FILES) {
            foreach ($_FILES as $key => $value) {
                if (is_array($value['name'])) {
                    foreach ($value['name'] as $i => $v) {
                        if (empty($value['name'][$i])) {
                            continue;
                        }
                        $postData["{$key}[$i]"] = $this->getCURLFile(
                            $value['tmp_name'][$i],
                            $value['type'][$i],
                            $value['name'][$i]
                        );
                    }
                } elseif ($value['name']) {
                    $postData[$key] = $this->getCURLFile($value['tmp_name'], $value['type'], $value['name']);
                }
            }
        }

        return $postData;
    }

    /**
     * Prepare post data (cUrl does not support multidimensional post array)
     *
     * @param array $post
     * @param null|string $prefix
     * @return array
     *
     * $post = [
     *      'a' => ['b' => 1],
     *      'c' => ['d' => ['e' => 2]]
     * ];
     *
     * $result = [
     *      'a[b]' => 1,
     *      'c[d][e]' => 2
     * ];
     */
    private function preparePostData($post, $prefix = null)
    {
        static $result = [];

        foreach ($post as $k => $v) {
            $newKey = $prefix ? $prefix . "[$k]" : $k;
            if (is_array($v)) {
                $this->preparePostData($v, $newKey);
            } else {
                $result[$newKey] = $v;
            }
        }

        return $result;
    }

    /**
     * Get file according to php version
     * @param string $tempName
     * @param string $type
     * @param string $fileName
     * @return \CURLFile|string
     */
    private function getCURLFile($tempName, $type, $fileName)
    {
        if (function_exists('curl_file_create')) {
            // (PHP 5 >= 5.5.0)
            return curl_file_create($tempName, $type, $fileName);
        } else {
            return "@{$tempName};type={$type};filename={$fileName}";
        }
    }

    /**
     * @param null $settings
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->settings = $settings;
        return $this;
    }

    /**
     * @param string $error
     */
    private function logError($error)
    {
        $logFile = rtrim(sys_get_temp_dir(), '/') . '/crm-proxy.log';
        @file_put_contents($logFile, $error, FILE_APPEND | LOCK_EX);
    }
}
