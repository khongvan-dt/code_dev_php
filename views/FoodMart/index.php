<?php include('controller/indexController.php');
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
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

</head>

<body>

<?php include('header.php'); ?>


  <?php include('banner.php'); ?>
  <?php include('menu.php'); ?>


  <section class="py-5">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-6">
          <div class="banner-ad bg-danger mb-3" style="background: url('images/ad-image-3.png');background-repeat: no-repeat;background-position: right bottom;">
            <div class="banner-content p-5">

              <div class="categories text-primary fs-3 fw-bold">Upto 25% Off</div>
              <h3 class="banner-title">Luxa Dark Chocolate</h3>
              <p>Very tasty & creamy vanilla flavour creamy muffins.</p>
              <a href="#" class="btn btn-dark text-uppercase">Show Now</a>

            </div>

          </div>
        </div>
        <div class="col-md-6">
          <div class="banner-ad bg-info" style="background: url('images/ad-image-4.png');background-repeat: no-repeat;background-position: right bottom;">
            <div class="banner-content p-5">

              <div class="categories text-primary fs-3 fw-bold">Upto 25% Off</div>
              <h3 class="banner-title">Creamy Muffins</h3>
              <p>Very tasty & creamy vanilla flavour creamy muffins.</p>
              <a href="#" class="btn btn-dark text-uppercase">Show Now</a>

            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
  <?php if (!empty($categories)): ?>
    <div class="product-list">
        <?php foreach ($categories as $category): ?>
            <section class="py-5 overflow-hidden">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="section-header d-flex flex-wrap justify-content-between my-5">
                                <h2 class="section-title">
                                <a href="productCategory.php?category_id=<?php echo htmlspecialchars($category_id); ?>">
                                <?php echo htmlspecialchars($category['category_name']); ?>
                                </h2>  
                                <div class="d-flex align-items-center">
                                    <a href="#" class="btn-link text-decoration-none">View All Categories →</a>
                                    <div class="swiper-buttons">
                                        <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                                        <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="products-carousel swiper">
                                <div class="swiper-wrapper">

                                    <?php foreach ($category['products'] as $product): ?>
                                      <?php include('itemSiler.php'); ?>
                                    <?php endforeach; ?>

                                </div>  
                            </div>  
                        </div>
                    </div>
                </div>
            </section>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>No categories found.</p>
<?php endif; ?>


 
 
 
   
  <?php include('menuFooter.php'); ?>

  <?php include('footer.php'); ?>

  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
</body>

</html>