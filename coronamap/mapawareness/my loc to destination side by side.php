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
           mapTypeId: google.maps.MapTypeId.terrain
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
			  
			  var affect = 0;
			 var green=0;
			 var suspect=0;
			 var dense=0;
			 var quarantine=0;
			  
			  
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) 
			{
			
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
			  
			 var category = markerElem.getAttribute('category');
			 
			//  alert(category);
			  
			  
			  if(category == "Affected Area")
			  {
				  affect = affect+1;
				  
				
		    document.getElementById("affect").innerHTML = affect;	
				  
							 var point = new google.maps.LatLng(                 
							 parseFloat(markerElem.getAttribute('lat')),                 
							 parseFloat(markerElem.getAttribute('lng'))				  
							  );

					//	var image = 'https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/affected.png?alt=media&token=8b77b17a-689b-4487-89e8-43a0ae8f7e17';            
						  var marker = new google.maps.Marker(
						  {
							map: map,
							position: point,
							title: category
							// icon: image
						  });
			  }
			  
			  if(category == "Quarantine Area")
			  {
				  
				  quarantine=quarantine+1;
				  
				  document.getElementById("quarantine").innerHTML = quarantine;
				
				  
				  
						 var point = new google.maps.LatLng(                 
							 parseFloat(markerElem.getAttribute('lat')),                 
							 parseFloat(markerElem.getAttribute('lng'))				  
							  );

						 var image = 'https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/aaaa.png?alt=media&token=8e60f91c-84bd-41a6-a6d5-e84e25d4fde5';            
						  var marker = new google.maps.Marker(
						  {
							map: map,
							position: point,
							title: category,
							 icon: image
						  });
				  
				  
			  }
			  
			  if(category == "Green Zone")
			  {
				  
				  green=green+1;
				  
				  document.getElementById("green").innerHTML = green;
				  
				 
				  
				      var point = new google.maps.LatLng(                 
							 parseFloat(markerElem.getAttribute('lat')),                 
							 parseFloat(markerElem.getAttribute('lng'))				  
							  );

						var image = 'https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/green.png?alt=media&token=b67e1cee-2f06-4b09-a505-6da2fa95d280';       
						  var marker = new google.maps.Marker(
						  {
							map: map,
							position: point,
							title: category,
							 icon: image
						  });
				  
			  }
			  
			  if(category == "Suspect Zone")
			  {
				  
				
				  
				  
				  suspect=suspect+1;
				    document.getElementById("suspect").innerHTML = suspect;
				  
				   var point = new google.maps.LatLng(                 
							 parseFloat(markerElem.getAttribute('lat')),                 
							 parseFloat(markerElem.getAttribute('lng'))				  
							  );

						var image = 'https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/suspect.png?alt=media&token=3dffda9d-ed47-4e01-9d18-b50ce6721977';         
						  var marker = new google.maps.Marker(
						  {
							map: map,
							position: point,
							title: category,
							 icon: image
						  });
				  
				  
			  }
			  
			  if(category == "Dense Area")
			  {
				  
				  dense = dense+1;
				  
				  	document.getElementById("dense").innerHTML = dense;
				  
				  var point = new google.maps.LatLng(                 
							 parseFloat(markerElem.getAttribute('lat')),                 
							 parseFloat(markerElem.getAttribute('lng'))				  
							  );

						var image = 'https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/bbbb.png?alt=media&token=03e323ea-b0ac-4670-846c-93d3704c474a';            
						  var marker = new google.maps.Marker(
						  {
							map: map,
							position: point,
							title: category,
							 icon: image
						  });
				  
				  
				  
			  }
			  
         
			  
			  
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
		document.getElementById('distance').innerHTML +="<br><u><b>Address :</b></u> <br>Your location "+document.getElementById("numb").value+" to "+name+ " <br> ";
         document.getElementById('distance').innerHTML +=(response.routes[0].legs[0].distance.value)/1000 + "killo meters<br>"; 
         
		 // Display the duration:
         document.getElementById('distance').innerHTML +=response.routes[0].legs[0].duration.value/60 + "  minutes<br>";
		 
		 
							 renderArray[sum] = new google.maps.DirectionsRenderer();
                             renderArray[sum].setMap(map);

                       /// below code for multiple path ..                     
					 ///   renderArray[sum].setDirections(response);
                             
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
    <title>Corona Affect result mapping</title>
    <style>
 html, body {
	  
        height: 100%;
        margin: 0;
        padding: 0;
      }
	  
	  
      #map{
   
        height: 80%;
        width: 90%;
	    border: 3px solid green;
        padding: 30px;
		margin:10px;
      }
	  #pano {
		border: 3px solid red;
      margin:10px;
      width: 400px;
  height: 400px;
		float:left;
      }
	   #header
	  {  
	    background:#abc789;
		clear: both;
        text-align:center;
        padding:5px;
        border: 1px solid pink;
	    margin-bottom:5px;
		float: none;
        
	  }  
	  
	   #elementWorking
	  {
		background:#abc456;
        clear: both;
        text-align:center;
        padding:5px;
        border: 1px solid pink;
	    margin-bottom:5px;
		float: left;
		width:50%;
	  }
	  
	  #category
	  {
	    background:#abc456;
        clear: both;
        text-align:center;
        padding:5px;
        border: 2px solid red;
	    margin:5px;
		float: none;
		width:40%;
		  
	  }
	  
	  #distance
	  {
		  width: 250px;
  height: 400px;
  overflow: auto;
		background:#abcdef;
		
		margin:10px;
		border: 3px solid yellow;
		float: left;

	  }
	 
	  
    </style>
  </head>
  <body onload="JavaScript:AutoRefresh(100000);">
  <div id="header"> Corona Virus data mapping  </div>
  
  <div id="elementWorking">
  <table>
  

