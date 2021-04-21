<?php include('develops/index.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie lt-ie9 lt-ie8 lt-ie7 ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="uploads/logo.png">

<title>ARISE</title>

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600italic,600,700,700italic,800italic,800,400italic|Roboto:400,400italic,300italic,300,700italic,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.css" />

<!-- Stylesheets -->
<link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/css/animate/animate.css">
<link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">

<!-- Main Stylesheet -->
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />

<!-- Modernizr v2.7.1 -->
<script type="text/javascript" src="assets/js/modernizr-2.7.1.min.js"></script>

</head>

<body>

		<!-- Begin Header -->
        <header id="top" class="header-type clearfix">
        	<!-- begin header inner -->
        	<div class="header-inner">
	        	<div class="container">
	            	<div class="row">
	                	<div class="col-md-5 clearfix" style="padding-top: 15px;">
							<?php if(!empty($contact)) { ?>
							<div class="pull-left">
								<a href="<?php echo $contact['facebook']; ?>" class="btn btn-icon btn-icon-white" target="_blank"><i class="fa fa-facebook fa-fw"></i></a>
				        		<a href="<?php echo $contact['twitter']; ?>" class="btn btn-icon btn-icon-white" target="_blank"><i class="fa fa-twitter fa-fw"></i></a>
				       			<a href="<?php echo $contact['googleplus']; ?>" class="btn btn-icon btn-icon-white" target="_blank"><i class="fa fa-google-plus fa-fw"></i></a>
			     				<a href="<?php echo $contact['linkedin']; ?>" class="btn btn-icon btn-icon-white" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a>
			    				<a href="<?php echo $contact['instagram']; ?>" class="btn btn-icon btn-icon-white" target="_blank"><i class="fa fa-instagram fa-fw"></i></a>
								<a href="<?php echo $contact['pinterest']; ?>" class="btn btn-icon btn-icon-white" target="_blank"><i class="fa fa-pinterest fa-fw"></i></a>
								<a href="<?php echo $contact['youtube']; ?>" class="btn btn-icon btn-icon-white" target="_blank"><i class="fa fa-youtube fa-fw"></i></a>
							</div>
							<?php } ?>
						</div>
						<div class="col-md-7 clearfix">
	                    	<!-- <div class="logo pull-left"><a href="index.html"><img src="uploads/logo 222.png" alt="arise-logo" /></a></div> -->
	                        <div id="trigger-mobile-nav"><i class="fa fa-bars"></i></div>
	                    	<nav id="main-nav" class="main-nav pull-right clearfix mobile-nav">
	                        	<ul class="nav" style="font-family: AriseFontLight;">
	                            	<li><a href="#home">Home</a>
	                            		<!-- <ul class="sub-menu">
	                            			<li><a href="index.html">Background Slider</a></li>
	                            			<li><a href="index-parallax.html">Parallax</a></li>
	                            		</ul> -->
	                            	</li>
	                                <li><a href="#about-us">About</a></li>
	                                <!-- <li><a href="#services">Services</a></li> -->
	                                <li><a href="#portfolio">Services</a></li>
	                                <!-- <li><a href="#team">Team</a></li>
	                                <li><a href="#pricing">Pricing</a></li>
	                                <li><a href="#testimonials">Testimonials</a></li> -->
	                                <li><a href="#contact">Contact</a></li>
                                    <!-- <li><a href="blog.html">Blog</a></li> -->
	                            </ul>
	                        </nav>
	                    </div>
	                </div>
	            </div>
            </div>
            <!-- // end header inner -->

            <!-- begin header box -->
			<?php //if(!empty($contact)) { ?>
            <!-- <div id="header-box" class="header-box font-white">

            	<div class="header-box-inner closed no-delay">
	            	<div class="container">
	            		<div class="row">
	            			<div class="col-md-12 clearfix">
	            				<p><?php //echo $contact['body']; ?></p>

	            				<h3>Let's Socialize!</h3>
	            				<p>
				        			<a href="<?php //echo $contact['facebook']; ?>" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
				        			<a href="<?php //echo $contact['twitter']; ?>" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
				       				<a href="<?php //echo $contact['googleplus']; ?>" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
			     					<a href="<?php //echo $contact['linkedin']; ?>" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
			    					<a href="<?php //echo $contact['skype']; ?>" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
				        		</p>
	            			</div>	            			
	            		</div>
	            	</div>
	            	<!-- trigger for opening/closing the header box -->
            		<!-- <div id="header-close" class="header-box-trigger trigger-light"><i class="fa fa-minus fa-fw"></i></div>
            	</div> -->

            	<!-- trigger for opening/closing the header box -->
            	<!-- <div id="header-open" class="header-box-trigger no-delay"><i class="fa fa-plus fa-fw"></i></div>

            </div> -->
			<?php //} ?>
            <!-- // end header box -->

        </header>
        <!-- // End Header -->

        <!-- Begin Home -->
        <section id="home" class="page-type black-bg font-white depth-type animated delayed no-opacity" data-animation="fadeIn" data-animation-delay="0s">
        	<div class="container">
        		<div class="row" style="padding-bottom: 425px;">
        			<div class="col-md-12 text-center">

        				<!-- logo -->
        				<div class="big-logo animated delayed no-opacity" data-animation="fadeInDown" data-animation-delay="0.4s"><a href="#" data-toggle="modal" data-target="#logostory"><img src="uploads/logo 222.png" width="200" alt="arise-logo" /></a></div>
						

        				<!-- portfolio filter -->
        				<div id="diamond-filter-home" class="diamond-filter font-white animated delayed no-opacity" data-animation="fadeInUp" data-animation-delay="0.7s">
        					<!-- <ul class="special-font">
        						<li class="active"><a data-filter="*" href="#">All</a></li>
        						<li><a data-filter="webdesign" href="#">Webdesigns</a></li>
        						<li><a data-filter="illustration" href="#">Illustrations</a></li>
        						<li><a data-filter="icons" href="#">Icons</a></li>
        					</ul> -->
        				</div>

        				<!-- portfolio slider -->
        				<div id="diamondslider-home" class="diamondslider nav-white animated delayed no-opacity" data-animation="fadeInUp" data-animation-delay="1.1s">
        					<!-- <ul class="slides">
        						<li class="shape diamond small" data-category="webdesign icons">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/death-course-small.html"><span class="hover-title special-font">Death Course Small</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="webdesign">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/deepee.html"><span class="hover-title special-font">Deepee</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="webdesign">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/friend-or-foe.html"><span class="hover-title special-font">Friend Or Foe</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="illustration">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/love-is-war.html"><span class="hover-title special-font">Love Is War</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="webdesign">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/naturformen.html"><span class="hover-title special-font">Naturformen</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="webdesign">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/nero-me-and-you.html"><span class="hover-title special-font">Nero Me And You</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="illustration">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/space-pirate.html"><span class="hover-title special-font">Space Pirate</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="icons">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/the-final-hours.html"><span class="hover-title special-font">The Final Hours</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="webdesign">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/crystal-fighters.html"><span class="hover-title special-font">Crystal Fighters</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="illustration">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/space-monkey.html"><span class="hover-title special-font">Space Monkey</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="icons">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/orange-juice.html"><span class="hover-title special-font">Orange Juice</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="webdesign">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/mamba.html"><span class="hover-title special-font">Mamba</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="illustration">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/feliz-navidad.html"><span class="hover-title special-font">Feliz Navidad</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="icons">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/monkey-man.html"><span class="hover-title special-font">Monkey Man</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="webdesign">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/music-ears.html"><span class="hover-title special-font">Music Ears</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="illustration">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/hispa-scooters.html"><span class="hover-title special-font">Hispa Scooters</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="illustration">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/nothing-special.html"><span class="hover-title special-font">Nothing Special</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="icons">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/joy-monks.html"><span class="hover-title special-font">Joy Monks</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="icons">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/typo-set.html"><span class="hover-title special-font">Typo Set</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="illustration">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/zocool-iconset.html"><span class="hover-title special-font">Zocool Iconset</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="illustration">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/anniversary.html"><span class="hover-title special-font">Anniversary</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="icons">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/joyeur.html"><span class="hover-title special-font">Joyeur</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="webdesign">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/the-animals.html"><span class="hover-title special-font">The Animals</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="illustration">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/everlasting.html"><span class="hover-title special-font">Everlasting</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="icons">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/mountain-blo.html"><span class="hover-title special-font">Mountain Blo</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="webdesign">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/logoset.html"><span class="hover-title special-font">Logoset</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="illustration">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/jamaica.html"><span class="hover-title special-font">Jamaica</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="icons">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/synical.html"><span class="hover-title special-font">Synical</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="illustration">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/normen.html"><span class="hover-title special-font">Normen</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="icons">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/speed-man.html"><span class="hover-title special-font">Speed Man</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="webdesign">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/cart-race.html"><span class="hover-title special-font">Cart Race</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        						<li class="shape diamond small" data-category="illustration">
        							<a class="item-hover ajax-nav" href="#!portfolio-item/jamming.html"><span class="hover-title special-font">Jamming</span><span class="hover-action">- view -</span></a>
        							<img src="http://placehold.it/210x210" alt="" />
        						</li>
        					</ul> -->
        				</div>

        			</div>
        		</div>
        	</div>

            <!-- Background Triangle Overlay / Special Depth Bg -->
            <div class="depth-bg">			
            	<!-- Background Image Slider -->
                <div class="owl-carousel depth-slider">
                    <?php if(!empty($carousel)) { ?>
						<?php for($i=0;$i<sizeof($carousel);$i++) { ?>
							<div><img src="uploads/carousel/<?php echo $carousel[$i]['name']; ?>" alt="<?php echo $carousel[$i]['name']; ?>" /></div>							
						<?php } ?>
					<?php } ?>
                </div>
                <!-- // end Background Image Slider -->

                <!-- Background Texture for Depth Bg -->
            	<!-- <div class="depth-texture"></div> -->

            	<!-- Background Overlay Image (e.g. a transparant triangle) -->
            	<div class="depth-bg-img" style="background-image: url(demo/bg/home-bg-2.png);"></div>

            </div>
            <!-- // End Background Triangle Overlay / Special Depth Bg -->

        </section>
		<div id="logostory" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<?php language('logostory'); ?>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<br>
					</div>
					<div class="modal-body">
						<center><img src="uploads/logo.png" width="150" alt="arise-logo" /></center>
						<p><?php echo $about['logostory']; ?></p>
					</div>
				</div>
			</div>
		</div>
        <!-- // End Home -->

        <!-- Begin About Us -->
		<?php if(!empty($about)) { ?>
        <section id="about-us" class="page-type">
        	<div class="container no-padding-bottom">
            	<div class="row">
                	<div class="col-md-12 text-center">
                    	<h1 class=" no-margin-bottom" style="padding-top: 100px; color: #e6007e;">Extraordinary Is Our Ordinary</h1>
                    	<!-- <h2 class="sub-title">We Bring Your Product to the Next Level</h2> -->
                    </div>
                </div>
                <!-- <div class="row">
                	<div class="col-md-8 col-md-offset-2 text-center aboutus-text">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Proin aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="service clearfix animated delayed no-opacity" data-animation="fadeInLeft" data-animation-delay="0.2s">
                            <div class="shape diamond center dark shape-icon"><a href="#" data-toggle="modal" data-target="#body"><i class="fa fa-file fa-fw"></i></a></div>
                            <h4 class="service-title"><?php language('body'); ?></h4>
							<!-- <p><?php //echo substr($about['vision'], 0, 250); ?></p> -->
                        </div>
                    </div>
					<div id="body" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<?php language('body'); ?>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<br>
								</div>
								<div class="modal-body">
									<p><?php echo $about['body']; ?></p>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-md-3 text-center">
                        <div class="service clearfix animated delayed no-opacity" data-animation="fadeInLeft" data-animation-delay="0.4s">
                            <div class="shape diamond center dark shape-icon"><a href="#" data-toggle="modal" data-target="#vision"><i class="fa fa-eye fa-fw"></i></a></div>
                            <h4 class="service-title"><?php language('vision'); ?></h4>
                            <!-- <p><?php //echo substr($about['vision'], 0, 250); ?></p> -->
                        </div>
                    </div>
					<div id="vision" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<?php language('vision'); ?>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<br>
								</div>
								<div class="modal-body">
									<p><?php echo $about['vision']; ?></p>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-md-3 text-center">
                        <div class="service clearfix animated delayed no-opacity" data-animation="fadeInRight" data-animation-delay="0.6s">
                            <div class="shape diamond center dark shape-icon"><a href="#" data-toggle="modal" data-target="#mission"><i class="fa fa-comment fa-fw"></i></a></div>
                            <h4 class="service-title"><?php language('mission'); ?></h4>
                            <!-- <p><?php  //echo substr($about['mission'], 0, 250); ?></p> -->
                        </div>
                    </div>
					<div id="mission" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<?php language('mission'); ?>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<br>
								</div>
								<div class="modal-body">
									<p><?php echo $about['mission']; ?></p>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-md-3 text-center">
                        <div class="service clearfix animated delayed no-opacity" data-animation="fadeInRight" data-animation-delay="0.8s">
                            <div class="shape diamond center dark shape-icon"><a href="#" data-toggle="modal" data-target="#values"><i class="fa fa-check fa-fw"></i></a></div>
                            <h4 class="service-title"><?php language('values'); ?></h4>
                            <!-- <p><?php //echo substr($about['ourvalues'], 0, 250); ?></p> -->
                        </div>
                    </div>
					<div id="values" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<?php language('values'); ?>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<br>
								</div>
								<div class="modal-body">
									<p><?php echo $about['ourvalues']; ?></p>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </section>
		<?php } ?>
        <!-- // End About Us -->

        <!-- Begin Separator Aside -->
        <aside id="parallax-one" class="separator-type" style="height: 600px;">

            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <!-- <p class="tagline">ARISE is a clean, modern theme with a vintage touch</p>
                        <a href="#about-us" class="btn btn-border border-white">Read More</a> -->
                    </div>
                </div>
            </div>

            <!-- parallax with texture -->
            <div id="parallax-cta" class="parallax texture" style="background-image:url(uploads/_MG_7889.jpg);"></div>

        </aside>
        <!-- // End Separator Aside -->
        
        <!-- Begin Services -->
        <!-- <section id="services" class="page-type depth-type">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-12 text-center">
                    	<h1 class="section-title">Our Services</h1>
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-8 col-md-offset-2 text-center">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                        Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-xtra-1">
                        <div class="service clearfix animated delayed no-opacity" data-animation="bounceIn" data-animation-delay="0.3s">
                            <div class="shape diamond center"><img src="http://placehold.it/210x210" alt="" /></div>
                            <h3 class="service-title">Branding</h3>
                            <p>&quot;To succeed in branding you must understand the needs and wants of your customers and prospects.&quot;</p>
                        </div>
                    </div>
                    <div class="col-xtra-1 col-xtra-offset-1">
                        <div class="service clearfix animated delayed no-opacity" data-animation="bounceIn" data-animation-delay="0.6s">
                            <div class="shape diamond center"><img src="http://placehold.it/210x210" alt="" /></div>
                            <h3 class="service-title">UI/UX Design</h3>
                            <p>“It is not that one designer cannot handle both areas. It is about the tools and ability to problem solve.”</p>
                        </div>
                    </div>
                    <div class="col-xtra-1 col-xtra-offset-4">
                        <div class="service clearfix animated delayed no-opacity" data-animation="bounceIn" data-animation-delay="0.9s">
                            <div class="shape diamond center"><img src="http://placehold.it/210x210" alt="" /></div>
                            <h3 class="service-title">App Design</h3>
                            <p>&quot;There are many ways to design an app, and many of the best approaches do not involve writing any code.&quot;</p>
                        </div>
                    </div>
                    <div class="col-xtra-1 col-xtra-offset-1">
                        <div class="service clearfix animated delayed no-opacity" data-animation="bounceIn" data-animation-delay="1.2s">
                            <div class="shape diamond center"><img src="http://placehold.it/210x210" alt="" /></div>
                            <h3 class="service-title">Webdesign</h3>
                            <p>&quot;The most innovative designers consciously reject the standard option box and cultivate an appetite for thinking wrong.&quot;</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- special depth bg -->
            <!--  <div class="depth-bg">

            	<!-- special depth image -->
                <!-- <div class="depth-img animated delayed no-opacity" data-animation="ts-slideInUp" data-animation-delay="1.2s"><img src="http://placehold.it/800x760" /></div>

                <!-- background overlay image (e.g. a transparant triangle) -->
            	<!-- <div class="depth-bg-img" style="background-image: url(demo/bg/services-bg.png);"></div>

            <!-- </div>
            <!-- // end special depth bg -->

        <!-- </section> -->
        <!-- // End Services -->

        <!-- Begin Portfolio -->
		<?php if(!empty($categories)) { ?>
		<!-- style="background-image: url(uploads/logo333.png); background-position: center;" -->
        <section id="portfolio" class="page-type grey-bg">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<h1 class="section-title text-center">Services</h1>

                        <!-- diamond slider navigation -->
        				<div id="diamond-filter-portfolio" class="diamond-filter animated delayed no-opacity" data-animation="fadeInDown" data-animation-delay="0.3s">
        					<ul class="special-font">
								<li class="active"><a data-filter="*" href="#">All</a></li>									
								<?php for($i=0;$i<sizeof($categories);$i++) { ?>
									<li><a data-filter="<?php echo $categories[$i]['id']; ?>" href="#"><?php echo $categories[$i]['title']; ?></a></li>										
								<?php } ?>
        					</ul>
        				</div>

                        <!-- diamond slider -->
        				<div id="diamondslider-portfolio" class="diamondslider animated delayed no-opacity" data-animation="fadeInUp" data-animation-delay="0.7s">
        					<ul class="slides">
								<?php for($i=0;$i<sizeof($subcategories);$i++) { ?>
									<?php if(!empty($subcategories)) { ?> <!--  style="background-color: rgba(163, 163, 0, 0.75);" -->
										<li class="shape diamond" data-category="<?php echo $subcategories[$i]['categoryid']; ?>" style="background-color: #054b7a;">
											<a class="item-hover ajax-nav" href="#" data-toggle="modal" <?php if($subcategories[$i]['haschilds'] == 1) { ?>data-target="#subcategory-<?php echo $subcategories[$i]['id']; ?>"<?php } ?>><span class="hover-title special-font"><?php echo $subcategories[$i]['title']; ?></span></a>
											<!-- <img src="uploads/services/thumbnail/<?php //echo $subcategories[$i]['image']; ?>" alt="<?php //echo $subcategories[$i]['title']; ?>" /> -->
											<i class="fa fa-<?php echo $subcategories[$i]['icon']; ?> fa-fw" style="padding-left: 15px; padding-top: 40px; color: #0871b7;"></i>
										</li>
										
									<?php } ?>
								<?php } ?>
        					</ul>
        				</div>
						<?php for($i=0;$i<sizeof($subcategories);$i++) { ?>
							<?php if(!empty($subcategories)) { ?>
								<div id="subcategory-<?php echo $subcategories[$i]['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<?php echo $subcategories[$i]['title']; ?>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<br>
											</div>
											<div class="modal-body">
												<div class="row">
													<?php
													if($subcategories[$i]['haschilds'] == 1)
													{
													$services = getServices($subcategories[$i]['id']);
													for($j=0;$j<sizeof($services);$j++) { ?>
														<div class="col-md-4" style="min-height:400px;">												
															<!-- <div class="shape diamond center"><img src="uploads/services/thumbnail/<?php //echo $services[$j]['image']; ?>" alt="<?php echo $services[$j]['title']; ?>" /></div> -->
															<div class="shape diamond center" style="background-color: #054b7a;"><i class="fa fa-<?php echo $services[$j]['icon']; ?> fa-fw" style="padding-left: 15px; padding-top: 40px; color: #0871b7;"></i></div>
															<center><strong><p style="font-size: 100%;"><?php echo $services[$j]['title']; ?></p></strong></center>
															<center><p>
															<?php
															if($services[$j]['haschilds'] == 1)
															{
																$subservices = getSubServices($services[$j]['id']);
																for($k=0;$k<sizeof($subservices);$k++) {
															?>
															<?php echo $subservices[$k]['title'].'. '; ?>
															<?php } ?>
															<?php } ?>
															</p></center>															
														</div>														
													<?php } ?>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						<?php } ?>
        			</div>
        		</div>
        	</div>
        </section>
		<?php } ?>
        <!-- // End Portfolio -->

        <!-- Begin Separator Aside -->
		<?php //if(!empty($clients)) { ?>
        <aside id="clients" class="separator-type carousel-type">
            
            <!-- <div class="container text-center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h2 class="tagline">Our Great Clients</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel-wrapper nav-white">
                            <div id="carousel-clients" class="owl-carousel carousel">
                                <?php //for($i=0;$i<sizeof($clients);$i++) { ?>
									<div class="carousel-item animated delayed no-opacity" data-animation="fadeIn" data-animation-delay="0.2s"><a href="#"><img src="uploads/clients/thumbnail/<?php echo $clients[$i]['image']; ?>" alt="<?php echo $clients[$i]['title']; ?>" /></a></div>
								<?php //} ?>								                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- parallax with texture -->
            <div id="parallax-clients" class="parallax texture" style="background-image:url(http://placehold.it/1900x1050);"></div>

        </aside>
		<?php //} ?>
        <!-- // End Separator Aside -->

        <!-- Begin Team -->
        <!-- <section id="team" class="page-type grey2-bg">
        	<div class="container">
        		<div class="row">
                	<div class="col-md-12 text-center">
                    	<h1 class="section-title">Our Team</h1>
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-8 col-md-offset-2 text-center">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Proin aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-12 text-center">

        				<!-- portfolio slider -->
                        <!-- <div id="diamondslider-team" class="diamondslider animated delayed no-opacity" data-animation="fadeInDown" data-animation-delay="0.3s">
                            <ul class="slides">
                                <li class="shape diamond" data-category="photography">
                                    <a class="item-hover show" href="#jacob-wright" data-grtabs="tab"><span class="hover-title special-font">Jacob Wright</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                                <li class="shape diamond" data-category="photography">
                                    <a class="item-hover" href="#elizabeth-riley" data-grtabs="tab"><span class="hover-title special-font">Elizabeth Riley</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                                <li class="shape diamond" data-category="videos">
                                    <a class="item-hover" href="#jo-hardley" data-grtabs="tab"><span class="hover-title special-font">Jo Hardley</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                                <li class="shape diamond" data-category="videos">
                                    <a class="item-hover" href="#julian-smith" data-grtabs="tab"><span class="hover-title special-font">Julian Smith</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                                <li class="shape diamond" data-category="videos">
                                    <a class="item-hover" href="#kim-elder" data-grtabs="tab"><span class="hover-title special-font">Kim Elder</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                                <li class="shape diamond" data-category="photography">
                                    <a class="item-hover" href="#john-doe" data-grtabs="tab"><span class="hover-title special-font">John Doe</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                                <li class="shape diamond" data-category="photography">
                                    <a class="item-hover" href="#jim-cook" data-grtabs="tab"><span class="hover-title special-font">Jim Cook</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                                <li class="shape diamond" data-category="videos">
                                    <a class="item-hover" href="#edward-ross" data-grtabs="tab"><span class="hover-title special-font">Edward Ross</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                                <li class="shape diamond" data-category="videos">
                                    <a class="item-hover" href="#noah-specs" data-grtabs="tab"><span class="hover-title special-font">Noah Specs</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                                <li class="shape diamond" data-category="videos">
                                    <a class="item-hover" href="#kane-insane" data-grtabs="tab"><span class="hover-title special-font">Kane Insane</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                                <li class="shape diamond" data-category="photography">
                                    <a class="item-hover" href="#dennis-menace" data-grtabs="tab"><span class="hover-title special-font">Dennis Menace</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                                <li class="shape diamond" data-category="videos">
                                    <a class="item-hover" href="#alex-spanex" data-grtabs="tab"><span class="hover-title special-font">Alex Spanex</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                                <li class="shape diamond" data-category="videos">
                                    <a class="item-hover" href="#kim-smith" data-grtabs="tab"><span class="hover-title special-font">Kim Smith</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                                <li class="shape diamond" data-category="videos">
                                    <a class="item-hover" href="#susan-fusan" data-grtabs="tab"><span class="hover-title special-font">Susan Fusan</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                                <li class="shape diamond" data-category="videos">
                                    <a class="item-hover" href="#tim-dirdim" data-grtabs="tab"><span class="hover-title special-font">Tim Dirdim</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                                <li class="shape diamond" data-category="videos">
                                    <a class="item-hover" href="#iona-balona" data-grtabs="tab"><span class="hover-title special-font">Iona Balona</span><span class="hover-action">- read more -</span></a>
                                    <img src="http://placehold.it/210x210" alt="" />
                                </li>
                            </ul>
                        </div> -->

                        <!-- team tabs -->
                        <!-- <div id="team-panes" class="team-panes animated delayed no-opacity" data-animation="fadeInUp" data-animation-delay="0.7s">

                            <div id="jacob-wright" class="grtabs-pane team-pane active">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">Jacob Wright</h4>
                                        <p class="team-function special-font">Webdesigner</p>
                                        <p>Jacob supports the Vinto team by coordinating customer feedback and marketing initiatives into each release. Jacob graduated from the Computer Science program and also worked for Omni. before joining the Vinto team. In his spare time, Jacob likes to tweak his computer, work on his tennis game, and hit the local Cineplex for the latest blockbusters.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/jacob-wright.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="elizabeth-riley" class="grtabs-pane team-pane">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">Elizabeth Riley</h4>
                                        <p class="team-function special-font">Webdesign and Marketing</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/elizabeth-riley.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="jo-hardley" class="grtabs-pane team-pane">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">Jo Hardley</h4>
                                        <p class="team-function special-font">Illustrator</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/jo-hardley.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="julian-smith" class="grtabs-pane team-pane">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">Julian Smith</h4>
                                        <p class="team-function special-font">Illustrator</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/julian-smith.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="kim-elder" class="grtabs-pane team-pane">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">Kim Elder</h4>
                                        <p class="team-function special-font">Illustrator</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/kim-elder.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="john-doe" class="grtabs-pane team-pane">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">John Doe</h4>
                                        <p class="team-function special-font">Illustrator</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/john-doe.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="jim-cook" class="grtabs-pane team-pane">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">Jim Cook</h4>
                                        <p class="team-function special-font">Illustrator</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/jim-cook.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="edward-ross" class="grtabs-pane team-pane">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">Edward Ross</h4>
                                        <p class="team-function special-font">Illustrator</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/edward-ross.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="noah-specs" class="grtabs-pane team-pane">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">Noah Specs</h4>
                                        <p class="team-function special-font">Illustrator</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/noah-specs.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="kane-insane" class="grtabs-pane team-pane">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">Kane Insane</h4>
                                        <p class="team-function special-font">Illustrator</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/kane-insane.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="dennis-menace" class="grtabs-pane team-pane">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">Dennis Menace</h4>
                                        <p class="team-function special-font">Illustrator</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/dennis-menace.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="alex-spanex" class="grtabs-pane team-pane">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">Alex Spanex</h4>
                                        <p class="team-function special-font">Illustrator</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/alex-spanex.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="kim-smith" class="grtabs-pane team-pane">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">Kim Smith</h4>
                                        <p class="team-function special-font">Illustrator</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/kim-smith.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="susan-fusan" class="grtabs-pane team-pane">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">Susan Fusan</h4>
                                        <p class="team-function special-font">Illustrator</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/susan-fusan.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="tim-dirdim" class="grtabs-pane team-pane">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">Tim Dirdim</h4>
                                        <p class="team-function special-font">Illustrator</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/tim-dirdim.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="iona-balona" class="grtabs-pane team-pane">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name">Iona Balona</h4>
                                        <p class="team-function special-font">Illustrator</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/iona-balona.html">Read More</a>
                                    </div>
                                </div>
                            </div>

                        </div> -->
                        <!-- end team tabs -->

                	<!-- </div>
                </div>
        	</div>
        </section> -->
        <!-- // End Team -->

        <!-- Begin Pricing -->
        <!-- <section id="pricing" class="page-type">
        	<div class="container no-padding-bottom">
        		<div class="row">
                	<div class="col-md-12 text-center">
                    	<h1 class="section-title">Pricing</h1>
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-8 col-md-offset-2 text-center">
                        <p>We offer efficient affordable pricing models to fit different types, duration and scopes of your project. Please contact us for further information.</p>
                    </div>
                </div>
                <div class="row text-center">
                	<div class="col-md-3 col-sm-6">
                		<div class="price-package bottom-arrow clearfix animated delayed no-opacity" data-animation="fadeInLeft" data-animation-delay="0.2s">
                			<div class="package-header">
                				<div class="name">Personal</div>
                				<div class="price"><small class="sign">$</small><span class="number">17</span><small class="period">/MO</small></div>
                				<div class="info">billed annually or $19 month-yo-month</div>
                			</div>
                			<div class="package-features">
	                			<ul>
	                				<li>Package Review</li>
	                				<li>UI/UX Action Items</li>
	                				<li>Package Review</li>
	                				<li>UI/UX Action Items</li>
	                			</ul>
                			</div>
                			<a class="btn btn-border" href="#">Sign Up</a>
                		</div>
                	</div>
                	<div class="col-md-3 col-sm-6">
                		<div class="price-package bottom-arrow clearfix animated delayed no-opacity" data-animation="fadeInLeft" data-animation-delay="0.5s">
                			<div class="package-header">
                				<div class="name">Team</div>
                				<div class="price"><small class="sign">$</small><span class="number">89</span><small class="period">/MO</small></div>
                				<div class="info">billed annually or $19 month-yo-month</div>
                			</div>
                			<div class="package-features">
	                			<ul>
	                				<li>Package Review</li>
	                				<li>UI/UX Action Items</li>
	                				<li>Package Review</li>
	                				<li>UI/UX Action Items</li>
	                			</ul>
                			</div>
                			<a class="btn btn-border" href="#">Sign Up</a>
                		</div>
                	</div>
                	<div class="col-md-3 col-sm-6">
                		<div class="price-package bottom-arrow clearfix animated delayed no-opacity" data-animation="fadeInRight" data-animation-delay="0.8s">
                			<div class="package-header">
                				<div class="name">Company</div>
                				<div class="price"><small class="sign">$</small><span class="number">359</span><small class="period">/MO</small></div>
                				<div class="info">billed annually or $19 month-yo-month</div>
                			</div>
                			<div class="package-features">
	                			<ul>
	                				<li>Package Review</li>
	                				<li>UI/UX Action Items</li>
	                				<li>Package Review</li>
	                				<li>UI/UX Action Items</li>
	                			</ul>
                			</div>
                			<a class="btn btn-border" href="#">Sign Up</a>
                		</div>
                	</div>
                	<div class="col-md-3 col-sm-6">
                		<div class="price-package bottom-arrow clearfix animated delayed no-opacity" data-animation="fadeInRight" data-animation-delay="1.1s">
                			<div class="package-header">
                				<div class="name">Enterprise</div>
                				<div class="price"><small class="sign">$</small><span class="number">899</span><small class="period">/MO</small></div>
                				<div class="info">billed annually or $19 month-yo-month</div>
                			</div>
                			<div class="package-features">
	                			<ul>
	                				<li>Package Review</li>
	                				<li>UI/UX Action Items</li>
	                				<li>Package Review</li>
	                				<li>UI/UX Action Items</li>
	                			</ul>
                			</div>
                			<a class="btn btn-border" href="#">Sign Up</a>
                		</div>
                	</div>
                </div>
        	</div>
        </section> -->
        <!-- // End Pricing -->

        <!-- Begin Separator Aside -->
        <aside id="contact-cta" class="separator-type" style="height: 600px;">

            <div class="container text-center">
                <!-- <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p class="tagline">Interested in our services?</p>
                        <a href="#contact" class="btn btn-border border-white">Contact Us</a>
                    </div>
                </div> -->
            </div>

            <!-- parallax with texture -->
            <div id="parallax-contact" class="parallax texture" style="background-image:url(uploads/IMG_0457.jpg);"></div>

        </aside>
        <!-- // End Separator Aside -->

        <!-- Begin Testimonials -->
		<?php if(!empty($testimonials)) { ?>
        <!-- <section id="testimonials" class="page-type grey-bg">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<h1 class="section-title text-center">Testimonials</h1>

        				<!-- testimonials -->
                        <!-- <div class="testimonials-wrapper animated delayed no-opacity" data-animation="bounceIn" data-animation-delay="0.3s">
                            <div id="slider-testimonials" class="owl-carousel testimonials">
								<?php for($i=0;$i<sizeof($testimonials);$i++) { ?>
									<div class="testimonial clearfix">
										<div class="testimonial-content pull-left">
											<p><?php echo $testimonials[$i]['body']; ?></p>
											<p class="testimonial-author special-font"><?php echo $testimonials[$i]['name']; ?>, <?php echo $testimonials[$i]['job']; ?> <a href="<?php echo $testimonials[$i]['website']; ?>"><?php echo $testimonials[$i]['company']; ?></a></p>
										</div>
										<div class="testimonial-thumb pull-right">
											<div class="shape diamond center"><img src="uploads/testimonials/thumbnail/<?php echo $testimonials[$i]['pic']; ?>" alt="<?php echo $testimonials[$i]['name']; ?>" /></div>
										</div>
									</div>								
								<?php } ?>                                
                            </div>
                        </div>
                        <!-- // end testimonials -->

        			<!-- </div>
        		</div>
        	</div>
        </section> -->
		<?php } ?>
        <!-- // End Testimonials -->

        <!-- Begin Contact -->
		<?php if(!empty($contact)) { ?>
        <section id="contact" class="black-bg font-white">
        	<div class="container">
        		<div class="row text-center">
        			<div class="col-md-12">
        				<h1 class=""><?php language('contact'); ?></h1>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-md-4">
        				<p class="whitetext" style="text-align: center; font-family: AriseFont; font-size: 200%;"><?php echo $contact['body']; ?></p>

        				<!-- <h3 class="top-margin-60">Let's Socialize!</h3>
        				<p class="bottom-margin-60">
        					<a href="<?php echo $contact['facebook']; ?>" class="btn btn-icon btn-icon-white animated delayed no-opacity" data-animation="fadeIn" data-animation-delay="0.3s"><i class="fa fa-facebook fa-fw"></i></a>
        					<a href="<?php echo $contact['twitter']; ?>" class="btn btn-icon btn-icon-white animated delayed no-opacity" data-animation="fadeIn" data-animation-delay="0.5s"><i class="fa fa-twitter fa-fw"></i></a>
        					<a href="<?php echo $contact['googleplus']; ?>" class="btn btn-icon btn-icon-white animated delayed no-opacity" data-animation="fadeIn" data-animation-delay="0.7s"><i class="fa fa-google-plus fa-fw"></i></a>
        					<a href="<?php echo $contact['linkedin']; ?>" class="btn btn-icon btn-icon-white animated delayed no-opacity" data-animation="fadeIn" data-animation-delay="0.9s"><i class="fa fa-linkedin fa-fw"></i></a>
        					<a href="<?php echo $contact['skype']; ?>" class="btn btn-icon btn-icon-white animated delayed no-opacity" data-animation="fadeIn" data-animation-delay="1.1s"><i class="fa fa-skype fa-fw"></i></a>
        					<!-- <a href="#" class="btn btn-icon btn-icon-white animated delayed no-opacity" data-animation="fadeIn" data-animation-delay="1.3s"><i class="fa fa-dribbble fa-fw"></i></a> -->
        				<!-- </p> -->

        				<p class="whitetext" style="font-family: AriseFontLight;"><?php echo $contact['address']; ?>
						<br><?php language('mobile').language('-'); ?><?php echo $contact['mobile']; ?>
						<br><?php language('phone').language('-'); ?><?php echo $contact['phone']; ?>
						<br><?php language('sphone').language('-'); ?><?php echo $contact['sphone']; ?>
        				<br><?php language('email').language('-'); ?><?php echo $contact['email']; ?></p>

        			</div>
					<div class="col-md-4">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d441776.87849735934!2d31.11738813250906!3d30.111884744364577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145815e5077bf0e9%3A0xd06a8becbe3a41f3!2sArise+MPE!5e0!3m2!1sen!2seg!4v1446383946816" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
        			<div class="col-md-4">
        				<h3 class="no-margin-top">Form</h3>
        				<div class="form-success"><strong>Thank you!</strong> We have received your message.</div>
        				<div class="contact-form"> 
	        				<form method="post" action="develops/message.php">
		        				<fieldset>
			        				<input type="text" name="name" placeholder="Name*" class="form-control form-dark" />
			        				<input type="text" name="email" placeholder="Email*" class="form-control form-dark" />
			        				<textarea rows="6" name="message" placeholder="Message*" class="form-control form-dark"></textarea>
			        				<input id="" class="btn btn-border border-white" name="sendmessage" type="submit" value="Submit" />
			        				<div class="loading"></div>
		        				</fieldset>
	        				</form>
        				</div>
        			</div>				
					
        		</div>
        	</div>
        </section>
		<?php } ?>
        <!-- // End Contact -->

        <!-- Begin Footer -->
        <footer id="footer" class="footer-type">
        	<div class="container text-center">
        	<p class="copyright no-margin-bottom">&copy; 2015 ARISE. All rights reserved. Designed and developed by <a href="#">ARISE</a></p>
        	</div>
        </footer>
        <!-- // End Footer -->
        
		<!-- jQuery and Bootstrap -->
		<script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        
		<!-- jQuery Plugins -->
        <script type="text/javascript" src="assets/js/plugins/jquery.easing.js"></script>
        <script type="text/javascript" src="assets/js/plugins/imagesloaded.js"></script>
        <script type="text/javascript" src="assets/js/plugins/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/owl.carousel.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/jquery.diamondslider.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/jquery.grafixesTabs.js"></script>
        <script type="text/javascript" src="assets/js/plugins/jquery.parallax.js"></script>
        <script type="text/javascript" src="assets/js/plugins/fluidvids.js"></script>
        <script type="text/javascript" src="assets/js/plugins/jquery.appear.js"></script>
        <script type="text/javascript" src="assets/js/plugins/jquery.tweet.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/jquery.scripts.js"></script>
        <script type="text/javascript" src="assets/js/contact-form.js"></script>

        <!-- jQuery Custom -->
        <script type="text/javascript" src="assets/js/vinto.js"></script>

</body>
</html>
