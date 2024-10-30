<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['add_to_cart'])) {
    $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
    $quantity = intval($_POST['quantity']);

    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] += $quantity;
    } else {
        $_SESSION['cart'][$product_id] = $quantity;
    }

    header("Location: shoping-cart.php");
    exit();
}
?>