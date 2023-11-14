<?php
    declare(strict_types = 1);
//this file checks if there are already records with the same email being used; works in sign-up.php
    $accountExists = false;
    $created = NULL;
    $alert = false;


    function checkDupe($email, $connect) : bool{
        $check = "SELECT email FROM user_accounts WHERE email = '$email'";
        $query_check = mysqli_query($connect, $check);
        $dupes = mysqli_fetch_array($query_check);
        
        if(!(empty($dupes['email']))){
             $accountExists = true;
        }else{
            $accountExists = false;
        }

        return $accountExists;
    }

    // if(isset($_POST['signup'])){
    //     $email = $_POST['email'];
                
    //     $check = "SELECT email FROM user_accounts WHERE email = '$email'";
    //     $query_check = mysqli_query($connect, $check);
    //     $dupes = mysqli_fetch_array($query_check);
        
    //     if(!(empty($dupes['email']))){
    //         $alert = true;
    //         $exists = true;
    //     }
    // }
    

?>