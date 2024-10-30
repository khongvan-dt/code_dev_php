<!DOCTYPE html>
<html lang="en">

<head>
	<title>Shopping</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/vendor.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/contacts/contact-5/assets/css/contact-5.css">
</head>

<body>


	<?php include('header.php'); ?>

	<?php include('controller/contactController.php');
	?>


	<section class="py-3 py-md-5 py-xl-8" style="background-color: #e2e0ca;">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-10 col-lg-8">
					<h3 class="fs-5 mb-2 text-secondary text-uppercase">Contact</h3>
					<h2 class="display-5 mb-4 mb-md-5 mb-xl-8">We're always on the lookout to work with new clients. Please get in touch in one of the following ways.</h2>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row gy-4 gy-md-5 gy-lg-0 align-items-md-center">
				<div class="col-12 col-lg-6">
					<div class="border overflow-hidden">


						<form class="contact1-form validate-form" method="post" action="">
							<div class="row gy-4 gy-xl-5 p-4 p-xl-5">
								<div class="col-12">
									<label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="fullname" name="name" value="" required>
								</div>
								<div class="col-12 col-md-6">
									<label for="email" class="form-label">Email <span class="text-danger">*</span></label>
									<div class="input-group">
										<span class="input-group-text">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
												<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
											</svg>
										</span>
										<input type="email" class="form-control" id="email" name="email" value="" required>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<label for="phone" class="form-label">Phone Number</label>
									<div class="input-group">
										<span class="input-group-text">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
												<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
											</svg>
										</span>
										<input type="tel" class="form-control" id="phone" name="phone_number" value="">
									</div>
								</div>
								<div class="col-12">
									<label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="subject" name="product" value="" required>
								</div>
								<div class="col-12">
									<label for="message" class="form-label">Message <span class="text-danger">*</span></label>
									<textarea class="form-control" id="message" name="message" rows="4" required></textarea>
								</div>
								<div class="col-12">
									<button class="btn btn-dark mt-4" type="submit" name="contact">Send Message</button>
								</div>
							</div>
						</form>

					</div>
				</div>
				<?php
				$sql_contact = "SELECT * FROM contact";
				$result_contact = $conn->query($sql_contact);

				if ($result_contact->num_rows > 0) {
					while ($row = $result_contact->fetch_assoc()) {
				?>
						<div class="col-12 col-lg-6">
							<div class="row justify-content-xl-center">
								<div class="col-12 col-xl-11">
									<div class="mb-4 mb-md-5">
										<div class="mb-3 text-primary">
											<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-geo" viewBox="0 0 16 16">
												<path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
											</svg>
										</div>
										<div>
											<h4 class="mb-2">Office</h4>
											<p class="mb-2"><?= htmlspecialchars($row['address']) ?></p>
											<hr class="w-50 mb-3 border-dark-subtle">
											<address class="m-0 text-secondary"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59587.94638114343!2d105.79576379581096!3d21.02281475962849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1729679306015!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></address>
										</div>
									</div>
									<div class="row mb-sm-4 mb-md-5">
										<div class="col-12 col-sm-6">
											<div class="mb-4 mb-sm-0">
												<div class="mb-3 text-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
														<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
													</svg>
												</div>
												<div>
													<h4 class="mb-2">Phone</h4>
													<p class="mb-2"><?= htmlspecialchars($row['phone_number']) ?></p>
 													 
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6">
											<div>
												<div class="mb-3 text-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
														<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.1l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm0 9h12a1 1 0 0 0 1-1V6.1l-7 4.2-7-4.2V12a1 1 0 0 0 1 1z" />
													</svg>
												</div>
												<div>
													<h4 class="mb-2">Email</h4>
													<p class="mb-2"><?= htmlspecialchars($row['email']) ?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				<?php
					}
				} else {
					echo "<p>No contact information available.</p>";
				}
				$conn->close();
				?>

			</div>
		</div>
	</section>

	<?php include('menuFooter.php'); ?>

	<?php include('footer.php'); ?>


	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>
</body>

</html>