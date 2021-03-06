<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOME | E-Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" >
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href="style.css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check_if_added.php';
        $user_id = $_SESSION['user_id'];
        $email = $_SESSION['email'];
        ?>
        <div class="container-fluid" >
            <div class="row text-center">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 1</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/m1.jpg" alt="img" class="img-responsive" style="margin: auto;">
                            <small> 4.2' screen,snap-dragon processor,6GB RAM,16GB Internal memory, Rs.5000.</small><br>
                            <?php
                            if (check_if_added_to_cart(1)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {
                                ?>                                    
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 2</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/m2.jpg" alt="img" class="img-responsive" style="margin: auto;"><br>
                            <small> Numeric keypad 2MP Camera ,Internet browsing, Rs 4000.</small><br><br>
                            <?php
                            if (check_if_added_to_cart(2)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 3</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/m3.jpg" alt="img" class="img-responsive" style="margin: auto;">
                            <small>4' screen,snap-dragon processor,4GB RAM,4GB Internal memory, Rs.13000.</small><br>
                            <?php
                            if (check_if_added_to_cart(3)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 4</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/m4.jpg" alt="img" class="img-responsive" style="margin: auto;"><br>
                            <small> Numeric keypad 5MP Camera ,Internet browsing, Rs 6000.</small><br><br>
                            <?php
                            if (check_if_added_to_cart(4)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 5</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/m5.jpg" alt="img" class="img-responsive" style="margin: auto;">
                            <small> 4.2' screen,snap-dragon processor,Android,6GB RAM,4GB Internal memory, Rs.5000.</small><br>
                            <?php
                            if (check_if_added_to_cart(5)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 6</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/m6.jpg" alt="img" class="img-responsive" style="margin: auto;">
                            <small> 4.2' screen,snap-dragon processor,6GB RAM,4GB Internal memory, Rs.15000.</small><br>
                            <?php
                            if (check_if_added_to_cart(6)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>