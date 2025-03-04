<?php
require("./conn1.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $email= $_POST['email'];
    $password=md5($_POST['passwords']); 
    $user_type = $_POST['user_type'];

    
    $sql = "UPDATE user_form SET nom = :nom, email = :email,  passwords = :passwords, user_type = :user_type   WHERE id = :id";
    $stmt = $conn->prepare($sql);
    

    if ($stmt->execute([':nom' => $nom, ':email'=>$email, ':passwords'=>$password ,  ':user_type' => $user_type, ':id' => $id])) {
        
        echo "Mise à jour réussie.";
        header("Location: ./administrateur.php");
    } else {
        echo "Erreur lors de la mise à jour.";
    }
}
//header("location")

?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier un utilisateur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>BIENVENUE DANS LA PAGE DE MISE A JOUR DES ELEMENT .</h1>
    <div class="tout">
    <form method="POST" class="formulaire">
        <!-- <label for="id" >ID :</label> -->
        <input type="text" name="id" required value="<?php echo$_GET['id']?>"hidden><br>

        <label for="nom">Nom :</label>
        <input type="text" name="nom"  class="nom" ><br>

        <label for="email">Email :</label>
        <input type="text" name="email" ><br>

        <label for="password">Password :</label>
        <input type="text" name="passwords" ><br>


        <label for="prenom">user_type:</label>
        <input type="text" name="user_type" ><br>

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
