//Sticky navbar
window.onscroll=function(){
    stickyFunc();
}
var navbar=document.querySelector(".navbar");
var sticky=navbar.offsetTop;
function stickyFunc(){
    if(window.pageYOffset>=sticky){
        navbar.classList.add("sticky");
    }
    else{
        navbar.classList.remove("sticky");
    }
}
//sliding animation
var slideIndex=0;
showSlides();
function showSlides(){
    var i;
    var slides=document.querySelectorAll(".sldies");
    for(i=0;i<slides.length;i++){
    slides[i].style.display="none";
    }
    slideIndex++;
    if(slideIndex>slides.length){
    slideIndex=1;
    }
    slides[slideIndex-1].style.display="block";
    setTimeout(showSlides,3000);
}
//mobile adaptation
function adapt(){
    var a=document.querySelector(".navbar");
    if(a.className==="navbar"){
        a.className+=" responsive";
    }
    else{
        a.className="navbar";
    }
}
//finder function
function searcher(){
    var input;
    input=document.querySelector(".searcher");
    input=input.value.toUpperCase();
    var lists=document.querySelectorAll(".navbar a");
    for(var i=0;i<lists.length;i++){
        if(lists[i].text.toUpperCase().indexOf(input)>-1){
            lists[i].style.visibility="visible";
        }
        else{
            lists[i].style.visibility="hidden";
        }
    }
}
//carousel
var index=1;
carousel(index);
function plusSlides(n){
    carousel(index+=n);
}
function carousel(n){
    var i;
    var slides=document.querySelectorAll(".slide");
    if(n>slides.length){
        index=1;
    }
    if(n<1){
        index=slides.length;
    }
    for(i=0;i<slides.length;i++){
        slides[i].style.display="none";
    }
    slides[index-1].style.display="flex";
}
