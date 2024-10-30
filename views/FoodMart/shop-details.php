<?php include('controller/shopDetailController.php'); ?>
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
    <link rel="stylesheet" type="text/css" href="css/shopDetail.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

</head>

<body>
    <?php include('header.php'); ?>


    <section class="mb-5">
        <div class="card">
            <div style="text-align: center;">
                <h3><b>Chi tiết sản phẩm</b> </h3>
            </div>
            <div class="row g-0">
                <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image">
                            <img src="../admin/upload_mau/<?php echo htmlspecialchars($list['img']); ?>" id="main_product_image" width="350">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 right-side">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3><?php echo htmlspecialchars($list['name_sp']); ?></h3>
                            <span class="heart"><i class='bx bx-heart'></i></span>
                        </div>
                        <div class="mt-2 pr-3 content">
                            <p><?php echo htmlspecialchars($list['content']); ?></p>
                        </div>
                        <h3><?php echo number_format($list['price']); ?></h3>

                        <form action="" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $list['product_id']; ?>">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="input-group product-qty">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus" aria-label="Decrease quantity">
                                            -
                                        </button>
                                    </span>
                                    <input type="number" id="quantity" name="quantity" style="width:10% !important; flex:none;" class="form-control input-number" value="1" min="1" readonly>
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" aria-label="Increase quantity">
                                            +
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <div class="buttons d-flex flex-row mt-5 gap-3">
                                <button type="submit" name="add_to_cart" class="btn btn-dark">Add to Basket</button>
                            </div>
                        </form>


                    </div>

                </div>
                <div class="p-3 right-side">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Description</h3>
                        <span class="heart"><i class='bx bx-heart'></i></span>
                    </div>
                    <p><?php echo htmlspecialchars($list['content']); ?></p>
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