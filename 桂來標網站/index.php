<?php include './php/main.php'; ?>


<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>桂來標湖南臘肉 &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords"
		content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
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
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
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
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
	<!-- Mine -->
	<link rel="stylesheet" href="css/mine.css">
</head>

<body>

	<div class="fh5co-loader"></div>

	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-6">
						<div id="fh5co-logo"><a href="">桂來標湖南臘肉</a></div>
					</div>
					<div class="col-md-6 col-xs-6 text-center menu-1">
						<ul>
							<li class="has-dropdown">
								<a>產品</a>
								<ul class="dropdown">
									<li><a onclick='hrefToPosition("product1")'>臘肉類</a></li>
									<li><a onclick='hrefToPosition("product2")'>香腸類</a></li>
									<li><a onclick='hrefToPosition("product3")'>臘魚類</a></li>
									<li><a onclick='hrefToPosition("product4")'>其它</a></li>
								</ul>
							</li>
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
										<button class="btn btn-primary" type="button"><i
												class="icon-search"></i></button>
									</span>
								</div>
							</li>
							<li class="shopping-cart"><a href="#" class="cart">
									<span><small>0</small><i class="icon-shopping-cart"></i></span>
								</a></li>
						</ul>
					</div>
				</div>

			</div>
		</nav>

		<div id="fh5co-product">

			<?php

            $func = function (array $json): string {
	            return load_template('menu_item', [
	            	'img' => $json['img'],
	            	'title' => $json['title'],
	            	'price' => $json['price'],
	            ]);
            };


            $data = get_file('./json/poducts.json');
            foreach ($data['products'] as &$json) {

	            $items = array_map($func, $json['items']);

	            echo load_template('menu', [
	            	'id' => $json['id'],
	            	'title' => $json['title'],
	            	'desc' => $json['desc'],
	            	'items' => implode("", $items),
	            ]);
            }


            ?>

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
</body>



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
<script src="https://www.w3schools.com/lib/w3.js"></script>


</html>