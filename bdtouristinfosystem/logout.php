<?php
session_start();
if(isset( $_SESSION['user'])){
unset($_SESSION["user"]);
unset($_SESSION["email"]);
header("Location:login.php");
}
?>