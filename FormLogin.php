<?php
    $usernamelogin = 'abdi';
    $passwordlogin = '2004426';

    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === $usernamelogin && $password === $passwordlogin) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        } else {
            $error_message = "Username atau Password salah.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
        
        background-color: #b5e2ff;
        font-family: "Asap", sans-serif;
        }

        .login {
        overflow: hidden;
        background-color: white;
        padding: 40px 30px 30px 30px;
        border-radius: 10px;
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: -webkit-transform 300ms, box-shadow 300ms;
        -moz-transition: -moz-transform 300ms, box-shadow 300ms;
        transition: transform 300ms, box-shadow 300ms;
        box-shadow: 5px 10px 10px rgba(2, 128, 144, 0.2);
        }
        .login::before, .login::after {
        content: "";
        position: absolute;
        width: 600px;
        height: 600px;
        border-top-left-radius: 40%;
        border-top-right-radius: 45%;
        border-bottom-left-radius: 35%;
        border-bottom-right-radius: 40%;
        z-index: -1;
        }
        .login::before {
        left: 40%;
        bottom: -130%;
        background-color: rgba(0, 0, 255, 0.2);
        -webkit-animation: wawes 6s infinite linear;
        -moz-animation: wawes 6s infinite linear;
        animation: wawes 6s infinite linear;
        }
        .login::after {
        left: 35%;
        bottom: -125%;
        background-color: rgba(0, 0, 255, 0.4);
        -webkit-animation: wawes 7s infinite;
        -moz-animation: wawes 7s infinite;
        animation: wawes 7s infinite;
        }
        .login > input {
        font-family: "Asap", sans-serif;
        display: block;
        border-radius: 5px;
        font-size: 16px;
        background: white;
        width: 100%;
        border: 0;
        padding: 10px 10px;
        margin: 15px -10px;
        }
        .login > button {
        font-family: "Asap", sans-serif;
        cursor: pointer;
        color: #fff;
        font-size: 16px;
        text-transform: uppercase;
        width: 80px;
        border: 0;
        padding: 10px 0;
        margin-top: 10px;
        margin-left: -5px;
        border-radius: 5px;
        background-color: #f45b69;
        -webkit-transition: background-color 300ms;
        -moz-transition: background-color 300ms;
        transition: background-color 300ms;
        }
        .login > button:hover {
        background-color: #f24353;
        }

        @-webkit-keyframes wawes {
        from {
            -webkit-transform: rotate(0);
        }
        to {
            -webkit-transform: rotate(360deg);
        }
        }
        @-moz-keyframes wawes {
        from {
            -moz-transform: rotate(0);
        }
        to {
            -moz-transform: rotate(360deg);
        }
        }
        @keyframes wawes {
        from {
            -webkit-transform: rotate(0);
            -moz-transform: rotate(0);
            -ms-transform: rotate(0);
            -o-transform: rotate(0);
            transform: rotate(0);
        }
        to {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
        }
        a {
        text-decoration: none;
        color: rgba(255, 255, 255, 0.6);
        position: absolute;
        right: 10px;
        bottom: 10px;
        font-size: 12px;
        }
    </style>
</head>
<body>
<form class="login" method="POST">
        <?php
        if (isset($error_message)) {
            echo '<div class="alert alert-danger">' . $error_message . '</div>';
        }
        ?>
        <div style="text-align: center;">
        <div class="avatar-parent-child">
            <img alt="Profile Picture" src="Logo.png" class="avatar avatar-rounded-circle">
        </div>
        <p class="form-control">Please Input Username & Password</p>
        </div>
        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
</form>


<a href="https://codepen.io/davinci/" target="_blank">check my other pens</a>
</body>
</html>