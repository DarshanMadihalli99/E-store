<html>
    <head>
        <title>E-Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" >
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href="../style.css">
    </head>
    <body>

        <div class="navbar navbar-default navbar-fixed-top ">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand box">E-Store</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="mynavbar" >
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (isset($_SESSION['email'])) { ?>                
                            <li><a href="cart.php" class="text-center"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                            <li><a href="settings.php" class="text-center"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                            <li><a href="logout.php" class="text-center"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>                
                        <?php } else { ?>
                            <li><a href="signup.php" class="text-center" ><span class="glyphicon glyphicon-user "></span>Sign Up</a></li>
                            <li><a data-target="#mymodal" data-toggle="modal" class="text-center"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <li><a href="about.php" class="text-center"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                            <li><a href="contact.php" class="text-center"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="modal fade" id="mymodal">
            <br><br><br>

            <div class="modal-dialog">

                <div class="modal-content">
                    <form  method="post" action="login_script.php" autocomplete="off">
                        <div class="modal-header">
                            <button type ="button" class="close btn-warning" data-dismiss="modal" >&times;</button>
                            <h4>LOGIN</h4>
                        </div>
                        <div class="modal-body">
                            <p>Don't have an account? <a href="signup.php" class="text-primary">Register.</a></p>

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="E-mail" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter your e-mail address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required="true" pattern=".{8,}" title="Enter Password with min 8 digits">
                            </div>
                            <div class="form-group">
                                <?php
                                if (isset($_GET['m1'])) {
                                    echo $_GET['m1'];
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" name='submit' class="btn btn-primary">Login</button> 
                            </div>


                        </div>
                        <div class="modal-footer">
                            <div class="text-left">
                                <a href="forgot.php" ><h4>Forgot Password?</h4> </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>