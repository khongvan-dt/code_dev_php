<?php

if ($result_products->num_rows > 0) {
    while ($row = $result_products->fetch_assoc()) {
        $product_id = $row['product_id'];
        $name_sp = $row['name_sp'];
        $price = $row['price'];
        $discount = $row['discount'];
        $img = $row['img'];

        $discounted_price = round((($price - $discount) / $price) * 100);
        echo '
        <div class="col">
            <div class="product-item">
                <span class="badge bg-success position-absolute m-3">-' . $discounted_price . '%</span>

                <figure>
                    <a href="index.php" title="' . htmlspecialchars($name_sp) . '">
                        <img src="../admin/upload_mau/' . htmlspecialchars($img) . '" class="tab-image" alt="' . htmlspecialchars($name_sp) . '">
                    </a>
                </figure>
                <h3><a href="shop-details.php?detail=' . $product_id . '">' . htmlspecialchars($name_sp) . '</a></h3>  
               
               
                <span class="price">$' . number_format($price, 2) . '</span>
                <form action="" method="post">
                    <input type="hidden" name="product_id" value="' . $product_id . '">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="input-group product-qty">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                   -
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" readonly>
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                   +
                                </button>
                            </span>
                        </div>
                        <button type="submit" name="add_to_cart" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></iconify-icon></button>
                    </div>
                </form>
            </div>
        </div>';
    }
} else {
    echo "No products found.";
}


?>
