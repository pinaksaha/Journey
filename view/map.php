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
		var map = L.map('map1').setView([9.29464743756, 1.7599265], 13);
		
</script>

<?php

	//var marker = L.marker([51.5, -0.09]).addTo(map);
	//marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
	
	//lat,long
	//$contents[photos][$i]
	$contents = file_get_contents("../lib/pics.json");
	$contents = json_decode($contents,true);
	
?>


<script>
	var myLines = [{
	    "type": "LineString",
	    "coordinates": [[-100, 40], [-105, 45], [-110, 55]]
	}, {
	    "type": "LineString",
	    "coordinates": [[-105, 40], [-110, 45], [-115, 55]]
	}];
	
	var myStyle = {
	    "color": "#ff7800",
	    "weight": 5,
	    "opacity": 0.65
	};
	
	L.geoJson(myLines, {
	    style: myStyle
	}).addTo(map);

</script>


<script>	
		L.tileLayer('http://{s}.tile.cloudmade.com/5fde36ebb8b04c93a1cf3fa767eb1d06/997/256/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
    maxZoom: 18
}).addTo(map);
	
</script>