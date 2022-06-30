<?php
session_start();
?>
<?php require('connection/config.php')?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body style="background: url(background.jpg);background-size:cover;background-repeat:no-repeat;background-position: center center;">
   
    <div class="wrapper">
        <div class="title">ADMIN LOGIN</div>
        <form method="POST"  action="admin/Validation.php">
            <div class="field">
                <input type="text" name="email" required  >
                <label>Email Address</label>
            </div>
            <div class="field">
                <input type="password" name="passwords" required>   
                <label>Password</label>
            </div>
            <div class="field">
                <input  type="submit" value="Login" name="admins" >
            </div>
        </form>
    </div>
   
</body>

</html>