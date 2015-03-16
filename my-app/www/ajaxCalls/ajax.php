<?php
     //192.168.0.2:3000  
    //this file should be inside mamp htdocs
	require 'dbinfo.php';
	$result = $db->query("SELECT * FROM markerdata");

	$rezultatet = array();

 
	foreach ($result as $results) {
             
		$datas['lng'] = $results['lng'];
		$datas['lat'] = $results['lat'];
		$datas['name'] = $results['name'];
		$datas['subject'] = array($results['subject']);
		$datas['stars'] = $results['stars'];
		$datas['level'] = $results['level'];
		$datas['price'] = $results['price'];

		  array_push($rezultatet, $datas);

    }


	echo json_encode($rezultatet);