<?php
$servername = "localhost" ;
$username = "root" ;
$password = "";
$dbname = "e_commerce" ;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username , $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connexion ressussie";
}catch(PDOException $e){
    echo "echec de connection" . $e -> getMessage();
}


$nom = $_POST['noms'];
$prenom = $_POST['prenoms'];
$passwords = password_hash($_POST['passwords'], PASSWORD_DEFAULT);

$email = $_POST['emails'];
$role =$_POST['role'];

try {
    $stmt = $conn->prepare("INSERT INTO clients (noms, prenoms, passwords ,emails) VALUES(:noms, :prenoms, :passwords , :emails)");
    //  echo$nom . "\n";
    // echo$prenom . "\n" ;
    // echo$password . "\n";
    // echo$email . "\n";

    $stmt->bindParam(':noms', $nom);
    $stmt->bindParam(':prenoms', $prenom);
    $stmt->bindParam(':passwords', $passwords);
    $stmt->bindParam(':emails',$email);
    $stmt->execute();

    
echo "Bienvenue chers client";
$sms= "le client a ete bien creer";



}catch(PDOException $e) {
    echo "echec de connection" . $e -> getMessage();
}

// if (isset($_POST['inscrit'])) {
//     $email = trim($_POST['emails']);
//     $password = trim($_POST['passwords']);

//     if (!empty($email) && !empty($password)) {
//         $stmt = $pdo->prepare("SELECT * FROM clients WHERE emails = :emails");
//         $stmt->bindParam(':emails', $email);
//         $stmt->execute();
//         $user = $stmt->fetch(PDO::FETCH_ASSOC);

//         if ($user) {
//             echo "Cet utilisateur existe déjà. Redirection vers la page de connexion.";
//             header("Refresh: 2; URL=../php/connection.php");
//             exit();
//         } else {
//             $hashed_password = password_hash($password, PASSWORD_DEFAULT);
//             $insert_stmt = $pdo->prepare("INSERT INTO clients (emails, passwords) VALUES (:emails, :passwords)");
//             $insert_stmt->bindParam(':emails', $email);
//             $insert_stmt->bindParam(':passwords', $hashed_password);
            
//             if ($insert_stmt->execute()) {
//                 echo "Inscription réussie. Redirection vers la page de connexion.";
//                 header("Refresh: 2; URL=../php/connection.php");
//                 exit();
//             } else {
//                 echo "Erreur lors de l'inscription.";
//             }
//         }
//     } else {
//         echo "Veuillez remplir tous les champs.";
//     }
// }












