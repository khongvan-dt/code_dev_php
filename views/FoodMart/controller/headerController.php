<?php
session_start();
require '../../db/db.php';

mysqli_select_db($conn, "ecommerce");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['quantity']) && is_array($_POST['quantity'])) {
    foreach ($_POST['quantity'] as $product_id => $quantity) {
      if ($quantity > 0) {
        $_SESSION['cart'][$product_id] = intval($quantity);
      } else {
        unset($_SESSION['cart'][$product_id]);
      }
    }
  }
}

if (isset($_GET['product_id'])) {
  $product_id = intval($_GET['product_id']);
  if (isset($_SESSION['cart'][$product_id])) {
    unset($_SESSION['cart'][$product_id]);
  }
}
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
  $user_id = $_SESSION['User_id'];
  $sql = "SELECT user_name FROM User WHERE User_id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $user_id);
  $stmt->execute();
  $stmt->bind_result($user_name);
  $stmt->fetch();
  $stmt->close();
}

$sql_categories2 = "SELECT * FROM Categories";
$result_categories2 = $conn->query($sql_categories2);
?>