<!DOCTYPE html >
 <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html" charset=UTF-8"/>
    <title>Eyübiye Kampüsü</title>
  
    <link rel="stylesheet" href="css/osmanbey.css" >
	 <style>
	.container  {
            height: 100px;

        }
    
       #map {
	   top:25px;
       height: 100%;
       float: left;
       width: 80%;
       height: 500%;
       }
     
      html, body {
        height:30%;
        margin: 0;
        padding: 0;
      }
	  #right-panel {
      font-family: 'Roboto','sans-serif';
      line-height: 30px;
      padding-left: 10px;
      }

      #right-panel select, #right-panel input {
      font-size: 15px;
      }

      #right-panel select {
      width: 100%;
      }

      #right-panel i {
      font-size: 12px;
      }
      html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      }
     
      #right-panel {
        margin: 20px;
        border-width: 2px;
        width: 20%;
        height: 400px;
        float: left;
        text-align: left;
        padding-top: 0;
       }
    </style>

</head>

<body onload="haritaGoster()" onunload="GUnload()">
<div id="right-panel">
<div>

<b>Bulunduğun Konum</b>
   
<select id="start">
 <?php
        $link=mysqli_connect("localhost","root","","hrumap");
        $link->set_charset("utf8");
        $cek=mysqli_query($link,"select * from hrumaps where aktiflik=1 and yerleske_id=1 order by h_id asc ");
        while ($yaz=mysqli_fetch_assoc($cek)){
        ?>
  <option value="Harran Üniversitesi,<?php echo $yaz["ad"] ?>"><?php echo $yaz["ad"] ?></option>
  
  <?php } ?>
</select>

 
<br>
<b>Gidilecek Nokta</b>
<select id="end">
   <?php
        $link=mysqli_connect("localhost","root","","hrumap");
        $link->set_charset("utf8");
        $cek=mysqli_query($link,"select * from hrumaps where aktiflik=1 order by h_id asc ");
        while ($yaz=mysqli_fetch_assoc($cek)){
        ?>
  <option value="Harran Üniversitesi,<?php echo $yaz["ad"] ?>"><?php echo $yaz["ad"] ?></option>
  <?php } ?>
</select>
<br>
  <input type="submit" id="submit" value="Yol Tarifi">
</div>

</div>
<div class="stil" align="cover" >
<div class="container">
 <center><h1>Eyyübiye Kampüsüne Hoşgeldiniz</h1></center>
    <script>
	   var customLabel = {
	    1: {
          label: 'F'
        },
		2: {
          label: 'E'
        },
		3: {
          label: 'Y'
        },
		4: {
          label: 'M.Y'
        },
		5: {
          label: 'S'
        },
        6: {
          label: 'K'
        },
        7: {
          label: 'k'
        }, };
        function initMap() {
			var directionsService = new google.maps.DirectionsService;
         var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(37.120383, 38.819736),
          zoom: 14.5
        });
		directionsDisplay.setMap(map);

         document.getElementById('submit').addEventListener('click', function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
		
        var infoWindow = new google.maps.InfoWindow;
           // enlem boylam bilgilerini tutan php sayfası.
          downloadUrl('phpsqlajax_genxml.php', function(data) {
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
			  var tel = markerElem.getAttribute('tel');
			  var url = markerElem.getAttribute('url');  

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
			  infowincontent.appendChild(document.createElement('br'));
			  var text = document.createElement('text1');
              text.textContent = tel
              infowincontent.appendChild(text);
			  infowincontent.appendChild(document.createElement('br'));
			  var text = document.createElement('a');
			  text.href=url;
              text.textContent = url;
              infowincontent.appendChild(text);
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
	   function calculateAndDisplayRoute(directionsService, directionsRenderer) {
        directionsService.route(
            {
              origin: {query: document.getElementById('start').value},
              destination: {query: document.getElementById('end').value},
              travelMode: 'DRIVING'
            },
            function(response, status) {
              if (status === 'OK') {
                directionsRenderer.setDirections(response);
              } else {
                window.alert('Directions request failed due to ' + status);
              }
            });
      }
    </script>
	 <div id="map"></div>
	</div>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA8AsFtQgGQamLZoiq8oEz-7iZQYrfn08&callback=initMap">
    </script>
</div>
</body>
</html>

