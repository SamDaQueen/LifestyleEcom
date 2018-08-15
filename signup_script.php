<?php

require 'includes\common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$check_existing = "SELECT id FROM users WHERE email = '$email'";

$result_signup = mysqli_query($con, $check_existing);
if (mysqli_num_rows($result_signup) > 0)
    echo 'Email already exists';
else {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $password = md5(mysqli_real_escape_string($con, $_POST['password']));
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $insert_query = "INSERT INTO users (name, email, password, contact, city, address)
        VALUES ('$name', '$email', '$password', '$contact', '$city', '$address')";
    $user_registration_submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = mysqli_insert_id($con);
    header ('location:products.php');       
    }
?>


