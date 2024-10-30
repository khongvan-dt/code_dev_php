<?php include('../controllers/orderController.php');
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

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
      <?php include('../menu.php'); ?>
      <?php include('../menuTop.php'); ?>

      <div class="content">
        <?php include('navbar.php'); ?>
        <script src="../js/navbarPosition.js"></script>

        <div class="row g-0">
          <div class="col-lg-12 pe-lg-4" style="margin-bottom: 20px;">
            <div class="card h-lg-100 overflow-hidden">
              <div class="card-body p-0">
                <div class="table-responsive scrollbar">
                  <table class="table table-dashboard mb-0 table-borderless fs-10 border-200">
                    <thead class="bg-body-tertiary">
                      <tr>
                        <th class="text-900 text-center">STT</th>
                        <th class="text-900 text-center">User Name</th>
                        <th class="text-900 text-center">Customer Name</th>
                        <th class="text-900 text-center">Phone</th>
                        <th class="text-900 text-center">Address</th>
                        <th class="text-900 text-center">Product Name</th>
                        <th class="text-900 text-center">Price</th>
                        <th class="text-900 text-center">Quantity</th>
                        <th class="text-900 text-center">Note</th>
                        <th class="text-900 text-center">Total</th>
                        <th class="text-900 text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($row = $result2->fetch_assoc()) : $i++; ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $row['user_name']; ?></td>
                          <td><?php echo $row['fullname']; ?></td>
                          <td><?php echo $row['phone_number']; ?></td>
                          <td><?php echo $row['address']; ?></td>
                          <td>
                            <?php
                            $order_id = $row['order_id'];
                            $sql = "SELECT Order_Details.order_id, Products.name_sp, 
                                                          Products.discount, Products.img, Order_Details.num
                                                          FROM Order_Details
                                                          INNER JOIN Products 
                                                              ON Order_Details.product_id = Products.product_id
                                                          WHERE Order_Details.order_id ='$order_id'";
                            $result = $conn->query($sql);
                            while ($product_row = $result->fetch_assoc()) {
                              echo $product_row['name_sp'] . '<br/>';
                            }
                            ?>
                          </td>

                          <td>
                            <?php
                            $result = $conn->query($sql);
                            while ($product_row = $result->fetch_assoc()) {
                              echo $product_row['discount'] . '$' . '<br/>';
                            }
                            ?>
                          </td>
                          <td>
                            <?php
                            $result = $conn->query($sql);
                            while ($product_row = $result->fetch_assoc()) {
                              echo $product_row['num'] . '<br/>';
                            }
                            ?>
                          </td>
                          <td><?php echo $row['note']; ?></td>
                          <td><?php echo $row['total_money'] . '$'; ?></td>
                          <td>
                          <td>
                            <button type="button" class="btn btn-info"
                              data-bs-toggle="modal"
                              data-bs-target="#viewModal"
                              data-order-id="<?php echo $row['order_id']; ?>"
                              data-category="<?php echo $product_row['category_name'] ?? 'N/A'; ?>"
                              data-name="<?php echo $product_row['name_sp'] ?? 'N/A'; ?>"
                              data-price="<?php echo $product_row['discount'] ?? 'N/A'; ?>"
                              data-discount="<?php echo $product_row['discount'] ?? 'N/A'; ?>"
                              data-description="<?php echo $product_row['description'] ?? 'N/A'; ?>"
                              data-img="<?php echo $product_row['img'] ?? ''; ?>">
                              View Details
                            </button>
                          </td>




                          </td>
                        </tr>
                      <?php endwhile; ?>
                    </tbody>

                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel">Order Details</h5>
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
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>



        <?php include('../footer.php'); ?>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
      viewModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;

        var category = button.getAttribute('data-category') || 'N/A';
        var name = button.getAttribute('data-name') || 'N/A';
        var price = button.getAttribute('data-price') || 'N/A';
        var discount = button.getAttribute('data-discount') || 'N/A';
        var description = button.getAttribute('data-description') || 'N/A';
        var img = button.getAttribute('data-img') || '';
        var img2 = button.getAttribute('data-img2') || '';

        var modalCategory = viewModal.querySelector('#modalCategory');
        var modalName = viewModal.querySelector('#modalName');
        var modalPrice = viewModal.querySelector('#modalPrice');
        var modalDiscount = viewModal.querySelector('#modalDiscount');
        var modalDescription = viewModal.querySelector('#modalDescription');
        var modalImg = viewModal.querySelector('#modalImg');

        modalCategory.textContent = category;
        modalName.textContent = name;
        modalPrice.textContent = price;
        modalDiscount.textContent = discount;
        modalDescription.textContent = description;
        modalImg.src = img;
      });
    </script>
    <script src="../js/sweetalert.js"></script>

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