<?php require("./conn1.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>
<style>
    h1{
        font-family:  'Times New Roman', Times, serif;
        font-size: 20px;
       text-align: center;
       background-color:  crimson;
    }
</style>
<body>
    <nav class="navbar">
        <div class="logo">Admin Panel</div>
        <div class="nav-links">
            <a href="./tableau_client.php"><i class="fa-solid fa-users"></i> Tableau Client</a>
            <a href="./tableau_produit.php"><i class="fa-solid fa-box"></i> Tableau Produit</a>
        </div>
        <div class="icons">
            <i class="fa-solid fa-moon" id="theme-toggle"></i>
            <a href="logout.php"><i class="fa-solid fa-right-from-bracket" title="Déconnexion"></i></a>
            
        </div>
    </nav>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    
  <h1>well come to the page of the admin</h1>


    <script>
        const themeToggle = document.getElementById('theme-toggle');
        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });
    </script>
</body>
</html> 
