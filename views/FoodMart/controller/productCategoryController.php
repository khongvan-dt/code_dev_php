<?php
require '../../db/db.php';

$category_id = isset($_GET['category_id']) ? (int)$_GET['category_id'] : 0;

$sql_category = "SELECT * FROM Categories WHERE category_id = $category_id";
$result_category = $conn->query($sql_category);

if ($result_category && $result_category->num_rows > 0) {
  $category = $result_category->fetch_assoc();

  $sql_total = "SELECT COUNT(*) AS total FROM Products WHERE category_id = $category_id";
  $result_total = $conn->query($sql_total);
  $total_products = 0;

  if ($result_total && $result_total->num_rows > 0) {
    $total_row = $result_total->fetch_assoc();
    $total_products = $total_row['total'];
  }

   $sql_products = "SELECT * FROM Products WHERE category_id = $category_id";
  $result_products = $conn->query($sql_products);
} else {
  echo 'Danh mục không tồn tại.';
  exit;
}
?>