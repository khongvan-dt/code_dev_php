<?php
session_start(); 
if (empty($_SESSION['loggedin'])) {
    header('Location: ../../../login.php');
    exit();
}
require '../../../db/db.php';
$successMessage = ''; 

 if (isset($_SESSION['successMessage'])) {
    $successMessage = $_SESSION['successMessage'];
    unset($_SESSION['successMessage']);  
}
$feedbackList = null;
$sql = "SELECT * FROM products LIMIT 20";
$result2 = $conn->query($sql);

if ($feedbackList === null) {
    $sql2 = "SELECT * FROM feedback 
    INNER JOIN User ON feedback.User_id = User.User_id";
    $feedbackList = $conn->query($sql2);
}
$conn->close();

?>