<?php

    require_once __DIR__ . '/templates/header.php';

    if(isset($_SESSION['is_prepared'])){

        unset($_SESSION['is_prepared']);

    } else {

        $_SESSION['is_prepared'] = true;

    }

    header('location: index.php');
    die();

?>