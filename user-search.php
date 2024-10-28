<?php

    require_once __DIR__ . '/templates/header.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $username = $_REQUEST['username'];

        if(!isset($_SESSION['errors'])){

            $stmt = $mysqli -> query("SELECT * FROM `users` WHERE `username` = '$username'");
            $result = $stmt -> fetch_assoc();

            $mysqli -> close();

        }

    }

?>

    <section class="container text-center mt-14">
        <h1 class="text-3xl md:text-4xl font-medium">Search for user page</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="text" name="username" placeholder="Username" class="form-input mt-8">
            <button class="mt-3 bg-primary-500 shadow-[0px_10px_5px_0px_rgba(255,255,255,0.10)_inset] dark:shadow-[0px_4px_6px_-5px_#6366F1,0px_8px_6px_-2px_rgba(99,102,241,0.20),0px_10px_5px_0px_rgba(255,255,255,0.10)_inset] text-white-50 hover:bg-primary-400 px-8">
                Search
            </button>
        </form>
        <?php if($_SERVER['REQUEST_METHOD'] == 'POST' && $stmt -> num_rows){ ?>
            <div class="card max-w-[350px] mt-14">
                <div class="card-content">
                    <p><?= $result['username'] ?></p>
                    <p class="mt-3"><?= $result['bio'] ?></p>
                </div>
            </div>
        <?php } ?>
    </section>

<?php

    require_once __DIR__ . '/templates/footer.php';

?>