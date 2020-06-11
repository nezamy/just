<?php
namespace App\Controller;
class apiController {
    //go to /api/v1/posts to get this response
    public function posts(){
        // data from database
       success([
           [
               'title' => 'Post1 Title',
               'content' => 'Post1 Content here',
           ],
           [
            'title' => 'Post2 Title',
            'content' => 'Post2 Content here',
        ]
       ]);
    }
}