<?php
	header('Content-Type: application/json');
	// This could easily be a static file or your favourite programming language.
	// All that is needed is a key value pair of {UNIX-TIMESTAMP:'holiday name',...}


	// set it to a variable so no ajax needed, makes caching in the manifest possible
	$points = array();
	
	// corner
	$e = array();
	$e['name']        = 'City Hall';
	$e['lat']         = 64.146126;
	$e['lon']         = -21.942229;
	$points[md5($e['name'])] = $e;

	// corner
	$e = array();
	$e['name']        = 'Hot Dogs';
	$e['lat']         = 64.148297;
	$e['lon']         = -21.937981;
	$points[md5($e['name'])] = $e;

	// corner
	$e = array();
	$e['name']        = 'Austurvellir';
	$e['lat']         = 64.147207;
	$e['lon']         = -21.939772;
	$points[md5($e['name'])] = $e;


	$data = array();
	$data['points'] = $points;

	echo 'var data = '.json_encode($data);
?>