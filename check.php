<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital@1&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <?php

    if ($_POST["Login"] == "" || $_POST["password"] == "" || $_POST["Name"] == '' || $_POST["Email"] == '') {
        header("Location: site.php");
        exit();
    }
    $login = filter_var(trim($_POST['Login']), FILTER_SANITIZE_SPECIAL_CHARS);
    $name = filter_var(trim($_POST['Name']), FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var(trim($_POST['Email']), FILTER_SANITIZE_EMAIL);
    ?>
    <link rel="stylesheet" href="styles.css">

    <div class="navbar">
        <img src="logo-removebg-preview.png" alt="">
        <div style="display: flex; justify-content: space-between;align-items: center; width: 350px;">
            <a href="" class="title">SDU shop</a>
            <input type="text" onkeyup="searcher()" class="searcher" placeholder="Search..." name="" id="">
        </div>
        <div class="categories">
            <a href="">Products</a>
            <a href="">Categories</a>
        </div>
        <div class="prof">
            <a href=""><i style="font-size:28px" class="fa">&#xf291;</i> Basket</a>
            <a href="exit.php"><i class="fa fa-fw fa-user"></i>Registration</a>
            <a href="profile.php"><i class="fa fa-male"></i> Profile</a>
        </div>
        <a href="javascript:void(0)" class="icon" onclick="adapt()"><i class="fa fa-bars"></i></a>
    </div>


    <h1 style="display:flex; justify-content:center; padding-top:5rem;font-family: 'Bebas Neue', cursive;">Sign up</h1>
    <div class="reg">
        <form action="check.php" method="post" autocomplete="off">
            <input type="text" name="Name" id="" placeholder="Name" autocomplete="none">
            <input type="email" name="Email" id="" placeholder="Email">
            <input type="text" name="Login" id="" placeholder="Login">
            <input type="password" name="password" id="" placeholder="Password" autocomplete="none">
            <button type="submit">Register</button>
        </form>
    </div>
    <div class="error">
        <?php
        if (mb_strlen($login) <= 5 || mb_strlen($login) >= 45) {
            echo "<h1>Length of the login is 5-45 characters </h1>";
            exit();
        } else if (mb_strlen($name) <= 3 || mb_strlen($name) >= 50) {
            echo "<h1>Length of the name is 3-50 characters </h1>";
            exit();
        } else if (mb_strlen($pass) <= 2 || mb_strlen($pass) >= 90) {
            echo "<h1>Length of the password is 2-90 characters </h1>";
            exit();
        } else if (mb_strlen($email) <= 2 || mb_strlen($email) >= 45) {
            echo "<h1>Length of the email is 2-45 characters </h1>";
            exit();
        }
        ?>
    </div>
    <h1 style="display:flex; justify-content:center;     font-family: 'Bebas Neue', cursive;">Already have an account?
        <a href="login.php"> Login now</a>
    </h1>
    <script src="index.js"></script>
    <?php
    $pass = md5($pass . "asdasadsa");
    $mysql = new mysqli('localhost', 'root', 'Sloshed82003!', 'registerbd');
    $mysql->query("INSERT INTO users (Name, Email, Login, Password) VALUES('$name','$email','$login','$pass')");
    $subject = "Test email to send from XAMPP";
    $body = "Hello $name! Thank you for registrating at our site. We hope you will enjoy it";
    $headers = "From: recker2014brr@gmail.com";
    if (mail($email, $subject, $body, $headers)) {
        echo "Email successfully sent to $email...";
    } else {
        echo "Email sending failed!";
    }
    $mysql->close();
    header("Location: /test/login.php");
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="index.js"></script>
</body>

</html>
