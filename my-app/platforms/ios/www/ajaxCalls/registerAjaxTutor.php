<?php
    //this file should be inside mamp htdocs
	require 'dbinfo.php';

   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];

    $gender = $_POST['gender'];
    $bday = $_POST['bday'];
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



     $image_name = $_FILES['img']['name'];
     $image_type = $_FILES['img']['type'];
     $image_size = $_FILES['img']['size'];
     $image_tmp_name = $_FILES['img']['tmp_name'];

     $myimageLink = "imagesTree/$image_name";

    
     move_uploaded_file($image_tmp_name, $myimageLink);



   $email = $_POST['email'];
   $password = $_POST['password'];

$result =  $db->query("INSERT INTO markersdata (firstname, lastname, gender, bday, address, postcode, city, usrtel, qualification, profile, subjects, level, price, availability, img, video_link, email, password) VALUES ( '$firstname', '$lastname', '$gender', '$bday', '$address', '$postcode', '$city', '$usrtel', '$qualification', '$profile', '$subjects', '$level', '$price', '$availability', '$myimageLink', '$video_link', '$email','$password')");






     
     	
  



?>