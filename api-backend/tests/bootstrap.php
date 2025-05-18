<?php
use Slim\Factory\AppFactory;
use DI\Container;

require __DIR__ . '/../vendor/autoload.php';

$container = new Container();
AppFactory::setContainer($container);
$app = AppFactory::create();

(require __DIR__ . '/../public/index.php')($app);

$GLOBALS['app'] = $app;
