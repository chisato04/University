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
            echo "<script type ='text/javascript'> window.location.href = '0-index.php'; </script>";
        }else{
            $invalid = true;
        }        
    }    
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Login | </title>
        <link rel=stylesheet type=text/css href=styles/signup-login.css />
        <?php include "google-fonts.php" ?>
        <style>
            <?php
                if($invalid){
            ?>
                    #sign-up::after{
                        content: "Invalid email or password input. Please retry.";
                        z-index: 1;
                        position: absolute;
                        margin: -29% 0 0 -41px; /*this will place the element outside the top of the page*/
                        padding-top: 12px;
                        width: 31.55em; /*EDITED: width: 27.6em; USE IF FONT-SIZE IS CHANGED TO 16px*/
                        height: 2em;
                        background: rgba(226, 6, 6, 0.2);
                        border-radius: 5px;
                        box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.1);
                        backdrop-filter: blur(5px);
                        -webkit-backdrop-filter: blur(5px);
                        font-family: "Roboto", Helvetica, sans-serif;
                        font-size: 14px;
                        text-align: center;
                        opacity: 0%;
                        animation: reveal 7s ease-in-out forwards;
                    }

                    @keyframes reveal{
                        0%{opacity: 0%; transform: translateY(0px)}
                        5%, 50%, 95%{opacity: 100%; transform: translateY(100px)}
                        100%{opacity: 0%; transform: translateY(0px)}
                    }
            <?php 
                }
            ?>          
                            
        </style>
    </head>
    <body>
        <div id=sign_block_container>
            <div id=image_container>
            </div>
            <div id=divider>
                <?php if($_SESSION['created']){echo'<div class="alert">Your account has been succesfully created.</div>';} ?>
                <a href=0-index.php><img class=home_icon src='images/icons/icons8-home.svg' alt='home icon that leads to home' /></a>
                <form action='' method=post id='sign-up' autocomplete=on>
                    <h1 id=login_h1>Login</h1>
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
                            <a id=forgot_pass>Forgot Password?</a>
                        </p>
                            <input type=submit name=login value=Confirm />
                        <p id=switch_to>Don't have an account? <a href=0-signup.php>Sign-up</a></p>
                    <!--</fieldset>-->
                </form>
            </div>
        </div>
    </body>
</html>
