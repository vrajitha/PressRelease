<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require('../Model/db_connect.php');
require('../Model/pressRelease_repository.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'view_pressRelease';
    $pressRelease=  get_pressRelease();    
}

if ($action == 'view_pressRelease') {
     $pressRelease=  get_pressRelease();    
     include('view_pressRelease.php');
} 

?>