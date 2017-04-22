<?php

// load Smarty library
require('../smarty/libs/Smarty.class.php');
include('../config.php');

$smarty = new Smarty;

$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->template_dir = '/resources/smarty/templates';
$smarty->config_dir = '/resources/smarty/config';
$smarty->cache_dir = 'C:/wamp64/smarty/cache';
$smarty->compile_dir = 'C:/wamp64/smarty/templates_c';

?>