<?php
$app            = System\App::instance();
$app->request   = System\Request::instance();
$app->route     = System\Route::instance($app->request);
$app->config    = new stdClass;
$app->config->view = System\Config::load(BASE_PATH.'config/view.php');
//to get all file
// $app->config->view->get();
//to get key from fongig file
// $app->config->view->get('path');

// $app->config->append(BASE_PATH.'config/other_config_file.php');

$route          = $app->route;

require BASE_PATH.'helper/functions.php';
include BASE_PATH.'app/routes.php';
include BASE_PATH.'app/api.php';

$route->end();