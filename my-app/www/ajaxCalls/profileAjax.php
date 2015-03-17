<?
session_start();

require 'dbinfo.php';

if(isset($_SESSION['login_tutor'])){

	$myid = $_SESSION['login_tutor'];

	$result = $db->query("SELECT * FROM markersdata WHERE `id` = '$myid'");
   
    $rezultatet = array();
       foreach ($result as $results) {

		$datas['firstname'] = $results['firstname'];
		$datas['lastname'] =  $results['lastname'];
		$datas['usrtel'] = $results['usrtel'];
		$datas['email'] = $results['email'];
		$datas['img'] = $results['img'];
		$datas['video_link'] = $results['video_link'];
		$datas['profile'] = $results['profile'];
		$datas['availability'] = $results['availability'];
		$datas['qualification'] = $results['qualification'];
		
	
         array_push($rezultatet, $datas);
     }
     echo json_encode($rezultatet);


  }else{

  	echo "<meta http-equiv='refresh' content='0;url=index.html'>";
  }



?>