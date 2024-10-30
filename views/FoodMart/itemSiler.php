<div class="swiper-slide">
    <div class="product-item">
        <?php
        $price = $product['price'];
        $discount = $product['discount'];

        $discounted_price = round((($price - $discount) / $price) * 100);
        ?>
        <span class="badge bg-success position-absolute m-3">-<?php echo $discounted_price; ?>%</span>

        <figure>

            <a href="shop-details.php?id=<?php echo $product['product_id']; ?>" title="<?php echo htmlspecialchars($product['name_sp']); ?>">
                <img src="../admin/upload_mau/<?php echo htmlspecialchars($product['img']); ?>" class="tab-image">
            </a>
        </figure>
        <h3><a href="shop-details.php?detail=<?php echo htmlspecialchars($product['product_id']); ?>"><?php echo htmlspecialchars($product['name_sp']); ?></a></h3>

        <span class="price">$<?php echo number_format($product['price']); ?></span>
        <form action="" method="post">
            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['product_id']); ?>">
            <div class="d-flex align-items-center justify-content-between">
                <div class="input-group product-qty">
                    <span class="input-group-btn">
                        <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus" aria-label="Decrease quantity">
                            -
                        </button>
                    </span>
                    <input type="number" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" readonly>
                    <span class="input-group-btn">
                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" aria-label="Increase quantity">
                            +
                        </button>
                    </span>
                </div>
                <button type="submit" name="add_to_cart" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></iconify-icon></button>
            </div>
        </form>

    </div>
</div>