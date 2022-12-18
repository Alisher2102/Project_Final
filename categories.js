var cards = document.getElementsByClassName('category');
for(var i=0; i<cards.length; i++){
    var card = cards[i];
    // var name = card.getElementsByClassName('categoryName')[0];
    card.addEventListener('mouseenter', function(event){
        var hoveringCard = event.target;
        var img = hoveringCard.getElementsByTagName('img')[0];
        var name = hoveringCard.getElementsByClassName('categoryName')[0];
        img.style.filter = "blur(3px)";
        name.style.transform = "translateY(-10px)";
        hoveringCard.style.borderRadius = "20px";
        img.style.borderRadius = "20px";
    });
    card.addEventListener('mouseleave', function(event){
        var hoveringCard = event.target;
        var img = hoveringCard.getElementsByTagName('img')[0];
        var name = hoveringCard.getElementsByClassName('categoryName')[0];
        img.style.filter = "blur(0px)";
        name.style.transform = "translateY(10px)";
        hoveringCard.style.borderRadius = "0px";
        img.style.borderRadius = "0px";
    });

}
