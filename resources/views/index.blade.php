@extends('layouts.app') @section('content')
<div class="block fullwidth full-nopad bottom-space">
    <div class="container">
        <!-- Main Slider -->
        <div class="mainSlider" data-thumb="true" data-thumb-width="230" data-thumb-height="100">
            <div class="sliderLoader">Loading...</div>
            <!-- Slider main container -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide" data-thumb="/user/images/slider/slide-02-thumb.png" data-href="http://google.com" data-target="_blank">
                        <!-- _blank or _self ( _self is default )-->
                        <div class="wrapper">
                            <figure>
                                <img src="/user/images/slider/slide-02.jpg" alt="">
                            </figure>
                            <div class="text2-1 animate" data-animate="flipInY" data-delay="0"> Seikō </div>
                            <div class="text2-2 animate" data-animate="bounceIn" data-delay="500"> Season sale </div>
                            <div class="text2-3 animate" data-animate="bounceIn" data-delay="1000"> popular brands </div>
                            <div class="text2-4 animate" data-animate="rubberBand" data-delay="1500"> 70% </div>
                            <div class="text2-5 animate" data-animate="hinge" data-delay="2000"> OFF </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-thumb="/user/images/slider/slide-01-thumb.png">
                        <div class="wrapper">
                            <figure>
                                <img src="/user/images/slider/slide-01.jpg" alt="">
                            </figure>
                            <div class="caption animate" data-animate="fadeIn">
                                <div class="text1 animate" data-animate="flipInY" data-delay="0"> Seikō </div>
                                <div class="text2 animate" data-animate="bounceInLeft" data-delay="500">
                                    <strong>New</strong> collection </div>
                                <div class="text3 animate" data-animate="bounceInLeft" data-delay="1500"> WOMEN'S
                                    <strong>FASHION</strong>
                                </div>
                                <div class="animate" data-animate="fadeIn" data-delay="2000">
                                    <!-- coolbutton -->
                                    <a href="#" class="cool-btn" style="-webkit-clip-path: url(#coolButton); clip-path: url(#coolButton);">
                                        <span>MORE</span>
                                    </a>
                                    <svg class="clip-svg">
                                        <defs>
                                            <clipPath id="coolButton" clipPathUnits="objectBoundingBox">
                                                <polygon points="0 .18, .99 .15, .91 .85, .07 .8" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <!-- // coolbutton -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-thumb="/user/images/slider/slide-03-thumb.png">
                        <div class="wrapper">
                            <figure>
                                <img src="/user/images/slider/slide-03.jpg" alt="">
                            </figure>
                            <div class="text3-1 animate" data-animate="bounceInDown" data-delay="0"> Street </div>
                            <div class="text3-2 animate" data-animate="bounceInDown" data-delay="500"> Fashion </div>
                            <div class="text3-3 animate" data-animate="bounceInDown" data-delay="1000"> And </div>
                            <div class="text3-4 animate" data-animate="bounceIn" data-delay="1500"> Urban </div>
                            <div class="text3-5 animate" data-animate="bounceIn" data-delay="2000"> Subcultures </div>
                            <a href="#" class="text3-6 animate" data-animate="rubberBand" data-delay="2500"> SHOP NOW </a>
                        </div>
                    </div>
                    <div class="swiper-slide" data-thumb="/user/images/slider/slide-04-thumb.png">
                        <div class="wrapper">
                            <figure>
                                <img src="/user/images/slider/slide-04.jpg" alt="">
                            </figure>
                            <div class="text4-1 animate" data-animate="bounceInLeft" data-delay="0">Summer</div>
                            <div class="text4-2 animate" data-animate="bounceInDown" data-delay="500">very soon</div>
                            <div class="text4-3 animate" data-animate="bounceInUp" data-delay="1000">Things to buy a swimsuit at a discount</div>
                            <a href="#" class="text4-4 animate" data-animate="bounceInLeft" data-delay="1500">SHOP NOW</a>
                        </div>
                    </div>
                </div>
                <!-- pagination -->
                <div class="swiper-pagination"></div>
                <!-- pagination thumbs -->
                <div class="swiper-pagination-thumbs">
                    <div class="thumbs-wrapper">
                        <div class="thumbs"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Slider -->
    </div>
