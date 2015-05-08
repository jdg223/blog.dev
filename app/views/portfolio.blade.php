@extends('layouts.master')

@section('head')
	<link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great|Cabin+Sketch' rel='stylesheet' type='text/css'>
	<title>Portfolio</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.scrolly.min.js"></script>
	<script src="js/jquery.imageScroll.min.js"></script>
	<script src="js/jquery.poptrox.min.js"></script>
	<script src="js/jquery.tabslet.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/init.js"></script>

	<noscript>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/skel.css"/>
		<link rel="stylesheet" href="css/style.css"/>
		

	</noscript>
@stop
@section('content')
		<!-- Header -->
		 <div class="img-holder" data-image="images/forest.jpg">
			<section id="header">
					<header>
						<h1 class="fontHead">Jd Garza</h1>
						<p class="fontHead">Design & Development</p>
					</header>
				<footer>
				<a href="#banner" class="style2 scrolly-middle">
						<svg class="arrows">
							<path id="a1" d="M0 0 L30 32 L60 0"></path>
							<path id="a2" d="M0 20 L30 52 L60 20"></path>
							<path id="a3" d="M0 40 L30 72 L60 40"></path>
						</svg>
					</a>
				</footer>
			</section>
		 </div>

		<!-- Banner -->
		<div>
			<section id="banner">

        <article id="rotation">
	            <div class='tabs tabs_animate'>
	              <ul class='horizontal'>
	                <li><a href="#tab-1">Front-End</a></li>
	                <li><a href="#tab-2">Back_End</a></li>	
	                <li><a href="#tab-3">Frameworks</a></li>
	              </ul>
	            <div id='tab-1'>
	              	<span>
		             	<h2>Front-End Technologies</h2>
		            		<div class="row">
		              			<div id="html5" class="col-md-4 pull-left clearfix" style="display:inline-block">
			            			<div class="cbp_tmicon"> 
			    					<i class="faPra fa-html5"></i>
			    					</div>
			    					<p>HTML</p>
			    	  			</div>

			    	  			<div id="css3" class="col-md-4 center-block clearfix" style="display:inline-block; float: none;">
			    					<div class="cbp_tmicon"> 
			    					<i class="faPra fa-css3"></i>		    	
			    					</div>
			    					<p>Css</p>
			    	  			</div>

			    	  			<div class="col-md-4 pull-right clearfix" style="display:inline-block">
			    					<div class="cbp_tmicon"> 
			    					<i class="faPra fa-magic"></i>
			    					</div>
			    					<p>jQuery</p>
			    	  			</div>
			    			</div>
					 </span>
	 			</div>
	              <div id='tab-2'>
	              	<span>
		             	<h2>Back-End Technologies</h2>
		            		<div class="row">
		              			<div id="html5" class="col-md-4 pull-left clearfix" style="display:inline-block">
			            			<div class="cbp_tmicon"> 
			    					<i class="faPra fa-database"></i>
			    					</div>
			    					<p>PHP & MySQL</p>
			    	  			</div>

			    	  			<div id="css3" class="col-md-4 center-block clearfix" style="display:inline-block; float: none;">
			    					<div class="cbp_tmicon"> 
			    					<i class="faPra fa-rocket"></i>		    	
			    					</div>
			    					<p>AJAX</p>
			    	  			</div>

			    	  			<div class="col-md-4 pull-right clearfix" style="display:inline-block">
			    					<div class="cbp_tmicon"> 
			    					<i class="faPra fa-server"></i>
			    					</div>
			    					<p>LAMP</p>
			    	  			</div>
			    			</div>
					 </span>
	              </div>
	              <div id='tab-3'>
	              	<span>
		             	<h2>Frameworks</h2>
		            		<div class="row">
		              			<div id="html5" class="col-md-4 pull-left clearfix" style="display:inline-block">
			    						<img src="images/laravel.png">
			    					<p>Laravel</p>
			    	  			</div>

			    	  			<div id="css3" class="col-md-4 center-block clearfix" style="display:inline-block; float: none;">
			    						<img src="images/bootstrap.png">   	
			    					<p>BootStrap</p>
			    	  			</div>

			    	  			<div class="col-md-4 pull-right clearfix" style="display:inline-block">
			    						<img src="images/angular.png">
			    					<p>Angular JS</p>
			    	  			</div>
			    			</div>
					 </span>
	              </div>
	            </div>
          </article>

	</section>
