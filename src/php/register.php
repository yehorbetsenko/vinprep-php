<?php
    session_start();
    
    // if($_SESSION['user']) {
    //     header('Location: profile.php');
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/php.css">
    <title>Register</title>
</head>
<body>
    
    <form class="form form-register" action="vendor/signup.php" method="post">
        <label for="">E-mail</label>
        <input type="email" name="email">
        <label for="">Login</label>
        <input type="text" name="login">
        <label for="">Password</label>
        <input type="password" name="password">
        <label for="">Confirm password</label>
        <input type="password" name="password_confirm">
        <button type="submit">Register</button>
        <p class="form__register">Already have an account? <a href="enter.php">Enter</a></p>
        <?php
                if($_SESSION['message']) {
                    echo '<p class="message message-red">' .$_SESSION['message']. '</p>';
                }
                unset($_SESSION['message']); 
        ?>
    </form>

</body>
</html>