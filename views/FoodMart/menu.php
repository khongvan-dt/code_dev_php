<?php include('controller/menuController.php');
?>

<section class="py-5 overflow-hidden">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <div class="section-header d-flex flex-wrap justify-content-between mb-5">
          <h2 class="section-title"><a href="product.php">Category</a></h2>

          <div class="d-flex align-items-center">
            <a href="#" class="btn-link text-decoration-none">View All Categories →</a>
            <div class="swiper-buttons">
              <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
              <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="category-carousel swiper">
          <div class="swiper-wrapper">
            <?php while ($category2 = $result_categories2->fetch_assoc()): ?>
              <a href="productCategory.php?category_id=<?php echo htmlspecialchars($category2['category_id']); ?>" class="nav-link category-item swiper-slide">
                <h3 class="category-title"><?php echo htmlspecialchars($category2['category_name']); ?></h3>
              </a>
            <?php endwhile; ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>