<?php
require 'db/db.php';

session_start();

mysqli_select_db($conn, "ecommerce");
$errors = [];

try {
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = $_POST['password'];

        if (empty($username)) {
            $errors['username'] = "Username cannot be left blank.<br>";
        }
        if (empty($password)) {
            $errors['password'] = "Password cannot be left blank.<br>";
        }

        if (empty($errors)) {
            $password_hashed = sha1($password); 

            $sql = "SELECT * FROM User WHERE user_name = '$username'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $res = mysqli_fetch_assoc($result);
                if ($password_hashed === $res['password']) {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['User_id'] = $res['User_id'];
                    $_SESSION['email'] = $res['email'];
                    $_SESSION['phone_number'] = $res['phone_number'];
                    $_SESSION['role'] = $res['role'];

                    if ($_SESSION['role'] == 0) {
                        header('Location: views/admin');
                    } elseif ($_SESSION['role'] == 1) {
                        header('Location: views/FoodMart');
                    }
                    exit();
                } else {
                    $errors['password2'] = "Wrong account password.";
                }
            } else {
                $errors['username2'] = "Wrong account name.";
            }
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
?>