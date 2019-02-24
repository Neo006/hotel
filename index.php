<?php
require('./Login.php');
$login = new Login;

if(isset($_POST['username']) && isset($_POST['password'])) {
    $login->check($_POST['username'],$_POST['password']);
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>