<?php

define("DB_SERVER", "berzanappen.se");
define("DB_USER", "berzanap_viktor");
define("DB_PASSWORD", "segrare");
define("DB_NAME", "berzanap_viktor");

$dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8';
$attributes = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
$dbm = new PDO($dsn, DB_USER, DB_PASSWORD, $attributes);