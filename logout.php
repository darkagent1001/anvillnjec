<?php

    require_once __DIR__ . '/templates/header.php';
    require_once __DIR__ . '/Classes/UserController.php';

    $userController = new UserController;

    $userController -> redirectGuest();
    $userController -> logout();

