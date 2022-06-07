<?php require('connection/config.php')?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body style="background: url(background.jpg);background-size:cover;background-repeat:no-repeat;background-position: center center;">
   
    <div class="wrapper">
        <div class="title">Welcome Back!</div>
        <form method="POST" >
            <div class="field">
                <input type="email" required  >
                <label>Email Address</label>
            </div>
            <div class="field">
                <input type="password" name="password" required>   
                <label>Password</label>
            </div>
            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <div class="pass-link"><a href="#">Forgot password?</a></div>
            </div>
            <div class="field">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
   
</body>

</html>