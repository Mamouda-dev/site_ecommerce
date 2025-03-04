<?php
session_start();
require('conn1.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    unset($_SESSION['panier'][$id]);
    header('location:pannier.php');
}


