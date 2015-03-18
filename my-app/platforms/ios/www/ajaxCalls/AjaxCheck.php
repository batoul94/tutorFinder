<?
session_start();

require 'dbinfo.php';

  if(isset($_SESSION['login_tutor']) ){

  $logged_in = $_SESSION['login_tutor'];

        $result=mysqli_query($db,"SELECT * FROM markersdata WHERE id='$logged_in'");
        $count=mysqli_num_rows($result);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

        if($count==1) {
            echo $row['firstname'];
          
        }

  }else if( isset($_SESSION['login_parent']){

     $logged_in = $_SESSION['login_parent'];

      $result=mysqli_query($db,"SELECT * FROM parentReg WHERE parent_id='$logged_in'");
        $count=mysqli_num_rows($result);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

        if($count==1) {
            echo $row['firstname'];
          
        }


  }else{

  	//echo "<meta http-equiv='refresh' content='0;url=index.html'>";
  }


?>