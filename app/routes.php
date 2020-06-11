<?php

use App\Controller\homeController;

$route->get('/', homeController::class . '@index');
$route->get('/posts', homeController::class . '@posts');
