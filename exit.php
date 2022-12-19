<?php
setcookie('user', $user['Name'], time() - 3600, "/");
setcookie('user1', $user['Email'], time() - 3600, "/");
setcookie('user1', $user['Login'], time() - 3600, "/");
setcookie('ID', $user['user_ID'], time() - 3600, "/");
header("Location: /test/site.php");
