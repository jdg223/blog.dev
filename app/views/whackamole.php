<!DOCTYPE html>
<html lang="en" class="gradient">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Whack a Mole by JD Garza</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style type="text/css">
                    /*
            ==============================================
            CSS3 ANIMATION CHEAT SHEET
            ==============================================

            Made by Justin Aguilar

            www.justinaguilar.com/animations/

            Questions, comments, concerns, love letters:
            justin@justinaguilar.com
            ==============================================
            */
        .slideDown{animation-name:slideDown;-webkit-animation-name:slideDown;animation-duration:1s;-webkit-animation-duration:1s;animation-timing-function:ease;-webkit-animation-timing-function:ease;visibility:visible!important}@keyframes slideDown{0%{transform:translateY(-100%)}50%{transform:translateY(8%)}65%{transform:translateY(-4%)}80%{transform:translateY(4%)}95%{transform:translateY(-2%)}100%{transform:translateY(0)}}@-webkit-keyframes slideDown{0%{-webkit-transform:translateY(-100%)}50%{-webkit-transform:translateY(8%)}65%{-webkit-transform:translateY(-4%)}80%{-webkit-transform:translateY(4%)}95%{-webkit-transform:translateY(-2%)}100%{-webkit-transform:translateY(0)}}.slideUp{animation-name:slideUp;-webkit-animation-name:slideUp;animation-duration:1s;-webkit-animation-duration:1s;animation-timing-function:ease;-webkit-animation-timing-function:ease;visibility:visible!important}@keyframes slideUp{0%{transform:translateY(100%)}50%{transform:translateY(-8%)}65%{transform:translateY(4%)}80%{transform:translateY(-4%)}95%{transform:translateY(2%)}100%{transform:translateY(0)}}@-webkit-keyframes slideUp{0%{-webkit-transform:translateY(100%)}50%{-webkit-transform:translateY(-8%)}65%{-webkit-transform:translateY(4%)}80%{-webkit-transform:translateY(-4%)}95%{-webkit-transform:translateY(2%)}100%{-webkit-transform:translateY(0)}}.slideLeft{animation-name:slideLeft;-webkit-animation-name:slideLeft;animation-duration:1s;-webkit-animation-duration:1s;animation-timing-function:ease-in-out;-webkit-animation-timing-function:ease-in-out;visibility:visible!important}@keyframes slideLeft{0%{transform:translateX(150%)}50%{transform:translateX(-8%)}65%{transform:translateX(4%)}80%{transform:translateX(-4%)}95%{transform:translateX(2%)}100%{transform:translateX(0)}}@-webkit-keyframes slideLeft{0%{-webkit-transform:translateX(150%)}50%{-webkit-transform:translateX(-8%)}65%{-webkit-transform:translateX(4%)}80%{-webkit-transform:translateX(-4%)}95%{-webkit-transform:translateX(2%)}100%{-webkit-transform:translateX(0)}}.slideRight{animation-name:slideRight;-webkit-animation-name:slideRight;animation-duration:1s;-webkit-animation-duration:1s;animation-timing-function:ease-in-out;-webkit-animation-timing-function:ease-in-out;visibility:visible!important}@keyframes slideRight{0%{transform:translateX(-150%)}50%{transform:translateX(8%)}65%{transform:translateX(-4%)}80%{transform:translateX(4%)}95%{transform:translateX(-2%)}100%{transform:translateX(0)}}@-webkit-keyframes slideRight{0%{-webkit-transform:translateX(-150%)}50%{-webkit-transform:translateX(8%)}65%{-webkit-transform:translateX(-4%)}80%{-webkit-transform:translateX(4%)}95%{-webkit-transform:translateX(-2%)}100%{-webkit-transform:translateX(0)}}.slideExpandUp{animation-name:slideExpandUp;-webkit-animation-name:slideExpandUp;animation-duration:1.6s;-webkit-animation-duration:1.6s;animation-timing-function:ease-out;-webkit-animation-timing-function:ease -out;visibility:visible!important}@keyframes slideExpandUp{0%{transform:translateY(100%) scaleX(.5)}30%{transform:translateY(-8%) scaleX(.5)}40%{transform:translateY(2%) scaleX(.5)}50%{transform:translateY(0) scaleX(1.1)}60%{transform:translateY(0) scaleX(.9)}70%{transform:translateY(0) scaleX(1.05)}80%{transform:translateY(0) scaleX(.95)}90%{transform:translateY(0) scaleX(1.02)}100%{transform:translateY(0) scaleX(1)}}@-webkit-keyframes slideExpandUp{0%{-webkit-transform:translateY(100%) scaleX(.5)}30%{-webkit-transform:translateY(-8%) scaleX(.5)}40%{-webkit-transform:translateY(2%) scaleX(.5)}50%{-webkit-transform:translateY(0) scaleX(1.1)}60%{-webkit-transform:translateY(0) scaleX(.9)}70%{-webkit-transform:translateY(0) scaleX(1.05)}80%{-webkit-transform:translateY(0) scaleX(.95)}90%{-webkit-transform:translateY(0) scaleX(1.02)}100%{-webkit-transform:translateY(0) scaleX(1)}}.expandUp{animation-name:expandUp;-webkit-animation-name:expandUp;animation-duration:.7s;-webkit-animation-duration:.7s;animation-timing-function:ease;-webkit-animation-timing-function:ease;visibility:visible!important}@keyframes expandUp{0%{transform:translateY(100%) scale(.6) scaleY(.5)}60%{transform:translateY(-7%) scaleY(1.12)}75%{transform:translateY(3%)}100%{transform:translateY(0) scale(1) scaleY(1)}}@-webkit-keyframes expandUp{0%{-webkit-transform:translateY(100%) scale(.6) scaleY(.5)}60%{-webkit-transform:translateY(-7%) scaleY(1.12)}75%{-webkit-transform:translateY(3%)}100%{-webkit-transform:translateY(0) scale(1) scaleY(1)}}.fadeIn{animation-name:fadeIn;-webkit-animation-name:fadeIn;animation-duration:1.5s;-webkit-animation-duration:1.5s;animation-timing-function:ease-in-out;-webkit-animation-timing-function:ease-in-out;visibility:visible!important}@keyframes fadeIn{0%{transform:scale(0);opacity:0}60%{transform:scale(1.1)}80%{transform:scale(.9);opacity:1}100%{transform:scale(1);opacity:1}}@-webkit-keyframes fadeIn{0%{-webkit-transform:scale(0);opacity:0}60%{-webkit-transform:scale(1.1)}80%{-webkit-transform:scale(.9);opacity:1}100%{-webkit-transform:scale(1);opacity:1}}.expandOpen{animation-name:expandOpen;-webkit-animation-name:expandOpen;animation-duration:1.2s;-webkit-animation-duration:1.2s;animation-timing-function:ease-out;-webkit-animation-timing-function:ease-out;visibility:visible!important}@keyframes expandOpen{0%{transform:scale(1.8)}50%{transform:scale(.95)}80%{transform:scale(1.05)}90%{transform:scale(.98)}100%{transform:scale(1)}}@-webkit-keyframes expandOpen{0%{-webkit-transform:scale(1.8)}50%{-webkit-transform:scale(.95)}80%{-webkit-transform:scale(1.05)}90%{-webkit-transform:scale(.98)}100%{-webkit-transform:scale(1)}}.bigEntrance{animation-name:bigEntrance;-webkit-animation-name:bigEntrance;animation-duration:1.6s;-webkit-animation-duration:1.6s;animation-timing-function:ease-out;-webkit-animation-timing-function:ease-out;visibility:visible!important}@keyframes bigEntrance{0%{transform:scale(.3) rotate(6deg) translateX(-30%) translateY(30%);opacity:.2}30%{transform:scale(1.03) rotate(-2deg) translateX(2%) translateY(-2%);opacity:1}45%{transform:scale(.98) rotate(1deg) translateX(0) translateY(0);opacity:1}60%{transform:scale(1.01) rotate(-1deg) translateX(0) translateY(0);opacity:1}75%{transform:scale(.99) rotate(1deg) translateX(0) translateY(0);opacity:1}90%{transform:scale(1.01) rotate(0deg) translateX(0) translateY(0);opacity:1}100%{transform:scale(1) rotate(0deg) translateX(0) translateY(0);opacity:1}}@-webkit-keyframes bigEntrance{0%{-webkit-transform:scale(.3) rotate(6deg) translateX(-30%) translateY(30%);opacity:.2}30%{-webkit-transform:scale(1.03) rotate(-2deg) translateX(2%) translateY(-2%);opacity:1}45%{-webkit-transform:scale(.98) rotate(1deg) translateX(0) translateY(0);opacity:1}60%{-webkit-transform:scale(1.01) rotate(-1deg) translateX(0) translateY(0);opacity:1}75%{-webkit-transform:scale(.99) rotate(1deg) translateX(0) translateY(0);opacity:1}90%{-webkit-transform:scale(1.01) rotate(0deg) translateX(0) translateY(0);opacity:1}100%{-webkit-transform:scale(1) rotate(0deg) translateX(0) translateY(0);opacity:1}}.hatch{animation-name:hatch;-webkit-animation-name:hatch;animation-duration:2s;-webkit-animation-duration:2s;animation-timing-function:ease-in-out;-webkit-animation-timing-function:ease-in-out;transform-origin:50% 100%;-ms-transform-origin:50% 100%;-webkit-transform-origin:50% 100%;visibility:visible!important}@keyframes hatch{0%{transform:rotate(0deg) scaleY(.6)}20%{transform:rotate(-2deg) scaleY(1.05)}35%{transform:rotate(2deg) scaleY(1)}50%{transform:rotate(-2deg)}65%{transform:rotate(1deg)}80%{transform:rotate(-1deg)}100%{transform:rotate(0deg)}}@-webkit-keyframes hatch{0%{-webkit-transform:rotate(0deg) scaleY(.6)}20%{-webkit-transform:rotate(-2deg) scaleY(1.05)}35%{-webkit-transform:rotate(2deg) scaleY(1)}50%{-webkit-transform:rotate(-2deg)}65%{-webkit-transform:rotate(1deg)}80%{-webkit-transform:rotate(-1deg)}100%{-webkit-transform:rotate(0deg)}}.bounce{animation-name:bounce;-webkit-animation-name:bounce;animation-duration:1.6s;-webkit-animation-duration:1.6s;animation-timing-function:ease;-webkit-animation-timing-function:ease;transform-origin:50% 100%;-ms-transform-origin:50% 100%;-webkit-transform-origin:50% 100%}@keyframes bounce{0%{transform:translateY(0) scaleY(.6)}60%{transform:translateY(-100%) scaleY(1.1)}70%{transform:translateY(0) scaleY(.95) scaleX(1.05)}80%{transform:translateY(0) scaleY(1.05) scaleX(1)}90%{transform:translateY(0) scaleY(.95) scaleX(1)}100%{transform:translateY(0) scaleY(1) scaleX(1)}}@-webkit-keyframes bounce{0%{-webkit-transform:translateY(0) scaleY(.6)}60%{-webkit-transform:translateY(-100%) scaleY(1.1)}70%{-webkit-transform:translateY(0) scaleY(.95) scaleX(1.05)}80%{-webkit-transform:translateY(0) scaleY(1.05) scaleX(1)}90%{-webkit-transform:translateY(0) scaleY(.95) scaleX(1)}100%{-webkit-transform:translateY(0) scaleY(1) scaleX(1)}}.pulse{animation-name:pulse;-webkit-animation-name:pulse;animation-duration:1.5s;-webkit-animation-duration:1.5s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite}@keyframes pulse{0%{transform:scale(.9);opacity:.7}50%{transform:scale(1);opacity:1}100%{transform:scale(.9);opacity:.7}}@-webkit-keyframes pulse{0%{-webkit-transform:scale(.95);opacity:.7}50%{-webkit-transform:scale(1);opacity:1}100%{-webkit-transform:scale(.95);opacity:.7}}.floating{animation-name:floating;-webkit-animation-name:floating;animation-duration:1.5s;-webkit-animation-duration:1.5s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite}@keyframes floating{0%{transform:translateY(0)}50%{transform:translateY(8%)}100%{transform:translateY(0)}}@-webkit-keyframes floating{0%{-webkit-transform:translateY(0)}50%{-webkit-transform:translateY(8%)}100%{-webkit-transform:translateY(0)}}.tossing{animation-name:tossing;-webkit-animation-name:tossing;animation-duration:2.5s;-webkit-animation-duration:2.5s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite}@keyframes tossing{0%{transform:rotate(-4deg)}50%{transform:rotate(4deg)}100%{transform:rotate(-4deg)}}@-webkit-keyframes tossing{0%{-webkit-transform:rotate(-4deg)}50%{-webkit-transform:rotate(4deg)}100%{-webkit-transform:rotate(-4deg)}}.pullUp{animation-name:pullUp;-webkit-animation-name:pullUp;animation-duration:1.1s;-webkit-animation-duration:1.1s;animation-timing-function:ease-out;-webkit-animation-timing-function:ease-out;transform-origin:50% 100%;-ms-transform-origin:50% 100%;-webkit-transform-origin:50% 100%}@keyframes pullUp{0%{transform:scaleY(.1)}40%{transform:scaleY(1.02)}100%,60%{transform:scaleY(.98)}80%{transform:scaleY(1.01)}100%{transform:scaleY(1)}}@-webkit-keyframes pullUp{0%{-webkit-transform:scaleY(.1)}40%{-webkit-transform:scaleY(1.02)}100%,60%{-webkit-transform:scaleY(.98)}80%{-webkit-transform:scaleY(1.01)}100%{-webkit-transform:scaleY(1)}}.pullDown{animation-name:pullDown;-webkit-animation-name:pullDown;animation-duration:1.1s;-webkit-animation-duration:1.1s;animation-timing-function:ease-out;-webkit-animation-timing-function:ease-out;transform-origin:50% 0;-ms-transform-origin:50% 0;-webkit-transform-origin:50% 0}@keyframes pullDown{0%{transform:scaleY(.1)}40%{transform:scaleY(1.02)}100%,60%{transform:scaleY(.98)}80%{transform:scaleY(1.01)}100%{transform:scaleY(1)}}@-webkit-keyframes pullDown{0%{-webkit-transform:scaleY(.1)}40%{-webkit-transform:scaleY(1.02)}100%,60%{-webkit-transform:scaleY(.98)}80%{-webkit-transform:scaleY(1.01)}100%{-webkit-transform:scaleY(1)}}.stretchLeft{animation-name:stretchLeft;-webkit-animation-name:stretchLeft;animation-duration:1.5s;-webkit-animation-duration:1.5s;animation-timing-function:ease-out;-webkit-animation-timing-function:ease-out;transform-origin:100% 0;-ms-transform-origin:100% 0;-webkit-transform-origin:100% 0}@keyframes stretchLeft{0%{transform:scaleX(.3)}40%{transform:scaleX(1.02)}100%,60%{transform:scaleX(.98)}80%{transform:scaleX(1.01)}100%{transform:scaleX(1)}}@-webkit-keyframes stretchLeft{0%{-webkit-transform:scaleX(.3)}40%{-webkit-transform:scaleX(1.02)}100%,60%{-webkit-transform:scaleX(.98)}80%{-webkit-transform:scaleX(1.01)}100%{-webkit-transform:scaleX(1)}}.stretchRight{animation-name:stretchRight;-webkit-animation-name:stretchRight;animation-duration:1.5s;-webkit-animation-duration:1.5s;animation-timing-function:ease-out;-webkit-animation-timing-function:ease-out;transform-origin:0 0;-ms-transform-origin:0 0;-webkit-transform-origin:0 0}@keyframes stretchRight{0%{transform:scaleX(.3)}40%{transform:scaleX(1.02)}100%,60%{transform:scaleX(.98)}80%{transform:scaleX(1.01)}100%{transform:scaleX(1)}}@-webkit-keyframes stretchRight{0%{-webkit-transform:scaleX(.3)}40%{-webkit-transform:scaleX(1.02)}100%,60%{-webkit-transform:scaleX(.98)}80%{-webkit-transform:scaleX(1.01)}100%{-webkit-transform:scaleX(1)}}
    </style>
    <style type="text/css">
        /*when image fades in*/
        .fade-in{
            border:none;
            background-color: none;
            color: none;
            background-image: url('images/sam-jac-laurence1.jpg');
            max-height: 125px; 
            max-width: 125px;
            box-shadow: -6px 1px 11px 6px #A0A19F;
            border-radius: 30%;
            opacity: 1.0;
            width: 125px;
            height: 125px;
        }

        /*game timer*/
        #timer{
            text-align: center;
        }

        /*for the body and html*/
        html,body {
            cursor: url('images/laurence-fishburne.png.png'), default;
            background-color: #000000;
            padding: 0px;
            margin: 0px;

        }

        /*the game score and game time fonts*/
        h1,h2{
            color: #fadcbe;
            font-family: 'Shadows Into Light', cursive;
            font-size: 50px;
            text-shadow: 0px 3px 0px #b2a98f,
                     0px 14px 10px rgba(0,0,0,0.15),
                     0px 24px 2px rgba(0,0,0,0.1),
                     0px 34px 30px rgba(0,0,0,0.1);
        }

        /*the games score*/
        #score{
            text-align: center;
            margin-left: 20px;
        }

        /*for the start and start over buttons*/
        .btn{
            border-radius: 5%;
            height: 50px;
            width: 120px;
            font-size: 20px;
            background-color: transparent;
            margin-bottom: 10px;
            color: #92ad84;
            font-family: 'Indie Flower', cursive;
            border-color: #B75757;
        }

        /*when the buttons are hovered over*/
        .btn:hover{
            background-color:#32a787;
            color: #fff;
        }

        /* for the game reset button*/
        #gameReset{
            float: right;
            width: 130px;
            margin-right: 210px;
        }

        /*for the gradient background*/
        .gradient{
          width: 100%;
          height: 100%;
          padding: 0px;
          margin: 0px;
        }

        /*for mobile responsiveness*/
        @media(max-width:480px){
        .whack-boxes{
            width: 100px;
            height: 100px;
            border: 1px solid;
            margin-top: 1px;
            background-image: url('images/swirl_pattern.png');
            border-radius: 50%;
            opacity: 0.0;
            display: inline-block;
            }

        #gameStart{
            float: left;
            margin-top: 20px;
            display: inline;
            }

        #gameReset{
            float: right;
            margin-top: 20px;
            display: inline;
            width: 120px;
            margin-right: 0;
            }

        .fade-in{
            border:none;
            background-color: none;
            color: none;
            background-image: url('images/sam-jac-laurence1.jpg');
            max-height: 100px; 
            max-width: 100px;
            box-shadow: -3px 1px 11px 3px #A0A19F;
            border-radius: 50%;
            opacity: 1.0;
            }

        #timer{
            margin-top: 10px;
            }
        }
    </style>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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

  <!-- gradient class is what sets background -->
  <body class="gradient">
