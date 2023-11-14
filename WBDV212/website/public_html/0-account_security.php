<?php
    
    require_once 'connection.php';
    
    if(isset($_POST["update"])){

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
                            <a href='0-account.php'><li>Profile<div id=indicator></div></li></a>
                            <a href='0-account_security.php'><li class=active>Security<div id=indicator></div></li></a>
                            <a href='0-account_management.php'><li>Management<div id=indicator></div></li></a>
                        </ul>
                        <!-- <p>Support</p>                 -->
                    </div>
                </div>
                <div id=account_main>
                    <h2>Security</h2>
                    <h3>Update keys to secure your account</h3>
                    <form action='' method='post' id=acc_security_form>
                        <h3>Change Email</h3>
                        <fieldset class='row accsecurity_row'>
                            <label>
                                Enter New Email<br /><input type=email name='new_email' value="<?php //'this should be $password' ?>"/> 
                            </label>
                            <label>
                                Enter Current Email<br /><input type=email name='current_email' value="<?php //'this should be $password' ?>"/> 
                            </label><br />
                                <input type=submit name=update value="Change"/>
                        </fieldset>
                        <h3>Change Password</h3>
                        <fieldset class='row accsecurity_row'>
                            <label>
                                Enter New Password<br /><input type=password name='new_password' value="<?php //'this should be $password' ?>"/> 
                            </label>
                            <label>
                                Enter Current Password<br /><input type=password name='current_password' value="<?php //'this should be $password' ?>"/> 
                            </label><br />
                                <input type=submit name=update value="Change"/>
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