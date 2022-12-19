<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital@1&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    error_reporting(0);

    if ($_COOKIE['user'] == '') :

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
                <a href=""><i class="fa fa-male"></i> Profile</a>
            </div>
            <a href="javascript:void(0)" class="icon" onclick="adapt()"><i class="fa fa-bars"></i></a>
        </div>
        <div class="centralise">
            <div class="profile1">
                <p>You have not entered to account</p>
                <p><a href="site.php">Homepage</a></p>
            </div>
        </div>

    <?php else : ?>
        <link rel="stylesheet" href="styles.css">
        <div class="navbar">
            <img src="logo-removebg-preview.png" alt="">
            <div style="display: flex; justify-content: space-between;align-items: center; width: 300px;">
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
                <a href=""><i class="fa fa-male"></i> <?= $_COOKIE['user'] ?>
                </a>
            </div>
            <a href="javascript:void(0)" class="icon" onclick="adapt()"><i class="fa fa-bars"></i></a>
        </div>
        <div class="centralise">
            <div class="profile">
                <div>
                    <label for="">Name:</label>
                    <?= $_COOKIE['user'] ?>
                </div>
                <div>
                    <label for="">Login:</label>
                    <?= $_COOKIE['user0'] ?>
                </div>
                <div>
                    <label for="">Email:</label>
                    <?= $_COOKIE['user1'] ?>
                </div>

                <a href="site.php" style="margin-left: 10rem;">Homepage</a>

            </div>
        </div>
        <div class="centralise">
            <div class="profile1">
                <h1>Products:</h1>
                <?php
                $connect = mysqLi_connect('localhost', 'root', 'Sloshed82003!', 'registerbd');
                $id = $_COOKIE['ID'];
                $query = "SELECT name,image,price FROM items,carts where $id=carts.id and carts.item_id = items.id";
                $result = mysqli_query($connect, $query);
                while ($row = $result->fetch_assoc()) {
                    echo ("
          <div class=\"item\">
              <img class=\"picture\"
              src=\"$row[image]\">
              <div class=\"descr\">
                  <p id=\"name\">$row[name]</p>
              </div>

          </div>");
                }
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="index.js"></script>
    <?php endif; ?>

</body>

</html>
