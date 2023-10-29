<?php
//this file checks if there are already records with the same email being used; works in sign-up.php

    $exists;
    $created = NULL;
    $alert;

    if(isset($_POST['signup'])){
        $email = $_POST['email'];
                
        $check = "SELECT email FROM user_accounts WHERE email = '$email'";
        $query_check = mysqli_query($connect, $check);
        $dupes = mysqli_fetch_array($query_check);
        
        if(!(empty($dupes['email']))){
            //$alert = true;
            $exists = true;
        }else{
            $exists = false; 
        }
    }
    

?>