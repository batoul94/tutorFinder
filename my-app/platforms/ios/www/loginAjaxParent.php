<?php
    session_start();
    //this file should be inside mamp htdocs
    $db = mysqli_connect("localhost","root","root","tutorfinder")or die("EEError " . mysqli_error($db));
    
    
    if(isset($_POST['email']) && isset($_POST['password'])) {

        $email=mysqli_real_escape_string($db,$_POST['email']);
        $password=mysqli_real_escape_string($db,$_POST['password']);
        $result=mysqli_query($db,"SELECT firstname FROM parentReg WHERE email='$email' AND password='$password'");
        $count=mysqli_num_rows($result);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

        if($count==1) {

            $_SESSION['login_user']=$row['firstname'];
            echo $row['firstname'];
            //header("location: profile.php");

        }

    }
?>