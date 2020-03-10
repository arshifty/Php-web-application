<!DOCTYPE html>
<html>
  <head>
  <script type="text/JavaScript">
<!--
function AutoRefresh( t ) {
setTimeout("location.reload(true);", t);
}
// -->
</script>
    <script>

      function initialize() {
	     var directionsService = new google.maps.DirectionsService();
         var directionsDisplay = new google.maps.DirectionsRenderer();
		
 
	  
	   infoWindow = new google.maps.InfoWindow;
	   
	    if (navigator.geolocation) 
		{
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
			  
              lng: position.coords.longitude
			  
            };
			
			 var fenway = {  lat: position.coords.latitude,   lng: position.coords.longitude};
         
		 var myOptions = {
           zoom:10,
           mapTypeId: google.maps.MapTypeId.HYBRID
       }
	  
    var map = new google.maps.Map(document.getElementById("map"), myOptions);
   directionsDisplay.setMap(map);
	  
        var panorama = new google.maps.StreetViewPanorama(
            document.getElementById('pano'), {
              position: fenway,
              pov: {
                heading: 34,
                pitch: 10
              }
            });
        map.setStreetView(panorama);
          
		 
		 		  /// a to b path how to find
		  
   
  
   /////
             var renderArray = [];
             var sum=0;
             Display('02 xmlFile.php', function(data) 
		  {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) 
			{
			
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                 
				 parseFloat(markerElem.getAttribute('lat')),                 
				 parseFloat(markerElem.getAttribute('lng'))
				  
				  );

             
            
              var marker = new google.maps.Marker(
			  {
                map: map,
                position: point,
                title: name
              });
			  
			  
			//////
			var st=new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			var en=point;
			 var selectedMode = document.getElementById('mode').value;
			var request = {
				   origin: st, 
				   destination:en,
				   travelMode: google.maps.TravelMode[selectedMode]
				   
                         };
   
					directionsService.route(request, function(response, status) 
					{
						  if (status == google.maps.DirectionsStatus.OK) 
						  {
							// directionsDisplay.setDirections(response);
							 var sss = (response.routes[0].legs[0].distance.value)/1000;
						//	 alert("distance from db "+ sss);
							 
							 var ddd= document.getElementById('kmnum').value;
						//	 alert("km num : "+ddd);
							 
							 if(sss < ddd)
							 {
		document.getElementById('distance').innerHTML +="<br><u><b>Address :</b></u> <br> "+document.getElementById("numb").value+" to "+name+ " <br> ";
         document.getElementById('distance').innerHTML +=(response.routes[0].legs[0].distance.value)/1000 + "killo meters<br>"; 
         
		 // Display the duration:
         document.getElementById('distance').innerHTML +=response.routes[0].legs[0].duration.value + "  seconds<br>";
		 
		 
							 renderArray[sum] = new google.maps.DirectionsRenderer();
                             renderArray[sum].setMap(map);
                             renderArray[sum].setDirections(response);
                             
			infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
							 }
							

							 
							 sum++
							 
						  }
					   });
			/////////
             
            });
			

		//	 document.write("sum :"+sum);
			 
			 
			 

			 
          });
   //////

      
   
   

   
   
///
		 
		 
		 
            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } 
		
		else 
		{
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
	
		
		
		
		
      }
	  
	      function Display(url, callback) 
	  {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() 
		{
          if (request.readyState == 4) 
		  {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}  
	  
	  
	  
	  
    </script>

    
	

	<meta charset="utf-8">
    <title>Street View side-by-side</title>
    <style>
 html, body {
	  
        height: 100%;
        margin: 0;
        padding: 0;
      }
	  
	  
      #map{
        float: left;
        height: 100%;
        width: 50%;
	    border: 3px solid green;
        padding: 30px;
      }
	  #pano {
		border: 3px solid red;
        float: left;
        height: 109%;
        width: 42%;
      }
	   #header
	  {  background:#abc789;
		clear: both;
        text-align:center;
        padding:20px;
        border: 1px solid pink;
	    margin-bottom:10px;
		float: none;
        
	  }  
	  
	   #elementWorking
	  {
		  background:#abc456;
        clear: both;
        text-align:center;
        padding:20px;
        border: 1px solid pink;
	    margin-bottom:10px;
		float: none;
	  }
	  #distance
	  {
		    background:#abcdef;
		margin:50px;
		padding: 30px;
		border: 3px solid yellow;
		float: right;

	  }
	 
	  #footer
	  {
	   background:#adc456;
      clear: both;
      text-align:center;
      padding: 1px;
      border: 3px solid gray;
	  margin-bottom:5px;
	  }
    </style>
  </head>
  <body onload="JavaScript:AutoRefresh(100000);">
  <div id="header"><h1>Application Name</h1></div>
  
  <div id="elementWorking">
  <table>
  

<tr>
<td>Step 1 :</td>
  <td><b>Mode Of Travel :</b></td>
  <td> 
     <select id="mode">
      <option value="DRIVING">Driving</option>
      <option value="WALKING">Walking</option>
      <option value="BICYCLING">Bicycling</option>
      <option value="TRANSIT">Transit</option>
    </select>
   </td> 
</tr>

