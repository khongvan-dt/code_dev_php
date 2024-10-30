<?php
require '../../db/db.php';

mysqli_select_db($conn, "ecommerce");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quantity']) && is_array($_POST['quantity'])) {
	foreach ($_POST['quantity'] as $product_id => $quantity) {
		if ($quantity > 0) {
			$_SESSION['cart'][$product_id] = intval($quantity);
		} else {
			unset($_SESSION['cart'][$product_id]);
		}
	}
}
if (isset($_GET['product_id'])) {
	$product_id = intval($_GET['product_id']);
	if (isset($_SESSION['cart'][$product_id])) {
		unset($_SESSION['cart'][$product_id]);
	}
}
?>