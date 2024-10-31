<?php


    require_once __DIR__ . '/../config/db-connection.php';

    // Start using sessions
    session_start();


?>
<!DOCTYPE html>
<html lang="<?= $config['app_lang'] ?>" dir="<?= $config['app_dir'] ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $config['app_assets'] . 'css/tailwind.css' ?>">
    <title><?= $config['app_name'] ?></title>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <a href="index.php" class="navbar-title">
            <img src="<?= $config['app_assets'] . 'images/logo.png' ?>" alt="Logo" class="size-6 inline-block">
            <?= $config['app_name'] ?>
        </a>
        <div id="main-navbar" class="navbar-collapse">
            <div class="navbar-list">
                <a href="index.php" class="navbar-link">Home</a>
                <a href="index.php#examples" class="navbar-link">Examples</a>
                <a href="use-prepared.php" class="navbar-link">
                    <?php if(isset($_SESSION['is_prepared']) && $_SESSION['is_prepared']){ ?>
                        Unuse prepared SQL
                    <?php } else { ?>
                        Use prepared SQL
                    <?php }  ?>
                </a>
                <button id="theme-toggler" class="navbar-link p-0 me-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6 fill-black dark:fill-white-50" fill="none" viewBox="0 0 24 24">
                        <path d="M11.75 7.75V7a.75.75 0 0 0-.75.75h.75Zm0 8.5H11c0 .414.336.75.75.75v-.75ZM18.5 12a6.5 6.5 0 0 1-6.5 6.5V20a8 8 0 0 0 8-8h-1.5ZM12 18.5A6.5 6.5 0 0 1 5.5 12H4a8 8 0 0 0 8 8v-1.5ZM5.5 12A6.5 6.5 0 0 1 12 5.5V4a8 8 0 0 0-8 8h1.5ZM12 5.5a6.5 6.5 0 0 1 6.5 6.5H20a8 8 0 0 0-8-8v1.5Zm3.5 6.5c0 1.945-1.547 3.5-3.429 3.5V17C14.805 17 17 14.75 17 12h-1.5Zm-3.429-3.5c1.882 0 3.429 1.555 3.429 3.5H17c0-2.75-2.195-5-4.929-5v1.5Zm0-1.5h-.321v1.5h.321V7Zm0 8.5h-.321V17h.321v-1.5Zm.429.75v-8.5H11v8.5h1.5Z"></path>
                    </svg>                      
                </button>
            </div>
            <div class="navbar-list md:ms-auto">
                <?php if(isset($_SESSION['user'])){ ?>
                    <a href="#" class="navbar-link"><?= $_SESSION['user']['username'] ?></a>
                    <a href="logout.php" class="navbar-link">Logout</a>
                <?php } else { ?>
                    <a href="login.php" class="navbar-link">Login</a>
                    <a href="register.php" class="navbar-link">Register</a>
                <?php } ?>
            </div>
        </div>
        <button data-target="#main-navbar" class="navbar-button">
            <svg class="size-7" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 5.75H19.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 18.25H19.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 12H19.25"></path>
            </svg>              
        </button>
    </nav>
    <!-- Navbar -->



