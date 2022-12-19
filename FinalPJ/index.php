<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/aa8c4c51ae.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">
    <script src="js/script.js"></script>
    <title>SDU Shop</title>
</head>
<body>
    <header class="sticky">
        <?php
            require("header.php")
        ?>
    </header>
    <!-- <header class="header-mobile">
        <div class="menu-hide-btn">
            <div class="poloska"></div>
            <div class="poloska"></div>
            <div class="poloska"></div>
        </div>
        <span class="title">SDU SHOP</span>
        <a href="" class="basket"><i class="fa-light fa-basket-shopping"></i></a>
    </header> -->
    <section>
        <div class="container">
            <?php include_once('path.php');?>
            <div class="cont_wrap">
            <div class="card">
                    <a href="products_page.php" class="product">
                        <?php $class = new Product(1)?>
                        <div class="pr__img">
                            <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                        </div>
                        <div class="text1">
                            <p class="option"><?php echo $class->getDesc()?></p>
                            <div class="cat_words"><?php echo $class->getCat()?></div>
                            <div class="price">
                                <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                                <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="products_page.php" class="product">
                        <?php $class = new Product(1)?>
                        <div class="pr__img">
                            <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                        </div>
                        <div class="text1">
                            <p class="option"><?php echo $class->getDesc()?></p>
                            <div class="cat_words"><?php echo $class->getCat()?></div>
                            <div class="price">
                                <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                                <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="products_page.php" class="product">
                        <?php $class = new Product(1)?>
                        <div class="pr__img">
                            <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                        </div>
                        <div class="text1">
                            <p class="option"><?php echo $class->getDesc()?></p>
                            <div class="cat_words"><?php echo $class->getCat()?></div>
                            <div class="price">
                                <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                                <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="products_page.php" class="product">
                        <?php $class = new Product(1)?>
                        <div class="pr__img">
                            <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                        </div>
                        <div class="text1">
                            <p class="option"><?php echo $class->getDesc()?></p>
                            <div class="cat_words"><?php echo $class->getCat()?></div>
                            <div class="price">
                                <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                                <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="products_page.php" class="product">
                        <?php $class = new Product(1)?>
                        <div class="pr__img">
                            <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                        </div>
                        <div class="text1">
                            <p class="option"><?php echo $class->getDesc()?></p>
                            <div class="cat_words"><?php echo $class->getCat()?></div>
                            <div class="price">
                                <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                                <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="products_page.php" class="product">
                        <?php $class = new Product(1)?>
                        <div class="pr__img">
                            <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                        </div>
                        <div class="text11">
                            <p class="option"><?php echo $class->getDesc()?></p>
                            <div class="cat_words"><?php echo $class->getCat()?></div>
                            <div class="price">
                                <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                                <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="products_page.php" class="product">
                        <?php $class = new Product(1)?>
                        <div class="pr__img">
                            <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                        </div>
                        <div class="text1">
                            <p class="option"><?php echo $class->getDesc()?></p>
                            <div class="cat_words"><?php echo $class->getCat()?></div>
                            <div class="price">
                                <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                                <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="products_page.php" class="product">
                        <?php $class = new Product(1)?>
                        <div class="pr__img">
                            <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                        </div>
                        <div class="text1">
                            <p class="option"><?php echo $class->getDesc()?></p>
                            <div class="cat_words"><?php echo $class->getCat()?></div>
                            <div class="price">
                                <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                                <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="products_page.php" class="product">
                        <?php $class = new Product(1)?>
                        <div class="pr__img">
                            <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                        </div>
                        <div class="text1">
                            <p class="option"><?php echo $class->getDesc()?></p>
                            <div class="cat_words"><?php echo $class->getCat()?></div>
                            <div class="price">
                                <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                                <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="products_page.php" class="product">
                        <?php $class = new Product(1)?>
                        <div class="pr__img">
                            <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                        </div>
                        <div class="text1">
                            <p class="option"><?php echo $class->getDesc()?></p>
                            <div class="cat_words"><?php echo $class->getCat()?></div>
                            <div class="price">
                                <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                                <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="products_page.php" class="product">
                        <?php $class = new Product(1)?>
                        <div class="pr__img">
                            <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                        </div>
                        <div class="text1">
                            <p class="option"><?php echo $class->getDesc()?></p>
                            <div class="cat_words"><?php echo $class->getCat()?></div>
                            <div class="price">
                                <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                                <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="products_page.php" class="product">
                        <?php $class = new Product(1)?>
                        <div class="pr__img">
                            <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                        </div>
                        <div class="text11">
                            <p class="option"><?php echo $class->getDesc()?></p>
                            <div class="cat_words"><?php echo $class->getCat()?></div>
                            <div class="price">
                                <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                                <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="catalog">
                <h2>Categories:</h2>
                <hr><h3>hats</h3>
                <hr><h3>outerwear</h3>
                <hr><h3>pants</h3>
            </div>

    <!-- <?php
    error_reporting(0);

    if ($_COOKIE['user'] == '') :

    ?>
            <div class="profile">
                <label for="">Name:</label>
                <h1>You have not entered to account</h1>
                <br>
                <label for="">Email:</label>
                <h1>You have not entered to account</h1>
                <a href="index.php">homepage</a>
            </div>
    <?php else : ?>
            <div class="profile">
                <label for="">Name:</label>
                <?= $_COOKIE['user'] ?>
                <br>
                <label for="">Email:</label>
                <?= $_COOKIE['user1'] ?>
                <a href="index.php">homepage</a>
            </div>
    <?php endif; ?> -->
        </div>
        
    </section>
<footer>
    <?php
        require("footer.php")
    ?>
</footer>
</body>
</html>
