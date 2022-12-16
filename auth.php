<?php
$login = filter_var(trim($_POST['Login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$pass = md5($pass . "asdasadsa");
$mysql = new mysqli('localhost', 'root', 'Sloshed82003!', 'registerbd');
$result = $mysql->query("SELECT * FROM `users` WHERE `Login`='$login' AND `password`='$pass'");
$user = $result->fetch_assoc();
if (count($user) == 0) {
    echo "There is no such a user <br>";
    echo "<a href='login.php'>Go back</a>";
    exit();
}
setcookie('user', $user['Name'], time() + 3600, "/");
setcookie('user1', $user['Email'], time() + 3600, "/");
$mysql->close();
header("Location: /test/index.php");
