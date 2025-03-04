<?php
require("./conn1.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $id = $_POST['id'];
    $image = $_POST['images'];
    $nom = $_POST['noms'];
    $prix = $_POST['prixs'];
    $qt = $_POST['quantites'];
    $desc = $_POST['descriptions']; 

    // Correction : Ajout de la virgule manquante après "images = :images"
    $sql = "UPDATE produits SET images = :images, noms = :noms, prixs = :prixs, quantites = :quantites, descriptions = :descriptions WHERE id = :id";
    $stmt = $conn->prepare($sql);
    
    // Correction : Ajout du paramètre manquant ":images" dans execute()
    if ($stmt->execute([':images' => $image, ':noms' => $nom, ':prixs' => $prix, ':quantites' => $qt, ':descriptions' => $desc, ':id' => $id])) {
        
        echo "Mise à jour réussie.";
        header("Location: ./administrateur.php");
    } else {
        echo "Erreur lors de la mise à jour.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier un utilisateur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>BIENVENUE DANS LA PAGE DE MISE A JOUR DES ELEMENT.</h1>
    <div class="tout">
    <form method="POST" class="formulaire">
        <input type="text" name="id" required value="<?php echo $_GET['id'] ?>" hidden><br>
        
        <label for="image">Lien de l'image :</label>
        <input type="text" name="images" class="image" ><br>

        <label for="nom">Nom :</label>
        <input type="text" name="noms" class="nom" ><br>

        <label for="prixs">Prix :</label>
        <input type="text" name="prixs" ><br>

        <label for="password">Quantité :</label>
        <input type="text" name="quantites" ><br>

        <label for="prenom">Descriptions :</label>
        <input type="text" name="descriptions" ><br>

        <button type="submit">Modifier</button>
    </form>
    </div>


</body>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
   
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}


h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    color: #555;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

input:focus {
    border-color: #007BFF;
    outline: none;
}

button.submit-btn {
    width: 100%;
    padding: 10px;
    background-color: c;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}
button.submit-btn1 {
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 3px;
}

button.submit-btn:hover {
    background-color: #0056b3;
}
button.submit-btn1:hover {
    background-color: #0056b3;
}
button.a{
    text-decoration: none;
    color: #fff;
}



</style>
</html>
