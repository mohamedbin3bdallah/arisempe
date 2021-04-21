<?php
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/index.php');
?>
<link rel="stylesheet" type="text/css" media="screen" href="css/loading.css" />
<div class="loading" style="">
	<center>
		<h1 class="loadingh1">
			<em>L</em>
			<em class="planet left">O</em>
			<em>A</em>
			<em>D</em>
			<em>I</em>
			<em class="planet right">N</em>
			<em>G</em>
		</h1>
	</center>
</div>
<script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/loading.js"></script>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie lt-ie9 lt-ie8 lt-ie7 ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->

<head>
<!-- <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo '<html xml:lang="ar" lang="ar" dir=rtl xmlns="http://www.w3.org/1999/xhtml">'; } ?>-->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="media production,event organization,media solution,social media,corporate identity,documentary,top advertising agencies,advertising agencies in egypt,advertising agencies in heliopolis,list of advertising agencies,list od advertising agencies in egypt,full service agencies,media agency,digital markting agency,e-markting services,startup consultation agency,markting and sales,markting jobs,marketing strategy,marketing advertising,pr and marketing,marketing plan,marketing communication,marketing and sales jobs,newbies marketing guide,event planning,photography,photography sessions,photography package,pre-wedding sessions,branding">
<meta name="author" content="">
<link rel="shortcut icon" href="uploads/logo.png">

<title>ARISE-MPE</title>

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600italic,600,700,700italic,800italic,800,400italic|Roboto:400,400italic,300italic,300,700italic,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.css" />

<style>
@import url('http://fonts.googleapis.com/earlyaccess/droidarabickufi.css');
</style>

<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>
<style>
@font-face {
		font-family: AriseFont;
		src: url('fonts/DroidKufi-Regular.ttf') format('woff');
	}
</style>
<?php } else { ?>
<style>
@font-face {
		font-family: AriseFont;
		src: url('fonts/Quirko Regular.otf') format('woff');
	}
</style>
<?php } ?>

<!-- Stylesheets -->
<link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/css/animate/animate.css">
<link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">

<!-- Main Stylesheet -->
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/mycss.css" />


<!-- Modernizr v2.7.1 -->
<script type="text/javascript" src="assets/js/modernizr-2.7.1.min.js"></script>
<!-- <script src="https://apis.google.com/js/platform.js" async defer></script>
<g:person href="https://plus.google.com/+AriseMPE-Advertising" data-rel="author"></g:person> -->
<!--<script type="text/javascript" src="js/wish.js"></script>-->
<link rel="apple-touch-icon-precomposed" href="uploads/logo.png">

<!--start here-->

<!--<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<link rel="stylesheet" type="text/css" href="add-to-homescreen-master/style/addtohomescreen.css">
<script src="add-to-homescreen-master/src/addtohomescreen.js"></script>
<script>
addToHomescreen({
   startDelay: 5
});</script>-->

</head>

