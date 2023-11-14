<?php
    
    require_once 'connection.php';
    
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
        
        $query = "UPDATE user_info
                  SET first_name = '$firstname', middle_initial = '$middle_initial', last_name = '$lastname',
                  suffix = '$suffix', phone_number = '$phone_number', home_address = '$home_address',
                  work_address = '$work_address' WHERE user_id = $_SESSION[user_id];";
        
        mysqli_query($connect, $query);
        
        
        echo "<script type = 'text/javascript'> alert('Account Created Successfully'); </script>"; //creates a browser alert
        echo "<script type = 'text/javascript'> window.location.href = 'login.php'; </script>";
    }
    
?>

<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type=text/css href="styles/styles.css" />
            <?php include "google-fonts.php" ?>
        </head>
        <body>
            <?php require '0-header_account.php'; ?>
            <article id=account_container>
                <div id=column>
                    <!-- <h1>account</h1> -->
                    <div id=sidebar>
                        <ul>
                            <a href='0-account.php'><li class='active'>Profile<div id=indicator></div></li></a>
                            <a href='0-account_security.php'><li>Security<div id=indicator></div></li></a>
                            <a href='0-account_management.php'><li>Management<div id=indicator></div></li></a>
                        </ul>
                        <!-- <p>Support</p>                 -->
                    </div>
                </div>
                <div id=account_main>
                    <h2>Profile</h2>
                    <h3>Edit your personal information</h3>
                    <form action='' method='post'>
                        <fieldset class=row id=row1>
                            <label>
                                First Name<br /><input type=text name=firstname value="Barack Obama"/> 
                                <!--value should contain a SESSION variable containing an array that indexes to the indicated form control, so here, value=<?php /*$_SESSION[user['firstname']]*/?>-->
                            </label>
                            <label>
                                Middle Name<br /><input type=text name=firstname value=""/> 
                            </label>
                            <label>
                                Last Name<br /><input type=text name=firstname value=""/> 
                            </label>
                            <label>
                                Suffix<br /><input type=text name=firstname value=""/> 
                            </label>
                        </fieldset>
                        <fieldset class=row id=row2>
                            <label id=gender>
                                Gender<br />
                                    <label><input type=radio name=gender value="M"/> Male </label>
                                    <label><input type=radio name=gender value="F"/> Female </label>
                                    <label><input type=radio name=gender value="Other"/> Other </label>
                                <!--value should contain a SESSION variable containing an array that indexes to the indicated form control, so here, value=<?php /*$_SESSION[user['firstname']]*/?>-->
                            </label>
                            <label>
                                Birthdate<br /><input type=date name=firstname value=""/> 
                            </label>
                        </fieldset>
                        <fieldset class=row id=row3>
                            <label>
                                Email<br /><p>elliot.jacob09@gmail.com</p>
                            </label>
                            <label>
                                Phone<br /><input type=text name=phone value=""/>
                            </label>
                        </fieldset>
                        <fieldset class=row id=row4>
                            <label>
                                Home Adrress<br /><input class=address type=text name=home_address value=""/>
                            </label>
                        </fieldset>
                        <fieldset class=row id=row5>
                            <label>
                                Work Adrress<br /><input class=address type=text name=work_address value=""/>
                            </label>
                        </fieldset>
                        <fieldset class=row id=row6>
                                <input type=submit name=update value="Update"/>
                        </fieldset>
                    </form>
                </div>
                
                <!-- <div id=FAQ>
                    <h2>FAQs</h2>
                        <ul>
                            <a href=''><li>How do I delete my account?</li></a>
                            <a href=''><li>How do I change details in my account?</li></a>
                            <a href=''><li>What are you using this information for?</li></a>
                        </ul>
                </div> -->

            </article>
            <?php require '0-footer.php'; ?>
        </body>
    </html>