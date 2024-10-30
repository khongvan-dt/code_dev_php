<?php
session_start();

if (empty($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit();
}

require '../../../db/db.php';

$productId = (int)$_GET['product_id'];

 $sql = "SELECT * FROM Categories";
$result = $conn->query($sql);
$list_cater = $result->fetch_all(MYSQLI_ASSOC);

 $sql = "SELECT Categories.category_id, Categories.category_name, Products.product_id, 
               Products.name_sp, Products.price, Products.discount, Products.img, 
               Products.description, Products.is_host, Products.content
        FROM Categories
        INNER JOIN Products ON Categories.category_id = Products.category_id
        WHERE Products.product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $productId);
$stmt->execute();
$result2 = $stmt->get_result();
$row = $result2->fetch_assoc();

 if (!$row) {
    echo "<script>alert('Product not found.'); window.location.href = 'products.php';</script>";
    exit();
}

 if (isset($_POST['save'])) {
    $category_id = $_POST['category_id'];
    $nameSP = $_POST['name_sp'];
    $importPrice = $_POST['product_price'];
    $salePrice = $_POST['price_discount'];
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    $is_host = isset($_POST['is_host']) ? 1 : 0;

      $img = $row['img'];  
    if (!empty($_FILES["product_image"]["tmp_name"])) {
        $target_dir = "upload_mau/";
        $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["product_image"]["tmp_name"]);

        if ($check !== false && in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
                $img = basename($_FILES["product_image"]["name"]);  
            } else {
                echo "<script>alert('Error uploading product image.');</script>";
            }
        } else {
            echo "<script>alert('Only JPG, JPEG, PNG & GIF formats are allowed.');</script>";
        }
    }

     $sqlUpdateProduct = "UPDATE Products SET 
        category_id = ?,
        name_sp = ?,
        price = ?,
        discount = ?,
        img = ?,
        description = ?,
        is_host = ?  
        content= ?
        WHERE product_id = ?";
    
    $stmtUpdateProduct = $conn->prepare($sqlUpdateProduct);
    $stmtUpdateProduct->bind_param('isdssiii', $category_id, $nameSP, $importPrice, $salePrice, $img, $description, $is_host, $productId);

    if ($stmtUpdateProduct->execute()) {
        echo '<script>alert("Product updated successfully!"); window.location.href = "products.php";</script>';
    } else {
        echo '<script>alert("Error updating product: ' . $stmtUpdateProduct->error . '");</script>';
    }
}

$conn->close();
?>