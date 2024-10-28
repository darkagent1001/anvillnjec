

<?php if(isset($_SESSION['errors'])){ $errors = $_SESSION['errors']; ?>
    <div class="bg-error-500/30 rounded mx-auto w-full md:w-10/12 text-error-500 p-6 grid gap-4">
        <?php foreach($errors as $errorTitle => $errorContent){ ?>
            <p><?= $errorTitle . ' : ' . $errorContent ?></p>
        <?php } unset($_SESSION['errors']) ?>
    </div>
<?php } ?>