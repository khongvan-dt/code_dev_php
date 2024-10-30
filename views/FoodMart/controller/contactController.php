<?php
	require '../../db/db.php';

	$sql_contact = "SELECT * FROM contact";
	$result_contact = $conn->query($sql_contact);
	if (isset($_POST['contact'])) {
		$name = $_POST['name'];
		$email = $_SESSION['email'] ?? '';
		$message = $_POST['message'];
		$phone = $_POST['phone_number'];
		$product = $_POST['product'];

		$user_id = $_SESSION['User_id'] ?? null;

		if ($user_id === null) {
			echo '<script>alert("You must be logged in to submit feedback.");</script>';
		} else {
			$stmt = $conn->prepare("INSERT INTO FeedBack (fullname, email, phone_number, subject_name, note, User_id) 
                                VALUES (?, ?, ?, ?, ?, ?)");
			$stmt->bind_param("ssssss", $name, $email, $phone, $product, $message, $user_id);

			if ($stmt->execute()) {
				echo '<script>';
				echo 'var result = confirm("You have successfully submitted your feedback!");';
				echo 'if (result) { window.location.href = "contact.php"; }';
				echo '</script>';
			} else {
				echo "Failed: " . $stmt->error;
			}

			$stmt->close();
		}
	}
	?>