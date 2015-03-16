<?php
    session_start();
    //this file should be inside mamp htdocs
    require 'dbinfo.php';
    
    if(isset($_POST['email']) && isset($_POST['password'])) {

        $email=mysqli_real_escape_string($db,$_POST['email']);
        $password=mysqli_real_escape_string($db,$_POST['password']);
        $result=mysqli_query($db,"SELECT * FROM parentReg WHERE email='$email' AND password='$password'");
        $count=mysqli_num_rows($result);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

        if($count==1) {

            $_SESSION['login_parent']=$row['id'];
            echo $row['firstname'];
            

        }

    }
?>