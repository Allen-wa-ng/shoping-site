<?php include './php/main.php'; ?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shop &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-2">
						<div id="fh5co-logo"><a href="index.php">桂來標湖南臘肉</a></div>
					</div>
					<div class="col-md-6 col-xs-6 text-center menu-1">
						<ul>
							<li class="has-dropdown">
								<a href="index.php">產品</a>
									<ul class="dropdown">
										<li><a href="index.php#product1">臘肉類</a></li>
										<li><a href="index.php#product2">香腸類</a></li>
										<li><a href="index.php#product3">臘魚類</a></li>
										<li><a href="index.php#product4">其它</a></li>
									</ul>
							</li>
							<!-- <li><a href="about.html">About</a></li> -->
							<li class="has-dropdown">
								<a href="services.html">訂單檢視</a>
							</li>
							<li><a href="contact.html">聯絡我們</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
						<ul>
							<li class="search">
								<div class="input-group">
								  <input type="text" placeholder="Search..">
								  <span class="input-group-btn">
									<button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
								  </span>
								</div>
							</li>
							<li class="shopping-cart"><a href="cart.html" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</nav>

		<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="owl-carousel owl-carousel-fullwidth product-carousel">
						
						<?php
							$item = "";
							$type = "";
							$data = get_file('./json/poducts.json');
							$key =false;
							foreach ($data['products'] as &$json) {
								foreach($json["items"] as &$item){
									if($item['title']!=$_GET["item"]){
										continue;
									}	
									$GLOBALS["item"]=$item;
									
									foreach($item["imgs"] as &$img){
										echo load_template('single_imgs', [
											'img' => $img,
										]);
									}
									$key=true;
									if($key) $GLOBALS["type"]=$json; 
									break;
								}
								
								if($key) break;
							}

						?>

					</div>
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2><?php echo $item['title']?></h2>
							<h2><?php echo $item['price']?></h2>
								<blockquote><p>
									<?php 
										if($type['title'] == "產品 - 臘肉類")
											{echo "臘肉以『條』為單位購買。 每條臘肉重量約1斤半~2斤左右。 大小、肥瘦可在備註填寫。";}

										elseif ($item['title'] == "港式肝腸" || $item['title'] == "港式臘腸")
											{echo  $item['title'] . "每斤約9~10節。";}
										
										elseif ($type['title'] == "產品 - 香腸類" and $item['title'] != "港式肝腸" || $item['title'] != "港式臘腸")
											{echo $item['title'] . "每斤約6~8節。";}

										elseif ($item['title'] == "原味豆腐香腸" || $item['title'] == "麻辣豆腐香腸")
											{echo "豆腐香腸帶辣，原味帶點胡椒的辣。";}

										elseif ($item['title'] == "草魚")
											{echo "草魚整隻販售。";}

										elseif ($item['title'] == "燻雞腿")
											{echo "燻雞腿每斤約2隻。";}

										elseif ($item['title'] == "燻豬頭皮")
											{echo "燻豬頭皮以『個』為單位。 ";}

										elseif ($item['title'] == "原味 燻豆腐丸子" || $item['title'] == "辣味 燻豆腐丸子")
											{echo $item['title'] . "每斤2~3顆。";}
									?>
								</p></blockquote>
							<p>
								<a href="#" class="btn btn-primary btn-outline btn-lg">加入購物車</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="fh5co-tabs animate-box">
						<ul class="fh5co-tab-nav">
							<li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-file"></i></span><span class="hidden-xs">Product Details</span></a></li>
							<li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-bar-graph"></i></span><span class="hidden-xs">Specification</span></a></li>
							<li><a href="#" data-tab="3"><span class="icon visible-xs"><i class="icon-star"></i></span><span class="hidden-xs">Feedback &amp; Ratings</span></a></li>
						</ul> -->

						<!-- Tabs -->
						<!-- <div class="fh5co-tab-content-wrap">

							<div class="fh5co-tab-content tab-content active" data-tab-content="1">
								<div class="col-md-10 col-md-offset-1">
									<span class="price">SRP: $350</span>
									<h2>Hauteville Rocking Chair</h2>
									<p>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</p>

									<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis molestias totam fugiat soluta accusantium omnis quod similique placeat at. Dolorum ducimus libero fuga molestiae asperiores obcaecati corporis sint illo facilis.</p>

									<div class="row">
										<div class="col-md-6">
											<h2 class="uppercase">Keep it simple</h2>
											<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
										</div>
										<div class="col-md-6">
											<h2 class="uppercase">Less is more</h2>
											<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
										</div>
									</div>

								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="2">
								<div class="col-md-10 col-md-offset-1">
									<h3>Product Specification</h3>
									<ul>
										<li>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius</li>
										<li>adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi</li>
										<li>Veritatis tenetur odio delectus quibusdam officiis est.</li>
										<li>Magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</li>
									</ul>
									<ul>
										<li>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius</li>
										<li>adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi</li>
										<li>Veritatis tenetur odio delectus quibusdam officiis est.</li>
										<li>Magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</li>
									</ul>
								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="3">
								<div class="col-md-10 col-md-offset-1">
									<h3>Happy Buyers</h3>
									<div class="feed">
										<div>
											<blockquote>
												<p>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</p>
											</blockquote>
											<h3>&mdash; Louie Knight</h3>
											<span class="rate">
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
											</span>
										</div>
										<div>
											<blockquote>
												<p>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</p>
											</blockquote>
											<h3>&mdash; Joefrey Gwapo</h3>
											<span class="rate">
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div> -->
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 桂來標湖南臘肉</small>
						<small class="block">地址：
							<a href="https://www.google.com/maps/dir/25.0871808,121.5496192/25.1156834,121.5157655/@25.0978977,121.5174386,14z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0"
								target="_blank">
								石牌路二段(裕民四路口)
							</a>
					</p>
					<p>
					<ul class="fh5co-social-icons">
						<!-- <li><a href="#"><i class="icon-twitter"></i></a></li> -->
						<li><a href="https://www.facebook.com/profile.php?id=100063940123246"><i
									class="icon-facebook"></i></a>
						</li>
						<li><a
								href="https://www.google.com/maps/dir/25.0871808,121.5496192/25.1156834,121.5157655/@25.0978977,121.5174386,14z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0"><i
									class="icon-globe2"></i></a></li>
						<li><a href="tel://0926166318"><i class="icon-phone"></i></a></li>
					</ul>
					</p>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<!-- Mine -->
	<script src="js/mine.js"></script>
	</body>
</html>

