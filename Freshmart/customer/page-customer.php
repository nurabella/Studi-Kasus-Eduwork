<!DOCTYPE php>
<php lang="zxx">
	

<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>FreshMart</title>
		
		<meta name="keywords" content="Organic, Fresh Food, Farm Store">
		<meta name="description" content="FreshMart - Organic, Fresh Food, Farm Store  Template">
		<meta name="author" content="tivatheme">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="../img/favicon.png" type="image/png">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">
		
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="../libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../libs/font-material/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="../libs/nivo-slider/css/nivo-slider.css">
		<link rel="stylesheet" href="../libs/nivo-slider/css/animate.css">
		<link rel="stylesheet" href="../libs/nivo-slider/css/style.css">
		<link rel="stylesheet" href="../libs/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="../libs/slider-range/css/jslider.css">
		
		<!-- Template CSS -->
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/reponsive.css">
	</head>
	
	<body class="home home-1">
		<div id="all">

				<!-- Main Menu -->
				<div id="main-menu">
					<ul class="menu">
						<li class="dropdown">
							<a href="../home.php" title="Homepage">Home</a>
						</li>
						
						<li class="dropdown">
							<a href="../produk/product.php" title="Product">Product</a>
							<div class="dropdown-menu">
								<ul>
									<li class="has-image">
										<img src="../img/product/product-category-1.png" alt="Product Category Image">
										<a href="#" title="Vegetables">Vegetables</a>
									</li>
									<li class="has-image">
										<img src="../img/product/product-category-2.png" alt="Product Category Image">
										<a href="#" title="Fruits">Fruits</a>
									</li>
									
									<li class="has-image">
										<img src="../img/product/product-category-4.png" alt="Product Category Image">
										<a href="#" title="Juices">Juices</a>
									</li>
									
								</ul>
							</div>
						</li>
						
						<li class="dropdown">
							<a href="../customer/page-customer.php">Customer</a>
						</li>
						<li>
							<a href="../page-about-us.php">About Us</a>
						</li>
						
						<li>
							<a href="../page-contact.php">Contact</a>
						</li>
					</ul>
				</div>
			</header>
			
			
			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title">All Product</h2>
						
						<ul class="breadcrumb">
							<li><a href="#" title="Home">Home</a></li>
							<li><a href="#" title="Product">Product</a></li>
							<li><a href="#" title="Suplier">Supplier</a></li>
						</ul>
					</div>
				</div>
		
				<div class="container">
					<div class="row">
						
						<!-- Page Content -->
						<div id="center-column" class="col-lg-12 col-md-9 col-sm-9 col-xs-12">
							<div class="product-category-page">
								<!-- Nav Bar -->
								<div class="products-bar">
									<div class="row">
										<div class="col-md-6 col-xs-6">
											<div class="gridlist-toggle" role="tablist">
												<ul class="nav nav-tabs">
													<li class="active"><a href="#products-grid" data-toggle="tab" aria-expanded="true"><i class="fa fa-th-large"></i></a></li>
													<li><a href="#products-list" data-toggle="tab" aria-expanded="false"><i class="fa fa-bars"></i></a></li>
												</ul>
											</div>
											
											<div class="total-products">There are 12 products</div>
										</div>
										
										
									</div>
								</div>
								
								<div class="tab-content">

									<!-- Products Grid -->
									<?php   
										include "../connection.php";
										$query = mysqli_query($connection, "SELECT * FROM pelanggan	");
									?>
									<div class="tab-pane active" id="products-grid">
										<a class='btn btn-primary' href='add_produk.php'>Add Produk</a>
										<div class="products-block">
											<div class="row">
												<?php 
			                						while ($data = mysqli_fetch_array($query)) { 
			                					?>
												<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
													<div class="product-item">
														<div class="product-title">
															<a href="product-detail-left-sidebar.php">
																<?php echo $data['nama_pelanggan'];?>
															</a>
														</div>

														<div class="product-image">
															<a href="product-detail-left-sidebar.php">
																<img class="img-responsive" src="../img/product/4.jpg" alt="Product Image">
															</a>
														</div>
														
														<div class="product-title">
															<a href="product-detail-left-sidebar.php">
																<?php echo $data['telpon'];?>
															</a>
														</div>

														<div class="product-title">
															<a href="product-detail-left-sidebar.php">
																<?php echo $data['alamat'];?>
															</a>
														</div>
														
														
														<div class="product-buttons">
															<a class="add-to-cart" href="#">
																<i class="fa fa-trash" aria-hidden="true"></i>
															</a>
															
															<a class="quickview" href="edit_produk.php">
																<i class="fa fa-edit" aria-hidden="true"></i>
															</a>
														</div>
													</div>
												</div>
											<?php } ?>
											</div>
										</div>
									</div>
									
								</div>
								<!-- Products Grid -->

								</div>
								
								<!-- Pagination Bar -->
								<div class="pagination-bar">
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="text">Showing 1-12 of 20 item(s)</div>
										</div>
										
										<div class="col-md-8 col-sm-8 col-xs-12">
											<div class="pagination">
												<ul class="page-list">
													<li><a href="#" class="prev">Previous</a></li>
													<li><a href="#" class="current">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#" class="next">Next</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<!-- Footer -->
			<footer id="footer">
				<div class="footer">
					<!-- Footer Top -->
					<div class="footer-top">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="block text">
										<div class="block-content">
											<a href="index.php" class="logo-footer">
												<img src="../img/logo-2.png" alt="Logo">
											</a>
									
											<div class="contact">
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-home"></i>
													</div>
													<div class="item-right">
														<span>123 Suspendis matti, VST District, NY Accums, North American</span>
													</div>
												</div>
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-phone-in-talk"></i>
													</div>
													<div class="item-right">
														<span>0123-456-78910<br>0987-654-32100</span>
													</div>
												</div>
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-email"></i>
													</div>
													<div class="item-right">
														<span><a href="mailto:support@domain.com">support@domain.com</a><br><a href="mailto:contact@domain.com">contact@domain.com</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="block instagram">
										<h2 class="block-title">Photo Instagram</h2>
										
										<div class="block-content">
											<div class="row margin-0">
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="../img/instagram-1.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="../img/instagram-2.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="../img/instagram-3.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="../img/instagram-4.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="../img/instagram-5.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="../img/instagram-6.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="../img/instagram-7.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="../img/instagram-8.png" alt="Instagram Image">
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="block newsletter">
										<h2 class="block-title">Newsletter</h2>
										
										<div class="block-content">
											<p class="description">Sign up for newsletter to receive special offers and exclusive news about FreshMart products</p>
											<form action="#" method="post">
												<input type="text" placeholder="Enter Your Email">
												<button type="submit" class="btn btn-primary">Subscribe</button>
											</form>
										</div>
									</div>
										
									<div class="block social">
										<h2 class="block-title">Follow Us</h2>
										
										<div class="block-content">
											<ul>
												<li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
												<li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
												<li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
												<li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Footer Bottom -->
					<div class="footer-bottom">
						<div class="payment-intro">
							<div class="container">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="../img/home1-payment-1.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Free Shipping item</h3>
												<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="../img/home1-payment-2.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Secured Payment</h3>
												<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="../img/home1-payment-3.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Money Back Guarantee</h3>
												<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Copyright -->
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
								<div class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
							</div>
							
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 align-right">
								<div class="payment">
									<span>Payment Accept</span>
									<img src="../img/payment.png" alt="Payment">
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			
			<!-- Go Up button -->
			<div class="go-up">
				<a href="#">
					<i class="fa fa-long-arrow-up"></i>
				</a>
			</div>
			
			<!-- Page Loader -->
			<div id="page-preloader">
				<div class="page-loading">
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
				</div>
			</div>
		</div>
			
		<!-- Vendor JS -->
		<script src="../libs/jquery/jquery.js"></script>
		<script src="../libs/bootstrap/js/bootstrap.js"></script>
		<script src="../libs/jquery.countdown/jquery.countdown.js"></script>
		<script src="../libs/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="../libs/owl.carousel/owl.carousel.min.js"></script>
		<script src="../libs/slider-range/js/tmpl.js"></script>
		<script src="../libs/slider-range/js/jquery.dependClass-0.1.js"></script>
		<script src="../libs/slider-range/js/draggable-0.1.js"></script>
		<script src="../libs/slider-range/js/jquery.slider.js"></script>
		<script src="../libs/elevatezoom/jquery.elevatezoom.js"></script>
		
		<!-- Template CSS -->
		<script src="../js/main.js"></script>
	</body>


</php>