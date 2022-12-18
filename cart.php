<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cartstyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Roboto&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <title>Cart</title>
</head>

<body>
  <?php
    require("header.php");
  ?>
  <div style="display: flex; justify-content: center;">
  <div class="main">
    <div class="cart">
      <h1 id="cart" style="margin: 0px; padding: 20px; border-bottom: solid;border-width: 2px;border-color: rgb(210, 205, 205);">
        My cart</h1>
      <div class="items">
        <div class="item">
          <img id="photo"
            src="https://resources.cdn-kaspi.kz/shop/medias/sys_master/images/images/hd3/h02/33307092123678/qazaq-republic-50149-00972-s-nadpisu-bezevaa-s-100646050-1.jpg"
            alt="">
          <div class="descr">
            <p id="name">Beige hoodie</p>
            <div class="size">
              <p>Size:</p>
              <select name="sizes" style="border: none; background:aquamarine;">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
              </select>
            </div>
            <p class="price">20000₸</p>
          </div>
          <div style="text-align: right;align-self: self-start;">
            <button class="close" ><span class="material-symbols-outlined">cancel</span></button>
            <div class="quan">
              <p style="font-size:20px">Quantity:</p>
              <input type="number" class="quantity" value="1" min="1" max="99">
            </div>
          </div>
        </div>
        <div class="item">
          <img
            src="https://simg.marwin.kz/media/catalog/product/cache/41deb699a7fea062a8915debbbb0442c/q/a/qazaq_republic_3.jpeg"
            alt="">
          <div class="descr">
            <p id="name">Burgundy sweatshirt</p>
            <div class="size">
              <p>Size:</p>
              <select name="sizes" style="border: none; background:aquamarine;">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
              </select>
            </div>
            <p class="price">15000₸</p>
          </div>
          <div style="text-align: right;align-self: self-start;">
            <button class="close" ><span class="material-symbols-outlined">cancel</span></button>
            <div class="quan">
              <p style="font-size:20px">Quantity:</p>
              <input type="number" class="quantity" value="1" min="1" max="99">
            </div>
          </div>
        </div>
        <div class="item">
          <img
            src="https://simg.marwin.kz/media/catalog/product/cache/41deb699a7fea062a8915debbbb0442c/q/a/qazaq_republic_3.jpeg"
            alt="">
          <div class="descr">
            <p id="name">Burgundy sweatshirt</p>
            <div class="size">
              <p>Size:</p>
              <select name="sizes" style="border: none; background:aquamarine;">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
              </select>
            </div>
            <p class="price">15000₸</p>
          </div>
          <div style="text-align: right;align-self: self-start;">
            <button class="close" ><span class="material-symbols-outlined">cancel</span></button>
            <div class="quan">
              <p style="font-size:20px">Quantity:</p>
              <input type="number" class="quantity" value="1" min="1" max="99">
            </div>
          </div>
        </div>
        <div class="item">
          <img id="photo"
            src="https://resources.cdn-kaspi.kz/shop/medias/sys_master/images/images/hd3/h02/33307092123678/qazaq-republic-50149-00972-s-nadpisu-bezevaa-s-100646050-1.jpg"
            alt="">
          <div class="descr">
            <p id="name">Beige hoodie</p>
            <div class="size">
              <p>Size:</p>
              <select name="sizes" style="border: none; background:aquamarine;">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
              </select>
            </div>
            <p class="price">20000₸</p>
          </div>
          <div style="text-align: right;align-self: self-start;">
            <button class="close" ><span class="material-symbols-outlined">cancel</span></button>
            <div class="quan">
              <p style="font-size:20px">Quantity:</p>
              <input type="number" class="quantity" value="1" min="1" max="99">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="total">
      <h1 style="margin: 0px; padding: 20px; border-bottom: solid;border-width: 2px;border-color: rgb(210, 205, 205);">Total</h1>
      <div class="subTotal">
        <p style=" margin: 5;"><b>Sub-total</b></p>
        <p class="subtotal1"><i>35000₸</i></p>
      </div>
      <div class="delivery">
        <p style="margin:5"><b>Delivery</b></p>
        <p id="deliv"style="font-size:1.2rem; margin: 5; "><i>Standard delivery(5000₸)</i></p>
      </div>
      <div class="paid">
        <p>To be paid:</p>
        <p class="finalorder">40000₸</p>
      </div>
      <button class="order" ><a href="soon.html" style="color: white; text-decoration: none;">Place an order</a></button>
      <div class="accept">
        <p><b>WE ACCEPT:</b></p>
        <img src="https://usabilitylab.ru/wp-content/uploads/blog/kazahstan/BK1.png" alt="" height="130rem">
      </div>
    </div>
  </div>
</div>
  <script src="cart.js"></script>
</body>
</html>
