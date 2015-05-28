<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Simon</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style type="text/css">
              button {
          height: 150px;
          width:  150px;
          margin-left: 13px;
          margin-right: 13px;

        }
        .row{
          padding-top: 50px;
        }

        #box-1{
          background-color: #FE99CD;
        }

        #box-2{
          background-color: #D7A6F5;
        }

        #box-3{
          background-color: #706875;
        }

        #box-4{
          background-color: #F2F598;
        }

        #start-game{
          height: 50px;
          width: 100px;
          margin-left: 515px;
          margin-top: 30px;
          border-radius: 5%
        }

        h2,h3{
          color: #fff;
          text-align: center;
        }

        body{
          background-image: url(images/escheresque_ste.png);
          overflow: scroll;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <button type="button" data-color="pink" value = "0" class="btn btn-default" id="box-1"></button>
          <button type="button" data-color="purple" value = "1" class="btn btn-default" id="box-2"></button>
        </div>
        <div class="col-md-4"></div>
      </div>

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <button type="button" data-color="black"  value="2" class="btn btn-default" id="box-3"></button>
          <button type="button" data-color="yellow" value="3" class="btn btn-default" id="box-4"></button>
        </div>
      </div>

<button type="button" class="btn btn-default" id="start-game">Start Game</button>

    <h2 id ="text">Watch This Sequence</h2>
    <h3 id ="round">Round:0</h3>


          


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript">
              //assign variables to hold html elements
        var pink = document.getElementById('box-1')
        var purple = document.getElementById('box-2')
        var black = document.getElementById('box-3')
        var yellow = document.getElementById('box-4')
        var button = document.getElementsByClassName('btn')
        var startButton = document.getElementById('start-game')
        var sequence = []
        var simon  = []
        var lastSimon = simon[simon.length - 1]
        var lastSequence = sequence[sequence.length - 1]
        var text = document.getElementById('text')
        var round = document.getElementById('round')


        function squareAnimation() {
        var random = rand();
          sequence.push(random);
          
          for(var i = 0; i < sequence.length; i++) {
            animateTest(sequence[i], i);
          }

        }

        function animateTest(div, i) {
          setTimeout(function () {
            div.style.opacity = "0.5";

            setTimeout(function() {
              div.style.opacity = "1.0"
            }, 500);
          }, 1000 * i);     
        }

        function ifCorrect (){
          simon = []
          roundChange();
          squareAnimation();
        }

        function userChoice(event) {
          console.log(event.target)
          var choice =  event.target;
          simon.push(choice)
        }

        function rand() {
          var selection = Math.floor(Math.random() * 4);
            return button[selection];
          };
         



        //attach event listeners to each element
          pink.addEventListener('click',userChoice,false)
          purple.addEventListener('click',userChoice,false)
          black.addEventListener('click',userChoice,false)
          yellow.addEventListener('click',userChoice,false)
          startButton.addEventListener('click',startGame,false)
        //check if user selection matches simon's sequence
        function checkIfMatch () {
            i = 0;
            i++;
          if (simon[i] == sequence[i]) {
          ifCorrect()
          
          }
        }


        function compareSequences () {
          setInterval(function() {
          var check = checkIfMatch();
            return check;
          },3000)

          }

        function startGame () {
          i = 0
          i++
          squareAnimation();
          if (simon.length !== sequence[i]) {
            compareSequences(); 
          };

          r = sequence.length ;
          round.innerHTML = "Round:" + r  
          
        }



        function roundChange () {
          r = sequence.length +1;
          round.innerHTML = "Round:" + r 
        }

    </script>
  </body>
</html>