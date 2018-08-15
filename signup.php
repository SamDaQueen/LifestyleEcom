<?php
require 'includes\common.php';
if (isset($_SESSION['email']))
    header('location:products.php');
?>
<html>
    <head>
        <title>Sign Up</title>
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
                    <h1>SIGN UP</h1>
                    <form method="post" action="signup_script.php">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name"  required pattern="[a-zA-Z0-9]+">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email"  name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required pattern="{6,}">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control"  placeholder="Phone" name="contact">
                        </div>
                        <div class="form-group">
                            <input class="form-control"  placeholder="City" name="city" required pattern="[a-zA-Z]+">
                        </div>
                        <div class="form-group">
                            <input class="form-control"  placeholder="Address" name="address">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Sign up</button>
                    </form>
                </div>
            </div>
        </div>

        <?php include 'includes\footer.php'; ?>

    </body>
</html>
