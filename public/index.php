<?php

session_start();

require __DIR__ . "/../vendor/autoload.php";

$view_folder = '';

/**
 *
 */
define('FCPATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);

/**
 *
 */
define('PATH', 'http://localhost/pagina-agendamento/');

/**
 *
 */
define('API', 'https://system.reservaja.co.mz/v1/');

/**
 *
 */
define('HTMLPATH', FCPATH . "views" . DIRECTORY_SEPARATOR);


/**
 *
 */
define('FILE', pathinfo(__FILE__, PATHINFO_BASENAME));

/**
 *
 */
define('CTRL', FCPATH . "app" . DIRECTORY_SEPARATOR . "controllers" . DIRECTORY_SEPARATOR);

/**
 *
 */
define('CONF', FCPATH . "app" . DIRECTORY_SEPARATOR . "configs" . DIRECTORY_SEPARATOR);

/**
 *
 */
define('APICONTENT', 'https://system.reservaja.co.mz/wp-content/');

/**
 *
 */
define('SYSTEMURL', 'https://system.reservaja.co.mz/');

/**
 *
 */
define('PROXY', FCPATH . "app" . DIRECTORY_SEPARATOR . "proxies" . DIRECTORY_SEPARATOR);

/**
 *
 */
define('LOG', FCPATH . "logs" . DIRECTORY_SEPARATOR);

/**
 *
 */
define('EXTRA', FCPATH . "app" . DIRECTORY_SEPARATOR . "extras" . DIRECTORY_SEPARATOR);

/**
 *
 */
define('CACHE', FCPATH . "app" . DIRECTORY_SEPARATOR . "cache" . DIRECTORY_SEPARATOR);

/**
 *
 */
define('ASSETS', PATH . "assets" . DIRECTORY_SEPARATOR);


if (!isset($view_folder[0]) && is_dir(HTMLPATH)) {

    $view_folder = HTMLPATH;

} else {

    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'Your views folder path does not appear to be set correctly. 
    Please open the following file and correct this: ' . FILE . ' in ' . FCPATH;
    exit(3);
}

/**
 *
 */
define('VIEWPATH', $view_folder);

/**
 *
 */
require_once CONF . 'system.php';