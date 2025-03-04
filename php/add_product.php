
<?php
require("./php/conn1.php");


// if ($_SERVER["REQUEST_METHOD"]=="POST") {
//   $image = $_POST['images'];
//   $nom = $_POST['noms'];
//   $desc = $_POST['descriptions'];
//   $prix = $_POST['prixs'];
//   $qt =$_POST['qt'];
// }
// try {

//     $stmt = $conn->prepare(" INSERT INTO  produits (images, noms, descriptions ,prixs, quantites) VALUES('$image','$nom','$desc','$prix','$qt')");
  
  //  echo$image."\n";
  //  echo$nom . "\n";
  //  echo$desc . "\n" ;
  //  echo$prix. "\n";
  //  echo$qt . "\n";
  
//     $stmt->bindParam(':images', $image);
//     $stmt->bindParam(':noms', $nom);
//     $stmt->bindParam(':descriptions', $desc);
//     $stmt->bindParam(':prixs',$prix);
//     $stmt->bindParam(':quantite',$qt);
//     $stmt->execute();
    
// echo "le produit a ete bien ajouter";
// $sms= "le client a ete bien creer";
// header("Location :../php/conn.php?sms=$sms");


// }catch(PDOException $e) {
//     echo "echec de connection" . $e -> getMessage();
// }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image = $_POST['images'];
    $nom = $_POST['noms'];
    $desc = $_POST['descriptions'];
    $prix = $_POST['prixs'];
    $qt = $_POST['qt'];
}

try {
   
    $stmt = $conn->prepare("INSERT INTO produits (images, noms, descriptions, prixs, quantites) 
                            VALUES (:images, :noms, :descriptions, :prixs, :quantites)");

   
    $stmt->bindParam(':images', $image);
    $stmt->bindParam(':noms', $nom);
    $stmt->bindParam(':descriptions', $desc);
    $stmt->bindParam(':prixs', $prix);
    $stmt->bindParam(':quantites', $qt); // Correction du nom (quantite → quantites)

    
    $stmt->execute();

    echo "Le produit a été bien ajouté";
} catch (PDOException $e) {
    //echo "Échec de l'insertion : " . $e->getMessage();
}



  function afficher(){
      if(require("./php/conn1.php")){  
        $req=$conn->prepare("SELECT * FROM produits ORDER BY id DESC");
        $req->execute();
        $data =$req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
  }
  }