<div class="container">

    <!-- pulse class makes the timer have pulse effect -->
    <h1 class="pulse" id="timer">Time Remaining: 30</h1>

    <!-- tossing class adds tossing effect -->
        <h2 class="tossing" id="score">Your score: 0</h2>
        <button class="btn btn-default bounce" id="gameStart">Start</button>
        <button class="btn btn-default bounce" id="gameReset">Start Over</button> 
</div>

<div class="col-md-4">
    <div class="container-fluid">
        <!-- bigEntrance adds the beginning effect that makes div boxes pop on screen -->
        <div class="whack-boxes bigEntrance"></div>
        <div class="whack-boxes bigEntrance"></div>
        <div class="whack-boxes bigEntrance"></div>
    </div>
</div>

<div class="col-md-4">
    <div class="container-fluid">
        <div class="whack-boxes bigEntrance"></div>
        <div class="whack-boxes bigEntrance"></div>
        <div class="whack-boxes bigEntrance"></div>
    </div>
</div>

<div class="col-md-4">
    <div class="container-fluid">
        <div class="whack-boxes bigEntrance"></div>
        <div class="whack-boxes bigEntrance"></div>
        <div class="whack-boxes bigEntrance"></div>
    </div>
</div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
var whackBoxes = document.getElementsByClassName('whack-boxes');
var timeRemaining = [];
var score = [''];

