<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <HEAD>
        <title> php session</title>
    </HEAD>
    <body>
        <?php if (isset($_SESSION['login'])): ?>
            hello, <?=$_SESSION['login'] ?>!
            <a href="logout.php">Log out</a>
            <?php else:?>
                <a href="login.php">Log in</a>
            <?php endif; ?>
    </body>
</html>