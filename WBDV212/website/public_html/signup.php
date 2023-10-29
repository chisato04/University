<?php
    session_start(); //for SESSION sg variable pero di ko pa mapagana
    $_SESSION['refresh'] += 1; //yes, the submission of data to the db does count as a page refresh, which the runs this incrementation
    require_once 'connection.php'; //magcracreash yung page pag di makaconnect sa connection.php na file
    require 'check_dupe.php'; //magcracreash yung page pag di makaconnect sa check_dupe.php na file


    if(isset($_POST["signup"])){
        //Question to Group: Email ba gagawan naten o username nalng para sa account credentials?
        if(!($exists)){ //$exists ay nasa check_dupe.php
            $email = $_POST["email"]; //storing form input
            $password = $_POST["password"]; //storing form input

            $query = "INSERT INTO user_accounts(email, password) VALUES('$email', '$password');";

            mysqli_query($connect, $query); //this will use the $connect in connection.php to pass on the query in $query

            $find = "SELECT user_id from user_accounts WHERE email='$email' and password='$password';";
            //the $find query will be used to check if the account was succesfully created
            $grab = mysqli_query($connect, $find); //this will run the $find query
            $result = mysqli_fetch_array($grab); //this will store the row that contains the conditions set in the $find query



            $store_user_id = $result["user_id"]; //this stores the user_id that we fetched from the row that was $grab-bed

            $query2 = "INSERT INTO user_info(user_id) VALUES($store_user_id)";
            //want to make sure that the account was successfully created first before creating a user_info row for that account
            //this will also make sure that the user_id in user_accounts corresponds with the account in user_info
            //user_info will store other information like name and address, but it is not forced for registration, it will be in account page; from registration, the other fields in user_info will be NULL until it is updated by the user in the account page

            mysqli_query($connect, $query2);//this will use the $connect in connection.php to pass on the query in $query2

            $created = true; //this will  setup a true condition for echoing out "Account created" in styles/signup-login.css


        }
    }

    if($created === true || $created === NULL){
        $alert = false;
        // if($_SESSION['refresh'] > 1){ //instantly switches to login, find a way to change this
        //     $_SESSION['refresh'] = 0;
        //     $created = false;
        //     echo "<script type ='text/javascript'> window.location.href = 'login.php'; </script>";
        // }
        /* di gumagana yung commented out script. gusto ko gumamit ng session para malaman kung kelan pipigilan yung mga pop-up pero di ko pa magawa. baka may idea kayo */
    }else{
        $alert = true;
    }

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Sign-up | </title>
        <link rel=stylesheet type=text/css href=styles/signup-login.css />
        <?php include "google-fonts.php" ?>
        <style>
            <?php include "account_creation_alert.php" //ditong file galing yung pop-up?>
        </style>
    </head>
    <body>
        <form action='' method=post id='sign-up' autocomplete=on>
            <h1>Sign-up</h1> <?php echo $_SESSION['refresh'] ?>
            <!--<fieldset>-->
                <label>
                    <input type=email name=email placeholder=Email pattern='^[\\w\\-]+(\\.[\\w\\-]+)*@([A-Za-z0-9-]+\\.)+[A-Za-z]{2,4}$
	                ^[\w-]+(\.[\w-]+)*@([a-z0-9-]+(\.[a-z0-9-]+)*?\.[a-z]{2,6}|(\d{1,3}\.){3}\d{1,3})(:\d{4})?$
	                ^([\w\.*\-*]+@([\w]\.*\-*)+[a-zA-Z]{2,9}(\s*;\s*[\w\.*\-*]+@([\w]\.*\-*)+[a-zA-Z]{2,9})*)$' required=required title="Please enter a valid email" />
                    <!--may sineset-up na character requirements yung pattern attribute gamit yung value na to-->
                </label>
                <label>
                    <input type=password name=password placeholder="Password" required=required />
                </label>
                <label>
                    <input type=checkbox name=agreement value="yes" required=required id=checkbox /> <span id="agreement">I agree to the <a href=''>terms and conditions</a>.</span>
                </label>
                    <input type=submit name=signup value=Signup />

                <p id=switch_to>Already have an account? <a href=login.php>Sign-in</a></p>
            <!--</fieldset>-->
        </form>
    </body>
</html>
