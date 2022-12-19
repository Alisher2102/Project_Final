<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDU shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
@media only screen and (max-width: 960px){
    header .navbar{
        display: none;
    }
}

header .title{
    display: inline-block;
}
header .categories{
    display: inline-block;
}
header .categories a{
    margin-right: 10px;
    display: inline-block;
}
header .searcher{
    margin-bottom: 5px;
    padding: .9em 2.5em;
    font-weight: bold;
    font-size: 1rem;
    font-family: 'Bebas Neue', cursive;
    width: 350px;
    border-style: solid;
    border-radius: 10px;
    border-width: thin;
    border-color: #263159;
}
header .searcher[type=text]{
    width: 130px;
    height: 20px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
header .searcher[type=text]:focus{
    width: 200px;
}

header .prof{
    display: inline-block;
    
}
header .prof a{
    margin-right: 10px;
    display: inline-block;
}

header .nav_el{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header .left{
    display: flex;
    width: 40%;
    justify-content: space-around;
}

header .right{
    display: flex;
    width: 58%;
    justify-content: space-between;
}

header{
    position: sticky;
    z-index: 1000;
    top: 0;
    width: 100%;
    background-color: #678983;
}

header .navbar{
    position: sticky;
    letter-spacing: 1px;
    top: 0;
    z-index: 10;
    justify-content: space-between;
    align-items: center;
    display: flex;
    padding-top: 10px;
    padding-bottom: 10px;
    margin: 0 auto;
    overflow: hidden;
    background-color: #678983;
    font-family: 'Bebas Neue', cursive;
    width: 90%;
}

header .navbar .nav_el img{
    width: 150px;
    bottom: -30px;
    left: 0px;
    margin-top: 3px;
}
header .navbar .nav_el a{
    color: white;
    padding-top: 0px;
    padding-bottom: 0px;
    margin-top: 0;
    margin-bottom: 0;
    font-size: 34px;
    transition-duration:1s;
    transition-property: color, transform;
}
header .navbar .nav_el a:visited{
    text-decoration: none;
}
header .navbar .nav_el a:link{
    text-decoration: none;
}
header .navbar .nav_el a:active{
    text-decoration: none;
}
header .navbar .nav_el a:hover{
    /* animation-name: rainbow; */
    /* animation-duration: 2s; */
    /* animation-iteration-count: 3; */
    color: #393E46;
    transform: translateY(-5px);
}
header .navbar .nav_el .icon{
    display: none;
}
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital@1&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="navbar"> 
            <div class="nav_el left">
                <a href="Project_Final-main/Project_Final-main/index.php">
                    <img src="assets/img/logo-white.png"  style="color: white; " alt="">
                </a>
                <div style="display: flex; justify-content: space-between; align-items: center; width: 300px;">
                    <input type="text" onkeyup="searcher()" class="searcher" placeholder="Search..." name="" id="" >
                </div>
            </div>
            <div class="nav_el right">
                <div class="categories">
                    <a href="">Products</a>
                    <a href="">Categories</a>
                </div>
                <div class="prof">
                    <a href=""><i style="font-size:28px" class="fa">&#xf291;</i> Basket</a>
                    <a href=""><i class="fa fa-fw fa-user"></i>Registration</a>
                    <a href=""><i class="fa fa-male"></i> Profile</a>
                </div>
                <a href="javascript:void(0)" class="icon" onclick="adapt()"><i class="fa fa-bars"></i></a>
            </div>
        </div>
    </header>
    <script>
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
    </script>
</body>
</html>
