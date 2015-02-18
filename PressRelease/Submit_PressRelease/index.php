<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require('../model/db_connect.php');
require('../model/pressRelease_repository.php');
require('../model/users_repository.php');

/*if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_books';
}*/
//$_SESSION['is_valid_admin']=false;
// If the user isn't logged in, force the user to login
/*if (isset($_SESSION['is_valid_admin'])) {
    if (action=='login') {
        $username = $_POST['myusername'];
        $password = $_POST['mypassword'];
        if (is_valid_admin_login($username, $password)) {
            $_SESSION['is_valid_admin'] = false;
include('newPressRelease.php');          
//$action = 'list_books';
        }
    }
    if (isset($_SESSION['is_valid_admin'])) {
        $login_message = 'You must login to view this page.';
       // $_SESSION['is_valid_admin']=true;
        include('login.php');
    }
}

    */
if(true)
{
    $login_message = 'You must login to Submit a press release.';
    include('newPressRelease.php');
}
    

?>