<tr>
<td>Step 1 :</td>
  <td><b>Mode Of Travel : </b></td>
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
<td>Step 2 :</td>
<td><b>Distance Range (km) :</b></td>
  <td> <input id="kmnum" type="number" min="0" max="1000"  required>( kilometers )</td>
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
  
  <div class="category">
  <table align="center" border="1"> 
  <tr>
  <td> Affected Area  ( <span id="affect"> </span>  ) :  <img src="https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/zzz.png?alt=media&token=45b0ad88-936b-4675-9a5b-a03f78d23d9e"  </td>
  <td> Quarantine Area  ( <span id="quarantine"> </span>  ) : <img src="https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/aaaa.png?alt=media&token=8e60f91c-84bd-41a6-a6d5-e84e25d4fde5"  </td>
  <td rowspan="2"> Green Zone  ( <span id="green"> </span>  ) : <img src="https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/green.png?alt=media&token=b67e1cee-2f06-4b09-a505-6da2fa95d280"  </td> 
  
  </tr>
  
  <tr>
  <td>Suspect Zone ( <span id="suspect"> </span>  ) : <img src="https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/suspect.png?alt=media&token=3dffda9d-ed47-4e01-9d18-b50ce6721977"  </td>
  <td> Dense Area  ( <span id="dense"> </span>  ) :  <img src="https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/bbbb.png?alt=media&token=03e323ea-b0ac-4670-846c-93d3704c474a" </td>
 
  
  </tr>
  
  </table> 
  </div>
  
    
	<div id="map"></div>
    <div id="pano"></div>
	  
   <div id="distance"  class="diss"><u><b>Distance And Duration :</b></u> <br> </div> 
  
  
  
  
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
	//  alert(latitude);
	//  alert(longitude);
     
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
           mapTypeId: google.maps.MapTypeId.terrain
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
			  
			 var affect = 0;
			 var green=0;
			 var suspect=0;
			 var dense=0;
			 var quarantine=0;
			  
			  
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) 
			{
			
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
			  
			   var category = markerElem.getAttribute('category');
			 
			  
						  if(category == "Affected Area")
			  {
				  affect = affect+1;
				  
				
		    document.getElementById("affect").innerHTML = affect;	
				  
							 var point = new google.maps.LatLng(                 
							 parseFloat(markerElem.getAttribute('lat')),                 
							 parseFloat(markerElem.getAttribute('lng'))				  
							  );

					//	var image = 'https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/affected.png?alt=media&token=8b77b17a-689b-4487-89e8-43a0ae8f7e17';            
						  var marker = new google.maps.Marker(
						  {
							map: map,
							position: point,
							title: category
							// icon: image
						  });
			  }
			  
			  if(category == "Quarantine Area")
			  {
				  
				  quarantine=quarantine+1;
				  
				  document.getElementById("quarantine").innerHTML = quarantine;
				
				  
				  
						 var point = new google.maps.LatLng(                 
							 parseFloat(markerElem.getAttribute('lat')),                 
							 parseFloat(markerElem.getAttribute('lng'))				  
							  );

						 var image = 'https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/aaaa.png?alt=media&token=8e60f91c-84bd-41a6-a6d5-e84e25d4fde5';            
						  var marker = new google.maps.Marker(
						  {
							map: map,
							position: point,
							title: category,
							 icon: image
						  });
				  
				  
			  }
			  
			  if(category == "Green Zone")
			  {
				  
				  green=green+1;
				  
				  document.getElementById("green").innerHTML = green;
				  
				 
				  
				      var point = new google.maps.LatLng(                 
							 parseFloat(markerElem.getAttribute('lat')),                 
							 parseFloat(markerElem.getAttribute('lng'))				  
							  );

						var image = 'https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/green.png?alt=media&token=b67e1cee-2f06-4b09-a505-6da2fa95d280';       
						  var marker = new google.maps.Marker(
						  {
							map: map,
							position: point,
							title: category,
							 icon: image
						  });
				  
			  }
			  
			  if(category == "Suspect Zone")
			  {
				  
				
				  
				  
				  suspect=suspect+1;
				    document.getElementById("suspect").innerHTML = suspect;
				  
				   var point = new google.maps.LatLng(                 
							 parseFloat(markerElem.getAttribute('lat')),                 
							 parseFloat(markerElem.getAttribute('lng'))				  
							  );

						var image = 'https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/suspect.png?alt=media&token=3dffda9d-ed47-4e01-9d18-b50ce6721977';         
						  var marker = new google.maps.Marker(
						  {
							map: map,
							position: point,
							title: category,
							 icon: image
						  });
				  
				  
			  }
			  
			  if(category == "Dense Area")
			  {
				  
				  dense = dense+1;
				  
				  	document.getElementById("dense").innerHTML = dense;
				  
				  var point = new google.maps.LatLng(                 
							 parseFloat(markerElem.getAttribute('lat')),                 
							 parseFloat(markerElem.getAttribute('lng'))				  
							  );

						var image = 'https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/bbbb.png?alt=media&token=03e323ea-b0ac-4670-846c-93d3704c474a';            
						  var marker = new google.maps.Marker(
						  {
							map: map,
							position: point,
							title: category,
							 icon: image
						  });
				  
				  
				  
			  }
			  
			  
			  /*
			  
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
			  */
			  
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
         document.getElementById('distance').innerHTML +=response.routes[0].legs[0].duration.value/60 + "  minutes<br>";
		 
		 
							 renderArray[sum] = new google.maps.DirectionsRenderer();
                             renderArray[sum].setMap(map);
                        //     renderArray[sum].setDirections(response);
                             
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
			 
			 
			 

			 
          }
		  
		
		  
		  
		  );
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