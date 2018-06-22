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
	<link rel='stylesheet' id='header-css'  href='/css/header-dg.css' type='text/css' media='all' />

	<link rel='stylesheet' id='main-style-css'  href='/css/main.css' type='text/css' media='all' />
	<?php if($page_type==="front-page") { ?>
	<link rel='stylesheet' id='front-page-style-css'  href='/css/front-page.css' type='text/css' media='all' />
	<?php } ?>
	<script type='text/javascript' src='/js/jquery.js?ver=1.12.4'></script>
	<script type='text/javascript' src='/js/jquery-migrate.min.js?ver=1.4.1'></script>
	<script type='text/javascript' src='/js/bootstrap.min.js?ver=4.0.0'></script>
	<script type='text/javascript' src='/js/owl.carousel.min.js'></script>
	<script type='text/javascript' src='/js/main.js'></script>
    <script src = "js/mobile-menu.js"></script>
</head>
<body class="rtl<?php echo ' '.$page_type; ?>">

<header>
    <div id = "topline">

        <div id = "desctop-opener">
            <img src = "img/hamburger-light.png" id = "desc-op">
        </div>
        <a class = "mobile-menu-btn" href = "#menu">
            <img src = "img/hamburger-light.png" id = "mob-op">
        </a>
        <div id = "header-logo">
            <img src = "img/logo.png">
        </div>
        <div class = "topline-item mobile-hidden">
            03-556-8433 <img src = "img/phone-topline.png">
        </div>
        <div class = "topline-item mobile-hidden topline-item-blue">
            ייעוץ  עם מומחה <img src = "img/question-topline.png">
        </div>
        <div class = "topline-item">
            <span class = "mobile-hidden">text</span> <i class = "fa fa-pencil"></i>
        </div>
        <div class = "topline-item">
            <span class = "mobile-hidden">התחברות</span> <img src = "img/user-topline.png">
        </div>

    </div>

    <div id = "menu" class = "">
        <div class = "header_container">
            <ul id="menu_header" class="header_menu-menu">
                <li class = "menu-item mobile-not-hidden"><input placeholder="text-placeholder"><img src = "img/about-header-search.png"></li>
                <li class="menu-item">
                    <a href = "#">הסיפור_שלנו</a>
                </li>
                <li class="menu-item">
                    <a href = "#">מוצרים</a>
                </li>
                <li class="menu-item">
                    <a href = "#">פרוייקטים</a>
                </li>
                <li class="menu-item">
                    <a href = "#">בלוג</a>
                </li>
                <li class="menu-item">
                    <a href = "#">צור_קשר</a>
                </li>
                <li class="menu-item">
                    <img src = "img/about-header-search.png" class = "mobile-hidden">
                    <a href = "#" class = "mobile-account"> <span class = "mobile-account-href">text1</span> <span><img src = "img/user-topline.png">text2</span> </a>
                </li>
            </ul>
            <div class = "mobile-not-hidden header-socials">
                <a class = "header-soc">
                    <i class = "fa fa-twitter"></i>
                </a>
                <a class = "header-soc">
                    <i class = "fa fa-linkedin-in"></i>
                </a>
                <a class = "header-soc">
                    <i class = "fa fa-facebook"></i>
                </a>
            </div>
            <div class = "logo">
                <img src = "img/logo.png">
            </div>
        </div>
    </div>

</header>

<?php } ?>