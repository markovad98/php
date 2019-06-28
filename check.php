<?php
    $login = filter_var( trim($_POST['login']),
    FILTER_SANITIZE_STRING);

    $name = filter_var( trim($_POST['name']),
    FILTER_SANITIZE_STRING);

    $password = filter_var( trim($_POST['password']),
    FILTER_SANITIZE_STRING);

    if ( mb_strlen($login) < 5 || mb_strlen($login) > 90 ) {
        echo "Недопустимая длина логина";
        exit();
    } 
    
    else if ( mb_strlen($name) < 2 || mb_strlen($name) > 50 ) {
        echo "Недопустимая длина имени";
        exit();
    }

    else if ( mb_strlen($password) < 4 || mb_strlen($password) > 30 ) {
        echo "Недопустимая длина пароля";
        exit();
    }

    $password = md5($password."eewd2ewd2s");

    //connect
    require "connect.php";

    //push
    $mysql -> query("INSERT INTO `users` (`login`, `password`, `name`) VALUES ('$login', '$password', '$name')");

    //close
    $mysql -> close();

    header('Location: /');