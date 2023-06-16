<?php

function validateUser($user){


    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Username is required');
    }
    if (empty($user['email'])){
        array_push($errors, 'Email is required');
    }

    if (empty($user['password'])){
        array_push($errors, 'Password is required');
    }

    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Passwords do not match');
    }


    $exisistingUser = selectOne('users', ['email' => $user['email']]);
    if ($exisistingUser) {
        if(isset($user['update-user']) && $exisistingUser['id'] != $user['id']) {
            array_push($errors, 'Email already exists');
        } 

        if (isset($user['create-user'])) {
            array_push($errors, 'Email already exists');
        }
    
    }


    return $errors;
}

function validateLogin($user){


    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Username is required');
    }

    if (empty($user['password'])){
        array_push($errors, 'Password is required');
    }

    return $errors;
}

?>