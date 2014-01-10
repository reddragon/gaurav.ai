<?php
	 
	/*** REMEMBER to use your own API key ***/
	 
	$apikey = "ABQIAAAAtp8oB6kQvl33gajnLAaGexRn3zXE_Z8vYuL4XExB9rDY4AI7ShQh9KXITrFMbwkfG-irppCWN7ZtgQ";
 
	$geourl = "http://maps.google.com/maps/geo?q=520+3rd+Street+San+Francisco+CA&output=xml&key=$apikey";
	 
	// Create cUrl object to grab XML content using $geourl
	 
	$c = curl_init();
	 
	curl_setopt($c, CURLOPT_URL, $geourl);
	 
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	 
	$xmlContent = trim(curl_exec($c));
	 
	curl_close($c);
	 
	// Create SimpleXML object from XML Content
	 
	$xmlObject = simplexml_load_string($xmlContent);
 
	// Print out all of the XML Object
	 
	print header("Content-type: text/plain");
	 
	print_r($xmlObject);	 
?>
