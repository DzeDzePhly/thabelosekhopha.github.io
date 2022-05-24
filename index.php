<?php
    include_once 'dbh.inc.php';

    if(isset($_POST['login-btn-click'])){
        
        $u_name = $_POST['usename'];
        $p_word = $_POST['password'];

        $sql = "SELECT * FROM `user_personal_details` WHERE `UserName` = '".$u_name."' AND `Password` = '".$p_word."' ";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1){
            header('Location: homepage.php');
        }
        else{
            $wrong_creds = "Wrong Username or Password";
        }
    }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>index</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img id="mylogo" src="assets/img/Logo.png"></div>
            <div class="form-group"><input class="form-control" type="text" name="usename" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="login-btn-click">Login</button></div><a class="forgot" href="#">Forgot your email or password?</a><label id="fieldLabel" style="height: 20px;width: 240px;" name="errorMessage"></label></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>