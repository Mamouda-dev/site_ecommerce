<?php

$servername = "localhost" ;
$username = "root" ;
$password = "";
$dbname = "e_commerce" ;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username , $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //echo "connexion ressussie";
}catch(PDOException $e){
    echo "echec de connection" . $e -> getMessage();
}




?>