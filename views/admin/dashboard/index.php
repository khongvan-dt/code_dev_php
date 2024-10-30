<?php include('../controllers/indexController.php');
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

                </div>
              </div>
              <div class="card-body px-0 py-0">
                <div class="table-responsive scrollbar">
                  <table class="table table-sm fs-10 mb-0 overflow-hidden">
                    <thead class="bg-200">
                      <tr>
                        <th class="white-space-nowrap">
                          <div class="form-check mb-0 d-flex align-items-center">
                            <input class="form-check-input" id="checkbox-bulk-purchases-select" type="checkbox" data-bulk-select='{"body":"table-purchase-body","actions":"table-purchases-actions","replacedElement":"table-purchases-replace-element"}' />
                          </div>
                        </th>
                        <th class="text-900 text-center">ID</th>
                        <th class="text-900 text-center">Account</th>
                        <th class="text-900 text-center">Name</th>
                        <th class="text-900 text-center">Email</th>
                        <th class="text-900 text-center">Phone</th>
                        <th class="text-900 text-center">Subject Name</th>
                        <th class="text-900 text-center">Note</th>
                      </tr>
                    </thead>
                    <tbody class="list" id="table-purchase-body">
                      <?php if ($feedbackList && $feedbackList->num_rows > 0): ?>
                        <?php $i = 1; ?>
                        <?php while ($row = $feedbackList->fetch_assoc()): ?>
                          <tr class="btn-reveal-trigger">
                            <td class="align-middle" style="width: 28px;">
                              <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" id="recent-purchase-0" data-bulk-select-row="data-bulk-select-row" />
                              </div>
                            </td>
                            <td class="text-900 text-center"><?php echo $i++; ?></td>
                            <td class="text-900 text-center"><?php echo htmlspecialchars($row['user_name']); ?></td>
                            <td class="text-900 text-center"><?php echo htmlspecialchars($row['fullname']); ?></td>
                            <td class="text-900 text-center"><?php echo htmlspecialchars($row['email']); ?></td> <!-- Sửa để hiện Email trước Phone -->
                            <td class="text-900 text-center"><?php echo htmlspecialchars($row['phone_number']); ?></td> <!-- Sửa để hiện Phone sau Email -->
                            <td class="text-900 text-center"><?php echo htmlspecialchars($row['subject_name']); ?></td>
                            <td class="text-900 text-center"><?php echo htmlspecialchars($row['note']); ?></td>

                          </tr>
                        <?php endwhile; ?>
                      <?php else: ?>
                        <tr>
                          <td class="text-900 text-center" colspan="8">No contacts found</td>
                        </tr>
                      <?php endif; ?>
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
                        <button class="btn btn-falcon-default btn-sm mx-2" type="button">
                          <span class="fas fa-filter" data-fa-transform="shrink-3 down-2">

                          </span><span class="d-none d-sm-inline-block ms-1"><a href="list-products.php">List</a></span>
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
                      </tr>
                    </thead>
                    <tbody class="list" id="table-purchase-body">
                      <?php $i = 0;
                      while ($row = $result2->fetch_assoc()): $i++; ?>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative">
                              <img class="rounded-1 border border-200" src="../upload_mau/<?php echo $row['img']; ?>" alt="<?php echo $row['name_sp']; ?>" width="60" />

                            </div>
                          </td>
                          <td class="align-middle  fw-semi-bold"><?php echo $row['name_sp']; ?></td>
                          <td class="align-middle fw-semi-bold"><?php echo $row['price']; ?></td>

                          <td class="align-middle  fw-semi-bold"><?php echo $row['discount']; ?></td>


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