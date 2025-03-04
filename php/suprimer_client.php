<?php

$host = 'localhost';
$dbname = "e_commerce"; 
$username = 'root';
$password = '';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    if (isset($_GET['id'])) {
        $id = $_GET['id'];


        $stmt = $pdo->prepare("DELETE FROM user_form WHERE id = :id");


        $stmt->bindParam(':id', $id, PDO::PARAM_INT);


        $stmt->execute();

        echo "L'élément avec l'ID $id a été supprimé avec succès.";
        header("Location: ./administrateur.php");
    } else {
        echo "Aucun ID fourni.";
    }

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="GET">
        <!-- <label for="id">ID à supprimer :</label> -->
        <input type="number" name="id" required value="<?=$_GET["id"] ?>" hidden><br>
        
        <button type="submit" name="sup">Supprimer</button>
    </form>
    
</body>
</html>
