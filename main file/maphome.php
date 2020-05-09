<!DOCTYPE html >
  <head>
      <link rel="icon" type="image/gif/png" href="aaaa.jpg">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
   
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Bangladesh Statistics</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
		margin:10px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
	  
	  
	   #categoryy
	  {	   
       	  background:#d6fab9;
		  margin:10px;
		  text-align:center;
		  padding:5px;
	  }
	  
	  
	  #footer
	  {
	background:#d6fab9;
	width:100%;	
	font-size:16px;
	text-align:center;
	   margin:10px;
	  }
	  
    </style>
	
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  </head>

<html>
  <body>
   
	  <button class="btn btn-success" style="margin-left:50%; margin-top:10px;" onclick="window.location.href = 'index.php';">  Home Page  </button>

	
	
<div id="categoryy">


 <big><strong> Corona Virus Statistics in Bangladesh.<strong> </big>
						  <table align="center" border="1"> 
						  <tr>
						  <td> Affected Area  ( <span id="affect"> </span>  ) :  <img src="https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/zzz.png?alt=media&token=45b0ad88-936b-4675-9a5b-a03f78d23d9e"  </td>
						  <td> Quarantine Area  ( <span id="quarantine"> </span>  ) : <img src="https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/aaaa.png?alt=media&token=8e60f91c-84bd-41a6-a6d5-e84e25d4fde5"  </td>
						  <td> Green Zone  ( <span id="green"> </span>  ) : <img src="https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/green.png?alt=media&token=b67e1cee-2f06-4b09-a505-6da2fa95d280"  </td> 
						  
						  </tr>
						  
						  <tr>
						  <td>Suspect Zone ( <span id="suspect"> </span>  ) : <img src="https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/suspect.png?alt=media&token=3dffda9d-ed47-4e01-9d18-b50ce6721977"  </td>
						  <td> Dense Area  ( <span id="dense"> </span>  ) :  <img src="https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/bbbb.png?alt=media&token=03e323ea-b0ac-4670-846c-93d3704c474a" </td>
						  <td> Lock Down Area  ( <span id="lockdown"> </span>  ) :  <img src="https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/lock.png?alt=media&token=4228a81d-3b7a-4090-80f9-27c495618ac0" </td>

						  
						  </tr>
						  
						  </table> 
</div>


 <div id="map"></div>

<br>
<br>


<div id="footer">
<b>Contact info : </b><br>
E-mail : ashifcse02bu@gmail.com<br>
Contact : 01521466521<br>
</div>



    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        
		var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(23.8103, 90.4125),
          zoom: 7
        });
		
		
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('mapxml.php', function(data) 
		  {
		  
		     var affect = 0;
			 var green=0;
			 var suspect=0;
			 var dense=0;
			 var quarantine=0;
			 var lockdown=0;
		  
		  
		  
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
          
		  /*
		   var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng'))
				  );
			*/	 
			
				  
             var category = markerElem.getAttribute('category');
			 
			 if(category=="Affected Area")
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
							
							// icon: image
						  });
			 
			 }
			 
			 else if(category=="Quarantine Area")
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
							 icon: image
						  });
			 
			 }
			 
			 else if(category=="Green Zone")
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
							icon: image
						  });
			 }
			 
			 else if(category=="Suspect Zone")
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
							
							 icon: image
						  });
			 
			 }
			 
			 else if(category=="Dense Area")
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
							
							 icon: image
						  });
			 
			 }
			 
			  else if((category.localeCompare("Lockdown Area")) == 0)
			 {
			 
	
			        
		           lockdown = lockdown+1;
				  
				  	document.getElementById("lockdown").innerHTML = lockdown;
				  
				  var point = new google.maps.LatLng(                 
							 parseFloat(markerElem.getAttribute('lat')),                 
							 parseFloat(markerElem.getAttribute('lng'))				  
							  );

						var image = 'https://firebasestorage.googleapis.com/v0/b/connectfirebase-df0a4.appspot.com/o/lock.png?alt=media&token=4228a81d-3b7a-4090-80f9-27c495618ac0';            
						  var marker = new google.maps.Marker(
						  {
							map: map,
							position: point,
							
							 icon: image
						  });
			 
			 }
			 
			
			
 
              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent ="Info : "+ name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = "Address : "+address
              infowincontent.appendChild(text);
			  infowincontent.appendChild(document.createElement('br'));
			  
			  var text1 = document.createElement('text1');
              text1.textContent ="District : "+ type
              infowincontent.appendChild(text1);
			  infowincontent.appendChild(document.createElement('br'));
			  
			  var text2 = document.createElement('text2');
              text2.textContent ="Category : " +category
              infowincontent.appendChild(text2);
			  infowincontent.appendChild(document.createElement('br'));
			  
			  
			  
			  
			  /*
              var icon = customLabel[type] || {};
			  
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
			  */
			  
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1AhYRaxSPwz7a2UkB5pZ8JpTWz7GkIbU&callback=initMap">
    </script>
  </body>
</html>