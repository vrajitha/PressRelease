<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('/model/db_connect.php');
require('/model/users_repository.php');

$username = $_POST['email'];
$password = $_POST['password'];

// See if you are an administrator
$is_admin = is_valid_admin_login($email, $password);
if ($is_admin) {
    echo 'You are administator'.'<br>';
}

// Inser a new user
$email = 'ken@yahoo.com';
$password = 'abc';
$is_admin = 1;
add_user($email, $password, $is_admin);
$is_admin = is_valid_admin_login($email, $password);
if ($is_admin) {
    echo "You are administator".'<br>';
}