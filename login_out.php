<?php
session_start(); 

unset($_SESSION['loggedin']);
header('location: views/FoodMart/index.php');
?>