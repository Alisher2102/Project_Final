<?php
error_reporting(0);

if ($_COOKIE['user'] == '') :
?>
    <footer>
        <link rel="stylesheet" href="styles.css">

        <script src="index.js"></script>
    </footer>
<?php else : ?>
    <footer>
        <link rel="stylesheet" href="styles.css">
        <div class="footer">
            <div style="display: flex; justify-content: space-between;align-items: center; width: 13rem;">
                <span class="title">Contact us:</span>
                <a href="" class="title"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                <a href="" class="title"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="categories">
                <span href="">Address:</span>
                <a href="https://goo.gl/maps/1MHRt9vzPULSJCUz5">1/1 Abylai Khan St. Kaskelen</a>
            </div>
            <div class="prof">
                <span>® All rights are reserved</span>
            </div>
        </div>
        <script src="index.js"></script>
    </footer>
<?php endif; ?>
</body>

</html>