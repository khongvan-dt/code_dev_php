<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
  <script>
    var navbarStyle = localStorage.getItem("navbarStyle");
    if (navbarStyle && navbarStyle !== 'transparent') {
      document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
    }
  </script>
  <div class="d-flex align-items-center">
    <div class="toggle-icon-wrapper">
      <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Toggle Navigation" data-bs-original-title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    </div>
    <a class="navbar-brand" href="index.php">
      <div class="d-flex align-items-center py-3"><img class="me-2" src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40"><span class="font-sans-serif text-primary">falcon</span></div>
    </a>
  </div>
  <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <div class="navbar-vertitog-content scrollbar">
      <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">

        <li class="nav-item"><a class="nav-link active" href="index.php">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default</span></div>
          </a></li>
        <li class="nav-item"><a class="nav-link" href="add-product.php">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">New Products</span></div>
          </a></li>
        <li class="nav-item"><a class="nav-link" href="add-contact.php">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">New Contact</span></div>
          </a></li>
        <li class="nav-item"><a class="nav-link" href="list-products.php">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">List Products</span></div>
          </a></li>

        <li class="nav-item"><a class="nav-link" href="add-category.php">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">New Category</span></div>
          </a></li>
        <li class="nav-item"><a class="nav-link" href="order.php">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order</span></div>
          </a></li>
        <li class="nav-item">
          <a class="nav-link" href="feedback.php">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feedback</span></div>
          </a>
        </li>
        <li class="nav-item">

          <a class="nav-link" href="../../../login_out.php">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1"><i class="fa-sharp fa-light fa-right-from-bracket"></i> Login out</span>
            </div>
          </a>
        </li>





      </ul>

    </div>
  </div>
</nav>