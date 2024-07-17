<div class="tab-pane show active p-5" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
    <div class="row">
        <?php foreach ($listSanpham as $sanpham) : ?>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
            <div class="airi-product">
                <div class="product-inner">
                    <figure class="product-image">
                        <!-- Hình ảnh sản phẩm  -->
                        <div class="product-image--holder">
                            <a href="product-details.html">
                                <img src="<?= BASE_URL . "uploads/" . getAllAnhsanpham($sanpham["id_sanpham"])[0]["url"] ?>" alt="Product Image" class="primary-image">
                                <img src="assets/img/products/prod-17-4-1.jpg" alt="Product Image" class="secondary-image">
                            </a>
                        </div>
                        <!-- End hình ảnh  -->

                        <div class="airi-product-action">
                            <div class="product-action">
                                <!-- icon view -->
                                <a class="quickview-btn action-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick Shop">
                                    <span data-bs-toggle="modal" data-bs-target="#productModal">
                                        <i class="dl-icon-view"></i>
                                    </span>
                                </a>
                                <!-- icon giỏ hàng -->
                                <a class="add_to_cart_btn action-btn" href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart">
                                    <i class="dl-icon-cart29"></i>
                                </a>
                                <!-- icon thích -->
                                <a class="add_wishlist action-btn" href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                    <i class="dl-icon-heart4"></i>
                                </a>
                                <!-- icon thêm -->
                                <a class="add_compare action-btn" href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare">
                                    <i class="dl-icon-compare"></i>
                                </a>
                            </div>
                        </div>
                    </figure>

                    <!-- Giá sản phẩm, tên  -->
                    <div class="product-info">
                        <h3 class="product-title">
                            <a href="product-details.html"><?= $sanpham["ten_sanpham"] ?></a>
                        </h3>
                        <span class="product-price-wrapper">
                            <span class="money">$<?= $sanpham["gia"] ?></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>