</div>

		<!-- Feature 1 -->
		<div class="img-holder-1" data-image="images/moose.jpg">
			<article id="first" class="container box style1 right" style="-webkit-transform: translateZ(1)">
				<a href="adlister.dev" class="image fit"><img src="images/getlisted.png" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Get Listed</h2>
					</header>
					<p>This program was written in pure php. With a classmate of mine from CodeUp</p>
				</div>
			</article>

		<!-- Feature 2 -->
			<article class="container box style1 left" style="-webkit-transform: translateZ(1)">
				<a href="#" class="image fit"><img src="images/whackamole.png" alt=""/></a>
				<div class="inner">
					<header>
						<h2>Whack-a-Mole<br />
						Samuel Jackson Style</h2>
					</header>
					<p>This was my use of javascipt in creating a Whack-a-Mole game</p>
				</div>
			</article>
		</div>		
		<!-- Portfolio -->
		<div>
			<article id= "portfolio">
			<div class="container style2">
				<header>
					<h2>My Other Projects</h2>
					<p>These are other previous projects<br />
					that I have built.</p>
				</header>
				<div class="inner gallery">
					<div class="row 0%">
						<div class="3u"><a href="images/simpleSimon.png" class="image fit"><img src="images/simpleSimon.png" alt="" title="Simple Simon Game" /></a></div>
						<div class="3u"><a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/02.jpg" alt="" title="Dressed in Clarity" /></a></div>
						<div class="3u"><a href="images/fulls/03.jpg" class="image fit"><img src="images/thumbs/03.jpg" alt="" title="Raven" /></a></div>
						<div class="3u"><a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/04.jpg" alt="" title="I'll have a cup of Disneyland, please" /></a></div>
					</div>
					<div class="row 0%">
						<div class="3u"><a href="images/fulls/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" alt="" title="Cherish" /></a></div>
						<div class="3u"><a href="images/fulls/06.jpg" class="image fit"><img src="images/thumbs/06.jpg" alt="" title="Different." /></a></div>
						<div class="3u"><a href="images/fulls/07.jpg" class="image fit"><img src="images/thumbs/07.jpg" alt="" title="History was made here" /></a></div>
						<div class="3u"><a href="images/fulls/08.jpg" class="image fit"><img src="images/thumbs/08.jpg" alt="" title="People come and go and walk away" /></a></div>
					</div>
				</div>
			</div>
			</article>
		</div>

		<!-- Contact -->
		<div class="footer-img">
			<article class="container box style3" style="-webkit-transform: translateZ(1)">
				<header>
					<h2>Wanna Work Together?</h2>
					<p>I'm currently taking requests for projects, if you have an idea for something or need a site built, send a message and I will respond usually within 24 hours.</p>
				</header>
				<form method="post" action="#">
					<div class="row 50%">
						<div class="6u"><input type="text" class="text" name="name" placeholder="Name" /></div>
						<div class="6u"><input type="text" class="text" name="email" placeholder="Email" /></div>
					</div>
					<div class="row 50%">
						<div class="12u">
							<textarea name="message" placeholder="Message"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="12u">
							<ul class="actions">
								<li><input type="submit" value="Send Message" /></li>
							</ul>
						</div>
					</div>
				</form>

			</article>
@stop

@section('footer')
		<section id="footer">
			<ul class="icons">
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
			</ul>
		</section>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@stop