<body onload="loading();">		
	<!---------------Start Wish-------------------->
	<!--<audio id="wishSoundClip">
		<source src="uploads/Happy-New-Year.mp3"></source>
		Your browser isn't invited for super fun audio time.
	</audio>
	<div id="wish" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<img class="img-back" src="uploads/Simple-Sky-Cloud.png">
		<?php //for($y=1;$y<25;$y++) { ?>
			<img class="img<?php //echo $y; ?>" src="uploads/snowflake.png">
		<?php //} ?>
		<img class="img-back" src="uploads/Simple-Sky-Cloud.png">
		<div class="modal-dialog modal-lg" style="padding-top: 15%; box-shadow: 0 8px 16px 0 rgba(250,250,250,0.2), 0 6px 20px 0 rgba(250,250,250,0.19);">
			<div class="modal-content"  style="background-color: rgba(255, 255, 255, 0.7);">
				<div class="modal-header" style="background-color: rgba(255, 255, 255, 0);">
					<center><h1 style="color: #0F72B8; font-family: AriseFont;"><div class="waitwish"><?php //language('wait'); ?></div><div class="wishword"><?php //language('wish'); ?></div></h1></center>
					<button type="button" class="close" data-dismiss="modal" style="color: green; font-size: 200%;">&times;</button>
					<br>
				</div>
				<div class="modal-body" style="background-color: rgba(255, 255, 255, 0);" <?php //if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>dir="rtl"<?php //} ?>>
					<p style="text-align: center;"><img class="wishgifcounter img-responsive" src="uploads/wishcounter.gif" style="height: 415px "><!--<img class="wishgif img-responsive" src="uploads/wish.gif" style="height: 415px">--><!--<div class="yourwish"><center><h1 style="color: #0F72B8; font-family: AriseFont;"><?php //echo $wish['name']; ?></h1></center></div></p>
				<!--</div>
			</div>
		</div>
	</div>-->
	<!-----------------End Wish-------------------->

		<!-- Begin Header -->
        <header id="/*top*/" class="header-type clearfix">
        	<!-- begin header inner -->
        	<div class="header-inner">
	        	<div class="container">
	            	<div class="row">
	                	<div class="col-md-4 clearfix" style="padding-top: 15px;">
							<?php if(!empty($contact)) { ?>
							<div class="pull-left">
								<a href="<?php echo $contact['facebook']; ?>" class="btn btn-icon btn-icon-white smaction" target="_blank"><i class="fa fa-facebook fa-fw"></i></a>
				        		<a href="<?php echo $contact['twitter']; ?>" class="btn btn-icon btn-icon-white smaction" target="_blank"><i class="fa fa-twitter fa-fw"></i></a>
								<a href="<?php echo $contact['instagram']; ?>" class="btn btn-icon btn-icon-white smaction" target="_blank"><i class="fa fa-instagram fa-fw"></i></a>
								<a href="<?php echo $contact['pinterest']; ?>" class="btn btn-icon btn-icon-white smaction" target="_blank"><i class="fa fa-pinterest fa-fw"></i></a>
								<a href="<?php echo $contact['linkedin']; ?>" class="btn btn-icon btn-icon-white smaction" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a>			    				
				       			<a href="<?php echo $contact['googleplus']; ?>" class="btn btn-icon btn-icon-white smaction" target="_blank"><i class="fa fa-google-plus fa-fw"></i></a>			     				
								<a href="<?php echo $contact['youtube']; ?>" class="btn btn-icon btn-icon-white smaction" target="_blank"><i class="fa fa-youtube fa-fw"></i></a>
							</div>
							<?php } ?>
						</div>
						<!-- <div class="col-md-2" style="padding-top: 9px;">
							<form action="develops/lang.php" method="POST">
								<?php //if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>
									<input type="hidden" name="lang" value="en">
									<input type="submit" class="btn btn-border border-white" value="E">
								<?php //} else { ?>
									<input type="hidden" name="lang" value="en">
									<input type="submit" class="btn btn-border border-white" value="?">
								<?php //} ?>
							</form>
						</div> -->
						<div class="/*col-md-7 clearfix*/">
	                    	<!-- <div class="logo pull-left"><a href="index.html"><img src="uploads/logo 222.png" alt="arise-logo" /></a></div> -->
	                        <div id="trigger-mobile-nav"><i class="fa fa-bars"></i></div>
	                    	<nav id="main-nav" class="main-nav pull-right clearfix mobile-nav">
	                        	<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>
								<?php if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4))) { ?>
									<ul class="nav">
										<li><a href="#home"><?php language('home');?></a></li>
										<li><a href="#about-us"><?php language('about');?></a></li>
										<li><a href="#portfolio"><?php language('services');?></a></li>
										<li><a href="#offers"><?php language('offers');?></a></li>
										<li><a href="#clients"><?php language('clients');?></a></li>
										<li><a href="#team"><?php language('team');?></a></li>
										<li><a href="#contact"><?php language('contact');?></a></li>
										<li><a href="lang.php?lang=en">English</a></li>
									</ul>
								<?php } else { ?>
									<ul class="nav">
										<li><a href="lang.php?lang=en">English</a></li>
										<li><a href="#contact"><?php language('contact');?></a></li>
										<li><a href="#team"><?php language('team');?></a></li>
										<li><a href="#clients"><?php language('clients');?></a></li>
										<li><a href="#offers"><?php language('offers');?></a></li>
										<li><a href="#portfolio"><?php language('services');?></a></li>
										<li><a href="#about-us"><?php language('about');?></a></li>
										<li><a href="#home"><?php language('home');?></a></li>
									</ul>
								<?php } } else { ?>
									<ul class="nav">
										<li><a href="#home"><?php language('home');?></a></li>
										<li><a href="#about-us"><?php language('about');?></a></li>
										<li><a href="#portfolio"><?php language('services');?></a></li>
										<li><a href="#offers"><?php language('offers');?></a></li>
										<li><a href="#clients"><?php language('clients');?></a></li>
										<li><a href="#team"><?php language('team');?></a></li>
										<li><a href="#contact"><?php language('contact');?></a></li>
										<li><a href="lang.php?lang=ar">عربي</a></li>
									</ul>
								<?php } ?>								
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
        	<!--<div class="container">
        		<div class="row">
        			<div class="col-md-arise col-xs-12 col-sm-12 text-left">-->

        				<!-- logo -->
        				<!--<div class="big-logo animated delayed no-opacity" data-animation="fadeInDown" data-animation-delay="0.4s"><a href="#" data-toggle="modal" data-target="#logostory"><img src="uploads/arise-logo.png" style="width: 25%" alt="arise-logo" /></a></div>-->
						

        				<!-- portfolio filter -->
        				<!--<div id="diamond-filter-home" class="diamond-filter font-white animated delayed no-opacity" data-animation="fadeInUp" data-animation-delay="0.7s">-->
        					<!-- <ul class="special-font">
        						<li class="active"><a data-filter="*" href="#">All</a></li>
        						<li><a data-filter="webdesign" href="#">Webdesigns</a></li>
        						<li><a data-filter="illustration" href="#">Illustrations</a></li>
        						<li><a data-filter="icons" href="#">Icons</a></li>
        					</ul> -->
        				<!--</div>-->

        				<!-- portfolio slider -->
        				<!--<div id="diamondslider-home" class="diamondslider nav-white animated delayed no-opacity" data-animation="fadeInUp" data-animation-delay="1.1s">-->
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
        				<!--</div>

        			</div>
        		</div>
        	</div> -->

            <!-- Background Triangle Overlay / Special Depth Bg -->
            <div class="depth-bg">
            	<!-- Background Image Slider -->
                <div class="owl-carousel depth-slider">
                    <?php if(!empty($carousel)) { ?>
						<?php for($i=0;$i<sizeof($carousel);$i++) { ?>
							<div><img class="img-responsive" src="uploads/carousel/<?php echo $carousel[$i]['name']; ?>" alt="<?php echo $carousel[$i]['name']; ?>" /></div>
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
					<div class="modal-body" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>dir="rtl"<?php } ?>>
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
					<center>
						<div class="big-logo animated delayed no-opacity" data-animation="fadeInDown" data-animation-delay="0.4s"><a href="#" data-toggle="modal" data-target="#logostory"><img class="/*img-responsive*/" src="uploads/logo.png" style="width: 150px" alt="arise-logo" /></a></div>
					</center>
				</div>
            	<div class="row">
                	<div class="col-md-12 text-center">
                    	<h1 class=" no-margin-bottom" style="padding-top: 100px; color: #e6007e; font-family: AriseFont;"><?php language('slogan');?></h1>
                    	<!-- <h2 class="sub-title">We Bring Your Product to the Next Level</h2> -->
                    </div>
                </div>
                <!-- <div class="row">
                	<div class="col-md-8 col-md-offset-2 text-center aboutus-text">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Proin aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-3 col-xs-6<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-push-9 col-xs-push-6'; ?> text-center divheight">
                        <div class="service clearfix animated delayed no-opacity" data-animation="fadeInLeft" data-animation-delay="0.2s">
                            <div class="shape diamond center dark shape-icon"><a href="#" data-toggle="modal" data-target="#body"><i class="fa fa-file fa-fw abouticons"></i></a></div>
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
								<div class="modal-body" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>dir="rtl"<?php } ?>>
									<p><?php echo $about['body']; ?></p>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-md-3 col-xs-6<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-push-3 col-xs-pull-6'; ?> text-center divheight">
                        <div class="service clearfix animated delayed no-opacity" data-animation="fadeInLeft" data-animation-delay="0.4s">
                            <div class="shape diamond center dark shape-icon"><a href="#" data-toggle="modal" data-target="#vision"><i class="fa fa-eye fa-fw abouticons"></i></a></div>
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
								<div class="modal-body" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>dir="rtl"<?php } ?>>
									<p><?php echo $about['vision']; ?></p>
								</div>
							</div>
						</div>
					</div>
					<?php if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4))) { ?>
					</div><div class="row">
					<?php } ?>
                    <div class="col-md-3 col-xs-6<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-pull-3 col-xs-push-6'; ?> text-center divheight">
                        <div class="service clearfix animated delayed no-opacity" data-animation="fadeInRight" data-animation-delay="0.6s">
                            <div class="shape diamond center dark shape-icon"><a href="#" data-toggle="modal" data-target="#mission"><i class="fa fa-comment fa-fw abouticons"></i></a></div>
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
								<div class="modal-body" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>dir="rtl"<?php } ?>>
									<p><?php echo $about['mission']; ?></p>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-md-3 col-xs-6<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-pull-9 col-xs-pull-6'; ?> text-center divheight">
                        <div class="service clearfix animated delayed no-opacity" data-animation="fadeInRight" data-animation-delay="0.8s">
                            <div class="shape diamond center dark shape-icon"><a href="#" data-toggle="modal" data-target="#values"><i class="fa fa-check fa-fw abouticons"></i></a></div>
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
								<div class="modal-body" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>dir="rtl"<?php } ?>>
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
		
		<aside style="padding-bottom: 5%;">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-xs-12">
						<!--<img class="img-responsive" src="uploads/binding_coils_royal_blue.jpg" style="margin-top: -25px; width: 100%; height: 50%;">-->
						<!-- <div id="circlelarge"><hr class="youtubevideohrvertical" /><hr class="youtubevideohrhorizontal" /></div> -->
						<div class="embed-responsive embed-responsive-4by3 youtubevideo">
							<iframe class="youtubevideoiframe" width="560" height="315" src="https://www.youtube.com/embed/rOIB9A4sPXc" frameborder="0" allowfullscreen></iframe>							
						</div>
						<!--<div id="circlelarge"><hr class="youtubevideohrvertical" /><!-- <hr class="youtubevideohrhorizontal" /> </div> -->
                    </div>
                </div>
            </div>
		</aside>

        <!-- Begin Separator Aside -->
        <aside id="parallax-one" class="separator-type" style="/*height: 600px;*/">

            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <!-- <p class="tagline">ARISE is a clean, modern theme with a vintage touch</p>
                        <a href="#about-us" class="btn btn-border border-white">Read More</a> -->
                    </div>
                </div>
            </div>

            <!-- parallax with texture -->
            <div id="parallax-cta" class="parallax texture" style="width: 100%; height: auto; background-image:url(uploads/arise-background-1.jpg); background-repeat: no-repeat;
    background-size: contain;"></div>

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
                            <p>�It is not that one designer cannot handle both areas. It is about the tools and ability to problem solve.�</p>
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
        				<h1 class="section-title text-center" style="font-family: AriseFont;"><?php language('services'); ?></h1>

                        <!-- diamond slider navigation -->
        				<div id="diamond-filter-portfolio" class="diamond-filter animated delayed no-opacity" data-animation="fadeInDown" data-animation-delay="0.3s" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>dir="rtl"<?php } ?>>
        					<ul class="special-font">
								<li class="active"><a data-filter="*" href="#"><?php language('all'); ?></a></li>									
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
											<i class="fa fa-<?php echo $subcategories[$i]['icon']; ?> fa-fw serviceicons"></i>
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
													$services = getServices($subcategories[$i]['id'],$lang_file);
													for($j=0;$j<sizeof($services);$j++) { ?>
														<div class="col-md-4 col-xs-4<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') if($j%3==0) echo ' col-md-push-8 col-xs-push-8'; elseif(($j+1)%3==0) echo ' col-md-pull-8 col-xs-pull-8'; ?>" style="min-height:400px;">
															<!-- <div class="shape diamond center"><img src="uploads/services/thumbnail/<?php //echo $services[$j]['image']; ?>" alt="<?php echo $services[$j]['title']; ?>" /></div> -->
															<div class="shape diamond center" style="background-color: #054b7a;"><i class="fa fa-<?php echo $services[$j]['icon']; ?> fa-fw serviceicons"></i></div>
															<center><strong><p style="font-size: 100%;"><?php echo $services[$j]['title']; ?></p></strong></center>
															<center><p>
															<?php
															if($services[$j]['haschilds'] == 1)
															{
																$subservices = getSubServices($services[$j]['id'],$lang_file);
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
        <!-- <aside id="clients" class="separator-type carousel-type">
            
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <!--<h2 class="tagline">Our Great Clients</h2>-->
						<!-- <h1 class="section-title text-center" style="font-family: AriseFont;"><?php language('clients'); ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel-wrapper nav-white">
                            <div id="carousel-clients" class="owl-carousel carousel">
                                <?php //for($i=0;$i<sizeof($clients);$i++) { ?>
									<div class="carousel-item animated delayed no-opacity" data-animation="fadeIn" data-animation-delay="0.2s"><a href="#"><img src="uploads/clients/thumbnail/<?php //echo $clients[$i]['image']; ?>" alt="<?php //echo $clients[$i]['title']; ?>" /></a></div>
								<?php //} ?>								 	
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- parallax with texture -->
            <!-- <div id="parallax-clients" class="parallax texture" style="background-image:url(http://placehold.it/1900x1050);"></div>

        </aside> -->
		<?php //} ?>
		
		<aside id="offers" class="separator-type" style="/*height: 600px;*/">
            <div class="<?php if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4))) { echo 'container'; } ?>">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
        				<h1 class="section-title text-center" style="font-family: AriseFont; color: #f6007f; /*text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;*/ text-shadow: 3px 3px 3px #000; /* horizontal-offset vertical-offset 'blur' colour */
  -moz-text-shadow: 3px 3px 3px #000;
  -webkit-text-shadow: 3px 3px 3px #000;"><?php language('offers'); ?></h1>
                        <div class="panel-group col-md-10 col-md-offset-1 col-xs-12 " id="accordion">
							<div id="website" class="panel panel-default accordion-offer-default">
								<div class="panel-heading accordion-offer-header">
									<h4 class="panel-title">
										<a class="accordion-offer-title" data-toggle="collapse" data-parent="#accordion" href="#websitebody">Website</a>
									</h4>
								</div>
								<div id="websitebody" class="panel-collapse collapse in">
									<div class="panel-body">
										<!--<div class="offer-title">
											Website
										</div>-->
										<div class="offer-img">
											<center>
												<img class="img-responsive" src="uploads/offers/thumbnail/12469437_445574305632146_5652169901913315827_o.jpg" title="Website Offer" alt="Website Offer" />
											</center>
										</div>
										<div class="offer-desc">
											<p>
												If you are a startup business and want to create presence on the internet and increase you credibility. Arise-MPE offers you the opportunity to have your own ready to use website.
												<br><br>- Web Design
												<br><br>- Web Developing
												<br><br>- Admin panel
												<br><br>- Dynamic
												<br><br>- Professional Email
												<br><br>With only 5000 EGP
												<div class="offer-hurry">HURRY UP AND CALL US NOW &#9786;</div>
												<br>&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;:  (+20) 224185657
												<br>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile"></i>&nbsp;: (+20) 1154488499
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+20) 1022099044
												<br>&nbsp;&nbsp;&nbsp;&#64;&nbsp;: <a class="offer-email" href="mailto:info@arise-mpe.com ">info@arise-mpe.com</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							
							<div id="socialmedia" class="panel panel-default accordion-offer-default">
								<div class="panel-heading accordion-offer-header">
									<h4 class="panel-title">
										<a class="accordion-offer-title" data-toggle="collapse" data-parent="#accordion" href="#socialmediabody">Social Media</a>
									</h4>
								</div>
								<div id="socialmediabody" class="panel-collapse collapse">
									<div class="panel-body">
										<!--<div class="offer-title">
											Social Media
										</div>-->
										<div class="offer-img">
											<center><img class="img-responsive" src="uploads/offers/thumbnail/social media offer.jpg" title="Social Media Offer" alt="Social Media Offer" /></center>
										</div>
										<div class="offer-desc">
											<p>
												Strong social media presence is an efficient way to build your company’s reputation and reach greater client base. if you aim to create exposure, traffic, and branding. Arise-MPE will help you.
												<br><br>- 3 channels management
												<br><br>- Standard template design
												<br><br>- Cover and profile picture design
												<br><br>- Monthly plan
												<br><br>- Monthly analysis
												<br><br>With only 5000 EGP
												<div class="offer-hurry">HURRY UP AND CALL US NOW &#9786;</div>
												<br>&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;:  (+20) 224185657
												<br>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile"></i>&nbsp;: (+20) 1154488499
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+20) 1022099044
												<br>&nbsp;&nbsp;&nbsp;&#64;&nbsp;: <a class="offer-email" href="mailto:info@arise-mpe.com ">info@arise-mpe.com</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>

            <!-- parallax with texture -->
            <?php if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4))) { ?>
				<div id="parallax-cta" class="parallax texture" style="width: 100%; height: 100%; background-image:url(uploads/BGs-01-23.jpg); /*background-position: center;*/ background-repeat: no-repeat;
				/*background-size: contain;*/"></div>
			<?php } else { ?>
				<div id="parallax-cta" class="parallax texture" style="width: 100%; height: 100%; background-image:url(uploads/BGs-01-2.jpg); /*background-position: center;*/ background-repeat: no-repeat;
				/*background-size: contain;*/"></div>
			<?php } ?>
			<div id="parallax-cta" class="parallax texture" style="width: 100%; height: 100%; background-color:rgba(0, 0, 0, 0.5); background-repeat: no-repeat;
    /*background-size: contain;*/"></div>

        </aside>
		
		<!-------------------Start Offers----------------------------->
		<?php //if(!empty($offers)) { ?>
        <!--<section id="offers" class="page-type grey-bg">
        	<div class="<?php if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4))) { echo 'container'; } ?>">
        		<div class="row">
        			<div class="col-md-12 col-xs-12">
        				<h1 class="section-title text-center" style="font-family: AriseFont;"><?php language('offers'); ?></h1>
						<?php //for($i=0;$i<sizeof($offers);$i++) { ?>
							<!--<div id="<?php echo str_replace(' ', '', $offers[$i]['titleen']); ?>" class="col-md-6 col-xs-12<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { if(($i%6) == 0) echo ' col-md-push-6'; else echo ' col-md-pull-6';  } ?>">
								<div class="offer" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' dir="rtl"'; } ?>>
									<div class="offer-title">
										<?php echo $offers[$i]['title']; ?>
									</div>
									<div class="offer-img">
										<img class="img-responsive" src="uploads/offers/thumbnail/<?php echo $offers[$i]['image']; ?>" title="<?php echo $offers[$i]['title']; ?>" alt="<?php echo $offers[$i]['title']; ?>" />
									</div>
									<div class="offer-desc">
										<p>
											<?php echo $offers[$i]['description']; ?>
											<div class="offer-hurry"><?php language('hurryoffer'); ?> &#9786;</div>
											<br>&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;: <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo str_replace($western_arabic, $eastern_arabic, $contact['phone']).' ('.str_replace($western_arabic, $eastern_arabic, '20').'+)'; else echo '(+20) '.$contact['phone']; ?>
											<br>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile"></i>&nbsp;: <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo str_replace($western_arabic, $eastern_arabic, $contact['mobile']).' ('.str_replace($western_arabic, $eastern_arabic, '20').'+)'; else echo '(+20) '.$contact['mobile']; ?>
											<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo str_replace($western_arabic, $eastern_arabic, '1022099044').' ('.str_replace($western_arabic, $eastern_arabic, '20').'+)'; else echo '(+20) '.'1022099044'; ?>
											<br>&nbsp;&nbsp;&nbsp;&#64;&nbsp;: <a class="offer-email" href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a>
										</p>
									</div>
								</div>
							</div>-->
							
						<!--<div class="panel-group col-md-6 col-md-offset-3 col-xs-12 " id="accordion">
							<div id="website" class="panel panel-default accordion-offer-default">
								<div class="panel-heading accordion-offer-header">
									<h4 class="panel-title">
										<a class="accordion-offer-title" data-toggle="collapse" data-parent="#accordion" href="#websitebody">Website</a>
									</h4>
								</div>
								<div id="websitebody" class="panel-collapse collapse in">
									<div class="panel-body">
										<div class="offer-title">
											Website
										</div>
										<div class="offer-img">
											<img class="img-responsive" src="uploads/offers/thumbnail/12469437_445574305632146_5652169901913315827_o.jpg" title="Website Offer" alt="Website Offer" />
										</div>
										<div class="offer-desc">
											<p>
												If you are a startup business and want to create presence on the internet and increase you credibility. Arise-MPE offers you the opportunity to have your own ready to use website.
												<br><br>- Web Design
												<br><br>- Web Developing
												<br><br>- Admin panel
												<br><br>- Dynamic
												<br><br>- Professional Email
												<br><br>With only 5000 EGP
												<div class="offer-hurry">HURRY UP AND CALL US NOW &#9786;</div>
												<br>&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;:  (+20) 224185657
												<br>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile"></i>&nbsp;: (+20) 1154488499
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+20) 1022099044
												<br>&nbsp;&nbsp;&nbsp;&#64;&nbsp;: <a class="offer-email" href="mailto:info@arise-mpe.com ">info@arise-mpe.com</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							
							<div id="socialmedia" class="panel panel-default accordion-offer-default">
								<div class="panel-heading accordion-offer-header">
									<h4 class="panel-title">
										<a class="accordion-offer-title" data-toggle="collapse" data-parent="#accordion" href="#socialmediabody">Social Media</a>
									</h4>
								</div>
								<div id="socialmediabody" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="offer-title">
											Social Media
										</div>
										<div class="offer-img">
											<img class="img-responsive" src="uploads/offers/thumbnail/social media offer.jpg" title="Social Media Offer" alt="Social Media Offer" />
										</div>
										<div class="offer-desc">
											<p>
												Strong social media presence is an efficient way to build your company’s reputation and reach greater client base. if you aim to create exposure, traffic, and branding. Arise-MPE will help you.
												<br><br>- 3 channels management
												<br><br>- Standard template design
												<br><br>- Cover and profile picture design
												<br><br>- Monthly plan
												<br><br>- Monthly analysis
												<br><br>With only 5000 EGP
												<div class="offer-hurry">HURRY UP AND CALL US NOW &#9786;</div>
												<br>&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;:  (+20) 224185657
												<br>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile"></i>&nbsp;: (+20) 1154488499
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+20) 1022099044
												<br>&nbsp;&nbsp;&nbsp;&#64;&nbsp;: <a class="offer-email" href="mailto:info@arise-mpe.com ">info@arise-mpe.com</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
										
										<!--<div id="website" class="col-md-6 col-xs-12<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' col-md-push-6'; } ?>">
											<div class="offer">
												<div class="offer-title">
													Website
												</div>
												<div class="offer-img">
													<img class="img-responsive" src="uploads/offers/thumbnail/12469437_445574305632146_5652169901913315827_o.jpg" title="Website Offer" alt="Website Offer" />
												</div>
												<div class="offer-desc">
													<p>
														If you are a startup business and want to create presence on the internet and increase you credibility. Arise-MPE offers you the opportunity to have your own ready to use website.
														<br><br>- Web Design
														<br><br>- Web Developing
														<br><br>- Admin panel
														<br><br>- Dynamic
														<br><br>- Professional Email
														<br><br>With only 5000 EGP
														<div class="offer-hurry">HURRY UP AND CALL US NOW &#9786;</div>
														<br>&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;:  (+20) 224185657
														<br>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile"></i>&nbsp;: (+20) 1154488499
														<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+20) 1022099044
														<br>&nbsp;&nbsp;&nbsp;&#64;&nbsp;: <a class="offer-email" href="mailto:info@arise-mpe.com ">info@arise-mpe.com</a>
													</p>
												</div>
											</div>
										</div>
										<div id="socialmedia" class="col-md-6 col-xs-12<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo ' col-md-pull-6'; } ?>">
											<div class="offer">
												<div class="offer-title">
													Social Media
												</div>
												<div class="offer-img">
													<img class="img-responsive" src="uploads/offers/thumbnail/social media offer.jpg" title="SocialMedia Offer" alt="SocialMedia Offer" />
												</div>
												<div class="offer-desc">
													<p>
														Strong social media presence is an efficient way to build your company’s reputation and reach greater client base. if you aim to create exposure, traffic, and branding. Arise-MPE will help you.
														<br><br>- 3 channels management
														<br><br>- Standard template design
														<br><br>- Cover and profile picture design
														<br><br>- Monthly plan
														<br><br>- Monthly analysis
														<br><br>With only 5000 EGP														
														<div class="offer-hurry">HURRY UP AND CALL US NOW &#9786;</div>
														<br>&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;:  (+20) 224185657
														<br>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile"></i>&nbsp;: (+20) 1154488499
														<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+20) 1022099044
														<br>&nbsp;&nbsp;&nbsp;&#64;&nbsp;: <a class="offer-email" href="mailto:info@arise-mpe.com ">info@arise-mpe.com</a>
													</p>
												</div>
											</div>
										</div>-->
										
						<?php //} ?>                                
                    <!--</div>
        		</div>
        	</div>
        </section>
		<?php //} ?>                                
		<!-------------------End Offers------------------------------->
		
		<?php if(!empty($clients)) { ?>
        <section id="clients" class="page-type grey-bg">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<h1 class="section-title text-center" style="font-family: AriseFont;"><?php language('clients'); ?></h1>

        				<!-- clients -->
                        <!-- <div class="testimonials-wrapper animated delayed no-opacity" data-animation="bounceIn" data-animation-delay="0.3s">-->
                            <!--<div id="slider-testimonials" class="owl-carousel testimonials">-->
								<?php for($i=0;$i<sizeof($clients);$i++) { ?>
									<!--<div class="testimonial clearfix">-->
										<!--<div class="testimonial-thumb">-->
											<div class="col-md-2 col-xs-4<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { if(($i%6) == 0) { echo ' col-md-push-10 col-xs-push-8'; } elseif(($i%6) == 1) { echo ' col-md-push-6'; } elseif(($i%6) == 2) { echo ' col-md-push-2 col-xs-pull-8'; } elseif(($i%6) == 3) { echo ' col-md-pull-2 col-xs-push-8'; } elseif(($i%6) == 4) { echo ' col-md-pull-6'; } else { echo ' col-md-pull-10 col-xs-pull-8'; }} ?>">
												<!--<div class="shape diamond center">-->
												<div class="clients">
													<img class="img-responsive" src="uploads/clients/thumbnail/<?php echo $clients[$i]['image']; ?>" title="<?php echo $clients[$i]['title']; ?>" alt="<?php echo $clients[$i]['title']; ?>" />													
												</div>
												<!--</div>-->
											</div>
										<!--</div>-->
									<!--</div>-->
								<?php } ?>                                
                            <!--</div>-->
                        <!--</div>-->
                        <!-- // end testimonials -->

        			</div>
        		</div>
        	</div>
        </section>
		<?php } ?>
        <!-- // End Separator Aside -->
		
		<!-- Begin Separator Aside -->
        <aside id="contact-cta" class="separator-type" style="/*height: 600px;*/">

            <div class="container text-center">
                <!-- <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p class="tagline">Interested in our services?</p>
                        <a href="#contact" class="btn btn-border border-white">Contact Us</a>
                    </div>
                </div> -->
            </div>

            <!-- parallax with texture -->
            <div id="parallax-contact" class="parallax texture" style="width: 100%;
    height: auto; background-image:url(uploads/arise-background-2.jpg); background-repeat: no-repeat;
    background-size: contain;"></div>

        </aside>
        <!-- // End Separator Aside -->

        <!-- Begin Team -->
		<?php if(isset($ourteam)) { ?>
        <section id="team" class="page-type grey-bg">
        	<div class="container">
        		<div class="row">
                	<div class="col-md-12 text-center">
                    	<h1 class="section-title" style="font-family: AriseFont;"><?php language('ourteam'); ?></h1>
                    </div>
                </div>
                <!-- <div class="row">
                	<div class="col-md-8 col-md-offset-2 text-center">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, sagittis sem nibh id elit. Duis nibh vulput. Proin gravida nibh vel velit auctor aliquet. Proin aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                    </div>
                </div> -->
                <div class="row">
                	<div class="col-md-12 text-center">

        				<!-- portfolio slider -->
                        <div id="diamondslider-team" class="diamondslider animated delayed no-opacity" data-animation="fadeInDown" data-animation-delay="0.3s">
                            <ul class="slides">
							<?php for($i=0;$i<count($ourteam);$i++) { ?>
                                <li class="shape diamond" data-category="photography">
                                    <a class="item-hover <?php if($i == 0) echo 'show'; ?>" href="#<?php echo $ourteam[$i]['id']; ?>" data-grtabs="tab"><span class="hover-title special-font"><?php echo $ourteam[$i]['name']; ?></span><span class="hover-action"><?php language('more'); ?></span></a>
                                    <img src="uploads/ourteam/thumbnail/<?php echo $ourteam[$i]['image']; ?>" alt="<?php echo $ourteam[$i]['name']; ?>" />
                                </li>
							<?php } ?>
                            </ul>
                        </div>

                        <!-- team tabs -->
                        <div id="team-panes" class="team-panes animated delayed no-opacity" data-animation="fadeInUp" data-animation-delay="0.7s">

  							<?php for($i=0;$i<count($ourteam);$i++) { ?>
							<div id="<?php echo $ourteam[$i]['id']; ?>" class="grtabs-pane team-pane <?php if($i == 0) echo 'active'; ?>">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h4 class="team-name" style="font-family: AriseFont; color: #0F72B8;"><?php echo $ourteam[$i]['name']; ?></h4>
                                        <p class="team-function special-font" style="font-family: AriseFont;"><?php echo $ourteam[$i]['jobtitle']; ?></p>
                                        <p style="text-align: justify; color: #000" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { echo 'dir="rtl"'; } ?>><strong><?php echo $ourteam[$i]['description']; ?></strong></p>
                                        <!-- <p>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-facebook fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-twitter fa-fw"></i></a>
						       				<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-google-plus fa-fw"></i></a>
					     					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-linkedin fa-fw"></i></a>
					    					<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-skype fa-fw"></i></a>
						        			<a href="#" class="btn btn-icon btn-icon-white"><i class="fa fa-dribbble fa-fw"></i></a>
						        		</p>
                                        <a class="btn btn-border team-button ajax-nav" href="#!team-member/jacob-wright.html">Read More</a> -->
                                    </div>
                                </div>
                            </div>
							<?php } ?>

                        </div>
                        <!-- end team tabs -->

                	</div>
                </div>
        	</div>
        </section>
		<?php } ?>
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
        <section id="contact" class="black-bg font-white" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>dir="rtl"<?php } ?>>
        	<div class="container">
        		<div class="row text-center">
        			<div class="col-md-12">
        				<h1 class="" style="font-family: AriseFont;"><?php language('contact'); ?></h1>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-md-4<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-push-8'; ?>">
        				<p class="whitetext" style="text-align: center; font-family: AriseFont; font-size: 200%;"><?php echo language('contactslogan'); ?></p>

        				<!-- <h3 class="top-margin-60">Let's Socialize!</h3>
        				<p class="bottom-margin-60">
        					<a href="<?php echo $contact['facebook']; ?>" class="btn btn-icon btn-icon-white animated delayed no-opacity" data-animation="fadeIn" data-animation-delay="0.3s"><i class="fa fa-facebook fa-fw"></i></a>
        					<a href="<?php echo $contact['twitter']; ?>" class="btn btn-icon btn-icon-white animated delayed no-opacity" data-animation="fadeIn" data-animation-delay="0.5s"><i class="fa fa-twitter fa-fw"></i></a>
        					<a href="<?php echo $contact['googleplus']; ?>" class="btn btn-icon btn-icon-white animated delayed no-opacity" data-animation="fadeIn" data-animation-delay="0.7s"><i class="fa fa-google-plus fa-fw"></i></a>
        					<a href="<?php echo $contact['linkedin']; ?>" class="btn btn-icon btn-icon-white animated delayed no-opacity" data-animation="fadeIn" data-animation-delay="0.9s"><i class="fa fa-linkedin fa-fw"></i></a>
        					<a href="<?php echo $contact['skype']; ?>" class="btn btn-icon btn-icon-white animated delayed no-opacity" data-animation="fadeIn" data-animation-delay="1.1s"><i class="fa fa-skype fa-fw"></i></a>
        					<!-- <a href="#" class="btn btn-icon btn-icon-white animated delayed no-opacity" data-animation="fadeIn" data-animation-delay="1.3s"><i class="fa fa-dribbble fa-fw"></i></a> -->
        				<!-- </p> -->

        				<p class="whitetext"><?php language('address').language(':'); ?><?php echo $contact['address']; ?>
						<br><?php language('mobile').language(':'); ?><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo str_replace($western_arabic, $eastern_arabic, $contact['mobile']).' ('.str_replace($western_arabic, $eastern_arabic, '20').' +)'; else echo '(+20) '.$contact['mobile']; ?>
						<br><?php language('phone').language(':'); ?><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo str_replace($western_arabic, $eastern_arabic, $contact['phone']).' ('.str_replace($western_arabic, $eastern_arabic, '20').' +)'; else echo '(+20) '.$contact['phone']; ?>
						<!-- <br><?php //language('sphone').language(':'); ?><?php //if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo str_replace($western_arabic, $eastern_arabic, $contact['sphone']).' ('.str_replace($western_arabic, $eastern_arabic, '20').' +)'; else echo '(+20) '.$contact['sphone']; ?> -->
        				<br><?php language('email').language(':'); ?><?php echo $contact['email']; ?></p>

        			</div>
					<div class="col-md-4">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27611.992222076293!2d31.34799064548282!3d30.108530830791974!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd06a8becbe3a41f3!2sArise+MPE!5e0!3m2!1sen!2seg!4v1446981602304" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
        			<div class="col-md-4<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-pull-8'; ?>">
        				<h3 class="no-margin-top" style="font-family: AriseFont;"><?php language('form'); ?></h3>
        				<div class="form-success"><strong>Thank you!</strong> We have received your message.</div>
        				<div class="contact-form"> 
	        				<form method="post" action="develops/message.php">
		        				<fieldset>
			        				<input type="text" name="name" placeholder="<?php language('name'); ?>*" class="form-control form-dark" required="required" />
			        				<input type="text" name="email" placeholder="<?php language('email'); ?>*" class="form-control form-dark" required="required" />
			        				<textarea rows="6" name="message" placeholder="<?php language('message'); ?>*" class="form-control form-dark" required="required"></textarea>
			        				<input id="" class="btn btn-border border-white" name="sendmessage" type="submit" value="<?php language('send'); ?>" />
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
        	<p class="copyright no-margin-bottom">&copy; 2015 ARISE. <?php language('copyright'); ?> <a href="#">ARISE-MPE</a></p>
        	</div>
        </footer>
        <!-- // End Footer -->
        
		<!-- jQuery and Bootstrap -->
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
