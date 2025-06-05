<?php
session_start();
session_destroy();
header('Location: http://localhost/schoolar2/src/login.html');
exit();
?>