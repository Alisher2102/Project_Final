//dynamic navbar
$(document).ready(function() {
    var previousScroll = 0;

    $(window).scroll(function(){
       var currentScroll = $(this).scrollTop();
       if (currentScroll > previousScroll) {
    	   $(".navbar").slideUp();
       } else {
    	   $(".navbar").slideDown();
       }
       
       previousScroll = currentScroll;
       
       if (currentScroll == 0) {
    	   $(".navbar").css("position", "relative");
       } else {
    	   $(".navbar").css("position", "fixed");
       }
    });
});
//sticky footer
document.addEventListener("DOMContentLoaded", function (event) {
    var element = document.querySelector('.navbar');
    var height = element.offsetHeight;
    if (height < screen.height) {
        document.querySelector(".footer").classList.add('stikybottom');
    }
}, false);

//slideshow
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
    if(a.className==="navbar sticky" || a.className==="navbar"){
        a.classList.add("responsive");
    }
    else{
        a.classList.remove("responsive");
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
function showhide(){
    var take=document.querySelector(".hopa");
    var check=document.querySelector(".Profile");
    if(take.style.display==="block" && check.innerHTML==="Profile"){
        take.style.display="none";
    }
    else{
        take.style.display="block";
    }
}
