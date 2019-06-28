<?php
   $login = filter_var( trim($_POST['login']),
   FILTER_SANITIZE_STRING);
  
   $password = filter_var( trim($_POST['password']),
   FILTER_SANITIZE_STRING);

   $password = md5($password."eewd2ewd2s");

   //connect
   require "connect.php";

   //push
    $result = $mysql -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
    $user = $result -> fetch_assoc();
    if ( count($user) == 0 ) {
        echo "Такой пользователь не найден";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600, "/");
   
    //close
   $mysql -> close();

   header('Location: /');