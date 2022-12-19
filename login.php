<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital@1&family=Roboto&display=swap" rel="stylesheet">
</head>


<body>

    <link rel="stylesheet" href="styles.css">
    <div class="navbar">
        <img src="logo-removebg-preview.png" alt="">
        <div style="display: flex; justify-content: space-between;align-items: center; width: 350px;">
            <a href="site.php" class="title">SDU shop</a>
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
    <h1 style="display:flex; justify-content:center; padding-top:5rem;font-family: 'Bebas Neue', cursive;">Log in</h1>
    <div class="reg">

        <form action="auth.php" method="post">
            <input type="text" name="Login" id="" placeholder="Login">
            <input type="password" name="password" id="" placeholder="Password">
            <button type="submit" name="submit">Log In</button>
        </form>
    </div>
    <h1 style="display:flex; justify-content:center; font-family: 'Bebas Neue', cursive;"> Don't have an account? <a href="site.php">Register now</a></h1>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="index.js"></script>
</body>


</html>
