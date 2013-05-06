<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Journey</title>
													<!-- Normalize -->
	<link rel="stylesheet" href="../bootstrap/css/normalize.css" type="text/css" media="screen" charset="utf-8">
														<!-- Bootstrap -->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css" media="screen" charset="utf-8">
														<!-- Mansory -->
	
	<link rel="stylesheet" type="text/css" href="../fonts/font_awsome/css/font-awesome.min.css" type="text/css" media="screen" charset="utf-8">
	

	
	 <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5/leaflet.css" />
	 
	 <link rel="stylesheet" href="../bootstrap/css/style.css"/>
													<!-- JQUERY -->
	<script  text="text/javascript" src="../mansory/js/jquery-1.7.1.min.js"></script>
													
													<!-- Boot Strap -->
	<script  text="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

	
	
	<style>
		#map1 
		{ 
		
				 
					height: 500px !important; 
					padding: 200px !important; 
					margin-top: 65px !important;
					
		}
		.leaflet-popup-content img
		{
			max-width: 50px;
			max-height: 50px;
		}
		
	</style>
	<style type="text/css"></style>
</head>
<body>
		
	<?php 
		
		include("../component/map_top_nav.php");
	?>
	
<div class="row-fluid"> 
	<div class="span12">
		
			
			<div id="map1" class="map leaflet-container leaflet-fade-anim">		
				
			</div>
	</div>
</div>			
	<?php	
		include("../component/nav_bar_bottom.php");
	?>
</body>
</html>
<script src="http://cdn.leafletjs.com/leaflet-0.5/leaflet.js"></script>
<script>
		var map = L.map('map1').setView([9.29464743756, 1.7599265], 2);
		var marker0=L.marker([-46.647138,-72.607527]).addTo(map);
		marker0.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/9363990.jpg ">').openPopup();
		var marker1=L.marker([14.500819,-61.01705]).addTo(map);
		marker1.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/1282387.jpg ">').openPopup();
		var marker2=L.marker([46.638704,30.78603]).addTo(map);
		marker2.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/97671.jpg ">').openPopup();
		var marker3=L.marker([-35.299996,148.682098]).addTo(map);
		marker3.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/10574161.jpg ">').openPopup();
		var marker4=L.marker([-14.310613,-178.137093]).addTo(map);
		marker4.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/46817885.jpg ">').openPopup();
		var marker5=L.marker([23.327834,120.527186]).addTo(map);
		marker5.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/46752123.jpg ">').openPopup();
		var marker6=L.marker([59.6374716484,11.2726593018]).addTo(map);
		marker6.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/532693.jpg ">').openPopup();
		var marker7=L.marker([30.792723,57.773237]).addTo(map);
		marker7.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/55228074.jpg ">').openPopup();
		var marker8=L.marker([37.9909035,-84.4323188]).addTo(map);
		marker8.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/54671525.jpg ">').openPopup();
		var marker9=L.marker([-16.5,-151.75]).addTo(map);
		marker9.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/9439.jpg ">').openPopup();
		var marker10=L.marker([43.763086,11.265278]).addTo(map);
		marker10.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/42791946.jpg ">').openPopup();
		var marker11=L.marker([-3.818353,36.046829]).addTo(map);
		marker11.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/775893.jpg ">').openPopup();
		var marker12=L.marker([6.300796,99.719124]).addTo(map);
		marker12.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/48548894.jpg ">').openPopup();
		var marker13=L.marker([30.758691,32.33182]).addTo(map);
		marker13.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/45535494.jpg ">').openPopup();
		var marker14=L.marker([56.081999,160.587502]).addTo(map);
		marker14.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/1516726.jpg ">').openPopup();
		var marker15=L.marker([44.5198876157,-124.077529907]).addTo(map);
		marker15.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/665502.jpg ">').openPopup();
		var marker16=L.marker([43.582007,-8.216851]).addTo(map);
		marker16.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/46391650.jpg ">').openPopup();
		var marker17=L.marker([43.418889,142.426586]).addTo(map);
		marker17.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/2584132.jpg ">').openPopup();
		var marker18=L.marker([27.173272,78.042122]).addTo(map);
		marker18.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/33974683.jpg ">').openPopup();
		var marker19=L.marker([-62.485684,-59.683228]).addTo(map);
		marker19.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/120844.jpg ">').openPopup();
		var marker20=L.marker([6.462597,79.968635]).addTo(map);
		marker20.bindPopup('<img src="http://mw2.google.com/mw-panoramio/photos/medium/47949823.jpg ">').openPopup();
		var marker21=L.marker([51.644708,57.886791]).addTo(map);

		
	L.tileLayer('http://{s}.tile.cloudmade.com/5fde36ebb8b04c93a1cf3fa767eb1d06/997/256/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
    maxZoom: 18
}).addTo(map);
	

</script>


