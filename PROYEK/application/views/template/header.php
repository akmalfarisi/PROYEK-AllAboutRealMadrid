<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title;?></title>
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Motive Mag Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url(); ?>assets/css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">

<!-- Custom Theme files -->
<link rel="stylesheet" href="<?php echo base_url('/assets/css/fontawesome-all.min.css'); ?>">
<link href="<?php echo base_url(); ?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />	

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"> </script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.css" type="text/css" media="screen" />

<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>
  <div class="header" id="home">
	 <div class="content white">
		<nav class="navbar navbar-default" role="navigation">
		   <div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url(); ?>Madrid/home"><h1>All About<span> Real Madrid</span></h1> </a>
			</div>


			<!--/.navbar-header-->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					 <li><a href="<?php echo base_url(); ?>Madrid/home">Home</a></li>
					 <li><a href="<?php echo base_url(); ?>Madrid/photo_gallery">Photo Gallery</a></li>
					  <!-- <li class="dropdown">
						<a href="business.html" class="dropdown-toggle" data-toggle="dropdown">Business<b class="caret"></b></a>
						<ul class="dropdown-menu multi-column columns-2">
							<div class="row">
								<div class="col-sm-6">
									<ul class="multi-column-dropdown">
										<li><a href="business.html">Action</a></li>
										<li class="divider"></li>
										<li><a href="business.html">bulls</a></li>
									    <li class="divider"></li>
										<li><a href="business.html">markets</a></li>
										<li class="divider"></li>
										<li><a href="business.html">Reviews</a></li>
										<li class="divider"></li>
										<li><a href="typography.html">Short codes</a></li>
									</ul>
								</div>
								<div class="col-sm-6">
									<ul class="multi-column-dropdown">
									   <li><a href="#">features</a></li>	
										<li class="divider"></li>
										<li><a href="#">Movies</a></li>
									    <li class="divider"></li>
										<li><a href="#">sports</a></li>
										<li class="divider"></li>
										<li><a href="#">Reviews</a></li>
										<li class="divider"></li>
										<li><a href="#">Account</a></li>
									</ul>
								</div>
							</div>
						</ul>
					</li> -->
					<li><a href="<?php echo base_url(); ?>Madrid/squad">Squad</a></li>
					<li><a href="<?php echo base_url(); ?>Madrid/about">About</a></li>
				</ul>
            </div>
        </body>
			<!--/.navbar-collapse-->
	 <!--/.navbar-->
	</div>
</nav>
</div>
</div>