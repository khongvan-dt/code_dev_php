<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fullname'], $_POST['phone_number'], $_POST['address'])) {
     if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header('Location: ../../login.php');  
        exit;
    }

     $user_id = $_SESSION['User_id'];  
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    $order_date = date('Y-m-d H:i:s');
    $status = 0;

     $sql = "INSERT INTO Orders (User_id, fullname, phone_number, address, note, order_date, status) 
            VALUES ('$user_id', '$fullname', '$phone_number', '$address', '$note', '$order_date', '$status')";

    if ($conn->query($sql) === true) {
        $order_id = $conn->insert_id;  

         foreach ($_SESSION['cart'] as $product_id => $quantity) {
            $product_query = "SELECT price FROM Products WHERE product_id = $product_id";
            $product_result = $conn->query($product_query);

            if ($product_result && $product_result->num_rows > 0) {
                $product = $product_result->fetch_assoc();
                $total_money = $product['price'] * $quantity;

                 $sql_detail = "INSERT INTO Order_Details (order_id, product_id, num, total_money) 
                               VALUES ('$order_id', '$product_id', '$quantity', '$total_money')";
                $conn->query($sql_detail);
            }
        }

         unset($_SESSION['cart']);
         header('Location: success.php');
        exit;
    } else {
        echo "Error placing order: " . mysqli_error($conn);
    }
}

$conn->close();
?>