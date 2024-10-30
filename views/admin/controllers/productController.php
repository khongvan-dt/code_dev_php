<?php
session_start(); 

if (empty($_SESSION['loggedin'])) {
    header('Location:../../../login.php');
    exit();
} else {
    require '../../../db/db.php';
    mysqli_select_db($conn, "ecommerce");
    $errors = [];
    $thanhcong = [];

    $sql = "SELECT * FROM Categories";
    $result = $conn->query($sql);
    $list_cater = $result->fetch_all(MYSQLI_ASSOC);

    if (isset($_POST['submit'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_FILES['product_image']['name'];
    
        $price_discount = $_POST['price_discount'];
        $content = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['content']));

        $description = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['description']));
        $category_id = $_POST['category_id'];
        $is_host = isset($_POST['is_host']) ? 1 : 0; 
        if (empty($product_name)) {
            $errors['loi1'] = 'Vui lòng nhập tên sản phẩm.';
        }
        if (empty($product_price)) {
            $errors['loi2'] = 'Vui lòng nhập giá sản phẩm.';
        }
        if (empty($product_image)) {
            $errors['loi3'] = 'Vui lòng tải lên hình ảnh sản phẩm.';
        }
       
        if (empty($price_discount)) {
            $errors['loi5'] = 'Vui lòng nhập giá giảm giá.';
        }
        if (empty($description)) {
            $errors['loi6'] = 'Vui lòng nhập mô tả.';
        }

        if (empty($errors)) {
            $target_dir = "../upload_mau/";

            $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
  
            $type_file = pathinfo($_FILES["product_image"]["name"], PATHINFO_EXTENSION);
 
            $type_file_allow = array('jpg', 'gif', 'jpeg', 'png', 'img');
            if (!in_array(strtolower($type_file), $type_file_allow)) {
                $errors[] = 'Định dạng hình ảnh sản phẩm không hợp lệ.';
            }
             

            if (empty($errors)) {
                if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
                    $test['img_mau'] = 'Hình ảnh sản phẩm đã được tải lên thành công.';
                } else {
                    $errors['img_mau'] = 'Không thể tải lên hình ảnh sản phẩm.';
                }
            }
            

            if ($errors) {
                print_r($errors);
                exit;
            }

            if (empty($errors)) {
                $insert_product = "INSERT INTO Products (name_sp, price, discount, img, content, description, category_id, is_host)
                VALUES ('$product_name', $product_price, $price_discount, '$product_image','$content', '$description', $category_id, $is_host)";
                $result = $conn->query($insert_product);

                if ($result) {
                    $thanhcong['insert_product'] = "Sản phẩm đã được thêm thành công.";

                    $product_id = mysqli_insert_id($conn);

 
                } else {
                    $errors['sp'] = "Không thể thêm sản phẩm: " . $conn->error;
                }
            }
        }
    }
}
?>