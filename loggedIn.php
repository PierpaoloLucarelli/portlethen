<?php

    session_start();
    $access_level = $_COOKIE['user-access-level'];
    $_SESSION["access_level"] = $access_level;
    header("Location: index.php");

?>
