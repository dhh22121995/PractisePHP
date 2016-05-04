<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if (!empty($name) && !empty($email) && !empty($message)) {
        if (strlen($name) > 25 || strlen($email) > 50 || strlen($message) > 1000) {
            echo 'Sorry, maxlength for some field has been exceeded.';
        } else {
            $to = 'dhh22121995@yahoo.com.vn';
            $subject = 'Contact form submitted!';
            $body = $name . "\n" . $message;
            $header = "From: " . $email;
            if (mail($to, $subject, $message, $header)) {
                echo 'Thanks for contacting us! We\'ll be in touch soon.';
            } else {
                echo 'Sorry, an error occurred! Please try again later!';
            }
        }
    } else {
        echo 'All fields are required!';
    }
}
?>

<form action="simpleContactForm.php" method="POST">
    Name:<br><br>
    <input type="text" name="name" placeholder="Please enter name" maxlength="25"><br><br>
    Email address:<br><br>
    <input type="email" name="email" placeholder="Please enter email address" maxlength="50"><br><br>
    Message:<br><br>
    <textarea rows="6" cols="30" name="message" maxlength="1000">
        
    </textarea><br><br>
    <input type="submit" value="Send">
</form>