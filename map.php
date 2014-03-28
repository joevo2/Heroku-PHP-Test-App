 <!DOCTYPE html>
 <html>
	 <head>
		 <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
		 <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
		 <style type="text/css">
		 	#map { 
		 		height: 500px;
		 		width: 600px; 
		 	}
		 </style>
	 </head>
	 <body>
	 	 <div id="map"></div>
	 	 <script type="text/javascript">
	 	 http://www.openstreetmap.org/#map=17/3.12738/101.71402&layers=N
	 	 	var map = L.map('map').setView([3.12738, 101.71402], 16);
	 	 	L.tileLayer('http://{s}.tile.cloudmade.com/d49486fa30c748bfbab4b35302706fbc/997/256/{z}/{x}/{y}.png', {
    		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery <a href="http://cloudmade.com">CloudMade</a>',
    		maxZoom: 18
			}).addTo(map);
			var marker = L.marker([51.5, -0.09]).addTo(map);
	 	 </script>
	 </body>
 </html>