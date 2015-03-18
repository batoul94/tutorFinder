<?
session_start();

require 'dbinfo.php';

if(isset($_SESSION['login_tutor'])){

	$myid = $_SESSION['login_tutor'];

	$result = $db->query("SELECT * FROM tutor_reviews WHERE `tutor_id` = '$myid'");
   
    $rezultatet = array();
       foreach ($result as $results) {

		$datas['id'] = $results['id'];
		$datas['review_body'] =  $results['review_body'];
		
         array_push($rezultatet, $datas);
     }
     echo json_encode($rezultatet);


  }else{

  	echo "<meta http-equiv='refresh' content='0;url=index.html'>";
  }



?>