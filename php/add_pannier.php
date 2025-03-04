<?php
session_start();
require('conn1.php');

if(!isset($_SESSION['pannier'])){
    $_SESSION['pannier']= array();
     
}
if(isset($_GET['smspanier'])){
    $id=$_GET['smspanier'];
    header('location:pannier.php');
    try{
         $stmt = $conn->prepare("SELECT * FROM produits WHERE id=:id");
         $stmt ->bindparam(":id", $id);
         $stmt -> execute();
         $res =$stmt->fetchAll();
        
         foreach($res as  $k => $v){
            if(isset($_SESSION['panier'][$id])){
                $_SESSION['panier'][$id]['quantite']+=1;

            }else{
                $quantite =1;
                $_SESSION['panier'][$id]=[
                   "nom"=>$v['noms'],
                   "image"=>$v['images'],
                   "prix"=>$v['prixs'],
                   "quantite"=>$quantite,
                ];
            }
        
         }
    }
    catch(PDOEXCEPTION $e){
        echo "error:" .$e->getMessage();
    }
}
?>