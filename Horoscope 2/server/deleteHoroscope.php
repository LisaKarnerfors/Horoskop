<?php 

try {

    session_start();           

    if($_SERVER["REQUEST_METHOD"]) { 
        
        if($_SERVER["REQUEST_METHOD"] === "DELETE") {
            error_log(serialize('hej igen plus hej'));
            if(isset($_SESSION["horoscope"])) {
                error_log(serialize('horoscope'));

                echo json_encode(true);
                session_destroy();
                exit;

            } else { 
                echo json_encode(false);
                exit;    
            }
        
    }
}

} catch (Exception $error) {

}