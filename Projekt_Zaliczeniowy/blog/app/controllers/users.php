<?php 

include("db.php");
include("validateUsers.php");

$table = 'users';
$users = selectAll($table);

$errors = array();
$id = '';
$username = '';
$admin = '';
$email = '';
$password = '';
$passwordConf = '';


function loginUser($user) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    /// POPRAWIĆ LOCATION
    if($_SESSION['admin']) {
        header('location: dashboard/main/dashboard.php');
    } else {
        header('location: index.php');
    }
    
    exit();

}

if (isset($_POST['register-btn']) || isset($_POST['create-user'])) {    
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordConf'], $_POST['create-user']);
    
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
            $user_id = create($table, $_POST);
            $_SESSION['message'] = "Admin user created succesfully";
            $_SESSION['type'] = "success";
            header('location: ../../dashboard/users/index.php');
            exit();
        } else {
            $_POST['admin'] = 0;
            $user_id = create('users', $_POST);
            $user = selectOne('users', ['id' => $user_id]);
    
            loginUser($user);

        }


    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }

}

if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if(count($errors) === 0){}
        $user = selectOne('users',['username' => $_POST['username']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            loginUser($user);
        } else {
            array_push($errors, 'Invalid username or password');
        }
 }

 if (isset($_GET['delete_id'])) {
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "User deleted succesfully";
    $_SESSION['type'] = "success";
    header('location: ../../dashboard/users/index.php');
    exit();

 }

if (isset($_POST['update-user'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-user'], $_POST['passwordConf'], $_POST['id']);
    
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        $count = update($table, $id, $_POST);
        $_SESSION['message'] = "User updated succesfully";
        $_SESSION['type'] = "success";
        header('location: ../../dashboard/users/index.php');
        exit();

        


    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}


if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);

    $id = $user['id'];
    $username = $user['username'];
    $admin = isset($user['admin']) ? 1 : 0;
    $email = $user['email'];
}
    
?>