<html class="no-js" lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">

  <title>Explore About-MultiPurpose theme</title>
  
  <!-- preloader -->
  <link href="../css/preloader.css" rel="stylesheet" type="text/css">
  <script src="../js/pace.min.js" type="text/javascript"></script>
  
  <!-- bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- google fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display' rel='stylesheet' type='text/css'>
  
  <!-- utility.css -->
  <link href="../css/utility.css" rel="stylesheet">
  
  <!-- main style.css -->
  <link href="../css/blog-style.css" rel="stylesheet" type="text/css">
  
  <!-- slideshow.css -->
  <link href="../css/slideshow.css" rel="stylesheet">
  
  <!-- backgrounds.css -->
  <link href="../css/backgrounds.css" rel="stylesheet">

  <!-- owl.carousel -->
  <link href="../css/owl.carousel.css" rel="stylesheet">

  <!-- icons.css -->
  <link href="../css/fonts/ionicons.css" rel="stylesheet" type="text/css">
  
  <!-- animate.css -->
  <link href="../css/animate.css" rel="stylesheet">
  <!-- modernizr.js -->
  <script src="../js/modernizr.js"></script>

</head>

<body>
  <div class=" page-container" id="page-container">
    <!-- content push wrapper -->

    <nav class="page-menu page-effect-7" id="menu-7">
      <ul>
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
          <a href="blog.html">blog</a>
        </li>

        <li>
          <a href="contact.html">contact</a>
        </li>
      </ul>
    </nav>

    <div class="page-pusher">
      <div class=" page-content" id="container">
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

        <header class="fh fixed">
          <div class="content cover2 bg9">
            <div class="parent text-center">
              <div class="colorWhite overlay child">
                <div class="inner">
                  <div class="row about-intro padd-top-md padd-bottom-md text-center">
                    <div class="col-md-12">
                      <h1 class="font-playfair">{{ $post->title }}</h1><small class="font-">{{ $post->user->username}}</small>
                    </div>
                  </div><a class="btn btn-primary gh control-btn">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </header>

        <section class="contentarea cascade-abs article margin-top">
          <div class="inner">
            <div class=" bg-white">
              <h3>{{ $post->title }}</h3>

              <p>{{ $post->body }}</p>

            </div>
          </div>

          <div class="row go-back text-center">
            <a class="icon ion-ios-arrow-thin-left" href="blog.html" style="font-style: italic"></a>
          </div>

          <div class="socialbar">
            <a class="font-playfair hvr-underline-from-left wow animated fadeIn" data-wow-duration="1s" href="contact.html">Contact us.</a>
          </div>

            <footer class="footer">
              <div class="container">
                <div class="row text-center">
                  <div class="col-md-12">
                    <a class="hvr-underline-from-left wow animated fadeIn" data-wow-duration="2s">112 E.PECAN STREET, SAN ANTONIO,TEXAS</a>
                  </div>
                </div>

                <div class="row text-center">
                  <div class="col-md-12 wow animated fadeIn" data-wow-duration="2.2s">
                    <p class="font-playfair">Established 2009</p><a class="icon ion-social-facebook" href="#" style="font-style: italic"></a> <a class="icon ion-social-twitter"
                    href="#" style="font-style: italic"></a>
                  </div>
                </div>
              </div>
            </footer>
       </section><!-- ends content-area -->
      </div>
    </div><!-- end #container &page-content -->
  </div>
  <script src="../js/jquery.min.js"></script> 
  <script src="../js/plugins.js" type="text/javascript"></script>
  <script src="../js/main.js" type="text/javascript"></script>
</body>
</html>