<?php

    session_start();
    require_once 'connect.php';

    
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    
    
    if ($password === $password_confirm) {
        
        $password = md5($password);
        
        $sql = "INSERT INTO `users` (`email`, `login`, `password`) VALUES ('$email', '$login', '$password')";
        
        mysqli_query($connect, $sql);

        $_SESSION['message'] = 'Successful registration!';
        header('Location: ../enter.php');


    } else {
        $_SESSION['message'] = "Passwords don't match";
        header('Location: ../register.php');
    }

?>