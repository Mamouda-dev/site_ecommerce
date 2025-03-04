
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link rel="stylesheet" href="../css/formulaire.css">
</head>
<body>
    <div class="form-container ,flex ,justifier-center items-center">
        <h2>Ajout de produit</h2>
        <form action="../php/add_product.php" method="POST">
            <div class="form-group ">
                <label for="image">lien de l image</label>
                <input type="text" id="image" name="images" required>
            </div>
            <div class="form-group">
                <label for="nom">nom</label>
                <input type="text" id="nom" name="noms" required>
            </div>
            <div class="form-group">
                <label for="descriptions">Description</label>
                <input type="text" id="descriptions" name="descriptions" required>
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" id="prix" name="prixs" >
            </div>
            <div class="form-group">
                <label for="quantite">Quantite</label>
                <input type="number" id="quantite" name="qt" >
            </div>
            <input type="text" id="role" name="role" hidden>
            <button type="submit" class="submit-btn">ajouter</button>
          
        </form>
    </div>
</body>
</html>


