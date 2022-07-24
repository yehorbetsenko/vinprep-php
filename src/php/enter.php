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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Poppins:wght@500;600;700&family=Work+Sans:wght@500;600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/php.css">
    <title>Sign in</title>
</head>
<body>
    
    <form class="form" action="vendor/signin.php" method="post">
        <label for="">Login</label>
        <input type="text" name="login">
        <label for="">Password</label>
        <input type="password" name="password">
        <button type="submit">Enter</button>
        <p class="form__register">Don't have an accont yet? <a href="register.php">Register</a></p>
        <?php
                if($_SESSION['message']) {
                    echo '<p class="message">' .$_SESSION['message']. '</p>';
                }
                unset($_SESSION['message']); 
        ?>
    </form>

</body>
</html>