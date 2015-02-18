<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function get_pressRelease() {
    global $db;
    $query = "SELECT * FROM press_db.PressRelease ORDER BY pressReleaseID";
    $pressRelease = $db->query($query);
    return $pressRelease;
}

function add_pressRelease($headlin,$summary,$newsbody, $company, $companymail,$autor) {
    global $db;
    $query = "INSERT INTO press_db.pressRelease VALUES($headlin,$summary,$newsbody, $company, $companymail,$autor)"; 
    $$db->exec($query);
}

function delete_pressRelease($author)
{
    global $db;
    $query = "DELETE from press_db.pressRelease where author=$author"; 
    $$db->exec($query);
}