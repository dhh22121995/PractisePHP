<?php

ob_start();
session_start();

$current_file = filter_input(INPUT_SERVER, 'SCRIPT_NAME');
$http_referer = filter_input(INPUT_SERVER, 'HTTP_REFERER');



