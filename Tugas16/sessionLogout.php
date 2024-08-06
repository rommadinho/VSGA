<?php
    session_start();
    session_destroy();
    header ("Location: Loginform.html");
    die();
?>