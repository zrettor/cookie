<?php
// Установка cookie
$cookie_name = "myCookie";
$cookie_value = "myValue";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
