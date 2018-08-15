<?php
require 'includes\common.php';
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
?>
<html>
    <head>
        <title>Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleindex.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>

        <?php include 'includes\header.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-lg-offset-4">
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr><th nowrap>Item Number</th> <th nowrap>Item Name</th> <th>Price</th> <th></th></tr>
                            <?php
                            $user_id = $_SESSION['user_id'];
                            $id = array();
                            $get_item_query = "SELECT i_id, item_name, price, status FROM user_items 
                INNER JOIN items ON user_items.item_id = items.i_id
                INNER JOIN users ON user_items.user_id = users.u_id
                WHERE user_id = '$user_id' and status != 'Confirmed'";
                            $result = mysqli_query($con, $get_item_query) or die(mysqli_error($con));
                            if (!mysqli_num_rows($result))
                                $message = "Cart Empty!";
                            else {
                                $sum = 0;
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum = $sum + $row['price'];
                                    array_push($id, $row['i_id']);
                                    ?>
                                    <tr>
                                        <td><?php echo $row['i_id'] ?></td>
                                        <td><?php echo $row['item_name'] ?></td>
                                        <td><?php echo $row['price'] ?></td>
                                        <td><a href='cart-remove.php?id=<?php echo $row['i_id'] ?>' class='remove_item_link'> Remove</a></td>
                                    </tr>
                                    <?php
                                }
                                $message = "Price: Rs.".$sum;
                            }
                            $_SESSION['item_id'] = $id;
                            ?>
                            <tr><td></td> <td>Total</td> <td nowrap><?php echo $message ?></td>
                                <td nowrap>
                                    <a href="success.php" class="btn btn-primary">Confirm Order</a>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php include 'includes\footer.php'; ?>

    </body>
</html>
