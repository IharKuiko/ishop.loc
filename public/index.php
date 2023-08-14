<?php

if (PHP_MAJOR_VERSION < 8) {
    die('PHP >= 8');
}

require_once dirname(__DIR__) . '/config/init.php';
require_once HELPERS . '/functions.php';
require_once CONFIG . '/routes.php';

new \wfm\App();


//var_dump(\wfm\App::$app->getProperties());
//echo \wfm\App::$app->getProperties();
//throw new Exception('Возникла ошибочка!', 404);
//echo 'Hello!';
//echo $test;

//debug(\wfm\Router::getRoutes());