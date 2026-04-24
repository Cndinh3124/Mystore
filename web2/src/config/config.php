<?php

define('DB_HOST', getenv('DB_HOST') ? getenv('DB_HOST') : 'mysql');
define('DB_USER', getenv('DB_USER') ? getenv('DB_USER') : 'root');
define('DB_PASS', getenv('DB_PASS') ? getenv('DB_PASS') : 'root');
define('DB_NAME', getenv('DB_NAME') ? getenv('DB_NAME') : 'hkt_shop');
define('DB_PORT', getenv('DB_PORT') ? getenv('DB_PORT') : '3306');

define('BASE_URL', getenv('BASE_URL') ? getenv('BASE_URL') : 'http://web2.ncdinh');
// Define ROOT so other includes can use absolute paths (points to src folder)
if (!defined('ROOT')) {
	define('ROOT', dirname(__DIR__));
}
