<?php
    //this file should be inside mamp htdocs
	$db = mysqli_connect("localhost","root","root","tutorfinder")or die("EEError " . mysqli_error($db));
	/*$result = $db->query("SELECT * FROM parentReg");

	$rezultatet = array();

 
	foreach ($result as $results) {
             
		$datas['firstname'] = $results['firstname'];
		$datas['lastname'] = $results['lastname'];
		$datas['email'] = $results['email'];
		$datas['password'] = $results['password'];

		  array_push($rezultatet, $datas);

    }*/


   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $password = $_POST['password'];

$result =  $db->query("INSERT INTO parentReg (firstname, lastname, email, password) VALUES ( '$firstname', '$lastname','$email','$password')");
  



	//echo json_encode($rezultatet);

?>