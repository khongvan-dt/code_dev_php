<?php
session_start(); 

if (empty($_SESSION['loggedin'])) {
    header('Location:../../../login.php');
    exit();
} else {
    require '../../../db/db.php';
    mysqli_select_db($conn, "ecommerce");
    $errors = [];
    $thanhcong = '';
    $sql = "SELECT * FROM Categories";
    $result = $conn->query($sql);
    $currentCategoryId = null;

    if (isset($_POST['submit'])) {
        $Category = $_POST['Category'];
        $is_host = isset($_POST['is_host']) ? 1 : 0;

        if (empty($Category)) {
            $errors['nhap'] = "Nhập đủ thông tin!";
        }

        $sqlCheck = "SELECT COUNT(*) as count FROM Categories WHERE category_name='$Category'";
        $resultCheck = $conn->query($sqlCheck);
        $row = mysqli_fetch_assoc($resultCheck);
        if ($row['count'] > 0) {
            $errors['nhap2'] = $Category . " đã có tên trong danh mục, vui lòng nhập tên khác!";
        }

        if (empty($errors)) {
            $insert_Category = "INSERT INTO Categories (category_name, is_host) VALUES ('$Category', $is_host)";
            if ($conn->query($insert_Category)) {
                $result = $conn->query($sql);
                $thanhcong = "Thêm tên danh mục sản phẩm: " . $Category . " thành công.";
            } else {
                $errors['insert'] = "Lỗi khi thêm tên danh mục.";
            }
        }
    }

    if (isset($_POST['update'])) {
        $currentCategoryId = $_POST['category_id'];
        $updatedCategoryName = $_POST['updatedCategory'];
        $updatedIsHost = isset($_POST['updatedIsHost']) ? 1 : 0;

        if (empty($updatedCategoryName)) {
            $errors['update'] = "Vui lòng nhập tên danh mục!";
        }

        if (empty($errors)) {
            $updateCategorySql = "UPDATE Categories SET category_name='$updatedCategoryName', is_host=$updatedIsHost WHERE category_id=$currentCategoryId";
            if ($conn->query($updateCategorySql)) {
                $thanhcong = "Cập nhật danh mục thành công!";
                $result = $conn->query($sql);
            } else {
                $errors['updateError'] = "Lỗi khi cập nhật danh mục.";
            }
        }
    }
    if (isset($_POST['delete'])) {
        $deleteCategoryId = $_POST['delete_id'];

        $deleteSql = "DELETE FROM Categories WHERE category_id = $deleteCategoryId";
        if ($conn->query($deleteSql)) {
            $thanhcong = "Xóa danh mục thành công!";
            $result = $conn->query($sql);
        } else {
            $errors['delete'] = "Đang được sử dụng.Không thể xóa!";
        }
    }
}
?>