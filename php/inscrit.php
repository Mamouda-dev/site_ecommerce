
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link rel="stylesheet" href="../css/inscrit.css">
</head>
<body>
    <div class="form-container">
        <h2>Inscription</h2>
        <form action="../php/client.php" method="POST">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="noms" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" id="prenom" name="prenoms" required>
            </div>
            <div class="form-group">
                <label for="motdepasse">Mot de passe</label>
                <input type="password" id="motdepasse" name="passwords" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="emails" required>
            </div>
            <input type="text" id="role" name="role" hidden>
            <button type="submit" class="submit-btn">S'inscrire</button>
            <a href="../php/connection.php">se connecter</a>
        </form>
    </div>
</body>
</html>


