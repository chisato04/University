<?php
    session_start();
    require 'connection.php';

    if(isset($_POST["login"])){
        
        $email_input = $_POST["email"];
        $password_input = $_POST["password"];
        
        $query = "SELECT user_id FROM user_accounts WHERE email = '$email_input' AND password = '$password_input'";
        
        $user_id =  mysqli_query($connect, $query);
        
        if(mysqli_fetch_row($user_id) != NULL){ //if there are no rows in the table with the specified condition, the query will return null
            $invalid = false;
            echo "<script type ='text/javascript'> window.location.href = 'index.php'; </script>";
        }else{
            $invalid = true;
        }        
    }

    mysqli_close($connect);
    
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Login | </title>
        <link rel=stylesheet type=text/css href=styles/signup-login.css />
        <?php include "google-fonts.php" ?>
        <style>
            <?php include 'account_creation_alert.php' ?>
        </style>
    </head>
    <body>
        <form action='' method=post id='sign-up' autocomplete=on>
            <h1 id=login_h1>Sign-in</h1>
            <!--<fieldset>-->
                <label>
                    <input type=email name=email placeholder=Email pattern='^[\\w\\-]+(\\.[\\w\\-]+)*@([A-Za-z0-9-]+\\.)+[A-Za-z]{2,4}$
	                ^[\w-]+(\.[\w-]+)*@([a-z0-9-]+(\.[a-z0-9-]+)*?\.[a-z]{2,6}|(\d{1,3}\.){3}\d{1,3})(:\d{4})?$ 
	                ^([\w\.*\-*]+@([\w]\.*\-*)+[a-zA-Z]{2,9}(\s*;\s*[\w\.*\-*]+@([\w]\.*\-*)+[a-zA-Z]{2,9})*)$' required=required title="Please enter a valid email"/>
                </label>
                <label>
                    <input type=password name=password placeholder="Password" required=required />
                </label>
                <p>
                 <a href=signup.php id=create>Create an Account</a>
                 <a id=forgot_pass>Forgot Password?</a>
                </p>
                    <input type=submit name=login value=Login />
            <!--</fieldset>-->
        </form>
    </body>
</html>
