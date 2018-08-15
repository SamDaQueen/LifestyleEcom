<?php

require 'includes\common.php';
$item_id = $_GET['id'];
$user_id = $_SESSION['user_id'];
$insert_item_query = "INSERT INTO user_items (user_id, item_id, status)
    VALUES ('$user_id', '$item_id', 'Added to cart')";
$result_item = mysqli_query($con, $insert_item_query);
header('location:products.php');
?>

