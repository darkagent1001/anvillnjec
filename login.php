<?php 

    require_once __DIR__ . '/templates/header.php';
    require_once __DIR__ . '/Classes/FieldsCleaner.php';
    require_once __DIR__ . '/Classes/UserController.php';

    $fieldsCleaner = new FieldsCleaner;
    $userController = new UserController;

    $userController -> redirectUser();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $fieldsCleaner -> required(['username', 'password']);

        if(!isset($_SESSION['is_prepared'])){

            $stmt = $mysqli -> query("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password' LIMIT 1;");

        } else {

            $stmt = $mysqli -> prepare("SELECT * FROM `users` WHERE `username` = ? AND `password` = ? LIMIT 1;");
            $stmt -> bind_param('ss', $username, $password);
            $stmt -> execute();
            $stmt -> store_result();

        }

        if(!$stmt -> num_rows){

            $_SESSION['errors']['Incorrect informations'] = 'Your username or password is incorrect.';

        }

        if(!isset($_SESSION['errors'])){

            $userController -> login($username);

            header('location: index.php');
            die();

        }

    }

    $mysqli -> close();

?>

    <?php include_once __DIR__ . '/templates/alerts/errors.php' ?>

    <!-- Login form -->
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="card max-w-[450px] my-40">
        <div class="card-content">
            <h1 class="card-title text-2xl md:text-3xl">Welcome back!</h1>
            <p class="text-dimmed mt-3">Enter your credentials to access your account.</p>
            <div class="mt-10 grid gap-8">
                <div>
                    <label for="username" class="inline-block mb-3">Username:</label>
                    <input required type="text" name="username" id="username" value="<?= $fieldsCleaner -> old('username'); ?>" class="form-input w-full dark:bg-midnight-700 dark:border-midnight-700">
                </div>
                <div>
                    <label for="password" class="inline-block mb-3">Password:</label>
                    <input required type="password" name="password" id="password" value="<?= $fieldsCleaner -> old('password'); ?>" class="form-input w-full dark:bg-midnight-700 dark:border-midnight-700">
                </div>
            </div>
            <button class="mt-10 bg-primary-500 shadow-[0px_10px_5px_0px_rgba(255,255,255,0.10)_inset] dark:shadow-[0px_4px_6px_-5px_#6366F1,0px_8px_6px_-2px_rgba(99,102,241,0.20),0px_10px_5px_0px_rgba(255,255,255,0.10)_inset] text-white-50 hover:bg-primary-400 px-8">Login</button>
        </div>
    </form>
    <!-- Login form -->

<?php require_once __DIR__ . '/templates/footer.php'; ?>
