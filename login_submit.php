<?php

require 'includes\common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = md5(mysqli_real_escape_string($con, $_POST['password']));

$select_query = "SELECT u_id, email FROM users WHERE email = '$email' AND password = '$password'";
$result_login = mysqli_query($con, $select_query);
if (!mysqli_num_rows($result_login)) {
    header('location:login.php');
} else {
    $row = mysqli_fetch_array($result_login);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $row['u_id'];
    header('location: products.php');
}


