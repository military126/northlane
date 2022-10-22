<?php
/**
 * @Author: Nokia 1337
 * @Date:   2019-11-13 23:10:16
 * @Last Modified by:   Nokia 1337
 * @Last Modified time: 2019-11-14 21:13:32
*/
class Antibot
{
    function apikey($api_key){
        $this->apikey = $api_key;
    }
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP')){
            $ipaddress = getenv('HTTP_CLIENT_IP');
        }
        if(getenv('HTTP_X_FORWARDED_FOR')){
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        }
        if(getenv('HTTP_X_FORWARDED')){
            $ipaddress = getenv('HTTP_X_FORWARDED');
        }
        if(getenv('HTTP_FORWARDED_FOR')){
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        }
        if(getenv('HTTP_FORWARDED')){
           $ipaddress = getenv('HTTP_FORWARDED');
        }
        if(getenv('REMOTE_ADDR')){
            $ipaddress = getenv('REMOTE_ADDR');
        }
        $ipaddress = explode(",",  $ipaddress);
        if(preg_match("/::1|127.0.0.1/", $ipaddress[0])){
            $ipaddress[0] = '23.200.91.255';
        }
        return $ipaddress[0];
    }
    function httpGet($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout in seconds
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($ch);
        return $response;
    }
    function check(){
        $ip         = $this->get_client_ip();
        $respons    = $this->httpGet("https://antibot.pw/api/v2-blockers?ip=".$ip."&apikey=".$this->apikey."&ua=".urlencode($_SERVER['HTTP_USER_AGENT']));
        $json       = json_decode($respons,true);
        $_SESSION['check']   = true;

        if($json['is_bot'] == 1 || $json['is_bot'] == true){
            $_SESSION['bot']   = true;
            return true;
        }else{
            return false;
        }
    }
}

if($_SESSION['check'] == false){

    $Antibot    = new Antibot;
    $Antibot->apikey( $config_antibot['apikey'] );
    if($Antibot->check() == true){
        die(header("HTTP/1.0 404 Not Found"));
    } 

}

if($_SESSION['check'] == true && $_SESSION['bot'] == true){
    die(header("HTTP/1.0 404 Not Found"));
}