</div>
<div class="block">
    <div class="container">
        <!-- Wellcome text -->
        <div class="text-center bottom-space">
            <h1 class="size-lg no-padding">WELCOME TO
                <span class="logo-font custom-color">Seikō</span> STORE</h1>
            <div class="line-divider"></div>
            <p class="custom-color-alt">Lorem ipsum dolor sit amet, ex eam mundi populo accusamus, aliquam quaestio petentium te cum.
                <br> Vim ei oblique tacimates, usu cu iudico graeco. Graeci eripuit inimicus vel eu, eu mel unum laoreet splendide,
                cu integre apeirian has.
            </p>
        </div>
        <!-- /Wellcome text -->
    </div>
</div>
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="box style2 bgcolor1 text-center">
                    <div class="box-icon">
                        <i class="icon icon-truck"></i>
                    </div>
                    <h3 class="box-title">FREE SHIPPING</h3>
                    <div class="box-text">Free shipping on all orders over $199</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box style2 bgcolor2 text-center">
                    <div class="box-icon">
                        <i class="icon icon-dollar"></i>
                    </div>
                    <h3 class="box-title">MONEY BACK</h3>
                    <div class="box-text">100% money back guarantee</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box style2 bgcolor3 text-center">
                    <div class="box-icon">
                        <i class="icon icon-help"></i>
                    </div>
                    <h3 class="box-title">ONLINE SUPPORT</h3>
                    <div class="box-text">Service support fast 24/7</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block">
    <div class="container">
        <ul class="filters filters-product style2">
            <li>
                <a href="#" class="filter-label active">All
                    <span class="count">8</span>
                </a>
            </li>
            <li>
                <a href="#" class="filter-label" data-filter=".category1">New
                    <span class="count">4</span>
                </a>
            </li>
            <li>
                <a href="#" class="filter-label" data-filter=".category2">Sale
                    <span class="count">4</span>
                </a>
            </li>
        </ul>
        <div class="products-grid-wrapper isotope-wrapper">
            <div class="products-grid isotope four-in-row product-variant-5" style="position: relative; height: 1016.92px;">
                <!-- Product Item -->
                <div class="product-item previews-2 large with-previews category1" style="position: absolute; left: 0px; top: 509px; height: 478px;">
                    <div class="product-item-inside">
                        <div class="product-item-info">
                            <!-- Product Photo -->
                            <div class="product-item-photo">
                                <div class="product-item-gallery">
                                    <!-- product main photo -->
                                    <div class="product-item-gallery-main">
                                        <img class="product-image-photo" src="/user/images/products/product-18.jpg" alt="">
                                        <!-- <a href="quick-view.html" title="Quick View" class="quick-view-link quick-view-btn"> <i class="icon icon-eye"></i><span>Quick View</span></a> -->
                                    </div>
                                    <!-- /product main photo  -->
                                </div>
                                <!-- Product Actions -->
                                <a href="#" title="Add to Wishlist" class="no_wishlist">
                                    <i class="icon icon-heart"></i>
                                    <span>Add to Wishlist</span>
                                </a>
                                <div class="product-item-actions">
                                    <div class="share-button toBottom">
                                        <span class="toggle"></span>
                                        <ul class="social-list">
                                            <li>
                                                <a href="#" class="icon icon-google google"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-fancy fancy"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-pinterest pinterest"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-twitter-logo twitter"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-facebook-logo facebook"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Product Actions -->
                                <!-- product carousel -->
                                <div class="product-item-gallery-previews-wrapper">
                                    <div class="product-item-gallery-previews">
                                        <div class="item">
                                            <a href="#">
                                                <img src="/user/images/products/product-18.jpg" data-image="images/products/product-18.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="/user/images/products/product-18-1.jpg" data-image="images/products/product-18-1.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-arrows"></div>
                                </div>
                                <!-- /product carousel -->
                            </div>
                            <!-- /Product Photo -->
                            <!-- Product Details -->
                            <div class="product-item-details" style="">
                                <div class="product-item-name">
                                    <a title="Backless mini dress" href="product.html" class="product-item-link">Backless mini dress</a>
                                </div>
                                <div class="product-item-description">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                    sed quia nonkdni numquam eius modi tempora incidunt ut labore</div>
                                <div class="price-box">
                                    <span class="price-container">
                                        <span class="price-wrapper">
                                            <span class="price">$89.00</span>
                                        </span>
                                    </span>
                                </div>
                                <!-- <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i></div>
												<button class="btn add-to-cart" data-product="789123"> <i class="icon icon-cart"></i><span>Add to Cart</span> </button> -->
                            </div>
                            <!-- /Product Details -->
                        </div>
                    </div>
                </div>
                <!-- /Product Item -->
                <!-- Product Item -->
                <div class="product-item previews-2 large with-previews category2" style="position: absolute; left: 0px; top: 509px; height: 478px;">
                    <div class="product-item-inside">
                        <div class="product-item-info">
                            <!-- Product Photo -->
                            <div class="product-item-photo">
                                <div class="product-item-gallery">
                                    <!-- product main photo -->
                                    <div class="product-item-gallery-main">
                                        <img class="product-image-photo" src="/user/images/products/product-18.jpg" alt="">
                                        <!-- <a href="quick-view.html" title="Quick View" class="quick-view-link quick-view-btn"> <i class="icon icon-eye"></i><span>Quick View</span></a> -->
                                    </div>
                                    <!-- /product main photo  -->
                                </div>
                                <!-- Product Actions -->
                                <a href="#" title="Add to Wishlist" class="no_wishlist">
                                    <i class="icon icon-heart"></i>
                                    <span>Add to Wishlist</span>
                                </a>
                                <div class="product-item-actions">
                                    <div class="share-button toBottom">
                                        <span class="toggle"></span>
                                        <ul class="social-list">
                                            <li>
                                                <a href="#" class="icon icon-google google"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-fancy fancy"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-pinterest pinterest"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-twitter-logo twitter"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-facebook-logo facebook"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Product Actions -->
                                <!-- product carousel -->
                                <div class="product-item-gallery-previews-wrapper">
                                    <div class="product-item-gallery-previews">
                                        <div class="item">
                                            <a href="#">
                                                <img src="/user/images/products/product-18.jpg" data-image="images/products/product-18.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="/user/images/products/product-18-1.jpg" data-image="images/products/product-18-1.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-arrows"></div>
                                </div>
                                <!-- /product carousel -->
                            </div>
                            <!-- /Product Photo -->
                            <!-- Product Details -->
                            <div class="product-item-details" style="">
                                <div class="product-item-name">
                                    <a title="Backless mini dress" href="product.html" class="product-item-link">Backless mini dress</a>
                                </div>
                                <div class="product-item-description">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                    sed quia nonkdni numquam eius modi tempora incidunt ut labore</div>
                                <div class="price-box">
                                    <span class="price-container">
                                        <span class="price-wrapper">
                                            <span class="price">$89.00</span>
                                        </span>
                                    </span>
                                </div>
                                <!-- <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i></div>
												<button class="btn add-to-cart" data-product="789123"> <i class="icon icon-cart"></i><span>Add to Cart</span> </button> -->
                            </div>
                            <!-- /Product Details -->
                        </div>
                    </div>
                </div>
                <!-- /Product Item -->
                <!-- Product Item -->
                <div class="product-item previews-2 large with-previews category1" style="position: absolute; left: 0px; top: 509px; height: 478px;">
                    <div class="product-item-inside">
                        <div class="product-item-info">
                            <!-- Product Photo -->
                            <div class="product-item-photo">
                                <div class="product-item-gallery">
                                    <!-- product main photo -->
                                    <div class="product-item-gallery-main">
                                        <img class="product-image-photo" src="/user/images/products/product-18.jpg" alt="">
                                        <!-- <a href="quick-view.html" title="Quick View" class="quick-view-link quick-view-btn"> <i class="icon icon-eye"></i><span>Quick View</span></a> -->
                                    </div>
                                    <!-- /product main photo  -->
                                </div>
                                <!-- Product Actions -->
                                <a href="#" title="Add to Wishlist" class="no_wishlist">
                                    <i class="icon icon-heart"></i>
                                    <span>Add to Wishlist</span>
                                </a>
                                <div class="product-item-actions">
                                    <div class="share-button toBottom">
                                        <span class="toggle"></span>
                                        <ul class="social-list">
                                            <li>
                                                <a href="#" class="icon icon-google google"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-fancy fancy"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-pinterest pinterest"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-twitter-logo twitter"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-facebook-logo facebook"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Product Actions -->
                                <!-- product carousel -->
                                <div class="product-item-gallery-previews-wrapper">
                                    <div class="product-item-gallery-previews">
                                        <div class="item">
                                            <a href="#">
                                                <img src="/user/images/products/product-18.jpg" data-image="images/products/product-18.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="/user/images/products/product-18-1.jpg" data-image="images/products/product-18-1.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-arrows"></div>
                                </div>
                                <!-- /product carousel -->
                            </div>
                            <!-- /Product Photo -->
                            <!-- Product Details -->
                            <div class="product-item-details" style="">
                                <div class="product-item-name">
                                    <a title="Backless mini dress" href="product.html" class="product-item-link">Backless mini dress</a>
                                </div>
                                <div class="product-item-description">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                    sed quia nonkdni numquam eius modi tempora incidunt ut labore</div>
                                <div class="price-box">
                                    <span class="price-container">
                                        <span class="price-wrapper">
                                            <span class="price">$89.00</span>
                                        </span>
                                    </span>
                                </div>
                                <!-- <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i></div>
												<button class="btn add-to-cart" data-product="789123"> <i class="icon icon-cart"></i><span>Add to Cart</span> </button> -->
                            </div>
                            <!-- /Product Details -->
                        </div>
                    </div>
                </div>
                <!-- /Product Item -->
                <!-- Product Item -->
                <div class="product-item previews-2 large with-previews category2" style="position: absolute; left: 0px; top: 509px; height: 478px;">
                    <div class="product-item-inside">
                        <div class="product-item-info">
                            <!-- Product Photo -->
                            <div class="product-item-photo">
                                <div class="product-item-gallery">
                                    <!-- product main photo -->
                                    <div class="product-item-gallery-main">
                                        <img class="product-image-photo" src="/user/images/products/product-18.jpg" alt="">
                                        <!-- <a href="quick-view.html" title="Quick View" class="quick-view-link quick-view-btn"> <i class="icon icon-eye"></i><span>Quick View</span></a> -->
                                    </div>
                                    <!-- /product main photo  -->
                                </div>
                                <!-- Product Actions -->
                                <a href="#" title="Add to Wishlist" class="no_wishlist">
                                    <i class="icon icon-heart"></i>
                                    <span>Add to Wishlist</span>
                                </a>
                                <div class="product-item-actions">
                                    <div class="share-button toBottom">
                                        <span class="toggle"></span>
                                        <ul class="social-list">
                                            <li>
                                                <a href="#" class="icon icon-google google"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-fancy fancy"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-pinterest pinterest"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-twitter-logo twitter"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-facebook-logo facebook"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Product Actions -->
                                <!-- product carousel -->
                                <div class="product-item-gallery-previews-wrapper">
                                    <div class="product-item-gallery-previews">
                                        <div class="item">
                                            <a href="#">
                                                <img src="/user/images/products/product-18.jpg" data-image="images/products/product-18.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="/user/images/products/product-18-1.jpg" data-image="images/products/product-18-1.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-arrows"></div>
                                </div>
                                <!-- /product carousel -->
                            </div>
                            <!-- /Product Photo -->
                            <!-- Product Details -->
                            <div class="product-item-details" style="">
                                <div class="product-item-name">
                                    <a title="Backless mini dress" href="product.html" class="product-item-link">Backless mini dress</a>
                                </div>
                                <div class="product-item-description">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                    sed quia nonkdni numquam eius modi tempora incidunt ut labore</div>
                                <div class="price-box">
                                    <span class="price-container">
                                        <span class="price-wrapper">
                                            <span class="price">$89.00</span>
                                        </span>
                                    </span>
                                </div>
                                <!-- <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i></div>
												<button class="btn add-to-cart" data-product="789123"> <i class="icon icon-cart"></i><span>Add to Cart</span> </button> -->
                            </div>
                            <!-- /Product Details -->
                        </div>
                    </div>
                </div>
                <!-- /Product Item -->
                <!-- Product Item -->
                <div class="product-item previews-2 large with-previews category1" style="position: absolute; left: 0px; top: 509px; height: 478px;">
                    <div class="product-item-inside">
                        <div class="product-item-info">
                            <!-- Product Photo -->
                            <div class="product-item-photo">
                                <div class="product-item-gallery">
                                    <!-- product main photo -->
                                    <div class="product-item-gallery-main">
                                        <img class="product-image-photo" src="/user/images/products/product-18.jpg" alt="">
                                        <!-- <a href="quick-view.html" title="Quick View" class="quick-view-link quick-view-btn"> <i class="icon icon-eye"></i><span>Quick View</span></a> -->
                                    </div>
                                    <!-- /product main photo  -->
                                </div>
                                <!-- Product Actions -->
                                <a href="#" title="Add to Wishlist" class="no_wishlist">
                                    <i class="icon icon-heart"></i>
                                    <span>Add to Wishlist</span>
                                </a>
                                <div class="product-item-actions">
                                    <div class="share-button toBottom">
                                        <span class="toggle"></span>
                                        <ul class="social-list">
                                            <li>
                                                <a href="#" class="icon icon-google google"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-fancy fancy"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-pinterest pinterest"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-twitter-logo twitter"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-facebook-logo facebook"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Product Actions -->
                                <!-- product carousel -->
                                <div class="product-item-gallery-previews-wrapper">
                                    <div class="product-item-gallery-previews">
                                        <div class="item">
                                            <a href="#">
                                                <img src="/user/images/products/product-18.jpg" data-image="images/products/product-18.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="/user/images/products/product-18-1.jpg" data-image="images/products/product-18-1.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-arrows"></div>
                                </div>
                                <!-- /product carousel -->
                            </div>
                            <!-- /Product Photo -->
                            <!-- Product Details -->
                            <div class="product-item-details" style="">
                                <div class="product-item-name">
                                    <a title="Backless mini dress" href="product.html" class="product-item-link">Backless mini dress</a>
                                </div>
                                <div class="product-item-description">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                    sed quia nonkdni numquam eius modi tempora incidunt ut labore</div>
                                <div class="price-box">
                                    <span class="price-container">
                                        <span class="price-wrapper">
                                            <span class="price">$89.00</span>
                                        </span>
                                    </span>
                                </div>
                                <!-- <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i></div>
												<button class="btn add-to-cart" data-product="789123"> <i class="icon icon-cart"></i><span>Add to Cart</span> </button> -->
                            </div>
                            <!-- /Product Details -->
                        </div>
                    </div>
                </div>
                <!-- /Product Item -->
                <!-- Product Item -->
                <div class="product-item previews-2 large with-previews category2" style="position: absolute; left: 0px; top: 509px; height: 478px;">
                    <div class="product-item-inside">
                        <div class="product-item-info">
                            <!-- Product Photo -->
                            <div class="product-item-photo">
                                <div class="product-item-gallery">
                                    <!-- product main photo -->
                                    <div class="product-item-gallery-main">
                                        <img class="product-image-photo" src="/user/images/products/product-18.jpg" alt="">
                                        <!-- <a href="quick-view.html" title="Quick View" class="quick-view-link quick-view-btn"> <i class="icon icon-eye"></i><span>Quick View</span></a> -->
                                    </div>
                                    <!-- /product main photo  -->
                                </div>
                                <!-- Product Actions -->
                                <a href="#" title="Add to Wishlist" class="no_wishlist">
                                    <i class="icon icon-heart"></i>
                                    <span>Add to Wishlist</span>
                                </a>
                                <div class="product-item-actions">
                                    <div class="share-button toBottom">
                                        <span class="toggle"></span>
                                        <ul class="social-list">
                                            <li>
                                                <a href="#" class="icon icon-google google"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-fancy fancy"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-pinterest pinterest"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-twitter-logo twitter"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icon icon-facebook-logo facebook"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Product Actions -->
                                <!-- product carousel -->
                                <div class="product-item-gallery-previews-wrapper">
                                    <div class="product-item-gallery-previews">
                                        <div class="item">
                                            <a href="#">
                                                <img src="/user/images/products/product-18.jpg" data-image="images/products/product-18.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="/user/images/products/product-18-1.jpg" data-image="images/products/product-18-1.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-arrows"></div>
                                </div>
                                <!-- /product carousel -->
                            </div>
                            <!-- /Product Photo -->
                            <!-- Product Details -->
                            <div class="product-item-details" style="">
                                <div class="product-item-name">
                                    <a title="Backless mini dress" href="product.html" class="product-item-link">Backless mini dress</a>
                                </div>
                                <div class="product-item-description">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                    sed quia nonkdni numquam eius modi tempora incidunt ut labore</div>
                                <div class="price-box">
                                    <span class="price-container">
                                        <span class="price-wrapper">
                                            <span class="price">$89.00</span>
                                        </span>
                                    </span>
                                </div>
                                <!-- <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i></div>
												<button class="btn add-to-cart" data-product="789123"> <i class="icon icon-cart"></i><span>Add to Cart</span> </button> -->
                            </div>
                            <!-- /Product Details -->
                        </div>
                    </div>
                </div>
                <!-- /Product Item -->
            </div>
        </div>
    </div>
</div>
@endsection