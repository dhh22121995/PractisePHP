<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$host = 'localhost';

/**
 * Uncomment if you test on localhost
 */
$user = 'practisephp_name';
$password = '123456';

$db = 'practisephp_name';

//$user = 'u153249476_name';
//$password = '123456';
//
//$db = 'u153249476_name';

try {
    $link = mysqli_connect($host, $user, $password, $db);
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
    exit;
}






