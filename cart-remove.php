<?php
require 'includes\common.php';
$id = $_GET['id'];
$user_id = $_SESSION['user_id'];
$delete_query = "DELETE FROM user_items WHERE user_id = '$user_id' AND item_id = '$id'";
$delete_result = mysqli_query($con, $delete_query) or die(mysqli_error($con));
header('location:cart.php');
?>

