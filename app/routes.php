<?php
declare(strict_types=1);

use App\Controllers\AddBookController;
use App\Controllers\AddBookToDbController;
use App\Controllers\BookAddedToDbController;
use App\Controllers\IndexController;
use Slim\App;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', IndexController::class);
    $app->post('/inputBook', AddBookToDbController::class);
    $app->get('/addBook', AddBookController::class);
    $app->get('/createbookconfirmed', BookAddedToDbController::class);

};
