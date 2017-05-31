<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Sport A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<?php echo $this->Html->css('bootstrap');?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php echo $this->Html->script('jquery.min'); ?>
 <!-- Custom Theme files -->
<!--theme-style-->
<?php echo $this->Html->css('style');?>

<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sport Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->

<?php echo $this->Html->css('etalage'); ?>
<?php echo $this->Html->script('jquery.etalage.min'); ?>
		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

</head>
<body>
<!--header-->
	<div class="line">

	</div>
	<div class="header">
		<div class="logo">
			<a href="/home"><?php echo $this->Html->image('logo.png',['style'=> "height:100px;"]);?></a>
		</div>
		<div  class="header-top">
			<div class="header-grid">
				<ul class="header-in">
						<li ><a href="account.html">My Account   </a> </li>
						<li>

						</li>
					</ul>
					<div class="search-box">
					    <div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
				    </div>
					<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->
					<div class="online">
					<a href="/home" >SHOP ONLINE</a>
					</div>
					<div class="clearfix"> </div>
			</div>
			<div class="header-bottom">
				<div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li class="active"><?php echo $this->Html->link('Running',['controller' => 'home', 'action' => 'product', '_full' => true]);?></li>

					<li><a href="/home/product">More <i> </i></a>
						<ul>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="account.html">Account</a></li>
							<li><a href="register.html">Register</a></li>
						</ul>
					</li>
				</ul>
				<script type="text/javascript" src="js/nav.js"></script>
			</div><!-- end h_menu4 -->
					<ul class="header-bottom-in">
						<li ><select class="drop">
							  <option value="Dollars" class="in-of">ESCOM</option>

							</select> </li>
						<li ></li>
					</ul>
			<div class="clearfix"> </div>
		</div>
		</div>
		<div class="clearfix"> </div>
	</div>
  <?= $this->Flash->render() ?>
  <?= $this->fetch('content') ?>

<!--footer-->
	<div class="footer">
		<div class="col-md-3 footer-left">
			<h4>Sports</h4>
			<div class="run-top">
				<ul class="run-grid">
					<li><a href="/home/product">RUNNING</a></li>
					<li><a href="/home/product">CYCLING</a></li>
					<li><a href="/home/product">TRIATHLON</a></li>
					<li><a href="/home/product">FITNESS</a></li>
					<li><a href="/home/product">TENNIS</a></li>
					<li><a href="/home/product">MORE SPORTS</a></li>
				</ul>
				<ul class="run-grid">
					<li><a href="/home/product">STYLE</a></li>
					<li><a href="/home/product">SPECIAL</a></li>
					<li><a href="/home/product">BRAND EVENTS</a></li>
				</ul>
			<div class="clearfix"> </div>
			</div>
		</div>
		<div class="col-md-3 footer-left left-footer">
			<h4>Latest</h4>
			<div class="run-top top-run">
				<ul class="run-grid">
					<li><a href="#">News & Events</a></li>
					<li><a href="#">Community</a></li>
					<li><a href="#">Videos</a></li>
					<li><a href="/home/one">Shopping</a></li>
					<li><a href="#">Sponsorships</a></li>
					<li><a href="#">more sports</a></li>
				</ul>
				<ul class="run-grid">
					<li><a href="#">Clubs and Training</a></li>
					<li><a href="contact.html">Event Map</a></li>
					<li><a href="#">Challange the world</a></li>
				</ul>
			<div class="clearfix"> </div>
			</div>
		</div>
		<div class="col-md-2 footer-left left-footer">
			<h4>Your Account</h4>
				<ul class="run-grid-in">
					<li><a href="account.html">Login</a></li>
					<li><a href="#">My Sports</a></li>
					<li><a href="#">My Events</a></li>
				</ul>
		</div>
		<div class="col-md-4 footer-left left-footer">
			<ul class="social-in">
				<li><a href="#"><i> </i></a></li>
				<li><a href="#"><i class="youtube"> </i></a></li>
				<li><a href="#"><i class="facebook"> </i></a></li>
				<li><a href="#"><i class="twitter"> </i></a></li>
			</ul>
			<div class="letter">
				<h5>NEWSLETTER</h5>
				<span>in the next article</span>
				<h6>NRL: five things we learned this weekend</h6>
				<p>In support of suburban games; Warriors rip</p>
				<a href="register.html" class="sign">SIGN UP AND GET MORE</a>
				<p class="footer-class"> © 2015 Sport All Rights Reserved | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>

		</div>
		<div class="clearfix"> </div>
	</div>
</body>
</html>
