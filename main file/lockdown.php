<!DOCTYPE html >
  <head>
      
      <link rel="icon" type="image/gif/png" href="aaaa.jpg">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

 <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>লক ডাউন অঞ্চলসমূহ   </title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #mapb {
        height: 40%;
	    margin:20px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

<html>
  <body>
  
  
  <div class="container"> 
  
  <button class="btn btn-success" style="margin-left:10%; margin-top:10px;" onclick="window.location.href = 'index.php';">  Home Page  </button>  

  <hr>
  <p class="bg-info text-white">লক ডাউন অঞ্চলসমূহ  দেখুন  </p>
  <p class="text-danger text-left" >    শুধু ম্যাপে  সুন্দর ডেটা পেতে  ব্রাউজারের হিস্ট্রি তে গিয়ে ক্যাশ ক্লিয়ার করুণ   </p>
  
  </div>
  
  
    <div id="mapb"></div>

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
        var map = new google.maps.Map(document.getElementById('mapb'), {
          center: new google.maps.LatLng(23.6850, 90.3563),
          zoom: 7
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('mapb.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

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

            
              
			  
			  var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
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
	
	
	
	<div class="container">
<table class="table text-center bg-light table-hover">



<tr>
	
			<?php
			include("db.php");
			
				$sql = "SELECT * FROM markers where category='Lockdown area' order by id DESC";
                $result = mysqli_query($connection, $sql);
			
			
				echo "<tr>";	
				
				echo"<td><font color='black'> তথ্য    </font></td>";
				echo"<td><font color='black'> ঠিকানা   </font></td>";
				echo"<td><font color='black'>জেলা </font></td>";	
			
				
							
				echo "</tr>";
			
			
			while($test =  mysqli_fetch_assoc($result))
			{
				$pinno = $test['id'];	
				echo "<tr align='center'  >";	
				
				echo"<td><font color='black'>" .$test['name']."</font></td>";		
            	echo"<td><font color='black'>" .$test['address']."</font></td>";					
				echo"<td><font color='black'>". $test['type']. "</font></td>";		
              	

							
				echo "</tr>";
			}
			mysqli_close($connection);
			?>
</table>
</div>
	
	
	
  </body>
</html>