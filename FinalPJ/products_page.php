<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
<script>
window.onload = function () {
    var url = document.location.href,
        params = url.split('?')[1].split('&'),
        data = {}, tmp;
    for (var i = 0, l = params.length; i < l; i++) {
         tmp = params[i].split('=');
         data[tmp[0]] = tmp[1];
    }
    document.getElementById('here').innerHTML = data.name;
}
</script>
<?php include_once('path.php');?>
<?php $class = new Product(1)?>
<?php
require("header.php");
?>
    <section class="cont">
        <div class="big-card">
            <img src="" alt="" width="600px" height="560px" class="pimg">
            <div class="infobox">
                <div class="titles">Description:<br></div>
                <button id="like"><i class="fa fa-heart"></i></button>
                <p class="descr"><?php echo $class->getDesc()?></p>
                <div class="sizeselector">
                    your size:
                    <select name="size" id="size">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                </div>
                <div class="pr"><?php echo $class->getPrice()?>&#8376;</div>
            </div>
        </div>
        <button class="btn">ADD TO CART</button>
        <h1>may be interested in</h1>
        <div class="recomendations">
            <div class="rec_card">
                <a href="products_page.php" class="product">
                    <?php $class = new Product(1)?>
                    <div class="pr__img">
                        <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                    </div>
                    <div class="textS">
                        <p class="option"><?php echo $class->getDesc()?></p>
                        <div class="cat_words"><?php echo $class->getCat()?></div>
                        <div class="price">
                            <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                            <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="rec_card">
                <a href="products_page.php" class="product">
                    <?php $class = new Product(1)?>
                    <div class="pr__img">
                        <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                    </div>
                    <div class="textS">
                        <p class="option"><?php echo $class->getDesc()?></p>
                        <div class="cat_words"><?php echo $class->getCat()?></div>
                        <div class="price">
                            <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                            <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="rec_card">
                <a href="products_page.php" class="product">
                    <?php $class = new Product(1)?>
                    <div class="pr__img">
                        <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                    </div>
                    <div class="textS">
                        <p class="option"><?php echo $class->getDesc()?></p>
                        <div class="cat_words"><?php echo $class->getCat()?></div>
                        <div class="price">
                            <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                            <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="rec_card">
                <a href="products_page.php" class="product">
                    <?php $class = new Product(1)?>
                    <div class="pr__img">
                        <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                    </div>
                    <div class="textS">
                        <p class="option"><?php echo $class->getDesc()?></p>
                        <div class="cat_words"><?php echo $class->getCat()?></div>
                        <div class="price">
                            <span class="old"><?php echo $class->getPrice()?>&#8376;</span>
                            <span class="new"><?php echo $class->getPrice()?>&#8376;</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="rec_card">
                <a href="products_page.php" class="product">
                    <?php $class = new Product(1)?>
                    <div class="pr__img">
                        <img width="180px" height="200px" src = <?php echo $class->getPathImg()?>>
                    </div>
                    <div class="textS">
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
        <a href="index.php"><button class="btn">MORE</button></a>
    </section>
    <footer><?php
require("footer.php");
?></footer>

</body>
</html>