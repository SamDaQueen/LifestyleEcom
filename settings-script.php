<?php

require 'includes\common.php';
if(!isset($_SESSION['email']))
    header('location: index.php');
$old_password = md5(mysqli_real_escape_string($con, $_POST['oldpswd']));
$new_password = md5(mysqli_real_escape_string($con, $_POST['newpswd']));
$retype_password = md5(mysqli_real_escape_string($con, $_POST['repswd']));
$email = $_SESSION['email'];
$check_password = "SELECT password FROM users WHERE email = '$email'";
$result = mysqli_query($con, $check_password) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
if($old_password == $row['password'])   {
    if($new_password == $retype_password)
    {
        $change_query = "UPDATE users SET password = '$new_password' WHERE email = '$email'";
        $change_result = mysqli_query($con, $change_query) or die(mysqli_error($con));
        $message = "changed";     
    }
    else{
        $message = "error"; 
    }
}
else{
    $message = "error"; 
}
header('location: settings.php?check='.$message); 
?>


