<?php 
require 'includes\common.php';
if(isset($_SESSION['email']))
    header('location: products.php')
?>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="styleindex.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>

        <?php include 'includes\header.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Welcome back!</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email"  name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <p>Don't have an account? <u><a href="signup.php">Register</a></u></p>                            
                    </div>                           
                </div>
            </div>
        </div>

        <?php include 'includes\footer.php'; ?>
        
    </body>
</html>
