<?php

function validatePost($post){


    $errors = array();

    if (empty($post['title'])){
        array_push($errors, 'Title is required');
    }
    if (empty($post['body'])){
        array_push($errors, 'Body is required');
    }

    $exisistingpost = selectOne('posts', ['title' => $post['title']]);
    if ($exisistingpost) {
        if(isset($post['update-post']) && $exisistingpost['id'] != $post['id']) {
            array_push($errors, 'Post with that title already exists');
        } 

        if (isset($post['add-post'])) {
            array_push($errors, 'Post with that title already exists');
        }
    
    }


    return $errors;
}

?> 