<?php
require_once "./Database.php";

class Login extends Database {
    public function check($user, $pass) {
        $username = trim($user);
        $password = trim($pass);

        if($username != '' && $password != '') {
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($this->connect, $sql);
            
            if(mysqli_fetch_assoc($result) == '') {
                echo "Username or Password is incorrect!";
            }
            else {
                header("Location: room_list.php");
            }
        }
        else {
            echo('The username and password fields are required!');
        }
    } 
}