<?php
require('API/keepSession.php');
require('API/getCatagories.php');
require('API/getAdsHomeRightPanel.php');
require('API/getAdImages.php');
require('API/getCart.php');
require('API/getAd.php');
require('API/loginCheck.php');
require('API/getCountWishList.php');
require('API/getCountCart.php');
require('API/getTotalCart.php');

	$returnUrl = "cart.php";

	checkLogin($returnUrl);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Shopping Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
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
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search...">
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
									<a href="index.php">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="requestList.php">Requests<i></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="postAdStep1.php">Post your Ad<i></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="postRequest.php">Post a Request<i></i></a>
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
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Shopping Cart</a></li>
      </ol>
    </nav>
  </div>

	<!-- List -->

	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Shopping Cart</div>
						<!--Ad item -->
						<?php

						$cart_total = 0;

							$result_list = getCart();
							while($row_list = $result_list->fetch_assoc()) {
								////////////////// Get Images ///////////////////
								$result_images_ad = getImages($row_list["advert_id"], 1);
									while($row_images_ad = $result_images_ad->fetch_assoc()){
										$image_file = $row_images_ad["file_name"];
									}

									/////////// get Ad //////////////////
									$ad_result = getAd($row_list["advert_id"]);
									while ($row_ad = $ad_result->fetch_assoc()) {

										$cart_total = $cart_total + $row_ad["price"];

						?>
							<a href="product.php?id=<?php echo $row_ad["id"]; ?>">
								<div class="cart_items">
									<ul class="cart_list">
										<li class="cart_item clearfix">
											<div class="cart_item_image"><img style="height: 120px;" src="uploads/<?php echo $image_file; ?>" alt=""></div>
											<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
												<div class="cart_item_name cart_info_col">
													<div class="cart_item_title">Name</div>
													<div class="cart_item_text"><?php echo $row_ad["ad_title"]; ?></div>
												</div>
												<div class="cart_item_price cart_info_col">
													<div class="cart_item_title">Posted date and time</div>
													<div class="cart_item_text"><?php echo $row_ad["posted_date"]; ?></div>
												</div>
												<div class="cart_item_total cart_info_col">
													<div class="cart_item_title">Price</div>
													<div class="cart_item_text">Rs: <?php echo $row_ad["price"]; ?> /-</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</a>
						<?php
									}
							}
						?>


								<div class="cart_items">
									<ul class="cart_list">
										<li class="cart_item clearfix">
											<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between" style="padding-top: 0px;">
												<div class="cart_item_name cart_info_col">
													<div class="cart_item_text">Cart total :</div>
												</div>
												<div class="cart_item_total cart_info_col">
													<div class="cart_item_text">Rs: <?php echo $cart_total; ?> /-</div>
												</div>
											</div>
										</li>
									</ul>
								</div>

					</div>
				</div>
			</div>
		</div>
	</div>



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
<script src="js/cart_custom.js"></script>
</body>

</html>
