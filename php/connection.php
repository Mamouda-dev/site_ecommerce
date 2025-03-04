<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <link rel="stylesheet" href="../css/connection.css">
</head>
<body>
    <div class="login-container">
        <h2>Connexion</h2>
        <form method="POST" action="./conn2.php">
            <input type="email" name="emails" placeholder="entrer votre email" required>
            <input type="password" name="passwords" placeholder="Mot de passe" required>
            <button type="submit" name="sub">Se connecter</button>
        </form>
    </div>
</body>
</html>
