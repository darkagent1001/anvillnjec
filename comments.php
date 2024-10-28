<?php

    require_once __DIR__ . '/templates/header.php';

    $stmt = $mysqli -> query("SELECT *, u.id AS commenter_id FROM `comments` c INNER JOIN `users` u ON u.id = user_id;");
    $result = $stmt -> fetch_all(MYSQLI_ASSOC);

    if(isset($_SESSION['user']['id'])){

        $userId = $_SESSION['user']['id'];

    }

    if(isset($_REQUEST['send_comment'])){
        
        $commentContent = $_REQUEST['comment_content'];
        $date = date('Y-m-d');

        if(!isset($_SESSION['errors'])){

            $stmt2 = $mysqli -> query("INSERT INTO `comments` (content, user_id, created_at) VALUES ('$commentContent', '$userId', '$date');");

            header('location: ' . $_SERVER['PHP_SELF']);

        }

    }

    if(isset($_REQUEST['delete_comment'])){

        $commentId = $_REQUEST['comment_id'];

        $stmt2 = $mysqli -> query("SELECT `id`, `user_id` FROM comments WHERE id = '$commentId';");
        $result2 = $stmt2 -> fetch_assoc();

        if($result2['user_id'] != $_SESSION['user']['id']){

            $_SESSION['errors']['Unauthorized user'] = 'Permession denied for deleting this comment.';

        }

        if(!isset($_SESSION['errors'])){

            $stmt2 = $mysqli -> query("DELETE FROM `comments` WHERE `id` = '$commentId';");
            
            header('location: ' . $_SERVER['PHP_SELF']);
            die();

        }

    }

    $mysqli -> close();

?>

    <?php include_once __DIR__ . '/templates/alerts/errors.php'; ?>

    <section class="container py-8">
        <h1 class="text-3xl font-semibold md:text-4xl">Comments:</h1>
        <?php if(isset($_SESSION['user'])){ ?>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="mt-14 grid *:me-auto">
                <textarea name="comment_content" id="comment-content" class="form-input" cols="30" rows="5" placeholder="Type your comment here..."></textarea>
                <button name="send_comment" class="mt-8 bg-primary-500 shadow-[0px_10px_5px_0px_rgba(255,255,255,0.10)_inset] dark:shadow-[0px_4px_6px_-5px_#6366F1,0px_8px_6px_-2px_rgba(99,102,241,0.20),0px_10px_5px_0px_rgba(255,255,255,0.10)_inset] text-white-50 hover:bg-primary-400 px-8">
                    Send
                </button>
            </form>
        <?php } ?>
        <?php if($stmt -> num_rows){ ?>
            <div class="mt-14 grid gap-8">
                <?php foreach($result as $comment){ ?>
                    <div class="card w-full">
                        <div class="card-content">
                            <h2 class="card-title"><?= $comment['username'] . ' Says:' ?></h2>
                            <p class="text-dimmed mt-3"><?= $comment['content'] ?></p>
                            <?php if(isset($_SESSION['user']) && $comment['user_id'] == $_SESSION['user']['id']){ ?>
                                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                                    <input name="comment_id" type="text" value="<?= $comment['id'] ?>" hidden>
                                    <button type="submit" name="delete_comment" onclick="return confirm('Are you sure?')" class="bg-error-500 mt-10 text-white-50 hover:bg-error-400 shadow-[0px_10px_5px_0px_rgba(255,255,255,0.10)_inset] dark:shadow-[0px_4px_6px_-5px_#e94a4a,0px_8px_6px_-2px_rgba(233,74,74,0.20),0px_10px_5px_0px_rgba(255,255,255,0.10)_inset]">
                                        Delete
                                    </button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        </section>

<?php

    require_once __DIR__ . '/templates/footer.php';

?>