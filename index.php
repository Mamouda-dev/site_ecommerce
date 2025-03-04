<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar E-commerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="../css/acceuil.css">


   <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <link href="/src/styles.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="../css/acceuil.css"> -->

  
</head>
<body>
    <nav>
        <div class="nav-container">
            <a href="../php/index.php" class="logo" style="color:green"><i>MMD</i><span style="color: #e74c3c;">SHOP</span></a>
            <img src="Capture d’écran_20-2-2025_141630_www.bing.com.jpeg" alt="logo" width= "40px" height="40px">
            
            
            <div class="nav-links">
                <a href="#">Accueil</a>
                <a href="#">Boutique</a>
                <a href="#">Nouveautés</a>
                <a href="#">Contact</a>
                <div class="search-box">
                    <input type="text" placeholder="Rechercher...">
                    <i class="fas fa-search"></i>
                </div>
            </div>

            <div class="icons">
                
            <div class="dropdown" id="dropdown">
                <button onclick="toggleDropdown()"><i class="fas fa-user"></i></button>
                <div class="dropdown-content" id="dropdownMenu">
                    <a href="../php/register_form.php">S'inscrire</a>
                    <a href="../php/login_form.php">Se connecter</a>
                </div>
            </div>

               <a href="../php/pannier.php"><i class="fas fa-shopping-cart"></i></a>
                
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>

    <section >
        <div>
            <img id="changement" src="../image/image5.jpeg" alt="logo1" width="100%" height="350px" >
    </section>

    
    <section class="texte">
        
        <h1>WELCOMME TO MY WEB SITE MMDSHOP</h1>
    </section>
    
    <div class="content">
        <?php 
        // @include'produit.php';
        require("../php/produit.php") 
        ?>
    </div>
    
    
    <footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h2>About Us</h2>
            <p>We are a leading e-commerce site providing a wide range of products to our customers. Our mission is to deliver quality products at affordable prices.</p>
        </div>
        <div class="footer-section links">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
        <div class="footer-section contact">
            <h2>Contact Us</h2>
            <p>Email: support@ecommerce.com</p>
            <p>Phone: +237 6 89 88 90 96</p>
            <p>Address: 123 E-commerce St, Online City, Web</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 E-commerce Site. All rights reserved.</p>
    </div>
</footer>
    <script src="../js/acceuil.js"></script>
</body>
</html>