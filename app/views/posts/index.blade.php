<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">

  <title>JD's Blog</title>
 
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
  
    <!-- Google Analytics -->
  <script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-63551459-1', 'auto');
    ga('send', 'pageview');
  </script>
</head>

<body>
  <div class=" page-container" id="page-container">
    <div class="page-pusher">
      <div class="about page-content" id="container">
        <nav class="navbar top-nav padd16 navbar-default navbar-fixed-top">
          <div class="container-fluid">
           

            <div class="row">
              <div class="col-xs-6">
              </div>

              <div class="col-xs-6">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="{{{action('HomeController@showPortfolio')}}}"><span class="cd-menu-text">HOME</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>

        <div class="blog-container intro-effect-sidefixed" id="blog-container">
          <header class="header">
            <div class="bg-img bg9">
              <div class="overlay"></div>
            </div>
          </header><button class="trigger">Read More</button>

          <article class="blog-content">

	@foreach ($posts as $post)
            <div class="blog-title">
				<h3>{{ $post->title }}</h3>

              <p>by <strong>{{$post->user->username}}</strong> &#8212; Posted on <strong>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</strong></p>

              <p>{{ $post->body }}<br><br>
              <a class="btn btn-primary ghb" href="{{{action('PostsController@show',$post->slug) }}}">read more.</a></p>

            </div>
    @endforeach
          </article>
        </div>
      </div>
    </div>
  </div>
  
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

                    setTimeout( function() {
                        isRevealed = !isRevealed;
                        isAnimating = false;
                        if( reveal ) {
                            noscroll = false;
                            enable_scroll();
                        }
                    }, 600 );
                }

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