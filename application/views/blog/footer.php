	<footer>
		<hr>
		<div class="text-center">
			<p>A very simple demo &copy; 2018</p>
		</div>
	</footer>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
			// get lat and long coordinates
			// fetch weather data from api
			  if(navigator.geolocation){
    			navigator.geolocation.getCurrentPosition(
      			function(position){
			        //get latitude and longitude coords
			        var lat = position.coords.latitude;
			        var long = position.coords.longitude; 
        
			        //apixu.com api url
			        var appId = "ddc64a51e9404aa1b3375857160205";
			        var api = "https://api.apixu.com/v1/current.json?key="+appId+"&q="+lat+","+long;
        
			        //make api call through getJSON method
			        $.getJSON(api, function(data){
			          var cTemp = data.current.temp_c + " &#x2103;";
			          var fTemp = data.current.temp_f + " &#x2109;";
			          var condition_text = data.current.condition.text;
			          var condition_icon = "https:" + data.current.condition.icon;        
			          var wind_mph = data.current.wind_mph;
			          var wind_kmh = data.current.wind_kph;
			          var wind_dir = data.current.wind_dir;
			          var humidity = data.current.humidity;
			          var city = data.location.name;
			          var region = data.location.region;
			          var country = data.location.country;
			          
			          //put region names to html
			          $("#city").html(city);
			          $("#region").html(region);
			          $("#country").html(country);
			          $("#icon").html("<img src="+ condition_icon +">");
			          $("#condition").html("<b>"+condition_text+"</b>");
			          $("#temp").html("<b>"+cTemp+"</b>");
			          $("#windSpeed").html("<b>Wind Speed: " + wind_kmh + " Km/hr</b>");
			          $("#windDirection").html("<b>Wind Direction: " + wind_dir + "</b>");
			          $("#humidity").html("<b>Humidity: " + humidity + "</b>");
        
		          //toggle celsius-farenheit
		          var swapFlag = false;
		          $("#temp").on("click", function(){
		            if(swapFlag == false){
		              $("#temp").html("<b>" + fTemp + "</b>");
		              swapFlag = true;
		            }
		            else{
		              $("#temp").html("<b>" + cTemp + "</b>");
		              swapFlag = false;
		            }
		          });
		        
		        });    
		    });
		}
		</script>
  </body>
</html>