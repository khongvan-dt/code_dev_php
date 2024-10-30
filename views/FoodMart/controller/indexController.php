<?php
require '../../db/db.php';

$sql_categories = "SELECT * FROM Categories WHERE is_host = 1";
$result_categories = $conn->query($sql_categories);

$sql_products = "SELECT * FROM Products WHERE is_host = 1";
$result_products = $conn->query($sql_products);

$products_by_category = [];
while ($product = $result_products->fetch_assoc()) {
  $products_by_category[$product['category_id']][] = $product;
}

$categories = [];
if ($result_categories->num_rows > 0) {
  while ($category = $result_categories->fetch_assoc()) {
    $category_id = $category['category_id'];
    $categories[$category_id] = [
      'category_name' => $category['category_name'],
      'products' => $products_by_category[$category_id] ?? []
    ];
  }
}

?>
