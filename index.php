<!DOCTYPE html>
<?php require 'includes\common.php';
die(mysqli_real_escape_string($con, "http://internshala.com"));
if(isset($_SESSION['email']))
    header('location: products.php');
?>
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A website for e-commerce brand Lifestyle Stores">
        <link rel="stylesheet" href="styleindex.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>

        <?php include 'includes\header.php'; ?>

        <div id="banner-image">
            <div class="inner-banner-image">
                <div id="banner-content">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p>
                    <a href="login.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
        </div>
        
        <?php include 'includes\footer.php'; ?>

    </body>
</html>
