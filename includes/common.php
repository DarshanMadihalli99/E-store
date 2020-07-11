<?php
$con= mysqli_connect('localhost:3308', 'root','','estore') or die(mysqli_errno($con));
if (!isset($_SESSION['email'])){
    session_start();
}
?>