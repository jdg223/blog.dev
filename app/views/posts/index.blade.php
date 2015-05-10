<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">

  <title>Explore About-MultiPurpose theme</title>
 
  <!-- preloader -->
  <link href="css/preloader.css" rel="stylesheet" type="text/css">
  <script src="js/pace.min.js" type="text/javascript"></script>
  
  <!-- bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- animate.css -->
  <link href="css/animate.css" rel="stylesheet">
  
  <!-- google fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display' rel='stylesheet' type='text/css'>
  
  <!-- utility.css -->
  <link href="css/utility.css" rel="stylesheet">
  
  <!-- main style.css -->
  <link href="css/blog-style.css" rel="stylesheet" type="text/css">
  
  <!-- slideshow.css -->
  <link href="css/slideshow.css" rel="stylesheet">
  
  <!-- backgrounds.css -->
  <link href="css/backgrounds.css" rel="stylesheet">

  <!-- owl.carousel -->
  <link href="css/owl.carousel.css" rel="stylesheet">

  <!-- icons.css -->
  <link href="css/fonts/ionicons.css" rel="stylesheet" type="text/css">
  
  <!-- modernizr.js -->
  <script src="js/modernizr.js"></script>

</head>

<body>
  <div class=" page-container" id="page-container">
    <!-- content push wrapper -->

    <nav class="page-menu page-effect-7" id="menu-7">
      <ul>
        <li>
          <a href="#"><img src="img/sqm.png"></a>
        </li>

        <li>
          <a href="index.html">home</a>
        </li>

        <li>
          <a href="about.html">about us</a>
        </li>

        <li>
          <a href="services.html">services</a>
        </li>

        <li>
          <a href="work.html">work</a>
        </li>

        <li>
          <a class="current" href="blog.html">blog</a>
        </li>

        <li>
          <a href="contact.html">contact</a>
        </li>
      </ul>
    </nav>

    <div class="page-pusher">
      <div class="about page-content" id="container">
        <nav class="navbar top-nav padd16 navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="row">
              <div class="col-xs-6">
                <a class="navbar-brand" href="#">logo</a>
              </div>

              <div class="col-xs-6">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="open_menu" href="#f" id=""><span class="cd-menu-text">Menu</span> <span class="cd-menu-icon"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </nav>

        <div class="blog-container intro-effect-sidefixed" id="blog-container">
          <header class="header">
            <div class="bg-img bg9">
              <div class="overlay"></div>
            </div>
          </header><button class="trigger">Read More</button>

          <article class="blog-content">
            <div class="blog-title">
              <h4>latest form blog</h4>

              <h3 class="uppercase">Some are born to the endless night</h3>

              <p class="subline">Inspiration for Article Intro Effects</p>

              <p>by <strong>Henry James</strong> &#8212; Posted in <strong>Inspiration</strong> on <strong>May 21, 2014</strong></p>

              <p>We may define a food to be any substance which will repair the functional waste of the body, increase its growth, or maintain the heat, muscular, and nervous
              energy.<br>
              <br>
              <a class="btn btn-primary ghb" href="article.html">read more.</a></p>
            </div>

	@foreach ($posts as $post)
            <div class="blog-title">
				<h3>{{ $post->title }}</h3>

              <p>by <strong>{{$post->user->username}}</strong> &#8212; Posted on <strong>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</strong></p>

              <p>{{ $post->body }}<br><br>
              <a class="btn btn-primary ghb" href="{{{action('PostsController@show',$post->slug) }}}">read more.</a></p>

            </div>
    @endforeach
          </article>
        </div><!-- /blog-container -->
      </div>
    </div><!-- end #container &page-content -->
  </div><!-- end .pusher -->
  
  <script src="js/jquery.min.js"></script> 
  <script src="js/plugins.js" type="text/javascript"></script>
  <script src="js/main.js" type="text/javascript"></script>
  <script type="text/javascript">
              
"use strict";
                  $(window).scrollTop(0);
                
                var docElem = window.document.documentElement,
                    scrollVal,
                    isRevealed, 
                    noscroll, 
                    isAnimating,
                    container = document.getElementById( 'blog-container' ),
                    trigger = container.querySelector( 'button.trigger' );



                (function() {

                // detect if IE : from http://stackoverflow.com/a/16657946      
                var ie = (function(){
                    var undef,rv = -1; // Return value assumes failure.
                    var ua = window.navigator.userAgent;
                    var msie = ua.indexOf('MSIE ');
                    var trident = ua.indexOf('Trident/');

                    if (msie > 0) {
                        // IE 10 or older => return version number
                        rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
                    } else if (trident > 0) {
                        // IE 11 (or newer) => return version number
                        var rvNum = ua.indexOf('rv:');
                        rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
                    }

                    return ((rv > -1) ? rv : undef);
                }());


                // disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179                  
                // left: 37, up: 38, right: 39, down: 40,
                // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
                var keys = [32, 37, 38, 39, 40], wheelIter = 0;

                function preventDefault(e) {
                    e = e || window.event;
                    if (e.preventDefault)
                    e.preventDefault();
                    e.returnValue = false;  
                }

                function keydown(e) {
                    for (var i = keys.length; i--;) {
                        if (e.keyCode === keys[i]) {
                            preventDefault(e);
                            return;
                        }
                    }
                }

                function touchmove(e) {
                    preventDefault(e);
                }

                function wheel(e) {
                    // for IE 
                    //if( ie ) {
                        //preventDefault(e);
                    //}
                }

                function disable_scroll() {
                    window.onmousewheel = document.onmousewheel = wheel;
                    document.onkeydown = keydown;
                    document.body.ontouchmove = touchmove;
                }

                function enable_scroll() {
                    window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;  
                }


                function scrollY() {
                    return window.pageYOffset || docElem.scrollTop;
                }

                function scrollPage() {
                    scrollVal = scrollY();
                    
                    if( noscroll && !ie ) {
                        if( scrollVal < 0 ) return false;
                        // keep it that way
                        window.scrollTo( 0, 0 );
                    }

                    if( classie.has( container, 'notrans' ) ) {
                        classie.remove( container, 'notrans' );
                        return false;
                    }

                    if( isAnimating ) {
                        return false;
                    }
                    
                    if( scrollVal <= 0 && isRevealed ) {
                        toggle(0);
                    }
                    else if( scrollVal > 0 && !isRevealed ){
                        toggle(1);
                    }
                }

                function toggle( reveal ) {
                    isAnimating = true;
                    
                    if( reveal ) {
                        $(".blog-content").css({background:"white"});
                        classie.add( container, 'modify' );
                    }
                    else {
                        noscroll = true;
                        disable_scroll();

                        $(".blog-content").css({background:"transparent"});

                        classie.remove( container, 'modify' );
                    }

                    // simulating the end of the transition:
                    setTimeout( function() {
                        isRevealed = !isRevealed;
                        isAnimating = false;
                        if( reveal ) {
                            noscroll = false;
                            enable_scroll();
                        }
                    }, 600 );
                }

                // refreshing the page...
                var pageScroll = scrollY();
                noscroll = pageScroll === 0;

                disable_scroll();

                if( pageScroll ) {
                    isRevealed = true;
                    classie.add( container, 'notrans' );
                    classie.add( container, 'modify' );
                }

                window.addEventListener( 'scroll', scrollPage );
                trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
                })();
  </script> 
</body>
</html>