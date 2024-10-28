<?php

class FieldsCleaner {

    function __construct(){

        if(isset($_REQUEST)){

            $_SESSION['old_inputs'] = $_REQUEST;

        } else {

            unset($_SESSION['old_inputs']);

        }
        
    }

    public function old($input){

        if(isset($_SESSION['old_inputs']) && count($_SESSION['old_inputs'])){

            return $_SESSION['old_inputs'][$input];

        }

        return '';

    }

    public function cleanInput($input){

        $str = preg_replace('/\x00|<[^>]*>?/', '', trim($input));
        return str_replace(["'", '"'], ['&#39;', '&#34;'], $str);

    }

    public function required($inputs){

        $req = $_REQUEST;

        foreach($inputs as $input){

            if(empty($req[$input])){

                $srch = array_search($req[$input], $req);

                $_SESSION['errors']['Empty reuqired input'] = $srch . ' is required.';

                break;

            }

        }

    }

    public function validateEmail($input){

        $input = $this -> cleanInput($input);

        if(filter_var($input, FILTER_VALIDATE_EMAIL)){

            $_SESSION['errors']['Invalid email address'] = 'Please check your email validate.';

        }

    }

    public function matchPasswords($password, $passwordConfirmation){

        $password = $this -> cleanInput($password);
        $passwordConfirmation = $this -> cleanInput($passwordConfirmation);

        if($password != $passwordConfirmation){

            $_SESSION['errors']['Password match error'] = 'Your password and password confirmation doesn\'t match.';

        }

    }

}