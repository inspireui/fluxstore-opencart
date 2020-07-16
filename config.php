<?php
define('WEBSITE_URL', 'http://localhost:8888/fluxstore_opencart/');
define('WEBSITE_DIRECTORY', '/Users/admin/Documents/Research/fluxstore_opencart/');
define('CACHE_STORAGE_DIRECTORY', '/Users/admin/Documents/storage/');

// HTTP
define('HTTP_SERVER', WEBSITE_URL);

// HTTPS
define('HTTPS_SERVER', WEBSITE_URL);

// DIR
define('DIR_APPLICATION', WEBSITE_DIRECTORY.'catalog/');
define('DIR_SYSTEM', WEBSITE_DIRECTORY.'system/');
define('DIR_IMAGE', WEBSITE_DIRECTORY.'image/');
define('DIR_STORAGE', CACHE_STORAGE_DIRECTORY);
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'fluxstore_opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');