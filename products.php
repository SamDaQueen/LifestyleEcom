<?php require 'includes\common.php'; ?>
<html>
    <head>
        <title>Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleindex.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>

        <?php
        include 'includes\header.php';
        include 'includes\check-if-added.php';
        ?>

        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="thumbnail">
                        <img src="images/camera.jpg" alt="Cameras">
                        <div class="caption">
                            <h2>Canon EOS</h2>
                            <p>Price: Rs.36000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) {
                                    echo '<a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 col-xs-6">
                    <div class = "thumbnail">
                        <img src = "images/camera.jpg" alt = "Cameras">
                        <div class = "caption">
                            <h2>Nikon DSLR</h2>
                            <p>Price: Rs.40000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(2)) {
                                    echo '<a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 col-xs-6">
                    <div class = "thumbnail">
                        <img src = "images/camera.jpg" alt = "Cameras">
                        <div class = "caption">
                            <h2>Sony DSLR</h2>
                            <p>Price: Rs.45000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(3)) {
                                    echo '<a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 col-xs-6">
                    <div class = "thumbnail">
                        <img src = "images/camera.jpg" alt = "Cameras">
                        <div class = "caption">
                            <h2>Olympus DSLR</h2>
                            <p>Price: Rs.50000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(4)) {
                                    echo '<a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class = "row text-center">
                <div class = "col-md-3 col-sm-6 col-xs-6">
                    <div class = "thumbnail">
                        <img src = "images/watch.jpg" alt = "Watches">
                        <div class = "caption">
                            <h2>Titan Model #301</h2>
                            <p>Price: Rs.13000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(5)) {
                                    echo '<a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 col-xs-6">
                    <div class = "thumbnail">
                        <img src = "images/watch.jpg" alt = "Watches">
                        <div class = "caption">
                            <h2>Titan Model #201</h2>
                            <p>Price: Rs.3000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(6)) {
                                    echo '<a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 col-xs-6">
                    <div class = "thumbnail">
                        <img src = "images/watch.jpg" alt = "Watches">
                        <div class = "caption">
                            <h2>HMT Milan</h2>
                            <p>Price: Rs.8000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(7)) {
                                    echo '<a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 col-xs-6">
                    <div class = "thumbnail">
                        <img src = "images/watch.jpg" alt = "Watches">
                        <div class = "caption">
                            <h2>Faber Luba #111</h2>
                            <p>Price: Rs.18000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(8)) {
                                    echo '<a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class = "row text-center" id = "lowest-row">
                <div class = "col-md-3 col-sm-6 col-xs-6">
                    <div class = "thumbnail">
                        <img src = "images/shirt.jpg" alt = "Shirts">
                        <div class = "caption">
                            <h2>H&W</h2>
                            <p>Price: Rs.800</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(9)) {
                                    echo '<a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 col-xs-6">
                    <div class = "thumbnail">
                        <img src = "images/shirt.jpg" alt = "Shirts">
                        <div class = "caption">
                            <h2>Luis Phil</h2>
                            <p>Price: Rs.1000</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(10)) {
                                    echo '<a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 col-xs-6">
                    <div class = "thumbnail">
                        <img src = "images/shirt.jpg" alt = "Shirts">
                        <div class = "caption">
                            <h2>John Zok</h2>
                            <p>Price: Rs.1500</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(11)) {
                                    echo '<a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 col-xs-6">
                    <div class = "thumbnail">
                        <img src = "images/shirt.jpg" alt = "Shirts">
                        <div class = "caption">
                            <h2>Jhalsani</h2>
                            <p>Price: Rs.1300</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(12)) {
                                    echo '<a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php include 'includes\footer.php';
        ?>

    </body>
</html>
