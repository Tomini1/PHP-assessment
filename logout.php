<?php
session_start();
if (isset($_SESSION['username'])){
    header('Location: login.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['logout']))
    session_destroy();
    header('Location: login.php');
    exit();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            LogOut
        </title>
    </head>
    <body>
        <p>Welcome, <?php echo $_SESSION['username']; ?></p>
        <form method="POST">
            <label for="">Logout
                <input type="submit" name="logout" value="Logout">
            </label>
        </form>
    </body>
</html>