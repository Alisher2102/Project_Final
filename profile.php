<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    error_reporting(0);

    if ($_COOKIE['user'] == '') :

    ?>
        <div class="profile">
            <label for="">Name:</label>
            <h1>You have not entered to account</h1>
            <br>
            <label for="">Email:</label>
            <h1>You have not entered to account</h1>
            <a href="index.php">homepage</a>
        </div>
    <?php else : ?>
        <div class="profile">
            <label for="">Name:</label>
            <?= $_COOKIE['user'] ?>
            <br>
            <label for="">Email:</label>
            <?= $_COOKIE['user1'] ?>
            <a href="index.php">homepage</a>
        </div>
    <?php endif; ?>
</body>

</html>