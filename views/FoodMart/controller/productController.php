<?php
require '../../db/db.php';

$sql_products = "SELECT * FROM Products";
$result_products = $conn->query($sql_products);


$sql_total = "SELECT COUNT(*) AS total FROM Products WHERE is_host = 1";
$result_total = $conn->query($sql_total);
?>