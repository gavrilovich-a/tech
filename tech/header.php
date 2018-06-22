<?php 
function get_header($page_type) { ?>
<!DOCTYPE html>
<html dir="rtl" lang="he-IL" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name='robots' content='noindex,follow' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel='stylesheet' id='wp-css'  href='/wp/css/wp.css?ver=4.9.4' type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap4-css'  href='/css/bootstrap.min.css?ver=4.0.0' type='text/css' media='all' />
<!--	<link rel='stylesheet' id='fontawesome-css'  href='/css/fontawesome-all.min.css?ver=5.0.7' type='text/css' media='all' />-->
	<link rel="stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel='stylesheet' id='linearicons-css'  href='/css/linearicons-free.min.css?ver=1.0.0' type='text/css' media='all' />
	
	<link rel='stylesheet' id='almoni-dl-aaa-css'  href='/css/almoni-dl-aaa.min.css?ver=1.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='montserrat-css'  href='/css/montserrat.min.css?ver=1.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='opensanshebrew-css'  href='/css/opensanshebrew.min.css?ver=1.0.0' type='text/css' media='all' />

	<link rel='stylesheet' id='main-style-css'  href='/css/owl.carousel.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='main-style-css'  href='/css/owl.theme.default.min.css' type='text/css' media='all' />
	
	<link rel='stylesheet' id='main-style-css'  href='/css/main.css' type='text/css' media='all' />
	<?php if($page_type==="front-page") { ?>
	<link rel='stylesheet' id='front-page-style-css'  href='/css/front-page.css' type='text/css' media='all' />
	<?php } ?>
	<script type='text/javascript' src='/js/jquery.js?ver=1.12.4'></script>
	<script type='text/javascript' src='/js/jquery-migrate.min.js?ver=1.4.1'></script>
	<script type='text/javascript' src='/js/bootstrap.min.js?ver=4.0.0'></script>
	<script type='text/javascript' src='/js/owl.carousel.min.js'></script>
	<script type='text/javascript' src='/js/main.js'></script>
</head>
<body class="rtl<?php echo ' '.$page_type; ?>">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="col-left">
					<ul id="top-menu">																	
						<li><a href="#"><img src="img/icon-user.png" alt=""> שלום, אייל</a></li>
						<li><a href="#"><img src="img/icon-pencil.png" alt=""> הפרוייקטים שלי</a></li>
						<li><a href="#" style="color: #00a2fd;"><img src="img/icon-qa.png" alt=""> ייעוץ  עם מומחה</a></li>
						<li><a href="tel:03-556-8433"><img src="img/icon-phone.png" alt=""> 03-556-8433</a></li>
					</ul>
					</div>
				</div>
				<div class="col-md-12 content">
					<a class="mobile-menu-btn" href="#menu">
						<span></span>
						<span></span>
						<span></span>
					</a>
					<div class="col-logo col-right col-table">
						<a class="vertical-center" href="/" alt="">
							<img src="../img/logo.png" alt="" title="">
						</a>
					</div>
					<div id="menu" class="col-menu col-left">
						<ul id="menu-header" class="menu-header">
							<li class="menu-itme"><a href="#">הסיפור_שלנו</a></li>
							<li class="menu-item">
								<a href="#">מוצרים</a>
							</li>
							<li class="menu-item">
								<a href="#">פרוייקטים</a>
							</li>
							<li class="menu-item">
								<a href="#">בלוג</a>
							</li>
							<li class="menu-item ">
								<a href="#">צור_קשר</a>
							</li>
							<li style="border-right: 1px solid #3d3f4a;">
								<a href="#"><img src="img/head-search.png" alt=""></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="page-content">
<?php } ?>