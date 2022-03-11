<?php

try {

    session_start();    

    if($_SERVER["REQUEST_METHOD"]) { // Funkar det inte pga isset??? 

        if($_SERVER["REQUEST_METHOD"] == "GET") {

            if(isset($_SESSION["horoscope"])) {

                echo json_encode (unserialize($_SESSION["horoscope"]));
                exit;
        
            } else {
                echo json_encode(true);
                exit;
            }
            
            } else {
                echo json_encode("");
            }
    }

} catch (Exception $error) {

}

?>