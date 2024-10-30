<?php

session_start();

if (empty($_SESSION['loggedin'])) {
	header('Location:../../../login.php');
	exit();
}

require '../../../db/db.php';

mysqli_select_db($conn, "ecommerce");

$sql = "SELECT * FROM Contact";
$result = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
	$email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$address = $_POST['address'];
	$open_time = $_POST['open_time'];

	$stmt = $conn->prepare("INSERT INTO Contact (email, phone_number, address, open_time) VALUES (?, ?, ?, ?)");
	$stmt->bind_param("ssss", $email, $phone_number, $address, $open_time);

	if ($stmt->execute()) {
		$status = "success";
		$message = "Record inserted successfully!";
	} else {
		$status = "error";
		$message = "Error: " . $stmt->error;
	}
	$stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_submit'])) {
	$id = $_POST['id'];
	$email = $_POST['edit_email'];
	$phone_number = $_POST['edit_phone_number'];
	$address = $_POST['edit_address'];
	$open_time = $_POST['edit_open_time'];

	$stmt = $conn->prepare("UPDATE Contact SET email=?, phone_number=?, address=?, open_time=? WHERE id=?");
	$stmt->bind_param("ssssi", $email, $phone_number, $address, $open_time, $id);

	if ($stmt->execute()) {
		echo "Record updated successfully.";
	} else {
		echo "Error: " . $stmt->error;
	}
	$stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_submit'])) {
	$id = $_POST['id'];

	$stmt = $conn->prepare("DELETE FROM Contact WHERE id=?");
	$stmt->bind_param("i", $id);

	if ($stmt->execute()) {
		echo "Record deleted successfully.";
	} else {
		echo "Error: " . $stmt->error;
	}
	$stmt->close();
}
