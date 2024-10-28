<?php

class UserController {

    public function login($username){

        global $mysqli;

        $stmt = $mysqli -> query("SELECT * FROM `users` WHERE `username` = '$username' LIMIT 1;");
        $user = $stmt -> fetch_assoc();

        $_SESSION['user']['id'] = $user['id'];
        $_SESSION['user']['username'] = $user['username'];
        $_SESSION['user']['password'] = $user['password'];
        $_SESSION['user']['bio'] = $user['bio'];

        $mysqli -> close();

        return true;

    }

    public function isLoggedIn(){

        if(isset($_SESSION['user'])){

            return true;

        }

        return false;

    }


    public function logout($location = 'index.php'){

        unset($_SESSION['user']);

        header('location: ' . $location);
        die();

    }

    public function redirectUser($location = 'index.php'){

        if($this -> isLoggedIn()){

            header('location: ' . $location);
            die();

        }

    }

    public function redirectGuest($location = 'index.php'){

        if(!$this -> isLoggedIn()){

            header('location: ' . $location);
            die();

        }

    }

}