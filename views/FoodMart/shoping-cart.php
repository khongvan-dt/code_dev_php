<?php include('controller/shopingCart.php');
?>

<?php include('controller/cartController.php');
?>

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
	<?php include('header.php'); ?>


	<section class="h-100 h-custom" style="background-color: #d2c9ff;">
		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-12">
					<div class="card card-registration card-registration-2" style="border-radius: 15px;">
						<div class="card-body p-0">
							<div class="row g-0">
								<div class="col-lg-8">
									<div class="p-5">
										<div class="d-flex justify-content-between align-items-center mb-5">
											<h1 class="fw-bold mb-0">Shopping Cart</h1>
										</div>
										<hr class="my-4">
										<form action="shoping-cart.php" method="POST">
											<?php if (!empty($_SESSION['cart'])): ?>
												<?php foreach ($_SESSION['cart'] as $product_id => $quantity): ?>
													<?php
													$product_query = "SELECT * FROM Products WHERE product_id = $product_id";
													$product_result = $conn->query($product_query);
													if ($product_result && $product_result->num_rows > 0):
														$product = $product_result->fetch_assoc();
													?>
														<div class="row mb-4 d-flex justify-content-between align-items-center">
															<div class="col-md-2 col-lg-2 col-xl-2">
																<img src="../admin/upload_mau/<?php echo htmlspecialchars($product['img']); ?>" class="img-fluid rounded-3" alt="Product Image">
															</div>
															<div class="col-md-3 col-lg-3 col-xl-3">
																<h6 class="text-muted"><?php echo htmlspecialchars($product['name_sp']); ?></h6>
															</div>
															<div class="col-md-3 col-lg-3 col-xl-2 d-flex">
																<input min="0" name="quantity[<?php echo $product_id; ?>]" value="<?php echo $quantity; ?>" type="number" class="form-control form-control-sm" />
															</div>
															<div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
																<h6 class="mb-0"><?php echo number_format($product['price']); ?> VND</h6>
															</div>
															<div class="col-md-1 col-lg-1 col-xl-1 text-end">
																<a href="remove_item.php?product_id=<?php echo $product_id; ?>" class="text-muted"><i class="fas fa-times"></i></a>
															</div>
														</div>
														<hr class="my-4">
													<?php endif; ?>
												<?php endforeach; ?>
												<button type="submit" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Update</button>
											<?php else: ?>
												<p>Your cart is empty.</p>
											<?php endif; ?>
										</form>
										<div class="pt-5">
											<h6 class="mb-0"><a href="index.php" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
										</div>
									</div>
								</div>
								<div class="col-lg-4 bg-body-tertiary">
									<div class="p-5">
										<h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
										<hr class="my-4">
										<div class="d-flex justify-content-between mb-5">
											<h5 class="text-uppercase">Total price</h5>
											<h5>
												<?php
												$total_price = 0;
												if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
													foreach ($_SESSION['cart'] as $product_id => $quantity) {
														$product_query = "SELECT price FROM Products WHERE product_id = $product_id";
														$product_result = $conn->query($product_query);
														if ($product_result && $product_result->num_rows > 0) {
															$product = $product_result->fetch_assoc();
															$total_price += $product['price'] * $quantity;
														}
													}
												} else {
													echo "Giỏ hàng trống.";
												}
												echo number_format($total_price);
												?> VND
											</h5>

										</div>

										<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
											<form action=" " method="POST">
												<input type="hidden" name="total_price" value="<?php echo $total_price; ?>">
												<div class="mb-3">
													<label for="fullname" class="form-label">Full Name</label>
													<input type="text" class="form-control" name="fullname" required>
												</div>
												<div class="mb-3">
													<label for="phone_number" class="form-label">Phone Number</label>
													<input type="text" class="form-control" name="phone_number" required>
												</div>
												<div class="mb-3">
													<label for="address" class="form-label">Address</label>
													<input type="text" class="form-control" name="address" required>
												</div>
												<div class="mb-3">
													<label for="note" class="form-label">Note</label>
													<textarea class="form-control" name="note"></textarea>
												</div>
												<button type="submit" class="btn btn-dark btn-block btn-lg">Order</button>
											</form>
										<?php else: ?>
											<a href="../../login.php" class="btn btn-dark btn-block btn-lg">Login</a>
										<?php endif; ?>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
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