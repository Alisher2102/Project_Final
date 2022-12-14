<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDU shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital@1&family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <?php
    error_reporting(0);

    if ($_COOKIE['user'] == '') :
    ?>

        <header>
            <!-- <link rel="stylesheet" href="styles.css"> -->
            <div class="header">

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
            </div>

        </header>
    <?php else : ?>

        <header>
            <!-- <link rel="stylesheet" href="styles.css"> -->
            <div class="navbar">
                <img src="logo-removebg-preview.png" alt="">
                <div style="display: flex; justify-content: space-between;align-items: center; width: 350px;">
                    <a href="site.php" class="title">SDU shop</a>
                    <input type="text" onkeyup="searcher()" class="searcher" placeholder="Search..." name="" id="">
                </div>
                <div class="categories">
                    <a href="">Products</a>
                    <a href="categories.php">Categories</a>
                </div>
                <div class="prof">
                    <a href="cart.php"><i style="font-size:28px" class="fa">&#xf291;</i> Basket</a>
                    <a href="exit.php"><i class="fa fa-fw fa-user"></i>Log out</a>
                    <a href="profile.php"><i class="fa fa-male"></i> <?= $_COOKIE['user'] ?></a>
                </div>
                <a href="javascript:void(0)" class="icon" onclick="adapt()"><i class="fa fa-bars"></i></a>
            </div>

        </header>
    <?php endif; ?>
