<?php include('controller/headerController.php'); ?>

<?php include('controller/add_to_cart.php'); ?>

<div class="preloader-wrapper">
  <div class="preloader">
  </div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
  <div class="offcanvas-header justify-content-center">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Your cart</span>
      </h4>
      <ul class="list-group mb-3">
        <?php if (!empty($_SESSION['cart'])): ?>
          <?php
          $total_price = 0;
          foreach ($_SESSION['cart'] as $product_id => $quantity):
            $product_query = "SELECT * FROM Products WHERE product_id = $product_id";
            $product_result = $conn->query($product_query);
            if ($product_result && $product_result->num_rows > 0):
              $product = $product_result->fetch_assoc();
              $item_price = $product['price'] * $quantity;
              $total_price += $item_price;
          ?>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0"><?php echo htmlspecialchars($product['name_sp']); ?></h6>
                  <small class="text-body-secondary">Brief description</small>
                </div>
                <span class="text-body-secondary"><?php echo number_format($item_price); ?> VND</span>
              </li>
            <?php endif; ?>
          <?php endforeach; ?>

          <li class="list-group-item d-flex justify-content-between">
            <span>Total (VND)</span>
            <strong><?php echo number_format($total_price); ?> VND</strong>
          </li>
        <?php else: ?>
          <li class="list-group-item d-flex justify-content-between">
            <span>Your cart is empty.</span>
          </li>
        <?php endif; ?>
      </ul>


      <a href="shoping-cart.php" class="w-100 btn btn-primary btn-lg">Continue to checkout</a>
    </div>
  </div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch" aria-labelledby="Search">
  <div class="offcanvas-header justify-content-center">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Search</span>
      </h4>
      <form role="search" action="index.php" method="get" class="d-flex mt-3 gap-0">
        <input class="form-control rounded-start rounded-0 bg-light" type="email" placeholder="What are you looking for?" aria-label="What are you looking for?">
        <button class="btn btn-dark rounded-end rounded-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</div>

<header>
  <div class="container-fluid">
    <div class="row py-3 border-bottom">

      <div class="col-sm-4 col-lg-3 text-center text-sm-start">
        <div class="main-logo">
          <a href="index.php">
            <img src="images/logo.png" alt="logo" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block">
        <div class="search-bar row bg-light p-2 my-2 rounded-4">

          <div class="col-11 col-md-7">
            <form id="search-form" class="text-center" action="index.php" method="post">
              <input type="text" class="form-control border-0 bg-transparent" placeholder="Search for more than 20,000 products" />
            </form>
          </div>
          <div class="col-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
            </svg>
          </div>
        </div>
      </div>

      <div class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">

        <ul class="d-flex justify-content-end list-unstyled m-0">
          <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
            <li>Welcome, <?php echo htmlspecialchars($user_name); ?>
              <br />
              <a class="a-left" href="../../login_out.php">Logout</a>
            </li>

          <?php else: ?>
            <li><a href="../../login.php">Login</a></li>
          <?php endif; ?>

          <li class="d-lg-none">
            <a href="#" class="rounded-circle bg-light p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
              <svg width="24" height="24" viewBox="0 0 24 24">
                <use xlink:href="#cart"></use>
              </svg>
            </a>
          </li>
          <li class="d-lg-none">
            <a href="#" class="rounded-circle bg-light p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
              <svg width="24" height="24" viewBox="0 0 24 24">
                <use xlink:href="#search"></use>
              </svg>
            </a>
          </li>
        </ul>

        <div class="cart text-end d-none d-lg-block dropdown">
          <button class="border-0 bg-transparent d-flex flex-column gap-2 lh-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
            <span class="fs-6 text-muted dropdown-toggle">Your Cart</span>
            <?php
            $total_price = 0;

            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
              foreach ($_SESSION['cart'] as $product_id => $quantity) {
                $product_query = "SELECT price FROM Products WHERE product_id = $product_id";
                $product_result = $conn->query($product_query);
                if ($product_result && $product_result->num_rows > 0) {
                  $product = $product_result->fetch_assoc();
                  $total_price += $product['price'] * $quantity;
                }
              }
            }

            echo '<span class="cart-total fs-5 fw-bold">' . number_format($total_price) . ' VND</span>';
            ?> </button>
        </div>
      </div>

    </div>
  </div>
  <div class="container-fluid">
    <div class="row py-3">
      <div class="d-flex  justify-content-center justify-content-sm-between align-items-center">
        <nav class="main-menu d-flex navbar navbar-expand-lg">

          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-header justify-content-center">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">



              <ul class="navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0">
                <?php while ($category2 = $result_categories2->fetch_assoc()): ?>
                  <li class="nav-item active">
                    <a href="productCategory.php?category_id=<?php echo htmlspecialchars($category2['category_id']); ?>" class="nav-link"><?php echo htmlspecialchars($category2['category_name']); ?></a>
                  </li>
                <?php endwhile; ?>
                <li class="nav-item active">
                    <a href="contact.php" class="nav-link">Contact</a>
                  </li>
              </ul>

            </div>
          </div>
      </div>
    </div>
  </div>
</header>