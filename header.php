<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
	<!--[if lt IE 9]> <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script> 
	<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script> <![endif]--> 		
        <!-- Place favicon.ico in the root directory -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
		 <!-- start preloader -->
        <div id="loader-wrapper">
            <div class="logo"></div>
            <div id="loader">
            </div>
        </div>
        <!-- end preloader -->
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		
<!-- Start Header Section -->
<header class="main_menu_sec navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12">
				<div class="lft_hd">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""/></a>
				</div>
			</div>			
			<div class="col-lg-9 col-md-9 col-sm-12">
				<div class="rgt_hd">					
					<div class="main_menu">
						<nav id="nav_menu">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>	
						<div id="navbar">
							<ul>
								<li><a class="page-scroll" href="index.php">Home</a></li> 
							<li><a href="#">Our Another Page <i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a class="page-scroll" href="#tm_sec">Our Team</a></li>
								<li><a class="page-scroll" href="#tstm_sec">Our Testimonial</a></li>
								<li><a class="page-scroll" href="#lts_sec">Our Latest Blog</a></li>
								<li><a class="page-scroll" href="#pricing_sec">Pricing</a></li>
								<li><a class="page-scroll" href="#clt_sec">Our Happy Client</a></li>
							</ul>
							</li> 						

							<li><a href="#">Static Page<i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a class="page-scroll" href="blog.php">Blog Page</a></li>
								<li><a class="page-scroll" href="single.php">Single Blog Page</a></li>
							</ul>
							</li> 
							
								<li><a class="page-scroll" href="#abt_sec">About</a></li>
								<li><a class="page-scroll" href="#skill_sec">Our Skill</a></li>
								<li><a class="page-scroll" href="#pr_sec">Our Service</a></li>
								<li><a class="page-scroll" href="#protfolio_sec">Our Portfolio</a></li>
								<li><a class="page-scroll" href="#ctn_sec">Contact Us</a></li>
							</ul>
						</div>		
						</nav>			
					</div>					
						
				</div>
			</div>	
		</div>	
	</div>	
</header>
<!-- End Header Section -->