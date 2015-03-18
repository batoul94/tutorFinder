<?php
    session_start();
    //this file should be inside mamp htdocs
    require 'dbinfo.php';
    
     $mymarker= $_POST['mymarker'];
      
     $_SESSION['marker_IdSession']=$mymarker;
         
            

  

  
?>