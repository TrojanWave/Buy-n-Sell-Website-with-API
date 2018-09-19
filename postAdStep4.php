<?php 
	require('API/keepSession.php');
	require('API/getLocations.php');
	require('API/getCatagories.php');
	require('API/getRequests.php');
	require('API/loginCheck.php');
	require('API/getCountWishList.php');
	require('API/getCountCart.php');
	require('API/getTotalCart.php');

	$_SESSION["returnUrl"] = "postAdStep4.php";

	if (isset($_GET["area"])) {
		$area = $_GET["area"];
		$_SESSION["area"] = $area;
	}

	if (isset($_GET["catagory"])) {
		$catagory = $_GET["catagory"];
		$_SESSION["catagory"] = $catagory;
	}

	if (isset($_SESSION["area"])) {
		$area = $_SESSION["area"];
	}

	if (isset($_SESSION["catagory"])) {
		$catagory = $_SESSION["catagory"];
	}

	$returnUrl = "postAdStep1.php";

	checkLogin($returnUrl);

	if (isset($_POST["submit"])) {
		require('API/postAd.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Buy n Sell-Post a Ad-step 4</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/cart_styles.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">

</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<!-- Header Main -->

		<div class="header_main">
			<div class="container-fluid">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-3 col-sm-6 col-3 order-1">
						<div class="logo_container">
							<div class="logo" style="padding-left: 90px"><a href="index.php">Buy n Sell</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-5 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Search...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">All Categories</a></li>
													<li><a class="clc" href="#">Computers</a></li>
													<li><a class="clc" href="#">Laptops</a></li>
													<li><a class="clc" href="#">Cameras</a></li>
													<li><a class="clc" href="#">Hardware</a></li>
													<li><a class="clc" href="#">Smartphones</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist Cart Or Login Signup -->
					<?php
				if (isset($_SESSION["active"]) && $_SESSION["active"] == 1) {
					///////////////////////// If logged in //////////////////////////////
					?>
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="images/heart.png" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="wishlist.php">Wishlist</a></div>
									<div class="wishlist_count"><?php echo getCountWishList($_SESSION["user_id"]); ?></div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="images/cart.png" alt="">
										<div class="cart_count"><span><?php echo getCountCart($_SESSION["user_id"]); ?></span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="cart.php">Cart</a></div>
										<div class="cart_price">Rs: <?php echo getCartTotal($_SESSION["user_id"]); ?></div>
									</div>
								</div>
							</div>

							<!-- Log out -->
							<div class="cart" style="margin-left: 20px;">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon" style="margin-right: -20px;">
										<img src="images/logout.png" alt="">
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="API/logout.php">Logout</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}else {
					////////////////////////// If not Logged in /////////////////////////////
					?>
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="images/login.png" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="signIn.php">Log in</a></div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="images/signup.png" alt="">
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="signUp.php">Create an Account</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
					?>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>

								<ul class="cat_menu">
									<?php
									///////////////////// The catagory list ////////////////////////////////////////
									$result_catagories = getCatagories();
										while($row_catagories = $result_catagories->fetch_assoc()) {
											?>
											<li><a href="viewCatogory.php?catagory=<?php echo $row_catagories["id"]; ?>"><?php echo $row_catagories["name"]; ?><i class="fas <?php echo $row_catagories["fa_icon"]; ?> ml-auto"></i></a></li>
										<?php
										}
									?>
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="index.php">Home<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="requestList.php">Requests<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="postAdStep1.php">Post your Ad<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="postRequest.php">Post a Request<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="page_menu_content">

							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<!--<li class="page_menu_item has-children">
									<a href="#">Language<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Currency<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>-->
								<li class="page_menu_item">
									<a href="index.html">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="requestList.html">Requests<i></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="postAdStep1.html">Post your Ad<i></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="postRequest.html">Post a Request<i></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!--breadcrumb-->
  <div class="container" style="margin-top: 25px">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="postAdStep1.html">Post your Ad</a></li>
				<li class="breadcrumb-item"><a href="postAdStep2.html">Post a Free Ad: Step 2</a></li>
				<li class="breadcrumb-item"><a href="postAdStep3.html">Post a Free Ad: Step 3</a></li>
				<li class="breadcrumb-item"><a href="postAdStep4.html">Post a Free Ad: Step 4</a></li>
      </ol>
    </nav>
  </div>

	<!-- Contact Form -->

	<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_form_container">
						<div class="contact_form_title">Post a Free Ad : Step 4</div>
            <hr>
            <h3>Please fill in these information about your Ad</h3>

						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<div class="form-group">
						    <label for="inputAddress">Ad title</label>
						    <input type="text" name="title" class="form-control" id="inputAddress" placeholder="Example : Sony Xperia Z5 for sale">
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4">Price</label>
						      <input type="number" name="price" class="form-control" id="inputEmail4" placeholder="Example: 25000/-">
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputPassword4">Condition</label>
						      <input type="text" name="item_condition" class="form-control" id="inputPassword4" placeholder="Example: Scratched">
						    </div>
						  </div>
							<div class="form-group">
						    <label for="inputAddress">Contact Number</label>
						    <input type="text" name="contact" class="form-control" id="inputAddress" placeholder="Ex: 071 XXX XXXX">
						  </div>
							<div class="form-group">
						    <label for="exampleFormControlTextarea1">Description</label>
						    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						  </div>
						  <div class="form-group" style="margin-left: 20px;">
						    <div class="form-check">
						      <input name="nego" class="form-check-input" type="checkbox" id="gridCheck">
						      <label class="form-check-label" for="gridCheck">
						      	Price Negotiable
						      </label>
						    </div>
						  </div>
						  <button name="submit" type="submit" class="btn btn-primary">Continue</button>
						</form>

			<?php
				if (getRequestsByCatagory($catagory)) {
			?>

						<div class="container" style="margin-top: 20px">
							<div class="row">
								<div class="col align-self-center">
									<h2 style="text-align: center">Or</h2>
								</div>
							</div>
						</div>
						<hr>
						<div>
							<br>
							<h3>Consider these requests from other people</h3>
						</div>

						<?php
							///////////////////// The request list ////////////////////////////////////////
							$result_requests_by_catagory = getRequestsByCatagory($catagory);
								while($row_requests_by_catagory = $result_requests_by_catagory->fetch_assoc()) {
								?>

						<div class="cart_items">
							<ul class="cart_list">
								<li class="cart_item clearfix">
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Title</div>
											<div class="cart_item_text"><?php echo $row_requests_by_catagory["title"]; ?></div>
										</div>
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Price Range</div>
											<div class="cart_item_text">Rs. <?php echo $row_requests_by_catagory["price_min"]; ?> - Rs.<?php echo $row_requests_by_catagory["price_max"]; ?></div>
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Contact Info</div>
											<div class="cart_item_text">0<?php echo $row_requests_by_catagory["contact"]; ?></div>
										</div>
										<div class="cart_item_price cart_info_col" style="padding-top: 15px; padding-left: 40px;">
											<a href="request.php?id=<?php echo $row_requests_by_catagory["id"]; ?>">
												<button type="button" class="button cart_button_checkout">View Request</button>
											</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
								<?php
								}
						?>

					<?php
				}
					?>


					</div>
				</div>
			</div>

		</div>
		<div class="panel"></div>

	</div>

	<!--Requests-->


	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#">OneTech</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+38 068 005 3570</div>
						<div class="footer_contact_text">
							<p>17 Princess Road, London</p>
							<p>Grester London NW18JR, UK</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Find it Fast</div>
						<ul class="footer_list">
							<li><a href="#">Computers & Laptops</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Smartphones & Tablets</a></li>
							<li><a href="#">TV & Audio</a></li>
						</ul>
						<div class="footer_subtitle">Gadgets</div>
						<ul class="footer_list">
							<li><a href="#">Car Electronics</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="#">Video Games & Consoles</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Computers & Laptops</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Customer Care</div>
						<ul class="footer_list">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order Tracking</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Customer Services</a></li>
							<li><a href="#">Returns / Exchange</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Product Support</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">

					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>
</body>

</html>
