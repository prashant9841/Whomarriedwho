<?php

$mart = array(
	'fooding' => array(
		'imported' =>array('China','Japan','Indonesia'),
		'GMO' =>array('Yes','No'),
		'baked' =>array('270', '360' , '530'),
		),
	'clothing' => array(
		'brand' => array('Levis','Lee','Reebok','Nike'),
		'sizes' => array('XL','L','M','S','XS'),
		'colors' => array('Red','Blue','Green','Yellow'),

		),
	'luxury' => array(
		'type' => array('vehicle','fooding'),
		'imported_from' => array('Asia','Africa','Europe')
		)

	);

echo "Types:";


/*

foreach ($mart as $marts) {

	echo "<pre>";
print_r($marts);
	echo "</pre>";
	$mart_new[$key] = $value;
	$old = $key;
	foreach ($mart_new as $key => $value) {
		//$new = $mart_new[$key];
		//$new = $value;
		$new = $key;
	}

	
}

*/


/*

$new = array(
		'hello'=>'Test'
	);
array_push($mart, $new);
echo "<pre>";
var_dump($mart['luxury`
	']);
echo "</pre>";

*/

