<!DOCTYPE html>
<html>
<head>
    <title>admin panel</title>
<head>
<body>
<?php
    if(isset($_COOKIE['user-access-level'])) {
        switch($_COOKIE['user-access-level']){
            case "clubAdmin":
                clubAdmin();
                break;
            case "nkpag":
                nkpag();
                break;
        }
    } else {
        header("Location: loggedIn.php");
    }

    function clubAdmin(){
        include "createclub.php";
    }

    function nkpag(){
        echo "nkpag admin panel";
    }
?>
</body>
</html>
