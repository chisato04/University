            <?php 
                if(!($_SESSION['created'])){ //if alert is true in check_dupe.php it will echo "Account already exists"
            ?>                 
                    #sign-up::after{
                        content: "It seems the account you entered already exists.";
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
                }else if($_SESSION['created']){ //if created is true (which is after the db receives the user input) it will echo "Account created"
            ?>          
                    #sign-up::after{
                        content: "Your account has been succesfully created.";
                        z-index: 1;
                        position: absolute;
                        margin: -29% 0 0 -41px; /*this will place the element outside the top of the page*/
                        padding-top: 12px;
                        width: 31.55em; /*EDITED: width: 27.6em; USE IF FONT-SIZE IS CHANGED TO 16px*/
                        height: 2em;
                        background: rgba(2, 235, 84, 0.2);
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