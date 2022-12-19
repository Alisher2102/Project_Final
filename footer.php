<?php
error_reporting(0);

if ($_COOKIE['user'] == '') :
?>
    <footer>
        <!-- <link rel="stylesheet" href="styles.css"> -->

    </footer>
<?php else : ?>
    <footer>
        <!-- <link rel="stylesheet" href="styles.css"> -->
        <div class="container">

            <div class="footer">
                <div style="display: flex; justify-content: space-between;align-items: center; width: 13rem;">
                    <span class="SPAN">Contact us:</span>
                    <a href="https://t.me/recker2014brr" class="title"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/my__page17/" class="title"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
                <div class="categories">
                    <span class="SPAN">Address:</span>
                    <a href="https://goo.gl/maps/1MHRt9vzPULSJCUz5">1/1 Abylai Khan St. Kaskelen</a>
                </div>
                <div class="prof">
                    <span class="SPAN">® All rights are reserved</span>
                </div>
            </div>

    </footer>
<?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="index.js"></script>
</body>

</html>
