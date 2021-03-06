<?php

use TrendingRepos\App;
use TrendingRepos\Core\Request;
use TrendingRepos\Core\Router;
use TrendingRepos\Exception\RouterException;

require '../vendor/autoload.php';
require '../functions.php';

App::bind('routes', require '../config/routes.php');
App::bind('config', require '../config/config.php');

ini_set('error_reporting', E_ALL);
ini_set('display_errors', App::get('config')['env'] == 'development' ? 'On' : 'Off');

$router = new Router(App::get('routes'), new Request);

try {
    $router->get();
}catch(RouterException $e) {
    view('404', [
        'error' => $e->getMessage()
    ]);
}
