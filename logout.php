<?php
    session_start();
    if(isset($_SESSION['access_level'])){
        unset($_SESSION['access_level']);
    }
    header('location:./');
?>