// function that returns a random div
function randomBox() {
    var selection = Math.floor(Math.random() * 9);
    var returnedValue = $(whackBoxes[selection]);
        return returnedValue        
};

// animates the moles by adding class fade-in and when game is over changes timer text to say game over
//, also stops the game from running
function moleAnimation() {
    var random = randomBox();
    var beginAnimate = setInterval(function() {
    randomBox().addClass('fade-in');
    },1500);
    
    setInterval(function() {
    if(timeRemaining.length == 31){
        clearInterval(beginAnimate);
        $('#timer').text("Game Over!")
        };
    },50);
};

// ends the animation by removing class fade-in
function endOfAnimation() {
    setInterval(function(){
    randomBox().removeClass('fade-in');
    },200);
};

// this keeps the display of game time remaining
function gameTimer() {      
    var timer = 30;
    var i = 30;
    var gameTime = setInterval(function(){ 
    $('#timer').text('Time Remaining: ' + i);
            i--;    
            timeRemaining.push(i);
    if (i == 0 - 1) {
        clearInterval(gameTime);
    }
        },1000);    
};


// checks if classes on both click and the box match and if they do adds one to the score
function checkIfMatch () {
    setInterval(function() {
    if ($('div').hasClass('whack-boxes bigEntrance fade-in clicked')) {
        console.log('both are matched');
        $('div').removeClass('clicked fade-in');
        var i = 0;
        $('#score').text("Your Score: " + score.length);
        i++;
        score.push(i);
    };
        },200); 
};

