let items = document.getElementsByClassName('item');
var img = document.createElement("img");
img.src = "https://cdn3.iconfinder.com/data/icons/shopping-and-ecommerce-28/90/empty_cart-512.png";
var src = document.querySelector('.items');
var removeButtons = document.getElementsByClassName('close');
var quantities = document.getElementsByClassName('quantity');
updateTotal();
for (var i=0; i<removeButtons.length; i++){
    var button = removeButtons[i]
    button.addEventListener('click', function(event){
        var clickedButton = event.target;
        clickedButton.parentElement.parentElement.parentElement.remove();
        if(items.length==0){
            document.querySelector('.items').innerHTML = "<h1>Cart is empty</h1>";
            src.appendChild(img);
        }
        updateTotal();
    });
};
for (var i=0; i<quantities.length; i++){
    var quantity =  quantities[i];
    quantity.addEventListener('change',updateTotal);
}
function updateTotal(){
    var total = 0;
    for (var i=0; i<items.length; i++){
        var item = items[i];
        var itemPrice = item.getElementsByClassName('price')[0];
        var itemQuantity = item.getElementsByClassName('quantity')[0];
        var price = itemPrice.innerText.replace('₸', '');
        var quantity = itemQuantity.value;
        total += price * quantity;
    }
    document.getElementsByClassName('subTotal1')[0].innerText = total + '₸';
    if(items.length!=0)
        document.getElementsByClassName('finalorder')[0].innerText = total + 5000 + '₸';
    else document.getElementsByClassName('finalorder')[0].innerText = 0 + '₸'
}




