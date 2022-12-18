$('.category').hover(
    function(){
        var img = this.getElementsByTagName('img')[0];
        var name = this.getElementsByClassName('categoryName')[0];
        img.style.filter = "blur(3px)";
        name.style.transform = "translateY(-10px)";
        this.style.borderRadius = "20px";
        img.style.borderRadius = "20px";
    },
    function(){
        var img = this.getElementsByTagName('img')[0];
        var name = this.getElementsByClassName('categoryName')[0];
        img.style.filter = "blur(0px)";
        name.style.transform = "translateY(10px)";
        this.style.borderRadius = "0px";
        img.style.borderRadius = "0px";
    }
);
