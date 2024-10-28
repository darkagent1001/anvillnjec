<?php

    require_once __DIR__ . '/templates/header.php';

    if(isset($_SESSION['user'])){

        $userId = $_SESSION['user']['id'];

    }

    $stmt = $mysqli -> query("SELECT *, c.id AS comment_id, u.id AS commenter_id FROM comments c LEFT JOIN users u ON c.user_id = u.id;");
    $comments = $stmt -> fetch_all(MYSQLI_ASSOC);




    if(isset($_REQUEST['send_comment'])){

        $commentContent = $_REQUEST['comment_content'];
        $date = date('Y-m-d');

        if(!isset($_SESSION['errors'])){

            if(!isset($_SESSION['is_prepared'])){

                $stmt2 = $mysqli -> query("INSERT INTO `comments` (content, user_id, created_at) VALUES ('$commentContent', '$userId', '$date');");

            } else {

                $stmt2 = $mysqli -> prepare("INSERT INTO `comments` (content, user_id, created_at) VALUES (?, ?, ?);");
                $stmt2 -> bind_param('sss', $commentContent, $userId, $date);
                $stmt2 -> execute();

                header('location: ' . $_SERVER['PHP_SELF']);
                die();

            }

        }


    }

    if(isset($_REQUEST['delete_comment'])){

        $commentId = $_REQUEST['comment_id'];

        if(!isset($_SESSION['is_prepared'])){

            $stmt2 = $mysqli -> query("SELECT `id`, `user_id` FROM `comments` WHERE `id` = '$commentId';");
            $result = $stmt2 -> fetch_assoc();

        } else {

            $stmt2 = $mysqli -> prepare("SELECT `id`, `user_id` FROM `comments` WHERE `id` = ?;");
            $stmt2 -> bind_param('i', $commentId);
            $stmt2 -> execute();
            $result = $stmt2 -> get_result() -> fetch_assoc();

        }

        if($result['user_id'] != $userId){

            $_SESSION['errors']['Unauthorized user'] = 'Permession denied for deleting the comment.';

        }

        if(!isset($_SESSION['errors'])){

            if(!isset($_SESSION['is_prepared'])){

                $stmt2 = $mysqli -> query("DELETE FROM `comments` WHERE id = '$commentId';");

            } else {

                $stmt2 = $mysqli -> prepare("DELETE FROM `comments` WHERE id = ?;");
                $stmt2 -> bind_param('i', $commentId);
                $stmt2 -> execute();

            }

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
                <?php foreach($comments as $comment){ ?>
                    <div class="card w-full">
                        <div class="card-content">
                            <h2 class="card-title"><?= $comment['username'] . ' Says:' ?></h2>
                            <p class="text-dimmed mt-3"><?= $comment['content'] ?></p>
                            <?php if(isset($_SESSION['user']) && $comment['user_id'] == $_SESSION['user']['id']){ ?>
                                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                                    <input name="comment_id" type="text" value="<?= $comment['comment_id'] ?>" hidden>
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