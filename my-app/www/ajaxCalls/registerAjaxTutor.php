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



    //email
	$to = 'batoul_a94@hotmail.com';
    
    $email_from = 'tutorfinderapp@hotmail.com';
    
    $email_subject = "TutorFinder - Tutor Registration";
    
    $email_body = "New tutor registration:\n".
    "First name:\n $firstname \n\n".
    "Last name:\n $lastname \n\n".
    "Gender:\n $gender \n\n".
	"DOB:\n $bday \n\n".
	"Full Address:\n $address \n\n".
	"Contact Number:\n $usrtel \n\n".
	"Qualifications:\n $qualification \n\n".
	"Profile:\n $profile \n\n".
	"Subjects to Teach:\n $subjects \n\n".
	"Level:\n $level \n\n".
	"Price:\n $price \n\n".
	"Availability:\n $availability \n\n".
	"Video URL:\n $video_link \n\n".
	"Email \n $email \n\n".
	
	
	
	    
    $headers = "From: $email_from \r\n";
    
    
    mail($to,$email_subject,$email_body,$headers);
?>