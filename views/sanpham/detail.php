<div id="content" class="main-content-wrapper">
    <div class="page-content-inner enable-full-width">
        <div class="container-fluid">
            <div class="row pt--40">
                <div class="col-md-6 product-main-image">
                    <img src="<?= BASE_URL . "uploads/" . getAllAnhsanpham($sanpham["id_sanpham"])[0]["url"] ?>" alt="Ảnh sản phẩm">
                </div>
                <div class="col-md-6 product-main-details mt--40 mt-md--10 mt-sm--30">
                    <div class="product-summary">
                        <div class="product-navigation">
                            <a href="#" class="prev"><i class="dl-icon-left"></i></a>
                            <a href="#" class="next"><i class="dl-icon-right"></i></a>
                        </div>
                        <div class="clearfix"></div>
                        <h3 class="product-title"><?= $sanpham["ten_sanpham"] ?></h3>
                        <!-- <span class="product-stock in-stock float-right">
                            <i class="dl-icon-check-circle1"></i>
                            in stock
                        </span> -->
                        <div class="product-price-wrapper mb--40 mb-md--10">
                            <span class="money">$49.00</span>
                            <!-- <span class="old-price">
                                <span class="money">$60.00</span>
                            </span> -->
                        </div>
                        <div class="clearfix"></div>
                        <p class="product-short-description mb--45 mb-sm--20"><?= $sanpham["mota"] ?></p>
                        <form action="#" class="form--action mb--30 mb-sm--20">
                            <div class="product-action flex-row align-items-center">
                                <div class="quantity">
                                    <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                                </div>
                                <a href="index.php?act=giohang_add&id=<?= $sanpham["id_sanpham"] ?>">
                                    <button type="button" class="btn btn-style-1 btn-large add-to-cart">
                                        Add To Cart
                                    </button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <div class="row justify-content-center pt--45 pt-lg--50 pt-md--55 pt-sm--35">
                <div class="col-12">
                    <div class="product-data-tab tab-style-1">
                        <div class="nav nav-tabs product-data-tab__head mb--40 mb-md--30" id="product-tab" role="tablist">
                            <button type="button" class="product-data-tab__link nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" role="tab" aria-selected="true">
                                <span>Description</span>
                            </button>
                            <button type="button" class="product-data-tab__link nav-link" id="nav-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-reviews" role="tab" aria-selected="true">
                                <span>Reviews(1)</span>
                            </button>
                        </div>
                        <div class="tab-content product-data-tab__content" id="product-tabContent">
                            <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                <div class="product-description">
                                    <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna
                                        molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci.
                                        Aliquam egestas libero ac turpis pharetra, in vehicula lacus
                                        scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit
                                        arcu.

                                    <p>Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi. Maecenas eu
                                        ante a elit tempus fermentum. Aliquam commodo tincidunt semper.
                                        Phasellus accumsan, justo ac mollis pharetra, ex dui pharetra nisl,
                                        a scelerisque ipsum nulla ac sem. Cras eu risus urna. Duis lorem
                                        sapien, congue eget nisl sit amet, rutrum faucibus elit.</p>

                                    <ul>
                                        <li>Maecenas eu ante a elit tempus fermentum. Aliquam commodo
                                            tincidunt semper</li>
                                        <li>Aliquam est et tempus. Eaecenas libero ante, tincidunt vel</li>
                                    </ul>

                                    <p>Curabitur sodales euismod nibh. Sed iaculis sed orci eget semper. Nam
                                        auctor, augue et eleifend tincidunt, felis mauris convallis neque,
                                        in placerat metus urna laoreet diam. Morbi sagittis facilisis arcu
                                        sed ornare. Maecenas dictum urna ut facilisis rhoncus.iaculis sed
                                        orci eget semper. Nam auctor, augue et eleifend tincidunt, felis
                                        mauris</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                                <div class="product-reviews">
                                    <h3 class="review__title">1 review for Waxed-effect pleated skirt</h3>
                                    <ul class="review__list">
                                        <li class="review__item">
                                            <div class="review__container">
                                                <img src="assets/img/others/comment-icon-2.jpg" alt="Review Avatar" class="review__avatar">
                                                <div class="review__text">
                                                    <div class="product-rating float-right">
                                                        <span>
                                                            <i class="dl-icon-star rated"></i>
                                                            <i class="dl-icon-star rated"></i>
                                                            <i class="dl-icon-star rated"></i>
                                                            <i class="dl-icon-star rated"></i>
                                                            <i class="dl-icon-star rated"></i>
                                                        </span>
                                                    </div>
                                                    <div class="review__meta">
                                                        <strong class="review__author">John Snow </strong>
                                                        <span class="review__dash">-</span>
                                                        <span class="review__published-date">November 20,
                                                            2018</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <p class="review__description">Aliquam egestas libero ac
                                                        turpis pharetra, in vehicula lacus scelerisque.
                                                        Vestibulum ut sem laoreet, feugiat tellus at, hendrerit
                                                        arcu.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="review-form-wrapper">
                                        <span class="reply-title"><strong>Add a review</strong></span>
                                        <form action="#" class="form">
                                            <div class="form-notes mb--20">
                                                <p>Your email address will not be published. Required fields are
                                                    marked <span class="required">*</span></p>
                                            </div>
                                            <div class="form__group mb--30 mb-sm--20">
                                                <div class="revew__rating">
                                                    <p class="stars selected">
                                                        <a class="star-1 active" href="#">1</a>
                                                        <a class="star-2" href="#">2</a>
                                                        <a class="star-3" href="#">3</a>
                                                        <a class="star-4" href="#">4</a>
                                                        <a class="star-5" href="#">5</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form__group mb--30 mb-sm--20">
                                                <div class="row">
                                                    <div class="col-sm-6 mb-sm--20">
                                                        <label class="form__label" for="name">Name<span class="required">*</span></label>
                                                        <input type="text" name="name" id="name" class="form__input">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="form__label" for="email">email<span class="required">*</span></label>
                                                        <input type="email" name="email" id="email" class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form__group mb--30 mb-sm--20">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="form__label" for="email">Your Review<span class="required">*</span></label>
                                                        <textarea name="review" id="review" class="form__input form__input--textarea"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form__group">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <input type="submit" value="Submit" class="btn btn-style-1 btn-submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="row pt--65 pt-md--45 pt-sm--25 pb--35 pb-md--25 pb-sm--15">
                <div class="col-12">
                    <div class="row mb--40 mb-md--30">
                        <div class="col-12 text-center">
                            <h2 class="heading-secondary">Up-Sells Products</h2>
                            <hr class="separator center mt--25 mt-md--15">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="airi-element-carousel product-carousel nav-vertical-center" data-slick-options='{
                                    "spaceBetween": 30,
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "arrows": true, 
                                    "prevArrow": "dl-icon-left", 
                                    "nextArrow": "dl-icon-right" 
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":450, "settings": {"slidesToShow": 1} }
                                    ]'>
                                <div class="airi-product">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <div class="product-image--holder">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-8-2.jpg" alt="Product Image" class="primary-image">
                                                    <img src="assets/img/products/prod-8-1.jpg" alt="Product Image" class="secondary-image">
                                                </a>
                                            </div>
                                            <div class="airi-product-action">
                                                <div class="product-action">
                                                    <a class="quickview-btn action-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick Shop">
                                                        <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                            <i class="dl-icon-view"></i>
                                                        </span>
                                                    </a>
                                                    <a class="add_to_cart_btn action-btn" href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart">
                                                        <i class="dl-icon-cart29"></i>
                                                    </a>
                                                    <a class="add_wishlist action-btn" href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                                        <i class="dl-icon-heart4"></i>
                                                    </a>
                                                    <a class="add_compare action-btn" href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare">
                                                        <i class="dl-icon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <div class="product-info text-center">
                                            <h3 class="product-title">
                                                <a href="product-details.html">Polka dot blouse</a>
                                            </h3>
                                            <span class="product-price-wrapper">
                                                <span class="money">$49.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$60.00</span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="airi-product">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <div class="product-image--holder">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-3-2.jpg" alt="Product Image" class="primary-image">
                                                    <img src="assets/img/products/prod-3-3.jpg" alt="Product Image" class="secondary-image">
                                                </a>
                                            </div>
                                            <div class="airi-product-action">
                                                <div class="product-action">
                                                    <a class="quickview-btn action-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick Shop">
                                                        <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                            <i class="dl-icon-view"></i>
                                                        </span>
                                                    </a>
                                                    <a class="add_to_cart_btn action-btn" href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart">
                                                        <i class="dl-icon-cart29"></i>
                                                    </a>
                                                    <a class="add_wishlist action-btn" href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                                        <i class="dl-icon-heart4"></i>
                                                    </a>
                                                    <a class="add_compare action-btn" href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare">
                                                        <i class="dl-icon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <div class="product-info text-center">
                                            <h3 class="product-title">
                                                <a href="product-details.html">Dotted mesh blouse</a>
                                            </h3>
                                            <span class="product-price-wrapper">
                                                <span class="money">$49.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="airi-product">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <div class="product-image--holder">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-1-1.jpg" alt="Product Image" class="primary-image">
                                                    <img src="assets/img/products/prod-1-4.jpg" alt="Product Image" class="secondary-image">
                                                </a>
                                            </div>
                                            <div class="airi-product-action">
                                                <div class="product-action">
                                                    <a class="quickview-btn action-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick Shop">
                                                        <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                            <i class="dl-icon-view"></i>
                                                        </span>
                                                    </a>
                                                    <a class="add_to_cart_btn action-btn" href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart">
                                                        <i class="dl-icon-cart29"></i>
                                                    </a>
                                                    <a class="add_wishlist action-btn" href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                                        <i class="dl-icon-heart4"></i>
                                                    </a>
                                                    <a class="add_compare action-btn" href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare">
                                                        <i class="dl-icon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <div class="product-info text-center">
                                            <h3 class="product-title">
                                                <a href="product-details.html">Ruffled polka dot blouse</a>
                                            </h3>
                                            <span class="product-price-wrapper">
                                                <span class="money">$49.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="airi-product">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <div class="product-image--holder">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-20-1.jpg" alt="Product Image" class="primary-image">
                                                    <img src="assets/img/products/prod-20-2.jpg" alt="Product Image" class="secondary-image">
                                                </a>
                                            </div>
                                            <div class="airi-product-action">
                                                <div class="product-action">
                                                    <a class="quickview-btn action-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick Shop">
                                                        <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                            <i class="dl-icon-view"></i>
                                                        </span>
                                                    </a>
                                                    <a class="add_to_cart_btn action-btn" href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart">
                                                        <i class="dl-icon-cart29"></i>
                                                    </a>
                                                    <a class="add_wishlist action-btn" href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                                        <i class="dl-icon-heart4"></i>
                                                    </a>
                                                    <a class="add_compare action-btn" href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare">
                                                        <i class="dl-icon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <span class="product-badge sale">Sale</span>
                                        </figure>
                                        <div class="product-info text-center">
                                            <h3 class="product-title">
                                                <a href="product-details.html">Limited edition v-neck
                                                    t-shirt</a>
                                            </h3>
                                            <span class="product-price-wrapper">
                                                <span class="money">$49.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="airi-product">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <div class="product-image--holder">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-20-1.jpg" alt="Product Image" class="primary-image">
                                                    <img src="assets/img/products/prod-20-2.jpg" alt="Product Image" class="secondary-image">
                                                </a>
                                            </div>
                                            <div class="airi-product-action">
                                                <div class="product-action">
                                                    <a class="quickview-btn action-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick Shop">
                                                        <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                            <i class="dl-icon-view"></i>
                                                        </span>
                                                    </a>
                                                    <a class="add_to_cart_btn action-btn" href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart">
                                                        <i class="dl-icon-cart29"></i>
                                                    </a>
                                                    <a class="add_wishlist action-btn" href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                                        <i class="dl-icon-heart4"></i>
                                                    </a>
                                                    <a class="add_compare action-btn" href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare">
                                                        <i class="dl-icon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <span class="product-badge sale">Sale</span>
                                        </figure>
                                        <div class="product-info text-center">
                                            <h3 class="product-title">
                                                <a href="product-details.html">Limited edition v-neck
                                                    t-shirt</a>
                                            </h3>
                                            <span class="product-price-wrapper">
                                                <span class="money">$49.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row pt--35 pt-md--25 pt-sm--15 pb--75 pb-md--55 pb-sm--35">
                <div class="col-12">
                    <div class="row mb--40 mb-md--30">
                        <div class="col-12 text-center">
                            <h2 class="heading-secondary">Sản phẩm tương tự</h2>
                            <hr class="separator center mt--25 mt-md--15">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="airi-element-carousel product-carousel nav-vertical-center" data-slick-options='{
                                    "spaceBetween": 30,
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "arrows": true, 
                                    "prevArrow": "dl-icon-left", 
                                    "nextArrow": "dl-icon-right" 
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":450, "settings": {"slidesToShow": 1} }
                                    ]'>
                                <?php $listsanpham_tuongtu = getAllSanpham_Tuongtu($sanpham["id_danhmuc"], $sanpham["id_sanpham"]);
                                foreach ($listsanpham_tuongtu as $sanpham_tuongtu) { ?>
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="<?= BASE_URL . "uploads/" . getAllAnhsanpham($sanpham_tuongtu["id_sanpham"])[0]["url"] ?>" alt="Product Image" class="primary-image">
                                                        <img src="<?= BASE_URL . "uploads/" . getAllAnhsanpham($sanpham_tuongtu["id_sanpham"])[0]["url"] ?>" alt="Product Image" class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="add_to_cart_btn action-btn" href="index.php?act=giohang_add&id=<?= $sanpham_tuongtu["id_sanpham"] ?>" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html"><?= $sanpham_tuongtu["ten_sanpham"] ?></a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$<?= $sanpham_tuongtu["gia"] ?></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>