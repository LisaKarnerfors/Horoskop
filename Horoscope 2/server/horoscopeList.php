<?php 

function horoscopes($date) {
    
        if($date >= "2021-01-21" && $date <= "2021-02-18") {
            $sign = array(
                "name" => 'Aquarius',
         );
        return $sign;

        } elseif($date >= "2021-02-19" && $date <= "2021-03-20") {
            $sign = array(
                "name" => "Pisces", 
        );
        return $sign;

        }elseif($date >= "2021-03-21" && $date <= "2021-04-19") {
           $sign = array(
               "name" => "Aries",
           );
           return $sign;
       
        } elseif($date >= "2021-04-20" && $date <= "2021-05-20") {
           $sign = array(
               "name" => "Taurus",
           );
           return $sign;
       
        } elseif($date >= "2021-05-21" && $date <= "2021-06-20") {
           $sign = array(
                   "name" => "Gemini",
           );
           return $sign;
       
        } elseif($date >= "2021-06-21" && $date <= "2021-07-22") {
           $sign = array(
                   "name" => "Cancer",
           );
           return $sign;
       
        } elseif($date >= "2021-07-23" && $date <= "2021-08-22") {
           $sign = array(
                   "name" => "Leo",
           );
           return $sign;
       
        } elseif($date >= "2021-08-23" && $date <= "2021-09-22") {
           $sign = array(
                   "name" => "Virgo",
           );
           return $sign;
       
        } elseif($date >= "2021-09-23" && $date <= "2021-10-22") {
           $sign = array(
                   "name" => "Libra",
           );
           return $sign;
       
        } elseif($date >= "2021-10-23" && $date <= "2021-11-21") {
           $sign = array(
                   "name" => "Scorpio",
           );
           return $sign;
       
        } elseif($date >= "2021-11-22" && $date <= "2021-12-21") {
           $sign = array(
                   "name" => "Sagittatius",
           );
           return $sign;
       
        } else {
           $sign = array(
                   "name" => "Capricorn",
           );
           return $sign; 
        }

}

?>

