<?php include('../controllers/listproductsController.php');
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin</title>

	<link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
	<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
	<link rel="manifest" href="../assets/img/favicons/manifest.json">
	<meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
	<meta name="theme-color" content="#ffffff">
	<script src="../assets/js/config.js"></script>
	<script src="../vendors/simplebar/simplebar.min.js"></script>

	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
	<link href="../vendors/simplebar/simplebar.min.css" rel="stylesheet">
	<link href="../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
	<link href="../assets/css/theme.min.css" rel="stylesheet" id="style-default">
	<link href="../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
	<link href="../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
	<script src="../js/header.js"></script>

</head>

<body>
	<main class="main" id="top">
		<div class="container" data-layout="container">
			<script src="../js/top.js"></script>
			<?php include('../menu.php '); ?>
			<?php include('../menuTop.php'); ?>
			<div class="content">
				<?php include('navbar.php'); ?>
				<script src="../js/navbarPosition.js"></script>

				<div class="row g-3 mb-3">
					<div class="col-xxl-12 col-md-12">
						<div class="card z-1" id="recentPurchaseTable" data-list='{"valueNames":["name","email","product","payment","amount"],"page":7,"pagination":true}'>
							<div class="card-header">
								<div class="row flex-between-center">
									<div class="col-6 col-sm-auto d-flex align-items-center pe-0">
										<h5 class="fs-9 mb-0 text-nowrap py-2 py-xl-0">List Feedback</h5>
									</div>
									<div class="col-6 col-sm-auto ms-auto text-end ps-0">

										<div id="table-purchases-replace-element">
											<button class="btn btn-falcon-default btn-sm" type="button">
												<span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
												<span class="d-none d-sm-inline-block ms-1"><a href="add-product.php">New</a></span>
											</button>

										</div>
									</div>
								</div>
								<div class="card-body px-0 py-0">
									<div class="table-responsive scrollbar">
										<table class="table table-sm fs-10 mb-0 overflow-hidden">
											<thead class="bg-200">
												<tr>
													<th class="text-900">Img</th>
													<th class="text-900 ">Name</th>
													<th class="text-900 ">Price</th>
													<th class="text-900 ">Discord</th>
													<th scope="col">Description</th>
													<th scope="text-900">Actions</th>

												</tr>
											</thead>
											<tbody class="list" id="table-purchase-body">
												<?php $i = 0;
												while ($row = $result->fetch_assoc()): $i++; ?>
													<tr class="border-bottom border-200">
														<td>
															<div class="d-flex align-items-center position-relative">
																<img class="rounded-1 border border-200" src="../upload_mau/<?php echo $row['img']; ?>" alt="<?php echo $row['name_sp']; ?>" width="60" />

															</div>
														</td>
														<td class="align-middle  fw-semi-bold"><?php echo $row['name_sp']; ?></td>
														<td class="align-middle fw-semi-bold"><?php echo $row['price']; ?></td>

														<td class="align-middle  fw-semi-bold"><?php echo $row['discount']; ?></td>
														<td><?php echo $row['description']; ?></td>
														<td>
															<form method="post" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this product?');">
																<input type="hidden" name="productId" value="<?php echo $row['product_id']; ?>">
																<input type="submit" name="delete" value="Delete" class="btn btn-danger">
															</form>
															<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#viewModal"
																data-category="<?php echo $row['category_name']; ?>"
																data-name="<?php echo $row['name_sp']; ?>"
																data-price="<?php echo $row['price']; ?>"
																data-discount="<?php echo $row['discount']; ?>"
																data-description="<?php echo $row['description']; ?>"
																data-img="../upload_mau/<?php echo $row['img']; ?>">
																View
															</button>
															<a href="edit.php?product_id=<?php echo $row['product_id']; ?>" class="btn btn-primary">Edit</a>
														</td>
													</tr>
												<?php endwhile; ?>
											</tbody>
										</table>

									</div>
								</div>
								<div class="card-footer">
									<div class="row align-items-center">
										<div class="pagination d-none"></div>
										<div class="col">
											<p class="mb-0 fs-10"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"></span></p>
										</div>
										<div class="col-auto d-flex"><button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Previous</span></button><button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button></div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
	</main>

	<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><b>Category:</b> <span id="modalCategory"></span></p>
                    <p><b>Product Name:</b> <span id="modalName"></span></p>
                    <p><b>Price:</b> <span id="modalPrice"></span>$</p>
                    <p><b>Discount:</b> <span id="modalDiscount"></span>$</p>
                    <p><b>Description:</b> <span id="modalDescription"></span></p>
                    <p><b>Product Image:</b></p>
                    <img id="modalImg" src="" alt="Product Image" width="300" height="200">
                    <p><b>Detail Image:</b></p>
                    <img id="modalImg2" src="" alt="Detail Image" width="300" height="200">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
    <script src="js/datatables-simple-demo.js"></script> -->

    <script>
        var viewModal = document.getElementById('viewModal');
        viewModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var category = button.getAttribute('data-category');
            var name = button.getAttribute('data-name');
            var price = button.getAttribute('data-price');
            var discount = button.getAttribute('data-discount');
            var description = button.getAttribute('data-description');
            var img = button.getAttribute('data-img');
            var img2 = button.getAttribute('data-img2');

            var modalCategory = viewModal.querySelector('#modalCategory');
            var modalName = viewModal.querySelector('#modalName');
            var modalPrice = viewModal.querySelector('#modalPrice');
            var modalDiscount = viewModal.querySelector('#modalDiscount');
            var modalDescription = viewModal.querySelector('#modalDescription');
            var modalImg = viewModal.querySelector('#modalImg');
            var modalImg2 = viewModal.querySelector('#modalImg2');

            modalCategory.textContent = category;
            modalName.textContent = name;
            modalPrice.textContent = price;
            modalDiscount.textContent = discount;
            modalDescription.textContent = description;
            modalImg.src = img;
            modalImg2.src = img2;
        });

        setTimeout(function() {
            var alert = document.querySelector('.alert');
            if (alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
            }
        }, 3000);
    </script>
    <script>
        setTimeout(function() {
            var alert = document.querySelector('.alert');
            if (alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
                setTimeout(function() {
                    alert.remove();
                }, 500);
            }
        }, 3000);
    </script>

	<script src="../vendors/popper/popper.min.js"></script>
	<script src="../vendors/bootstrap/bootstrap.min.js"></script>
	<script src="../vendors/anchorjs/anchor.min.js"></script>
	<script src="../vendors/is/is.min.js"></script>
	<script src="../vendors/chart/chart.umd.js"></script>
	<script src="../vendors/countup/countUp.umd.js"></script>
	<script src="../vendors/echarts/echarts.min.js"></script>
	<script src="../vendors/dayjs/dayjs.min.js"></script>
	<script src="../vendors/fontawesome/all.min.js"></script>
	<script src="../vendors/lodash/lodash.min.js"></script>
	<script src="../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
	<script src="../vendors/list.js/list.min.js"></script>
	<script src="../assets/js/theme.js"></script>
</body>



</html>