<?php
function viewInstance(){
    return new System\Views\View(app('config')->view->get());
}

function view($name, $data=[], $layout=null){
    $view = viewInstance();
    if($layout!== null){
        $view->layout($layout);
    }
    $view->view($name, $data);
}

function success($data, $exit = true){
    header('Content-Type: application/json');
    echo json_encode([
        'status' => true,
        'data' => $data,
        'errors' => []
    ]);
    if($exit) exit;
}
function error($errors, $code = 400, $exit = true){
    header('Content-Type: application/json');
    http_response_code($code);
    echo json_encode([
        'status' => false,
        'data' => [],
        'errors' => $errors
    ]);
    if($exit) exit;
}