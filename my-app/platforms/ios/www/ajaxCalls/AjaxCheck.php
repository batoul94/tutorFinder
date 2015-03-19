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
			
		         array_push($rezultatet, $datas);
		     }
		     echo json_encode($rezultatet);


		   }
			
			
	elseif(isset($_SESSION['login_parent'])){

		$myid = $_SESSION['login_parent'];

		$result = $db->query("SELECT * FROM parentReg WHERE `parent_id` = '$myid'");
			   
		$rezultatet = array();
		 foreach ($result as $results) {

					$datas['firstname'] = $results['firstname'];
					$datas['lastname'] =  $results['lastname'];
					
				
			         array_push($rezultatet, $datas);
		}
		echo json_encode($rezultatet);


    }



  else{

  	echo "<meta http-equiv='refresh' content='0;url=index.html'>";
  }



?>