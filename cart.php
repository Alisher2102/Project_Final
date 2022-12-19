  <link rel="stylesheet" href="cartstyles.css">
  <?php
    require("header.php");
  ?>
  <div style="display: flex; justify-content: center;">
  <div class="main">
    <div class="cart">
      <h1 id="cart" style="margin: 0px; padding: 20px; border-bottom: solid;border-width: 2px;border-color: rgb(210, 205, 205);">
        My cart</h1>
      <div class="items">
        <?php
        $connect = mysqLi_connect('localhost', 'root', 'temirlan9087', 'registerbd');
        $id = $_COOKIE['ID'];
        $query = "SELECT name,image,price FROM items,carts where $id=carts.id and carts.item_id = items.id";
        $result = mysqli_query($connect, $query);
        while($row = $result->fetch_assoc()){
          echo("
          <div class=\"item\">
              <img id=\"photo\"
              src=\"$row[image]\">
              <div class=\"descr\">
                  <p id=\"name\">$row[name]</p>
                  <div class=\"size\">
                  <p>Size:</p>
                  <select name=\"sizes\" style=\"border: none; background:aquamarine;\">
                      <option value=\"S\">S</option>
                      <option value=\"M\">M</option>
                      <option value=\"L\">L</option>
                      <option value=\"XL\">XL</option>
                      <option value=\"XXL\">XXL</option>
                  </select>
                  </div>
                  <p class=\"price\">$row[price]₸</p>
              </div>
              <div style=\"text-align: right;align-self: self-start;\">
                  <button class=\"close material-symbols-outlined\" >cancel</button>
                  <div class=\"quan\">
                  <p style=\"font-size:20px\">Quantity:</p>
                  <input type=\"number\" class=\"quantity\" value=\"1\" min=\"1\" max=\"99\">
                  </div>
              </div>
          </div>");
        }
        ?>
      </div>
    </div>
    <div class="total">
      <h1 style="margin: 0px; padding: 20px; border-bottom: solid;border-width: 2px;border-color: rgb(210, 205, 205);">Total</h1>
      <div class="subTotal">
        <p style=" margin: 5;"><b>Sub-total</b></p>
        <p class="subtotal1"><i></i></p>
      </div>
      <div class="delivery">
        <p style="margin:5"><b>Delivery</b></p>
        <p id="deliv"style="font-size:1.2rem; margin: 5; "><i>Standard delivery(5000₸)</i></p>
      </div>
      <div class="paid">
        <p>To be paid:</p>
        <p class="finalorder"></p>
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
