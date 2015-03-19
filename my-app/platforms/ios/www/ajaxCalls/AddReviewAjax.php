<?php
    //this file should be inside mamp htdocs
session_start();
	require 'dbinfo.php';
	
   $review_body = $_POST['review_body'];
   $tutor_id = $_SESSION['marker_IdSession'];
   

$result =  $db->query("INSERT INTO tutor_reviews (tutor_id, review_body) VALUES ( '$tutor_id', '$review_body')");
  



?>