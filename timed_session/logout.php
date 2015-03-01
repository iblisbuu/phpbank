<?php
    session_start();
    session_destroy();
    header('Location: http://localhost/somefolder/login.php');
?>