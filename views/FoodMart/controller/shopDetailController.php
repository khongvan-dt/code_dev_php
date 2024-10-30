<?php
require '../../db/db.php';
mysqli_select_db($conn, "ecommerce");

if (isset($_GET["detail"])) {
    $product_id = mysqli_real_escape_string($conn, $_GET["detail"]);

    $sql = "SELECT DISTINCT product_id, name_sp, content, discount, img, price, description, category_id
            FROM Products
            WHERE product_id = '$product_id' LIMIT 1";

    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $list = mysqli_fetch_assoc($result);
    } else {
        die("Không tìm thấy sản phẩm với ID đó.");
    }
} else {
    die("Không có ID sản phẩm được cung cấp.");
}

$current_category_id = $list['category_id'];

$sql_categories = "SELECT * FROM Categories WHERE category_id = $current_category_id";
$result_categories = $conn->query($sql_categories);
$category = mysqli_fetch_assoc($result_categories);

$sql_products2 = "SELECT * FROM Products WHERE category_id = $current_category_id";
$result_products2 = $conn->query($sql_products2);

$products_by_category = [];
if ($result_products2->num_rows > 0) {
    while ($row = $result_products2->fetch_assoc()) {
        $products_by_category[$row['category_id']][] = $row;
    }
}
?>