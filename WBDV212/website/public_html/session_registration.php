<?php 

//etong file na to yung gagamitin ko dapat para madetect yung mga user refresh gamit SESSION sg variable, pero di ko pa mapagana
//ignore muna yung file na to unless na-gets nyo kung pano paganahin

    $alert = NULL;
    $_SESSION['refresh'] = 0;

    if($alert){
        while($_SESSION['refresh'] <= 2);{
            $_SESSION['refresh'] = $_SESSION['refresh'] + 1;
        }
    }

    if($_SESSION['refresh'] > 2){
        $alert = false;
        $_SESSION['refresh'] = 0;
    }

?>
