<?php
function sanitize($input){
    $santizedInput = trim($input);
    $santizedInput = stripslashes($santizedInput);
    $santizedInput = htmlspecialchars($santizedInput);
    return $santizedInput;
}

if ($_SERVER['REQUEST_METHOD']=== $_POST){
    $username = sanitize($_POST['username']);
    $password = sanitize($_POST['password']);
    $errors = [];
    if ($email === "xyz@gmail.com"){
        $errors[] = "xyz@gmail.com is not a valid email address";
    }elseif(strlen($password) < 8 ){
        $errors[] = "password must be greater than 8 characters";
    }elseif (strlen($password) > 15 ){
        $errors[] = "password must not be greater than 15 characters";
    }else{
        $success = "Successfully Registered";
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <h2>Login</h2><br>
        <?php
             if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']){
                $name = $_SESSION['user_info']['name'];
            }
        ?>
        <form method="POST" action="">
            <label for="username">Username:
                <input type="text" id="username" name="username" required>
            </label><br>
            <label for="password">Password:
                <input type="password" id="password" name="password" required>
            </label><br>
            <label for="" >
                <button type="submit" id="submit" onclick="submit()">Submit</button>
            </label><br>
        </form>
    </body>
</html>