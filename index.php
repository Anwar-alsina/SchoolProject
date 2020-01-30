<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) { header('location: product.php'); }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="description" content=" e-store."/>
        <meta name="keywords" content="Casual, Blackpyramid, Caps"/>
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
        ?>
        <div id="banner_image">
            <div class="inner-banner-image">
                <center>
                    <div id="banner_content">
                        <h1>We sell lifestyle.</h1>
                        <p>Flat 10% OFF on premium brands</p>
                        <a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="product.php#Casual" class="thumbnail">
                        <img src="img/B.jpg" alt="Casual"/>
                        <div class="caption">
                            <h3>Casual clothing</h3>
                            <p>Choose among the best available in the world.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="product.php#Watches" class="thumbnail">
                        <img src="img/shoe.jpg" alt="Shoes"/>
                        <div class="caption">
                            <h3>Shoes</h3>
                            <p>Original Shoes from the best brands.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="product.php#Sunglasses" class="thumbnail">
                        <img src="img/sun.jpg" alt="sunglasses"/>
                        <div class="caption">
                            <h3>Sunglasses</h3>
                            <p>Our exquisite collection of Sunglasses.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
