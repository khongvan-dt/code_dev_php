<?php
session_start(); 

if (empty($_SESSION['loggedin'])) {
    header('Location:../../../login.php');
    exit();
}

require '../../../db/db.php';
mysqli_select_db($conn, "ecommerce");

 $result = null;

 if (isset($_POST['find'])) {
    $write = $_POST['find2'];
    $find = "SELECT * FROM feedback
    WHERE fullname LIKE '%$write%' OR phone_number LIKE '%$write%' OR email LIKE '%$write%' OR subject_name LIKE '%$write%' OR note LIKE '%$write%'";
    $result = $conn->query($find);
}

 if ($result === null) {
    $sql2 = "SELECT * FROM feedback 
    INNER JOIN User ON feedback.User_id = User.User_id";
    $result = $conn->query($sql2);
}

?>