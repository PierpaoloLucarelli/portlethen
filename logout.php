<?php
    session_start();
    // if(isset($_SESSION['user-access-level'])){
    //     setcookie('user-access-level', '', time()-60*60*24*90, '/', '', 0, 0);
    //     unset($_SESSION['user-access-level']);
    // }
    unset($_COOKIE['user']);
    unset($_COOKIE['user-access-level']);
    setcookie('user', null, -1);
    setcookie('user-access-level', null, -1);
    session_destroy();
    header('location:./');
?>
