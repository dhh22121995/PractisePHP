<?php

require './connect_mysql_inc.php';
require './core.inc.php';
require './necessaryFunctions.php';

if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    echo 'You\'re logged in <a href="logOut.php">Log out.</a>';
} else {
    include './loginForm.php';
}



// login form



