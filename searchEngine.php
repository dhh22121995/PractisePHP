<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require './connect_mysql_inc.php';

$name = filter_input(INPUT_POST, 'search_name');

if ($name && mysqli_select_db($link, $db)) {
    $data = mysqli_query($link, "SELECT name FROM names WHERE name LIKE '%" . $name . "%'");

    $num_rows = mysqli_num_rows($data);

    if ($num_rows >= 1) {
        echo $num_rows . ' results found!<br>';
        // Associative array
        while ($row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
            echo $row['name'] . "<br>";
            
        }
    } else {
        echo 'No result found!';
    }
    mysqli_free_result($data);
    mysqli_close($link);
}
?>
<form method="POST">
    Name:<input type="text" name="search_name"> <input type="submit" value="Search">

</form>
