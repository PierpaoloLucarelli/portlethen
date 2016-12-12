<?php
include "dbConfig.php";
$username = $_POST['username'];
$password = $_POST['password'];
$stmt = $db->prepare("SELECT * from users WHERE username LIKE ? AND password LIKE ? LIMIT 1");
$stmt->bind_param('ss', $username, $password);

$stmt->execute();
$result = $stmt->get_result();

$row = $result->fetch_assoc();
if (!$result->num_rows == 1) {
    echo "<p>Invalid username/password combination</p>";
} else {
    // do stuffs
    $newsql = "SELECT roles.roleName FROM roles INNER JOIN userroles ON roles.roleID=userroles.roleID WHERE userroles.userId=".$row['userID'];
    $result = $db->query($newsql);
    $newrow = $result->fetch_assoc();
    setcookie('user-access-level', $newrow['roleName']);
    setcookie('user', $row['userID']);
    header("Location: loggedIn.php");
}
?>
