<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="boxed color-lightblue">
	<!-- Loader -->
	<div id="loader-wrapper" class="off">
		<div class="cube-wrapper">
			<div class="cube-folding">
				<span class="leaf1"></span>
				<span class="leaf2"></span>
				<span class="leaf3"></span>
				<span class="leaf4"></span>
			</div>
		</div>
	</div>
	<!-- /Loader -->
	<div class="fixed-btns">
		<!-- Back To Top -->
		<a href="#" class="top-fixed-btn back-to-top"><i class="icon icon-arrow-up"></i></a>
		<!-- /Back To Top -->
	</div>
	<div id="wrapper">
		<!-- Page -->
		<div class="page-wrapper">
			<!-- Header -->
			@include('layouts.header')
			<!-- /Header -->
			<!-- Page Content -->
			<main class="page-main">
				@yield('content')
			</main>
			<!-- /Page Content -->
			<!-- Footer -->
			@include('layouts.footer')
			<!-- /Footer -->
			<a class="back-to-top back-to-top-mobile" href="#">
				<i class="icon icon-angle-up"></i> To Top
			</a>
		</div>
		<!-- Page Content -->
	</div>
	<!-- ProductStack -->
	<!-- <div class="productStack disable hide_on_scroll"> <a href="#" class="toggleStack"><i class="icon icon-cart"></i> (6) items</a>
		<div class="productstack-content">
			<div class="products-list-wrapper">
				<ul class="products-list">
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="/user/images/products/product-10.jpg" alt=""></a> <span class="item-qty">3</span>
						<div class="actions"> <a href="#" class="action edit" title="Edit item"><i class="icon icon-pencil"></i></a> <a class="action delete" href="#" title="Delete item"><i class="icon icon-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="/user/images/products/product-11.jpg" alt=""></a> <span class="item-qty">3</span>
						<div class="actions"> <a class="action edit" href="#" title="Edit item"><i class="icon icon-pencil"></i></a> <a class="action delete" href="#" title="Delete item"><i class="icon icon-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="/user/images/products/product-12.jpg" alt=""></a> <span class="item-qty">3</span>
						<div class="actions"> <a class="action edit" href="#" title="Edit item"><i class="icon icon-pencil"></i></a> <a class="action delete" href="#" title="Delete item"><i class="icon icon-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="/user/images/products/product-13.jpg" alt=""></a> <span class="item-qty">3</span>
						<div class="actions"> <a class="action edit" href="#" title="Edit item"><i class="icon icon-pencil"></i></a> <a class="action delete" href="#" title="Delete item"><i class="icon icon-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="/user/images/products/product-14.jpg" alt=""></a> <span class="item-qty">3</span>
						<div class="actions"> <a class="action edit" href="#" title="Edit item"><i class="icon icon-pencil"></i></a> <a class="action delete" href="#" title="Delete item"><i class="icon icon-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="/user/images/products/product-15.jpg" alt=""></a> <span class="item-qty">3</span>
						<div class="actions"> <a class="action edit" href="#" title="Edit item"><i class="icon icon-pencil"></i></a> <a class="action delete" href="#" title="Delete item"><i class="icon icon-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="action-cart">
				<button type="button" class="btn" title="Checkout"> <span>Checkout</span> </button>
				<button type="button" class="btn" title="Go to Cart"> <span>Go to Cart</span> </button>
			</div>
			<div class="total-cart">
				<div class="items-total">Items <span class="count">6</span></div>
				<div class="subtotal">Subtotal <span class="price">2.150</span></div>
			</div>
		</div>
	</div> -->
	<!-- /ProductStack -->

	<!-- Modal Quick View -->
	<!-- <div class="modal quick-view zoom" id="quickView">
		<div class="modal-dialog">
			<div class="modalLoader-wrapper">
				<div class="modalLoader bg-striped"></div>
			</div>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">&#10006;</button>
			</div>
			<div class="modal-content">
				<iframe></iframe>
			</div>
		</div>
	</div> -->
	<!-- /Modal Quick View -->

	<!-- jQuery Scripts  -->
	<script src={{ asset("user/js/vendor/jquery/jquery.js") }}></script>
	<script src={{ asset("user/js/vendor/bootstrap/bootstrap.min.js")}}></script>
	<script src={{ asset("user/js/vendor/swiper/swiper.min.js") }}></script>
	<script src={{ asset("user/js/vendor/slick/slick.min.js") }}></script>
	<script src={{ asset("user/js/vendor/parallax/parallax.js") }}></script>
	<script src={{ asset("user/js/vendor/isotope/isotope.pkgd.min.js") }}></script>
	<script src={{ asset("user/js/vendor/magnificpopup/dist/jquery.magnific-popup.js")}}></script>
	<script src={{ asset("user/js/vendor/countdown/jquery.countdown.min.js") }}></script>
	<script src={{ asset("user/js/vendor/nouislider/nouislider.min.js") }}></script>
	<script src={{ asset("user/js/vendor/ez-plus/jquery.ez-plus.js") }}></script>
	<script src={{ asset("user/js/vendor/tocca/tocca.min.js") }}></script>
	<script src={{ asset("user/js/vendor/bootstrap-tabcollapse/bootstrap-tabcollapse.js") }}></script>
	<script src={{ asset("user/js/vendor/scrollLock/jquery-scrollLock.min.js") }}></script>
	<script src={{ asset("user/js/vendor/darktooltip/dist/jquery.darktooltip.js") }}></script>
	<script src={{ asset("user/js/vendor/imagesloaded/imagesloaded.pkgd.min.js") }}></script>
	<script src={{ asset("user/js/vendor/instafeed/instafeed.min.js") }}></script>
	<script src={{ asset("user/js/megamenu.min.js") }}></script>
	<script src={{ asset("user/js/app.js") }}></script>


</body>

</html>