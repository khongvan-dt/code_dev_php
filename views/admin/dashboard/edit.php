<?php include('../controllers/editProduct.php');
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
                <div class="row g-0">
                    <div class="col-lg-12 pe-lg-4">
                        <div class="card mb-3">
                            <div class="card-header bg-body-tertiary" style="text-align: center;">
                                <h4 class="mb-0">Edit product</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="row gx-2">
                                        <div class="col-12 mb-3">
                                            <label class="form-label" for="product-name">Tên sản phẩm:</label>
                                            <input class="form-control" id="product-name" type="text" name="product_name" value="<?php echo htmlspecialchars($row['name_sp']); ?>" placeholder="Nhập tên sản phẩm..." />
                                            <?php if (isset($errors['loi1'])) {
                                                echo $errors['loi1'];
                                            } ?>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label" for="manufacturar-name">Tên danh mục:</label>
                                            <select name="category_id" id="category_id" class="form-control">
                                                <?php foreach ($list_cater as $value) : ?>
                                                    <option value="<?php echo $value['category_id']; ?>" <?php if ($row['category_id'] == $value['category_id']) echo 'selected'; ?>>
                                                        <?php echo htmlspecialchars($value['category_name']); ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label" for="product-image">Hình ảnh sản phẩm:</label>
                                            <input type="file" class="form-control" name="product_image" id="product-image">
                                            <img src="../upload_mau/<?php echo htmlspecialchars($row['img']); ?>" alt="<?php echo htmlspecialchars($row['name_sp']); ?>" width="150px" height="100px">

                                            <?php if (isset($errors['loi2'])) {
                                                echo $errors['loi2'];
                                            } ?>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label" for="product-price">Giá sản phẩm:</label>
                                            <input type="number" class="form-control" id="product-price" name="product_price" value="<?php echo htmlspecialchars($row['price']); ?>" placeholder=" Nhập giá sản phẩm..." />
                                            <?php if (isset($errors['loi2'])) {
                                                echo $errors['loi2'];
                                            } ?>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label" for="price-discount">Giá giảm giá:</label>
                                            <input type="number" class="form-control" id="price-discount" name="price_discount" value="<?php echo htmlspecialchars($row['discount']); ?>" placeholder=" Nhập giá giảm giá..." />
                                            <?php if (isset($errors['loi5'])) {
                                                echo $errors['loi5'];
                                            } ?>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label" for="product-summary">Nội dung sản phẩm:</label>
                                            <textarea class="form-control" id="product-summary" name="content" placeholder="Nhập nội dung sản phẩm..."><?php echo htmlspecialchars($row['content']); ?></textarea>
                                            <?php if (isset($errors['loi6'])) {
                                                echo $errors['loi6'];
                                            } ?>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label" for="product-description">Mô tả sản phẩm:</label>
                                            <textarea class="form-control" id="product-description" name="description" rows="6" placeholder="Nhập mô tả sản phẩm..."><?php echo htmlspecialchars($row['description']); ?></textarea>
                                            <?php if (isset($errors['loi6'])) {
                                                echo $errors['loi6'];
                                            } ?>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="is_host" name="is_host" <?php echo $row['is_host'] ? 'checked' : ''; ?>>
                                                <label class="form-check-label" for="is_host">Sản phẩm nổi bật</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit">Lưu</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('../footer.php '); ?>
            </div>
        </div>
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