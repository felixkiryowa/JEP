<!DOCTYPE html>
<html lang="en">
<head>
<title>JEP| Jewellery</title>
<link rel="icon" type="image/png"      href="<?php echo base_url('assets/images/logo.png');?>"/>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/bootstrap4/bootstrap.css');?>">
<link href = "<?php echo base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/animate.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/main_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/responsive.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/bootstrap4/modal.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/bootstrap4/jep.css');?>">
<script type="text/javascript">var base_url = "<?= base_url();?>";</script>
</head>

<body>
 
	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">free shipping on all u.s orders over $50</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								<li class="currency">
									<a href="#">
										usd
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="currency_selection">
										<li><a href="#">cad</a></li>
										<li><a href="#">aud</a></li>
										<li><a href="#">eur</a></li>
										<li><a href="#">gbp</a></li>
									</ul>
								</li>
								<li class="language">
									<a href="#">
										English
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="#">French</a></li>
										<li><a href="#">Italian</a></li>
										<li><a href="#">German</a></li>
										<li><a href="#">Spanish</a></li>
									</ul>
								</li>
								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
										<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
									</ul>
								</li>
                                                                
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">colo<span>shop</span></a>                             
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="#">home</a></li>
								<li><a href="#">shop</a></li>
								<li><a href="#">promotion</a></li>
								<li><a href="#">pages</a></li>
								<li><a href="#">blog</a></li>
								<li><a href="contact.html">contact</a></li>
                                                                
							</ul>
							<ul class="navbar_user">
                                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                                          
								<li class="checkout">
									<a href="#" onclick="document.getElementById('id01').style.display='block'">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                <span id="checkout_items" class="checkout_items">
                                                                                    <?php echo $this->cart->total_items(); ?>
                                                                                </span>
									</a>
                                                                        <div class="w3-container">
                                                                          <div id="id01" class="w3-modal">
                                                                          <div class="w3-modal-content">
                                                                              <div class="w3-container" style="padding-top:40px;">
                                                                              <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                      
                                                                                     <!--new Cart-->
                                                                                       
                                                                                            
                                                                                            <h2 align="center">Products on Your Shopping Cart</h2>
                                                                                            
                                                                                            </br>
                                                                                            <div>
                                                                                                <?php $cart_check = $this->cart->contents();

                                                                                                // If cart is empty, this will show below message.
                                                                                                if(empty($cart_check)) {
                                                                                                echo '<div class="alert alert-warning"><p class="text text-danger">To add products to your shopping cart click on "Mark Order" Button on a given Product </p></div>';
                                                                                                } ?> 
                                                                                            </div>
                                                                                            
                                                                                            <table id="table" class="table table-condensed"   cellpadding="10px" cellspacing="4px">
                                                                                                <?php
                                                                                                // All values of cart store in "$cart".
                                                                                                if ($cart = $this->cart->contents()): ?>
                                                                                                <tr id= "main_heading">
                                                                                                <td>Number</td>
                                                                                                <td>Name</td>
                                                                                                <td>Price</td>
                                                                                                <td>Quantity</td>
                                                                                                <td>Amount</td>
                                                                                                <td>Remove</td>
                                                                                                </tr>
                                                                                                <?php
                                                                                                    // Create form and send all values in "shopping/update_cart" function.
                                                                                                    echo form_open('shopping_cart/update_cart');
                                                                                                    $grand_total = 0;
                                                                                                    $i = 1;

                                                                                                    foreach ($cart as $item):
                                                                                                    // echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                                                                                                    // Will produce the following output.
                                                                                                    // <input type="hidden" name="cart[1][id]" value="1" />

                                                                                                    echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                                                                                                    echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                                                                                                    echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                                                                                                    echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                                                                                                    echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                                                                                               ?>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                    <?php echo $i++; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                    <?php echo $item['name']; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                       <?php echo number_format($item['price'], 0); ?> Shs
                                                                                                    </td>
                                                                                                    <td>
                                                                                                    <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                                                                                                    </td>
                                                                                                    <?php $grand_total = $grand_total + $item['subtotal']; ?>
                                                                                                    <td>
                                                                                                       <?php echo number_format($item['subtotal'], 0) ?> Shs
                                                                                                    </td>
                                                                                                    <td>

                                                                                                    <?php
                                                                                                    // cancle image.
                                                                                                    $path = '<i class="fa fa-trash-o" aria-hidden="true"></i>';
                                                                                                    echo anchor('shopping_cart/remove/' . $item['rowid'], $path); ?>
                                                                                                    </td>
                                                                                                    <?php endforeach; ?>
                                                                                                    </tr>
                                                                                                    <tr></tr>
                                                                                                    <tr></tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <b>Order Total: <?php

                                                                                                                //Grand Total.
                                                                                                                echo number_format($grand_total, 0); ?> Shs
                                                                                                            </b>
                                                                                                        </td>
                                                                                                         <td>
                                                                                                            <button class="btn btn-sm btn-info" type="submit">Update Cart</button>
                                                                                                        </td>
                                                                                                       <?php echo form_close(); ?>
                                                                                                        <td colspan="2" align="right">
                                                                                                            <button class="btn btn-sm btn-info" onclick="clear_cart()">Clear Cart</button>
                                                                                                        
                                                                                                        </td> 
                                                                                                        <td>                            
                                                                                                           <!-- "Place order button" on click send "billing" controller -->
                                                                                                           <button class="btn btn-sm btn-info" onclick="window.location = 'shopping_cart/billing_view'">Place Order</button>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <?php endif; ?>
                                                                                            </table>
                                                                                            </br>
                                                                                            </br>
                                                                                        
                                                                                     <!--end of cart-->
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                     </div>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						usd
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">cad</a></li>
						<li><a href="#">aud</a></li>
						<li><a href="#">eur</a></li>
						<li><a href="#">gbp</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">French</a></li>
						<li><a href="#">Italian</a></li>
						<li><a href="#">German</a></li>
						<li><a href="#">Spanish</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">shop</a></li>
				<li class="menu_item"><a href="#">promotion</a></li>
				<li class="menu_item"><a href="#">pages</a></li>
				<li class="menu_item"><a href="#">blog</a></li>
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Slider -->

	<div class="main_slider" style="background-image:url(<?php echo base_url('assets/images/slider_1.jpg'); ?>)">
	
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Spring / Summer Collection 2017</h6>
						<h1>Get up to 30% Off New Arrivals</h1>
						<div class="red_button shop_now_button"><a href="#">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->

	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(<?php echo base_url('assets/images/banner_1.jpg');?>)">
						<div class="banner_category">
							<a href="categories.html">women's</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(<?php echo base_url('assets/images/banner_2.jpg');?>)">
						<div class="banner_category">
							<a href="categories.html">accessories's</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(<?php echo base_url('assets/images/banner_3.jpg');?>)">
						<div class="banner_category">
							<a href="categories.html">men's</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Get Your Self Good Quality Earings And Bags</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">women's</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">accessories</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">men's</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Product 1 -->
                                                 <?php if(count($earings)):?>
                                                 <?php foreach ($earings as $earing):?>
						<div class="product-item men">
							<div class="product discount product_filter">
								<div class="product_image">
							           <image src="<?php echo base_url('featured_images/earings/'.$earing->image);?>"></image>
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html"><?php echo $earing->title; ?></a></h6>
									<div class="product_price"><?php echo number_format($earing->price,0)  .  " Shs"; ?></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button" ><a data-toggle="modal" data-target="#images_for_earings" onclick="view_earing_image(<?=$earing->id;?>)">add to cart</a></div>
						</div>
                                                <?php endforeach;?>
                                                <?php else:?>
                                                    <p>No Images Were Found !!.........</p>
                                                 <?php endif;?>
                                                    
                                                 <!-- bags -->
                                                 <?php if(count($bags)):?>
                                                 <?php foreach ($bags as $bag):?>
						<div class="product-item men">
							<div class="product discount product_filter">
								<div class="product_image">
							           <image src="<?php echo base_url('featured_images/bags/'.$bag->image);?>"></image>
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html"><?php echo $bag->title; ?></a></h6>
									<div class="product_price"><?php echo number_format($bag->price,0)  .  " Shs"; ?></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a data-toggle="modal" data-target="#images_for_bags" onclick="view_bag_image(<?=$bag->id;?>)">add to cart</a></div>
						</div>
                                                <?php endforeach;?>
                                                <?php else:?>
                                                    <p>No Images Were Found !!.........</p>
                                                 <?php endif;?>

					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Best Sellers</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							<!-- Slide 1 -->
                                                        <?php if(count($images)):?>
                                                         <?php foreach ($images as $image):?>
							   <div class="owl-item product_slider_item">
                                                          
                                                               <h4 style="font-size:20px;" align="center"><?php echo $image->title; ?></h4>
								<div class="product-item">
									<div class="product">
										<div class="product_image">
                                                                                        
                                                                                     <image src="<?php echo base_url('featured_images/best_seller/'.$image->image);?>"></image>
                                                                                        
										</div>
										<div class="favorite favorite_left"></div>
                                                                                <div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
										<!-- <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>20</span></div> -->
										<div class="product_info">
											
                                                                                    <div class="product_price"><?php echo number_format($image->price,0)  .  " Shs"; ?></div>
										</div>
                                                                                <div class="red_button add_to_cart_button"><a data-toggle="modal" data-target="#best_sellers_image"  onclick="view_best_sellers_images(<?=$image->id;?>)">Make Order</a></div>
									</div>
								</div>
							  </div>
                                                         <?php endforeach;?>
                                                        <?php else:?>
                                                            <p>No Images Were Found !!.........</p>
                                                         <?php endif;?>

						</div>

						<!-- Slider Navigation -->

						<div style="padding-top:25px;padding-left: 10px;background-color:#EA5B77;" class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column"  >
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
                                                <div style="padding-top:25px;padding-left: 10px;background-color: #EA5B77;" class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>free shipping</h6>
							<p>Suffered Alteration in Some Form</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cach on delivery</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening all week</h6>
							<p>8AM - 09PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blogs -->

	<div class="blogs">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Latest Blogs</h2>
					</div>
				</div>
			</div>
			<div class="row blogs_container">
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(<?php echo base_url('assets/images/blog_1.jpg');?>)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2017</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(<?php echo base_url('assets/images/blog_2.jpg');?>)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2017</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(<?php echo base_url('assets/images/blog_3.jpg');?>)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2017</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get 20% off your first purchase</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>
 <!-- View Images -->
            <div class="modal fade" id="best_sellers_image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-lg">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div id="earings_title" style="width:200px;position:relative;left:180px">
                        
                    </div>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-6" id="productImage" style="padding-left: 20px;">
                              
                          </div>
                          <div class="col-md-6">
                              <h5 style="color:#EA5B77;" align="center">Product description</h5>
                               <div class="w3-panel w3-card" id="product_description" style="width:280px;">
                                   
                               </div> 
                              <?php echo form_open('shopping_cart/add_to_cart');?>
                              <div class="form-group">
                                  <label for="quantity" class="form-label">Quantity:</label>
                                  <?php 
                                  $quantity = array(
                                      'name' => 'quantity',
                                      'placeholder' => 'Quantity',
                                      'class'     => 'form-control',
                                      'id' =>'quantity'
                                      
                                  );
                                  echo form_input($quantity);
                                  ?>
                              </div>
                              <div class="form-group">
                                  <input type="hidden" name="product_id" id="product_id"/>
                              </div>
                              <div class="form-group">
                                  <input type="hidden" name="product_name" id="product_name"/>
                              </div>
                              <div class="form-group">
                                  <input type="hidden" name="product_price" id="product_price"/>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Add To Wish List</button>
                              <?php echo form_close();?>
                              
                          </div>
                      
                     </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
         </div>
         
  <!-- View Earings -->
    <div class="modal fade" id="images_for_earings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-lg">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div id="earings_title2" style="width:200px;position:relative;left:180px">
                        
                    </div>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-6" id="product_earing_image" style="padding-left: 20px;">
                              
                          </div>
                          <div class="col-md-6">
                              <h5 style="color:#EA5B77;" align="center">Product description</h5>
                               <div class="w3-panel w3-card" id="product_description2" style="width:280px;">
                                   
                               </div> 
                              <?php echo form_open('shopping_cart/add_to_cart');?>
                              <div class="form-group">
                                  <label for="quantity" class="form-label">Quantity:</label>
                                  <?php 
                                  $quantity = array(
                                      'name' => 'quantity',
                                      'placeholder' => 'Quantity',
                                      'class'     => 'form-control',
                                      'id' =>'quantity'
                                      
                                  );
                                  echo form_input($quantity);
                                  ?>
                              </div>
                               <div class="form-group">
                                  <input type="hidden" name="product_id" id="product_id2"/>
                              </div>
                              <div class="form-group">
                                  <input type="hidden" name="product_name" id="product_name2"/>
                              </div>
                              <div class="form-group">
                                  <input type="hidden" name="product_price" id="product_price2"/>
                              </div>
                              
                              <button type="submit" class="btn btn-success btn-block">Add To Wish List</button>
                              <?php echo form_close();?>
                              
                          </div>
                      
                     </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        </div>

    <!-- View bags -->
    <div class="modal fade" id="images_for_bags" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-lg">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div id="bag_title" style="width:200px;position:relative;left:180px">
                        
                    </div>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-6" id="product_bag_image" style="padding-left: 20px;">
                              
                          </div>
                          <div class="col-md-6">
                              <h5 style="color:#EA5B77;" align="center">Product description</h5>
                               <div class="w3-panel w3-card" id="product_bag_description" style="width:280px;">
                                   
                               </div> 
                              <?php echo form_open('shopping_cart/add_to_cart');?>
                              <div class="form-group">
                                  <label for="quantity" class="form-label">Quantity:</label>
                                  <?php 
                                  $quantity = array(
                                      'name' => 'quantity',
                                      'placeholder' => 'Quantity',
                                      'class'     => 'form-control',
                                      'id' =>'quantity'
                                      
                                  );
                                  echo form_input($quantity);
                                  ?>
                              </div>
                               <div class="form-group">
                                  <input type="hidden" name="product_id" id="product_id3"/>
                              </div>
                              <div class="form-group">
                                  <input type="hidden" name="product_name" id="product_name3"/>
                              </div>
                              <div class="form-group">
                                  <input type="hidden" name="product_price" id="product_price3"/>
                              </div>
                              
                              <button type="submit" class="btn btn-success btn-block">Add To Wish List</button>
                              <?php echo form_close();?>
                              
                          </div>
                      
                     </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
     
         
 
<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
<script src="<?php echo base_url('assets/styles/bootstrap4/popper.js');?>"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('admin/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/Isotope/isotope.pkgd.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/easing/easing.js');?>"></script>
<script src="<?php echo base_url('assets/js/custom.js');?>"></script>
<script src="<?php echo base_url ('assets/jep.js');?>"></script>
</body>

</html>