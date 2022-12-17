<?php
$login = filter_var(trim($_POST['Login']), FILTER_SANITIZE_SPECIAL_CHARS);
$name = filter_var(trim($_POST['Name']), FILTER_SANITIZE_SPECIAL_CHARS);
$pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_var(trim($_POST['Email']), FILTER_SANITIZE_SPECIAL_CHARS);
if ($_POST["Login"] == "" || $_POST["password"] == "" || $_POST["Name"] == '' || $_POST["Email"] == '') {
    header("Location: index.php");
    exit();
}
if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "Length of the login is prohibitted";
    exit();
} else if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "Length of the name is prohibitted";
    exit();
} else if (mb_strlen($pass) < 2 || mb_strlen($pass) > 90) {
    echo "Length of the password is prohibitted, from 2 to 90 symbols";
    exit();
} else if (mb_strlen($email) < 2 || mb_strlen($email) > 90) {
    echo "Length of the password is prohibitted, from 2 to 90 symbols";
    exit();
}

$pass = md5($pass . "asdasadsa");
$mysql = new mysqli('localhost', 'root', 'Sloshed82003!', 'registerbd');
$mysql->query("INSERT INTO users (Name, Email, Login, Password) VALUES('$name','$email','$login','$pass')");
$mysql->close();
header("Location: /test/login.php");
