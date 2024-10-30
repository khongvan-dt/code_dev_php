<?php include('../controllers/feedbackController.php');
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

                        <th class="text-900 text-center">ID</th>
                        <th class="text-900 text-center">Account</th>
                        <th class="text-900 text-center">Name</th>
                        <th class="text-900 text-center">Phone</th>
                        <th class="text-900 text-center">Email</th>
                        <th class="text-900 text-center">Subject Name</th>
                        <th class="text-900 text-center">Note</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php if ($result && $result->num_rows > 0): ?>
                        <?php $i = 1; ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                          <tr>
                            <td class="text-900 text-center"><?php echo $i++; ?></td>
                            <td class="text-900 text-center"><?php echo htmlspecialchars($row['user_name']); ?></td>
                            <td class="text-900 text-center"><?php echo htmlspecialchars($row['fullname']); ?></td>
                            <td class="text-900 text-center"><?php echo htmlspecialchars($row['phone_number']); ?></td>
                            <td class="text-900 text-center"><?php echo htmlspecialchars($row['email']); ?></td>
                            <td class="text-900 text-center"><?php echo htmlspecialchars($row['subject_name']); ?></td>
                            <td class="text-900 text-center"><?php echo htmlspecialchars($row['note']); ?></td>
                          </tr>
                        <?php endwhile; ?>
                      <?php else: ?>
                        <tr>
                          <td class="text-900 text-center" colspan="7" class="text-center">No contacts found</td>
                        </tr>
                      <?php endif; ?>

                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>

        </div>

        <?php include('../footer.php'); ?>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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