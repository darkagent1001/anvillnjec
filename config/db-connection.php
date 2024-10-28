<?php

    require_once __DIR__ . '/config.php';

    $mysqli = new mysqli($config['db_host'], $config['db_username'], $config['db_password'], $config['db_name']);