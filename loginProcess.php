<?php
include "dbConfig.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from users WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
$result = $db->query($sql);
$row = $result->fetch_assoc();
if (!$result->num_rows == 1) {
    echo "<p>Invalid username/password combination</p>";
} else {
    // do stuffs
    $newsql = "SELECT roles.roleName FROM roles INNER JOIN userroles ON roles.roleID=userroles.userID WHERE userroles.userId=".$row['userID'];
    $result = $db->query($newsql);
    $newrow = $result->fetch_assoc();
    setcookie('user-access-level', $newrow['roleName']);
    setcookie('user', $row['userID']);
    header("Location: loggedIn.php");
}
?>
