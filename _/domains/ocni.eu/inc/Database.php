<?php

error_reporting(E_ALL | E_STRICT);

require_once 'NotORM.php';

define('DB_HOST', 'md24.wedos.net');
define('DB_USER', 'w193492_ocni');
define('DB_CHARSET', 'UTF8');
define('DB_PASSWORD', '4HLTjTxp');
define('DB_NAME', 'd193492_ocni');
define('DB_DEBUG', false);
define('DB_CACHE', TRUE);
define('DNS', "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";");

$conn = null;
$database = null;
$cache = null;


$conn = new PDO(DNS, DB_USER, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));


$database = new NotORM($conn, NULL, $cache);
?>