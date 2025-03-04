<?php
@include'config' ;
session_start();
session_unset();
session_destroy();

header('location:login_form.php')
?>