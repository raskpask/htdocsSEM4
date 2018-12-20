<?php
session_start();
require_once 'keys.php';
?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <link rel="stylesheet" type="text/css" href="resourses/CSS/reset.css" />
    <title>Login</title>
    <link rel="icon" href="img/Muffin.ico">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="resourses/CSS/mainDesign.css" />
    <link rel="stylesheet" type="text/css" href="resourses/CSS/LoginDesign.css" />
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js"></script>

    <script type="text/javascript"
            src="resourses/js/signup.js"></script>
</head>

<body>
<div class="container">
    <div class="itemhead" id="header">
        <?php include 'resourses/fragments/header.php' ?>
    </div>
    <div class="itemmainleft" id="mainleft">
        <h2>Fill the form to Sign up</h2>

        <p> <label for="username"><b>Username</b></label>
            <input type="text" data-bind ="value: username, valueUpdate: 'afterkeydown'" id="username" placeholder="Enter Username" name="username" required></p>

        <p> <label for="password"><b>Password</b></label>
            <input type="password" data-bind ="value: password, valueUpdate: 'afterkeydown'" id="password" placeholder="Enter Password" name="password" required></p>

        <p> <button type="submit" id="signup">Signup</button></p>


    </div>


    <div class="itemfooter" id="footer">
        <?php include 'resourses/fragments/footer.php' ?>
    </div>
</div>


</body>

</html>