//function that starts the game
function runGame() {
    gameTimer();
    moleAnimation();    
    checkIfMatch();
    endOfAnimation();
};

//function that enables the game to be restarted
function  resetGame() {
    timeRemaining = [];
    score = ['']; 
    $('#score').text("Your Score: 0");
    runGame();
}
//add class clicked to whack-boxes when they are clicked
$('.whack-boxes').click(function() {
    $(this).addClass('clicked');
    console.log(this);
});

//if this button is pressed the game will run
$('#gameStart').click(function() {
    runGame();
});

//if the button is pressed the game will restart
$('#gameReset').click(function() {
    resetGame();
});


// for gradient background
var colors = new Array(
  [62,35,255],
  [60,255,60],
  [255,35,98],
  [45,175,230],
  [255,0,255],
  [255,128,0]);

var step = 0;

var colorIndexes = [0,1,2,3];

//transition speed
var gradientSpeed = 0.002;

//function that runs gradient background
function updateGradient(){
  
  if ( $===undefined ) return;
 // adds color array to color index
var colorI0 = colors[colorIndexes[0]];
var colorI1 = colors[colorIndexes[1]];
var colorI2 = colors[colorIndexes[2]];
var colorI3 = colors[colorIndexes[3]];

//assigns colors that are to be run
var istep = 1 - step;
var red1 = Math.round(istep * colorI0[0] + step * colorI1[0]);
var green1 = Math.round(istep * colorI0[1] + step * colorI1[1]);
var blue1 = Math.round(istep * colorI0[2] + step * colorI1[2]);
var color1 = "rgb("+red1+","+green1+","+blue1+")";

var red2 = Math.round(istep * colorI2[0] + step * colorI3[0]);
var green2 = Math.round(istep * colorI2[1] + step * colorI3[1]);
var blue2 = Math.round(istep * colorI2[2] + step * colorI3[2]);
var color2 = "rgb("+red2+","+green2+","+blue2+")";

//changes the background by adding css
 $('.gradient').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
//places colors into empty string, then adds them to the css
  step += gradientSpeed;
  if ( step >= 1 ){
    step %= 1;
    colorIndexes[0] = colorIndexes[1];
    colorIndexes[2] = colorIndexes[3];
    
    colorIndexes[1] = ( colorIndexes[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndexes[3] = ( colorIndexes[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}

//interval that keeps the function running
setInterval(updateGradient,10); 
</script>
  </body>
</html>