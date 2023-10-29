<?php
    
    require_once 'connection.php';
    
    require 'check_dupe.php';

    if(isset($_POST["update"])){

        $firstname = $_POST["firstname"];
        $middle_initial = $_POST["middle_initial"];
        $lastname = $_POST["lastname"];
        $phone_number = $_POST["phone_number"];
        $home_address = $_POST["home_address"];
        $work_address = $_POST["work_address"];
        $agreement = $_POST["agreement"];
        
        if(!(isset($_POST["suffix"]))){
            $suffix = NULL;
        }else{
            $suffix = $_POST["suffix"];
        }
        
        if(!(isset($_POST["work_address"]))){
            $work_address = NULL;
        }else{
            $work_address = $_POST["work_address"];
        }

        
        $query = "INSERT INTO user_accounts(email, password) VALUES('$email', '$password');";
                  
        mysqli_query($connect, $query);
        
        $find = "SELECT user_id from user_accounts WHERE email='$email' and password='$password';";
        $grab = mysqli_query($connect, $find);
        $result = mysqli_fetch_array($grab);
        
        $new_user_id = $result["user_id"];
        
        $query2 = "INSERT INTO user_info(user_id, first_name, middle_initial, last_name, suffix, phone_number,              home_address, work_address, agreement) 
                  VALUES($new_user_id, '$firstname', '$middle_initial', '$lastname', '$suffix', '$phone_number', '$home_address', '$work_address', '$agreement');";
        
        mysqli_query($connect, $query2);
        
        
        echo "<script type = 'text/javascript'> alert('Account Created Successfully'); </script>"; //creates a browser alert
        echo "<script type = 'text/javascript'> window.location.href = 'login.php'; </script>";
    }
    
?>

<!DOCTYPE html>
    <html>
        <head>
            <!--FONT: Roboto-->
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
            <!--FONT: Roboto-->
        </head>
        <body>
        </body>
    </html>