<tr>
<td> </td>
</tr>
<tr>
<td> </td>
</tr>


  <tr>
<td>Step 2 :</td>
<td><b>Distance Range (km) :</b></td>
  <td> <input id="kmnum" type="number" min="0" max="1000" required>( kilometers )</td>
</tr>

<tr>
<td> </td>
</tr>
<tr>
<td> </td>
</tr>
  <tr>
<td>Step 3 :</td>

  <td><b>Search place :</b></td>
  <td>  <input id="numb" type="text" placeholder="Enter a location">   
  <button type="button" onclick="placeSearch() ">Search</button> 
  </td>
 <td>..  Or   ..</td>
   <td><b>My Location :</b></td>
  <td> <button type="button" onclick="initialize()">My Location</button> </td>

</tr>

 
  
  </table>
 

 

  
  </div>
    
	<div id="map"></div>
    <div id="pano"></div>
	  
   <div id="distance"><u><b>Distance And Duration :</b></u> <br> </div> 
  
  <div id="footer"><h1>Footer</h1></div>
  
  
	    <script>

     

	  
      function placeSearch() 
	  {
		  
		 var directionsService = new google.maps.DirectionsService();
         var directionsDisplay = new google.maps.DirectionsRenderer();
		  
		  ////////////
		    var longitude;
			var latitude;
       // 
		var getLocation =  function(address) {
  var geocoder = new google.maps.Geocoder();
  geocoder.geocode( { 'address': address}, function(results, status) {

  if (status == google.maps.GeocoderStatus.OK) {
      latitude = results[0].geometry.location.lat();
      longitude = results[0].geometry.location.lng();
	  alert(latitude);
	  alert(longitude);
     
	 ///////////
	 
	 	     var directionsService = new google.maps.DirectionsService();
         var directionsDisplay = new google.maps.DirectionsRenderer();
		
 
	  
	   infoWindow = new google.maps.InfoWindow;
	   
	    if (navigator.geolocation) 
		{
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: latitude,
			  
              lng: longitude
			  
            };
			
			 var fenway = {  lat: latitude,   lng: longitude};
         
		 var myOptions = {
           zoom:10,
           mapTypeId: google.maps.MapTypeId.HYBRID
       }
	  
    var map = new google.maps.Map(document.getElementById("map"), myOptions);
   directionsDisplay.setMap(map);
	  
        var panorama = new google.maps.StreetViewPanorama(
            document.getElementById('pano'), {
              position: fenway,
              pov: {
                heading: 34,
                pitch: 10
              }
            });
        map.setStreetView(panorama);
          
		 
		 		  /// a to b path how to find
		  
   
  
   /////
             var renderArray = [];
             var sum=0;
             Display('02 xmlFile.php', function(data) 
		  {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) 
			{
			
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                 
				 parseFloat(markerElem.getAttribute('lat')),                 
				 parseFloat(markerElem.getAttribute('lng'))
				  
				  );

             
            
              var marker = new google.maps.Marker(
			  {
                map: map,
                position: point,
                title: name
              });
			  
			  
			//////
			var st=new google.maps.LatLng(latitude, longitude);
			var en=point;
			
			var selectedMode = document.getElementById("mode").value;
			//alert(selectedMode);
			var request = {
				   origin: st, 
				   destination:en,
				   travelMode: google.maps.TravelMode[selectedMode]
				   
                         };
   
					directionsService.route(request, function(response, status) 
					{
						  if (status == google.maps.DirectionsStatus.OK) 
						 {
							// directionsDisplay.setDirections(response);
							 var sss = (response.routes[0].legs[0].distance.value)/1000;
							// alert("distance from db "+ sss);
							 
							 var ddd= document.getElementById('kmnum').value;
							// alert("km num : "+ddd);
							 
							 if(sss < ddd)
							 {
		document.getElementById('distance').innerHTML +="<br><u><b>Address :</b></u> <br> "+document.getElementById("numb").value+" to "+name+ " <br> ";
         document.getElementById('distance').innerHTML +=(response.routes[0].legs[0].distance.value)/1000 + "killo meters<br>"; 
         
		 // Display the duration:
         document.getElementById('distance').innerHTML +=response.routes[0].legs[0].duration.value + "  seconds<br>";
		 
		 
							 renderArray[sum] = new google.maps.DirectionsRenderer();
                             renderArray[sum].setMap(map);
                             renderArray[sum].setDirections(response);
                             
			infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
							 }
							

							 
							 sum++
							 
						  }
					   });
			/////////
             
            });
			

		//	 document.write("sum :"+sum);
			 
			 
			 

			 
          });
   //////

      
   
   

   
   
///
		 
		 
		 
            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } 
		
		else 
		{
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
	
		
		
		
	 
	 
	 
	 
	 //////////// 
	 
      } 
  }); 
}

//Call the function with address as parameter

getLocation(document.getElementById("numb").value);

 ////////// got address from lat and lng
        
 

        } 
		
		
		
		
		//////////
	function Display(url, callback) 
	  {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() 
		{
          if (request.readyState == 4) 
		  {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}  
	  
    </script>
  
  
  
  
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1AhYRaxSPwz7a2UkB5pZ8JpTWz7GkIbU&callback=initialize">
    </script>
  </body>
</html>