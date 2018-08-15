<?php
require 'includes\common.php';
if (!isset($_SESSION['email']))
    header('location: index.php')
    ?>
<html>
    <head>
        <title>Success</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleindex.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>

        <?php include 'includes\header.php'; ?>

        <?php
        $user_id = $_SESSION['user_id'];
        $id = implode(",", $_SESSION['item_id']);
        $change_query = "UPDATE user_items SET status = 'Confirmed' WHERE user_id = '$user_id' and item_id IN ($id)";
        //die($change_query);
        $change_result = mysqli_query($con, $change_query) or die(mysqli_error($con));
        ?>

        <div class="container">
            <div class="jumbotron">
                <h3>Your order is confirmed</h3>
                <h2>Thank you for shopping with us!</h2>
                <p><a href="products.php"><u>Click here</u></a> to continue shopping.</p>
            </div>
        </div>

        <?php include 'includes\footer.php'; ?>

    </body>
</html>
