<?php
setcookie('user', $user['Name'], time() - 3600, "/");
setcookie('user1', $user['Email'], time() - 3600, "/");
header("Location: /test/index.php");
