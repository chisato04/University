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
                            <a href='0-account_security.php'><li>Security<div id=indicator></div></li></a>
                            <a href='0-account_management.php'><li class=active>Management<div id=indicator></div></li></a>
                        </ul>
                        <!-- <p>Support</p>                 -->
                    </div>
                </div>
                <div id=account_main>
                    <h2>Manage</h2>
                    <h3>Manage your account's state</h3>
                    <form action='' method='post' id=acc_management_form>
                        <h3>Delete Account (This action will permanently delete your account)</h3>
                        <fieldset class='row accmanagement_row'>
                            <label>
                                Enter Email<br /><input type=email name='email' value="<?php //'this should be $password' ?>"/> 
                            </label>
                            <label>
                                Enter Password<br /><input type=password name='password' value="<?php //'this should be $password' ?>"/> 
                            </label><br />
                                <input type=submit name=update value="Confirm"/>
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