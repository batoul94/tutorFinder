<?php
     //192.168.0.2:3000  
    //this file should be inside mamp htdocs
	require 'dbinfo.php';
	$result = $db->query("SELECT * FROM markersdata WHERE `validated` = 'yes'");

	$rezultatet = array();

 
	foreach ($result as $results) {

        $datas['id'] = $results['id'];
		$datas['lng'] = $results['lng'];
		$datas['lat'] = $results['lat'];
		$datas['firstname'] = $results['firstname'];
		$datas['lastname'] = $results['lastname'];

		//$datas['subjects'] = array($results['subjects']);
		//$datas['subjects'] = explode(",",$results['subjects']);
		 $datas['subjects'] = array_map('trim',explode(",",$results['subjects']));
		
		$datas['stars'] = $results['stars'];
		//$datas['level'] = array($results['level']);
		 $datas['level'] = array_map('trim',explode(",",$results['level']));
		 
		$datas['price'] = $results['price'];

     

		  array_push($rezultatet, $datas);

    }


	echo json_encode($rezultatet);


	?>