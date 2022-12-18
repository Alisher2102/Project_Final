<?php
error_reporting(0);

if ($_COOKIE['user'] == '') :
?>
    <section>
        <link rel="stylesheet" href="styles.css">
        <h1 style="display:flex; justify-content:center; padding-top:5rem;font-family: 'Bebas Neue', cursive;">Sign up</h1>
        <div class="reg">
            <form action="check.php" method="post" autocomplete="off">
                <input type="text" name="Name" id="" placeholder="Name" autocomplete="none">
                <input type="email" name="Email" id="" placeholder="Email">
                <input type="text" name="Login" id="" placeholder="Login">
                <input type="password" name="password" id="" placeholder="Password" autocomplete="none">
                <button type="submit">Register</button>
            </form>
        </div>
        <h1 style="display:flex; justify-content:center;     font-family: 'Bebas Neue', cursive;">Already have an account?
            <a href="login.php"> Login now</a>
        </h1>

        <script src="index.js"></script>
    </section>
<?php else : ?>
    <section>
        <link rel="stylesheet" href="styles.css">

        <div class="carouselImgs">
            <div class="sldies fade">
                <img src="https://the-steppe.com/pictures/files/Aidana/Aid2/htmlimage(1).jpeg">
            </div>
            <div class="sldies fade">
                <img src="https://centralasia.news/uploads/posts/2021-04/1619506711_futbolka-kazak-repablik.jpg">
            </div>
            <div class="sldies fade">
                <img src="https://sxodim.com/uploads/posts/2021/11/09/optimized/eaadc58f3286857374fbdf7ea189deea_545x305-q-85.jpg">
            </div>
        </div>
        <div class="whatarewe">
            <p> <strong class="esdeu">What</strong> <strong class="esdeu">are</strong> <strong class="esdeu">we</strong> <strong class="esdeu">?</strong> </p>
            <p> <strong class="esdeu">We</strong> <strong class="esdeu">are</strong> <strong class="sdu">SDU</strong> <strong class="esdeu">shop</strong></p>
            <p> <strong class="sdu">SDU</strong> <strong class="esdeu">shop</strong> <strong class="esdeu">has</strong> <strong class="esdeu">all</strong> <strong class="esdeu">the</strong> <strong class="esdeu">merchandise</strong> <strong class="esdeu">that</strong> <strong class="esdeu">students</strong> <strong class="esdeu">can</strong> <strong class="esdeu">purchuase</strong></p>
        </div>
        <div class="threeImgs">
            <img src="https://weproject.media/upload/medialibrary/80f/80f034349960bc514c6876e3c54fbce1.jpg" alt="">
            <img src="https://qazaquni.kz/wp-content/uploads/2019/09/2019090704401692.jpg" alt="">
            <img src="https://i.pinimg.com/736x/74/7f/2f/747f2fac465576de260a2be95e5077da.jpg" alt="">
        </div>
        <div class="toSee">
            <div class="text">
                <p>Come to <br> see our <br> designs</p>

            </div>
            <div class="circuit">
                <div class="slide">
                    <img src="https://the-steppe.com/pictures/files/Aidana/Aid2/htmlimage(1).jpeg">
                    <div class="pointers">
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>
                </div>
                <div class="slide">
                    <img src="https://centralasia.news/uploads/posts/2021-04/1619506711_futbolka-kazak-repablik.jpg">
                    <div class="pointers">
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>
                </div>
                <div class="slide">
                    <img src="https://sxodim.com/uploads/posts/2021/11/09/optimized/eaadc58f3286857374fbdf7ea189deea_545x305-q-85.jpg">
                    <div class="pointers">
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>
                </div>
            </div>

        </div>

        <script src="index.js"></script>
    </section>
<?php endif; ?>