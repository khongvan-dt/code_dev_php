<?php

require 'db/db.php';

session_start(); 

mysqli_select_db($conn, "ecommerce");
$errors = [];
$thanhcong = "";
try {
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $password = sha1($_POST['password']);
        $confirm_password = sha1($_POST["confirm_password"]);
        $email = $_POST['email'];
        $agree = isset($_POST['agree']) ? true : false; 

        if (empty($username) || strlen($username) < 3 || strlen($username) > 20) {
            $errors['username'] = "Username must be between 3 and 20 characters.<br>";
        }
        if (empty($password) || strlen($_POST['password']) < 3 || strlen($_POST['password']) > 20) {
            $errors['password'] = "Password must be between 3 and 20 characters.<br>";
        }
        if (empty($phone) || strlen($phone) !== 10) {
            $errors['phone'] = "Phone number must have exactly 10 digits.<br>";
        }
        if ($password !== $confirm_password) {
            $errors['password2'] = "Password and Confirm Password must be the same.<br>";
        }
        if (!$agree) {
            $errors['agree'] = "Please agree to the terms and conditions.<br>";
        }

        $sql = "SELECT email, user_name FROM User WHERE email = '$email' OR user_name = '$username'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['email'] === $email) {
                    $errors['email'] = "Email already exists.<br>";
                }
                if ($row['user_name'] === $username) {
                    $errors['username3'] = "Username already exists.<br>";
                }
            }
        }
        if (empty($errors)) {
            $sql = "INSERT INTO `User` (user_name, email, phone_number, password, role) VALUES ('$username', '$email', '$phone', '$password', 1)";
            if ($conn->query($sql) === TRUE) {
                echo '<script>';
                echo 'var result = confirm("You have successfully created an account! Do you want to log in as well?");';
                echo 'if (result) { window.location.href = "login.php"; }';
                echo '</script>';
            } else {
                echo "Failed to create account: " . $conn->error;
            }
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
?>
