<?php
require 'includes\common.php';
if (!isset($_SESSION['email']))
    header('location: index.php')
    ?>
<html>
    <head>
        <title>Settings</title>
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
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <?php
                    $check = "nothing";
                    $text = "Change Password";
                    if($_GET){
                        $check = $_GET['check'];
                        if ($check == "error")
                            $text = "Passwords do not match! Try again";
                        if ($check == "changed")
                            $text = "Password changed successfully";
                        else if($check == "nothing")
                            $text = "Change Password";
                    }
                    ?>
                    <h3><?php echo $text ?></h3>
                    <form method="POST" action="settings-script.php">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="oldpswd"  required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control"  placeholder="New Password"  name="newpswd" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-type New Password" name="repswd" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Change Password</button>
                    </form>
                </div>
            </div>
        </div>

        <?php include 'includes\footer.php'; ?>

    </body>
</html>
