<?php
    // $created = $_SESSION['created'];
    // $alert = $_SESSION['alert'];
    // $_SESSION['refresh'] = 0;
    // while($_SESSION['created'] === true && $_SESSION['refresh'] <= 2){
    //     $_SESSION['refresh'] = $_SESSION['refresh'] + 1;
    //     if($_SESSION['refresh'] == 2){
    //         $_SESSION['refresh'] = 0;
    //         $_SESSION['created'] = false;
    //         break;
    //     }
    // }
    // while($_SESSION['alert'] === true && $_SESSION['refresh'] <= 2){
    //     $_SESSION['refresh'] = $_SESSION['refresh'] + 1;
    //     if($_SESSION['refresh'] == 2){
    //         $_SESSION['refresh'] = 0;
    //         $_SESSION['alert'] = false;
    //         break;
    //     }
    // }

    //di ko mapagana yung code snippet sa taas, dedetect nya sana kung nakailang refresh na yung page para gawing false yung mga alerts (para tumigil na sila based on the amount of refreshes ng user)


    //lahat ng to gumagamit ng pseudo-element (parang element pero nacocontrol mo direct from css styles na parang naka-attach sa element na append mo)
    //ginawa kong internal css kasi kelangan ata ng javascript para maka-affect ng conditions sa external css
    //naka-include (php keyword) yung file na to sa login.php pati sign-up.php

    if($alert){ //if alert is true in check_dupe.php it will echo "Account already exists"
?>
        *{
            box-sizing: border-box;
        }
        #sign-up::before{
            content: "It seems the account you entered already exists.";
            z-index: -1;
            position: absolute;
            margin: -35px 0 0 -41px;
            padding-top: 12px;
            width: 31.55em; /*EDITED: width: 27.6em; USE IF FONT-SIZE IS CHANGED TO 16px*/
            height: 2em;
            background: rgb(253, 175, 175);
            border: 3px solid rgb(248, 96, 96);
            border-radius: 8px;
            font-family: "Roboto", Helvetica, sans-serif;
            font-size: 14px;
            text-align: center;
            animation: peek 5s ease-in-out forwards;
        }

        @keyframes peek {
            0%{opacity: 0%; transform: translateY(0px);}
            0%{opacity: 0%; transform: translateY(0px);}
            25%, 50%, 75%{opacity: 100%; transform: translateY(-65px)}
            100%{opacity: 0%; transform: translateY(0px);}
        }
<?php
    }else if($created){ //if created is true (which is after the db receives the user input) it will echo "Account created"
?>
        *{
            box-sizing: border-box;
        }
        #sign-up::before{
            content: "Your account has been successfully created.";
            z-index: -1;
            position: absolute;
            margin: -35px 0 0 -41px;
            padding-top: 12px;
            width: 31.55em; /*EDITED: width: 27.6em; USE IF FONT-SIZE IS CHANGED TO 16px*/
            height: 2em;
            background: #4ddb94;
            border: 3px solid #1ea863;
            border-radius: 8px;
            font-family: "Roboto", Helvetica, sans-serif;
            font-size: 14px;
            text-align: center;
            animation: peek 5s ease-in-out forwards;
        }

        @keyframes peek {
            0%{opacity: 0%; transform: translateY(0px);}
            0%{opacity: 0%; transform: translateY(0px);}
            25%, 50%, 75%{opacity: 100%; transform: translateY(-65px)}
            100%{opacity: 0%; transform: translateY(0px);}
        }
<?php
    }
?>

    <?php
    if($invalid){
?>
        *{
            box-sizing: border-box;
        }
        #sign-up::before{
            content: "Invalid email or password input. Please retry.";
            z-index: -1;
            position: absolute;
            margin: -35px 0 0 -41px;
            padding-top: 12px;
            width: 31.55em; /*EDITED: width: 27.6em; USE IF FONT-SIZE IS CHANGED TO 16px*/
            height: 2em;
            background: rgb(253, 175, 175);
            border: 3px solid rgb(248, 96, 96);
            border-radius: 8px;
            font-family: "Roboto", Helvetica, sans-serif;
            font-size: 14px;
            text-align: center;
            animation: peek 7s ease-in-out forwards;
        }

        @keyframes peek {
            0%{opacity: 0%; transform: translateY(0px);}
            0%{opacity: 0%; transform: translateY(0px);}
            25%, 50%, 75%{opacity: 100%; transform: translateY(-65px)}
            100%{opacity: 0%; transform: translateY(0px);}
        }
<?php
    }
?>