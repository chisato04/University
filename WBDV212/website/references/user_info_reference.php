<?php
    
    require_once 'connection.php';
    
    require 'check_dupe.php';

    if(isset($_POST["signup"])){

        $email = $_POST["email"];
        $password = $_POST["password"];
        
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
        <title>Sign-up | </title>
        <!-- <link rel=stylesheet type=text/css href=https://halili123.000webhostapp.com/styles/signup-login.css /> -->
        <link rel=stylesheet type=text/css href=styles/signup-login.css />
        <!--FONT: Roboto-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!--FONT: Roboto-->
    </head>
    <body>
        <form action='' method=post id='sign-up' autocomplete=on>
            <h1>Sign-up</h1>
            <!--<fieldset>
                <legend>Sign-up Section: Name</legend>-->
                <label>
                    <input type=text name=firstname placeholder="First Name" required=required />
                </label>
                <label>
                    <input type=text name=middle_initial placeholder="M.I." required=required />
                </label>
                <label>
                    <input type=text name=lastname placeholder="Last Name" required=required />
                </label>
                <label>
                    <input type=text name=suffix placeholder="Suffix" />
                </label>
                <label>
                    <input type=text name=phone_number placeholder="Phone Number" value="+63" required=required /> <!--figure out how to make only accept numerical values-->
                </label>
                <label>
                    <input type=text name=home_address placeholder="Home Address" required=required />
                </label>
                <label>
                    <input type=text name=work_address placeholder="Work Address" />
                </label>
                <label>
                    <input type=email name=email placeholder="Email" required=required />
                </label>
                <label>
                    <input type=password name=password placeholder="Password" required=required />
                </label>
                <label>
                    <input type=checkbox name=agreement value="yes" required=required id=checkbox /> <span id="agreement">I agree to the <a href=''>terms and conditions</a>.</span>
                </label>
                <label>
                    <input type=submit name=signup value=Signup />
                </label>
                <p id=switch_to>Already have an account? <a href=login.php>Sign-in</a></p>
                <!-- <p id=switch_to>Already have an account? <a href=https://halili123.000webhostapp.com/login.php>Sign-in</a></p> -->
            <!--</fieldset>
            <fieldset>
                <legend>Sign-up Section: Contacts</legend>
            </fieldset>-->
        </form>
    </body>
</html>
