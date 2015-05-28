@extends('layouts.master')
@section('head')
	<link rel="stylesheet" type="text/css" href="css/resume.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/wow.min.js"type="text/javascript"></script>
@stop

@section('content')
	<div id="workexperience" class="sectionClass">
	  <div class="row ">
	    <div class="sectiontitle">
	      <h2>Work experience</h2>
	      <span class="headerLine"></span>
	    </div>
	    <div class="fullWidth eight columns">
	      <ul class="cbp_tmtimeline">
	        <li>
	          <div class="cbp_tmicon cbp_tmicon-phone">
	            <i class="faPra fa-ship"></i>
	          </div>
	          <div class="cbp_tmlabel wow fadeInRight animated">
	            <h3>LifeGuard at Schlitterbahn Waterpark</h3>
	            <div class="date">
	              <i class="fa fa-calendar"></i>May 2013 - August 2013
	            </div>
	            <h4><i class="fa fa-flag"></i>New Braunfels, Texas</h4>
	            <p class="projectParagraph">Examined occupants of multiple lifeguard positions and helped with the upkeep of water park to help ensure that the park maintained working order.</p>
	          </div>
	        </li>
	        <li>
	          <div class="cbp_tmicon cbp_tmicon-screen">
	            <i class="faPra fa-briefcase"></i>
	          </div>
	          <div class="cbp_tmlabel wow fadeInRight animated">
	            <h3>Personal Assistant</h3>
	            <h4><i class="fa fa-flag"></i>Corpus Christi, Texas</h4>
	            <div class="date"><i class="fa fa-calendar"></i>July 2013 - June 2014</div>
	            <p class="projectParagraph">Assisted in listing and showing of residential properties, along with preparing contracts for purchase and sale of homes. Office duties include answering phones, assisting clients in property research, and compiling lists of properties to be shown by Realtors.</p>
	          </div>
	        </li>
	      </ul>
	    </div>
	  </div>
	</div>

	<div id="workexperience" class="sectionClass">
	  <div class="row ">
	    <div class="sectiontitle">
	      <h2>Education</h2>
	      <span class="headerLine"></span>
	    </div>
	    <div class="fullWidth eight columns">
	      <ul class="cbp_tmtimeline">
	        <li>
	          <div class="cbp_tmicon cbp_tmicon-phone">
	            <i class="faPra fa-university"></i>
	          </div>
	          <div class="cbp_tmlabel wow fadeInRight animated">
	            <h3>High School Diploma <br>earned from Premier High School</h3>
	            <div class="date">
	              <i class="fa fa-calendar"></i>Graduated September, 2014
	            </div>
	            <h4><i class="fa fa-flag"></i>New Braunfels, Texas</h4>
	            <p class="projectParagraph">Some Text about high school needs to go here</p>
	          </div>
	        </li>
	        <li>
	          <div class="cbp_tmicon cbp_tmicon-screen">
	            <i class="faPra fa-code"></i>
	          </div>
	          <div class="cbp_tmlabel wow fadeInRight animated">
	            <h3>Student at CodeUp <br>Intensive Web Development Bootcamp</h3>
	            <h4><i class="fa fa-flag"></i>San Antonio, Texas</h4>
	            <div class="date"><i class="fa fa-calendar"></i>Februrary 2015 - June 2015</div>
	            <p class="projectParagraph">Some Text about codeup needs to go here</p>
	          </div>
	        </li>
	      </ul>
	    </div>
	  </div>
	</div>
@stop

@section('footer')
	<footer>
	</footer>
	<script type="text/javascript">
		new WOW().init();

		$('.about-me-img img, .authorWindowWrapper').hover(function() {
		  $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
		}, function() {
		  //$('.authorWindowWrapper').stop().css('display', 'none').find('p').removeClass('trans');
		});
	</script>
@stop

