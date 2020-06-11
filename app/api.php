<?php

use App\Controller\apiController;

$route->group('/api/v1', function(){
    $this->get('/posts', apiController::class . '@posts');
});