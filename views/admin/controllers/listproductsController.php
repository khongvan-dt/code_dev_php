<?php
session_start(); 
if (empty($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit();
}
require '../../../db/db.php';
$successMessage = ''; 

 if (isset($_SESSION['successMessage'])) {
    $successMessage = $_SESSION['successMessage'];
    unset($_SESSION['successMessage']);  
}

$sql = "SELECT Categories.category_id, Categories.category_name, Products.product_id, Products.name_sp, Products.price, Products.discount, Products.img, Products.description 
        FROM Categories
        INNER JOIN Products ON Categories.category_id = Products.category_id";
 
if (isset($_POST['find'])) {
    $write = $_POST['find2'];
    $sql = "SELECT DISTINCT Categories.category_id, Categories.category_name, Products.product_id, Products.name_sp, Products.price, Products.discount, Products.img, Products.description, Galery.img2
            FROM Categories
            INNER JOIN Products ON Categories.category_id = Products.category_id
            INNER JOIN Galery ON Galery.product_id2 = Products.product_id 
            WHERE Categories.category_name LIKE ? OR Products.name_sp LIKE ? OR Products.discount LIKE ? OR Products.description LIKE ? OR Products.price LIKE ?";
}

$stmt = $conn->prepare($sql);
if (isset($_POST['find'])) {
    $param = "%$write%";
    $stmt->bind_param('sssss', $param, $param, $param, $param, $param);
}

$stmt->execute();
$result = $stmt->get_result();

if (isset($_POST['delete'])) {
    $productId = $_POST['productId'];
    $conn->begin_transaction();
    try {
        $sqlDeleteGalery = "DELETE FROM Galery WHERE product_id2 = ?";
        $stmtDeleteGalery = $conn->prepare($sqlDeleteGalery);
        $stmtDeleteGalery->bind_param('i', $productId);
        $stmtDeleteGalery->execute();

        $sqlDeleteProduct = "DELETE FROM Products WHERE product_id = ?";
        $stmtDeleteProduct = $conn->prepare($sqlDeleteProduct);
        $stmtDeleteProduct->bind_param('i', $productId);
        $stmtDeleteProduct->execute();

        $conn->commit();
        $_SESSION['successMessage'] = 'Product deleted successfully!';  
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit();
    } catch (Exception $e) {
        $conn->rollback();
        echo "Error deleting product: " . $e->getMessage();
    }
}
$conn->close();

?>