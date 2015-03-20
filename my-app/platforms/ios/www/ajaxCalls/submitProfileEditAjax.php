<?php
    //this file should be inside mamp htdocs
  session_start();
	require 'dbinfo.php';

   if(isset($_SESSION['login_tutor'])){

    $myid = $_SESSION['login_tutor'];
   
    $address = $_POST['address'];
    $postcode = $_POST['postcode'];
    $city = $_POST['city'];
    $usrtel = $_POST['usrtel'];
    $qualification = $_POST['qualification'];
    $profile = $_POST['profile'];
    $subjects = $_POST['subjects'];
    $level = $_POST['level'];
    $price = $_POST['price'];
    $availability = $_POST['availability'];

    $video_link = $_POST['video_link'];


     $lng = $_POST['lng'];
     $lat = $_POST['lat'];
  

      
  $update =  $db->query("UPDATE markersdata SET `address` = '$address', `postcode` = '$postcode', `city` = '$city', `usrtel` = '$usrtel', `qualification` = '$qualification', `profile` = '$profile', `subjects` = '$subjects', `level` = '$level', `price` = '$price', `availability` = '$availability', `video_link` = '$video_link' , `lng` = '$lng' , `lat` = '$lat' WHERE `id` = '$myid'");
            

   }


?>