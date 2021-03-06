<!DOCTYPE html>
<html>
<head>
    <title>Weather App Made By JD Garza</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <style type="text/css">

            .cont-fluid{
                width:auto;
                height: auto;
                background-image: url('images/sanAntonio.jpg');
            }
            p{
                color: #fff;
                text-align: center;
                font-size: 20px;
            }
            #weather{
                height:100%;
                width: 100%;
            }
            .currentWeather{
                text-align: center;
                font-size: 50px;
            }
            .inline{
                display: inline;
            }
            .center-block{
                height: 100px;
            }
            #map-canvas {
                    height: 400px;
                    width: 100%;
            }
            #panel {
                   height: auto;
                   width: 215px;
                    background-color: transparent;
                    padding: 5px;
                    display: inline;
                    position: absolute;
                    top: 380px;
                    left: 50%;
                    margin-left: -125px;
                    z-index: 5;
            }
            #address{
                background-color: #fff;
                border-color: #fff;
                font-size: 15px;
                color: #000;
            }
            #geo{

                margin-top: 5px;
            }
            input{
                color: #000;
            }
      </style>

    <!-- Google Analytics -->
    <script src="js/analytics.js"></script> 

</head>
  <body>
    <!-- contains weather map -->
<div class="container-fluid">
    <div class="row">
            <div id="weather" class="img-responsive cont-fluid"></div>
    </div>
    <!-- contains geocode box -->
    <div class="row">
            <div id="panel">
                <input id="address" type="textbox" value="San Antonio,Texas" class="form-control">
                <button type="button" class="btn btn-default" value="Geocode" id="geo">geocode</button>
            </div>
                <!-- contains google maps api -->
                <div id="map-canvas"></div>
    </div>
</div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZFn_4L9ptqKKmSOlGp0PQaISk5QVzfBI"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript">

            //OPEN WEATHER MAP API
            var weatherDisplay = $('#weather');
            var currentWeather; 
            currentWeather = $.get('http://api.openweathermap.org/data/2.5/weather?q=San+Antonio,Texas');
            var wet = function weather (data) {
                var weatherString = ''
                //row 
                weatherString += '<div class="row">'
                weatherString += '<div class="col-md-12">'
                weatherString += '</div>'
                weatherString += '</div>'
                //row
                weatherString += '<div class="row">'
                weatherString += '<div class="col-md-12">'
                weatherString += '<img class = "center-block" src="http://openweathermap.org/img/w/' + data.weather[0].icon + '.png"/>'
                weatherString += '<p>Low: '+ parseInt((data.main.temp_min -273.15) * 1.8 + 32) + '°F</p>'
                weatherString += '<p>High: '+ parseInt((data.main.temp_max -273.15) * 1.8 + 32) + '°F</p>'
                weatherString += '<p class="currentWeather">' + parseInt((data.main.temp -273.15) * 1.8 + 32) + '°F</p>'
                weatherString += '</div>'
                weatherString += '</div>'
                //row
                weatherString += '<div class="row">'
                weatherString += '<div class="col-md-12">'
                weatherString += '<p>humidity: ' + data.main.humidity+ '</p>'
                weatherString += '<p>pressure: ' + data.main.pressure + '</p>'
                weatherString += '<p>wind: ' + data.wind.speed +' mps'+ '</p>'
                weatherString += '</div>'
                weatherString += '</div>'      

                $('#weather').html(weatherString)
            };
            //calls ajax request
            currentWeather.done(wet);
            currentWeather.fail(function() {
                console.log('500,error connecting to oopen weather map');
            });

        // GOOGLE MAPS API
        var geocoder;
        var map;

        //initialize map
        function initialize() {
          geocoder = new google.maps.Geocoder();
          var latlng = new google.maps.LatLng(29.4167, -98.5000);
          var mapOptions = {
            zoom: 8,
            center: latlng
          };
          map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        };

        //function changes address and weather
        function codeAddress() {
          var address = document.getElementById('address').value;
          geocoder.geocode( { 'address': address}, function(results, status){
            if (status == google.maps.GeocoderStatus.OK){
              map.setCenter(results[0].geometry.location);
              currentWeather = $.get('http://api.openweathermap.org/data/2.5/weather?lat='+results[0].geometry.location.lat()+'&lon='+results[0].geometry.location.lng());
              //refreshes ajax request with new location for weather api
              currentWeather.done(wet);
            currentWeather.fail(function() {
                console.log('500,error connecting to oopen weather map');
            });

              //drops marker on screen based on location
              var marker = new google.maps.Marker({
                  map: map,
                  position: results[0].geometry.location
              });
            
            }else{
              alert('Geocode was not successful for the following reason: ' + status);
            };

          });
        };

        //calls map to load when screen is loaded
        google.maps.event.addDomListener(window, 'load', initialize);

        //click event that calls codeAddress() function
        $('#geo').click(codeAddress);
    </script>
  </body>
</html>