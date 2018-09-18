<?php
require('API/keepSession.php');
require('API/getCatagories.php');
require('API/loginCheck.php');
require('API/postRequest.php');

	$returnUrl = "postRequest.php";

	checkLogin($returnUrl);

	if (isset($_POST["submit"])) {
		submitRequest($user_id);
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Buy n Sell-Post a Request</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<script type="text/javascript" src="js/validation.js"></script>

<style>
   .postAd{
     background-color: #0e8ce4;
     color: white;
     padding: 10px;
   }
</style>

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
							<div class="logo" style="padding-left: 90px"><a href="index.html">Buy n Sell</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-5 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
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

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="images/heart.png" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="wishlist.html">Wishlist</a></div>
									<div class="wishlist_count">115</div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="images/cart.png" alt="">
										<div class="cart_count"><span>10</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="cart.html">Cart</a></div>
										<div class="cart_price">$85</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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
									<li><a href="viewCatogoryComputers&Laptops.html">Vehicles<i class="fas fa-chevron-right ml-auto"></i></a></li>
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="index.html">Home<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="requestList.html">Requests<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="postAdStep1.html">Post your Ad<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="postRequest.html">Post a Request<i class="fas fa-chevron-down"></i></a></li>
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
        <li class="breadcrumb-item"><a href="postRequest.html">Post a Request</a></li>
      </ol>
    </nav>
  </div>

	<!-- Contact Form -->

	<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_form_container" style="padding-right: 25vh; padding-left: 25vh">
						<div class="contact_form_title">Post a Request</div>
            <div><p>In here,You can post a request about your need according to your conditions.Then sellers will be send informations of products which are satisfied your request. </p></div>

            <form class="register" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="form-group">
                <label for="inputCity">Catogory</label>
                <select name="catagory" id="inputState" class="form-control" style="margin-left:-5px">
                  <option value="0" selected>Choose...</option>
				  <?php
						///////////////////// The catagory list ////////////////////////////////////////
						$result_catagories = getCatagories();
							while($row_catagories = $result_catagories->fetch_assoc()) {
							?>
								<option value="<?php echo $row_catagories["id"]; ?>"><?php echo $row_catagories["name"]; ?></option>
							<?php
							}
					?>
                </select>
              </div>

              <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control" placeholder="Ex: Leagoo M6 5.7">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control"></textarea>
              </div>

                <div class="form-group">
                  <label for="priceRange">Price Range</label>
                  <div class="form-inline">

                      <lable style="margin-right: 15px">Minimum </lable>
                      <input name="min_price" type="number" class="form-control col-md-3">
                      <div class="col-1">-</div>
                      <lable style="margin-right: 15px">Maximum </lable>
                      <input name="max_price" type="number" class="form-control col-md-3">

                  </div>
                </div>
                <div class="form-group">
                  <label for="contactInfo">Contact Number</label>
                  <input name="contact" type="text" class="form-control" placeholder="Ex: 071 XXX XXXX">
                </div>
              <button name="submit" type="submit" class="btn btn-primary">Post Request</button>
            </form>
					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>
</body>

</html>
