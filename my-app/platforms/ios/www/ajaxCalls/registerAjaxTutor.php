<?php
    //this file should be inside mamp htdocs
	require 'dbinfo.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $bday = $_POST['bday'];
    $address = $_POST['address'];
    $usrtel = $_POST['usrtel'];
    $qualification = $_POST['qualification'];
    $profile = $_POST['profile'];
    $subjects = $_POST['subjects'];
    $level = $_POST['level'];
    $price = $_POST['price'];
    $availability = $_POST['availability'];

    $video_link = $_POST['video_link'];

   $email = $_POST['email'];
   $password = $_POST['password'];

   $lng = $_POST['lng'];
   $lat = $_POST['lat'];
  




    $fname = $_FILES['file']['name'];

    $rawBaseName = pathinfo($fname, PATHINFO_FILENAME );
    $extension = pathinfo($fname, PATHINFO_EXTENSION );
    $counter = 0;
    while(file_exists('imagesTree/'.$fname)) {
        $fname = $rawBaseName . $counter . '.' . $extension;
        $counter++;
    };

    $myimageLink = 'imagesTree/'. $fname;
    move_uploaded_file($_FILES['file']['tmp_name'],$myimageLink);  




$result =  $db->query("INSERT INTO markersdata (lng, lat, firstname, lastname, gender, bday, address, usrtel, qualification, profile, subjects, level, price, availability, img, video_link, email, password, validated) VALUES ('$lng', '$lat', '$firstname', '$lastname', '$gender', '$bday', '$address', '$usrtel', '$qualification', '$profile', '$subjects', '$level', '$price', '$availability', '$myimageLink', '$video_link', '$email','$password', 'no')");





?>