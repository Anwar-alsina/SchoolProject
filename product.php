<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Product Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="description" content="e-store."/>
        <meta name="keywords" content="Casual, Shoes, Sunglasses"/>
        <meta name="author" content="Anwar Fahad">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="container">
            <div class="jumbotron" style="margin-top: 80px;">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best Casual Clothing, Shoes and Sunglasses for you. No need to hunt around, we have all in one place.</p>
            </div>
            <div id="Casual" class="row text-center">
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/A.jpg" alt="Casual"/>
                    <div class="caption">
                        <h3>Adidas</h3>
                        <p>Price:Ksh.36000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else { if (check_if_added_to_cart($con,1,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?>
                        <a href="includes/cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/c2.jpg" alt="Casual"/>
                    <div class="caption">
                        <h3>Casual Office Wear</h3>
                        <p>Price:Ksh.55000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else { if (check_if_added_to_cart($con,2,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?>
                        <a href="includes/cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/B.jpg" alt="Casual"/>
                    <div class="caption">
                        <h3>Clothes</h3>
                        <p>Price:Ksh.60000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else { if (check_if_added_to_cart($con,3,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?>
                        <a href="includes/cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/mon.jpg" alt="Sunglasses"/>
                    <div class="caption">
                        <h3>Sunglasses</h3>
                        <p>Price:Ksh.699.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else { if (check_if_added_to_cart($con,4,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?>
                        <a href="includes/cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } } ?>
                    </div>
                </div>
            </div>
            <div id="Watches" class="row text-center">
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/non.jpg" alt="Sunglasses"/>
                    <div class="caption">
                        <h3>Glasses</h3>
                        <p>Price:Ksh.1100.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else { if (check_if_added_to_cart($con,5,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?>
                        <a href="includes/cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/sun.jpg" alt="Sunglasses"/>
                    <div class="caption">
                        <h3>Sunglasses</h3>
                        <p>Price:Ksh.750.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else { if (check_if_added_to_cart($con,6,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?>
                        <a href="includes/cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/game.jpg" alt="Shoes"/>
                    <div class="caption">
                        <h3>Adidas</h3>
                        <p>Price:Ksh.9999.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else { if (check_if_added_to_cart($con,7,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?>
                        <a href="includes/cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/sg.jpg" alt="Shoes"/>
                    <div class="caption">
                        <h3>Nike</h3>
                        <p>Price:Ksh.1199.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else { if (check_if_added_to_cart($con,8,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?>
                        <a href="includes/cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } } ?>
                    </div>
                </div>
            </div>
            <div id="Shoes" class="row text-center">
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/auzfs.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>Auzfs</h3>
                        <p>Price:Ksh.1600.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else { if (check_if_added_to_cart($con,9,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?>
                        <a href="includes/cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/armani.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>Armani</h3>
                        <p>Price:Ksh.5000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else { if (check_if_added_to_cart($con,10,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?>
                        <a href="includes/cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/lee_cooper.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>LEE Cooper</h3>
                        <p>Price:Ksh.900.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else { if (check_if_added_to_cart($con,11,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?>
                        <a href="includes/cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/suitup.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>Suit Up</h3>
                        <p>Price:Ksh.999.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else { if (check_if_added_to_cart($con,12,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?>
                        <a href="includes/cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
