<?php

try {

    session_start(); 
    require_once("./horoscopeList.php");

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] == "POST") {  

            if(isset($_POST["date"]) && isset($_SESSION["horoscope"])) {

                $date =  json_decode($_POST["date"], true); 

                $horoscope = horoscopes($date); 
                $_SESSION["horoscope"] = serialize($horoscope); 

                echo json_encode(true);
                exit;

            } else {
                echo json_decode(false);
                exit;
            }

        }
    }

    } catch (Exception $error) { 

}


?>




