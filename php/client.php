
<?php
@include'confiig.php';
session_start();
if(!isset ($_SESSION['user_nom'] )){
    header('location:login_form.php');
}


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Client</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/client.css">
    <style>
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f5f5f5;
        }
        .txt {
           background-color: crimson;
           text-align: center;
        }
        .txt span {
           color: darkgoldenrod;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #007bff;
        }

        .header {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile-section {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color:rgb(217, 29, 29);
            margin-right: 20px;
        }

        .welcome-message h1 {
            color: #333;
            margin-bottom: 5px;
        }

        .welcome-message p {
            color: #666;
        }

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .action-card {
            background-color:rgb(7, 115, 223);
            padding: 20px;
            border-radius: 8px;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .action-card:hover {
            transform: translateY(-5px);
        }

        .order-history {
            margin-top: 30px;
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .status-delivered {
            color: #28a745;
            background-color: #e8f5e9;
            padding: 5px 10px;
            border-radius: 15px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        

        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            margin-top: 50px;
        }
        footer {
            background:  #007bff;
            color: #fff;
            text-align: center;
            padding: 30px 0;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
    <div class="logo"><span><?php echo $_SESSION['user_nom'] ?></span></div>
    

        <ul>
            <li><a href="acceuil.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li><a href="#"><i class="fas fa-user"></i> Profil</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Paramètres</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
        </ul>
        <div class="menu-toggle" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
    <marquee behavior="scroll" direction="left" scrollamount="5">

        <div class="txt">
            <h2> <span><u>Promotion :</u></span> Tout client ayant sa page possede de <span>20%</span>  de reduction lors du payement</h2>
        </div>

    </marquee>

    
    <?php require("produit.php") ?>
    <script src="../js/client.js"></script>
    <div class="container">
        <div class="profile-section">
            <div class="user-info">
                <div class="avatar"></div>
                <div class="welcome-message">
                    <h1>Bienvenue <span><?php echo $_SESSION['user_nom'] ?></span></h1>
                    <p>Membre depuis janvier 2022</p>
                </div>
                
            </div>

            <div class="quick-actions">
                <div class="action-card">
                    <h3>🛍 Commandes en cours</h3>
                    <p>2 commandes en cours de livraison</p>
                </div>
                <div class="action-card">
                    <h3>❤ Liste de souhaits</h3>
                    <p>12 articles sauvegardés</p>
                </div>
                <div class="action-card">
                    <h3>🎯 Points de fidélité</h3>
                    <p>650 points disponibles</p>
                </div>
            </div>

            <div class="order-history">
                <h2>Historique des commandes</h2>
                <table>
                    <thead>
                        <tr>
                            <th>N° Commande</th>
                            <th>Date</th>
                            <th>Statut</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#123456</td>
                            <td>15/03/2024</td>
                            <td><span class="status-delivered">Livrée</span></td>
                            <td>€149.99</td>
                        </tr>
                        <!-- Ajouter plus de lignes ici -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <footer>
        <p>Customer Page &copy; 2023</p>
    </footer>
</body>
</html>
