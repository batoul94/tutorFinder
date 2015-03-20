<?
session_start();

require 'dbinfo.php';

if(isset($_SESSION['login_tutor'])){

	$myid = $_SESSION['login_tutor'];

	$result = $db->query("SELECT * FROM markersdata WHERE `id` = '$myid'");
   
    $rezultatet = array();
       foreach ($result as $results) {

		$datas['address'] = $results['address'];
		$datas['postcode'] =  $results['postcode'];
		$datas['city'] = $results['city'];
		$datas['usrtel'] = $results['usrtel'];

		
		$datas['qualification'] = $results['qualification'];
		$datas['profile'] = $results['profile'];
		$datas['subjects'] = array($results['subjects']);
		$datas['level'] = array($results['level']);
		$datas['price'] = array($results['price']);
		$datas['availability'] = $results['availability'];
		$datas['video_link'] = $results['video_link'];
		$datas['lat'] = $results['lat'];
		$datas['lng'] = $results['lng'];

         array_push($rezultatet, $datas);
     }
     echo json_encode($rezultatet);


  }





  ?>