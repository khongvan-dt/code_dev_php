<?php
session_start(); 


if (empty($_SESSION['loggedin'])) {
    header('Location:../../../login.php');
    exit();
}

require '../../../db/db.php';

mysqli_select_db($conn, "ecommerce");
$sql2 = "SELECT 
        Orders.User_id, User.user_name, Orders.order_id, Orders.fullname, Orders.phone_number,
        Orders.address, Orders.note, SUM(Order_Details.total_money) as total_money
        FROM Order_Details 
        INNER JOIN Orders 
        ON Order_Details.order_id = Orders.order_id 
        INNER JOIN User 
        ON Orders.User_id = User.User_id 
        GROUP BY Order_Details.order_id";
$result2 = $conn->query($sql2);

if ($result2->num_rows == 0) {
    $noOrders = true;
} else {
    $noOrders = false;
}

$i = 0;

if (isset($_POST['find'])) {
    $write = $conn->real_escape_string($_POST['find2']);
    $find = "SELECT DISTINCT
    Orders.order_id,
    Orders.fullname,
    Orders.phone_number,
    Orders.address,
    Orders.note,
    Order_Details.total_money
FROM   Order_Details
    INNER JOIN Orders
            ON Order_Details.order_id = Orders.order_id
    INNER JOIN Products
            ON Order_Details.product_id = Products.product_id
WHERE  Orders.fullname LIKE '%$write%'
    OR Orders.phone_number LIKE '%$write%'
    OR Orders.address LIKE '%$write%'
    OR Orders.note LIKE '%$write%'
    OR Order_Details.total_money LIKE '%$write%'
GROUP  BY Order_Details.order_id";

    $result = $conn->query($find);
    $list = $result->fetch_all(MYSQLI_ASSOC);

    while ($row = $result2->fetch_assoc()) {
        $order_id = $row['order_id'];
        $sql2 = "SELECT Order_Details.order_id, Products.name_sp, 
            Products.discount, Order_Details.num
            FROM Order_Details
            INNER JOIN Products 
                ON Order_Details.product_id = Products.product_id
            WHERE Order_Details.order_id ='$order_id'
            AND ( Products.name_sp LIKE '%$write%' 
              OR Products.discount LIKE '%$write%'
              OR Order_Details.num LIKE '%$write%')
          GROUP BY Order_Details.order_id";

        $result2 = $conn->query($sql2);
        $list2 = $result->fetch_all(MYSQLI_ASSOC);
    }
}

?>