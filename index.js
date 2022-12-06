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