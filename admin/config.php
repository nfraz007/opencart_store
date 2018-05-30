<?php

require_once("../../my_config/opencart_store_config.php");

// HTTP
define('HTTP_SERVER', MY_BASE_URL.'admin/');
define('HTTP_CATALOG', MY_BASE_URL);

// HTTPS
define('HTTPS_SERVER', MY_BASE_URL.'admin/');
define('HTTPS_CATALOG', MY_BASE_URL);

// DIR
define('DIR_APPLICATION', MY_BASE_LOCAL.'admin/');
define('DIR_SYSTEM', MY_BASE_LOCAL.'system/');
define('DIR_IMAGE', MY_BASE_LOCAL.'image/');
define('DIR_STORAGE', MY_BASE_LOCAL.'storage/');
define('DIR_CATALOG', MY_BASE_LOCAL.'catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', MY_HOSTNAME);
define('DB_USERNAME', MY_USERNAME);
define('DB_PASSWORD', MY_PASSWORD);
define('DB_DATABASE', MY_DATABASE);
define('DB_PORT'    , MY_PORT);
define('DB_PREFIX'  , MY_PREFIX);

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
