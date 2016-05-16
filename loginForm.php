<?php
if (isset($_POST['user_name']) && isset($_POST['password'])) {
    $username = filter_input(INPUT_POST, 'user_name');
    $password = filter_input(INPUT_POST, 'password');

    if (!empty($password) && !empty($username)) {
        if (mysqli_select_db($link, $db)) {

            $query = mysqli_query($link, "SELECT * FROM accounts WHERE username = '" . $username . "'  AND password = '" . md5($password) . "'");
            if (mysqli_num_rows($query) == 0) {
                echo 'Invalid username/password combination.';
            } else if (mysqli_num_rows($query) == 1) {
                $account = mysqli_fetch_assoc($query);
                $_SESSION['user_id'] = $account["id"];
                header('Location: loggedIn.php');
            }
        } else {
            
        }
    } else {
        echo 'You must supply a username and password.';
    }
}
//echo $str = generateMd5($password);
?>
<form action="<?php echo $current_file; ?>" method="POST">
    Username <input type="text" name="user_name"> Password <input type="password" name="password"> <input type="submit" value="Log in">
</form>

