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
        <form method="POST" enctype="multipart/form-data" action="process/LoginProcess.php">
            <div class="field">
                <input type="text" name="email"required  >
                <label>Email Address</label>
            </div>
            <div class="field">
                <input type="password" name="password" required>   
                <label>Password</label>
            </div>
            <!-- <div class="field">
                
                <select name="usertype" id="usertype" class="usertype" style="padding:12px;border-radius:22px;color:grey;width:320px;">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div> -->
            <div class="field">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
   
</body>

</html>