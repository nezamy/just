<?php
namespace App\Controller;
class homeController {
    public function index(){
        // data from database
       view('home');
    }

    public function posts(){
        // data from database
       view('posts', [
            'news' => [
                [
                    'title' => 'Hello World',
                    'content' => 'Here is some content',
                ],
                [
                    'title' => 'Second page',
                    'content' => 'Here is some content for second page',
                ]
            ]
       ]);
    }
}