<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="categoriesstyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Categories</title>
</head>
<body>
  <?php
    require("header.php");
  ?>
  <h1 style="text-align:center">All Categories</h1>  
  <div  class="main">
    <div class="category">
      <img src="https://content-us-5.content-cms.com/af9094ac-4ec2-4ea9-8480-e7ef2c8369de/dxresources/26d5/26d5f954-5958-4a4d-94ab-8da4c1c089d7.jpg?resize=258px%3A344px&crop=258%3A344%3B0%2C0" alt="">
      <div class="categoryName">Men</div>
    </div>
    <div class="category">
      <img src="https://www.sussan.com.au/media/catalog/product/0/3/035721_811_01.jpg?optimize=low&bg-color=255,255,255&fit=bounds&height=572&width=480&canvas=480:572" alt="">
      <div class="categoryName">Women</div>
    </div>
    <div class="category">
      <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/853d909a-2075-4ada-b132-c403a0213460/paris-saint-germain-2022-23-away-younger-football-kit-zxjlGR.png" alt="">
      <div class="categoryName">Kids</div>
    </div>
  </div>
  <script src="categories.js"></script>
  <?php 
    require('footer.php');
  ?>
