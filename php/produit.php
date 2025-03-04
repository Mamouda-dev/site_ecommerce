
<?php
 @session_start();
require("./php/add_product.php");
$produits=afficher();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte Produit</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            /* font-family: Arial, sans-serif; */
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
            /* height: 100vh; */
            /* background: #f8f8f8; */
            /* margin: 0; */
        }
        .tout{
            display: flex;
            gap:50px;
            
            
           flex-wrap: wrap; 
           justify-content: center;

            
        }
        .product-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 320px;
            text-align: center;
            padding: 25px;
            transition: transform 0.3s;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-card img {
            width: 100%;
            border-radius: 15px;
            height:250px;
            filter: drop-shadow(5px 5px 5px #0009);
        }
        .product-card h3 {
            margin: 15px 0;
            font-size: 1.6em;
            color: crimson;
        }
        .product-card p {
            color: #666;
            margin: 10px 0;
        }
        .product-card .price-quantity {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.2em;
            font-weight: bold;
            color: #2c3e50;
            margin: 10px 0;
        }
        .product-card .price {
            color:rgb(206, 199, 9);
        }
        .product-card .quantity {
            color: #e74c3c;
        }
        .product-card a {
               text-decoration: none;
         }
        .product-card button {
            background: #27ae60;
            color: #fff;
            border: none;
            padding: 12px;
            width: 100%;
            font-size: 1em;
            cursor: pointer;
            border-radius: 8px;
            transition: background 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        .product-card button i {
            font-size: 1.2em;
        }
        .product-card button:hover {
            background: #2ecc71;
        }
    </style>
</head>
<body>
    <div class="tout">
<?php
     foreach($produits as $produit): 
      ?>

    <div class="product-card">
        <img src="<?=$produit->images ?>" alt="Produit" >
        <h3><i class="fas fa-box"></i> <?= $produit->noms ?></h3>
        <p><i class="fas fa-info-circle"></i> <?= substr ( $produit->descriptions,0,90) ?>.</p>
        <div class="price-quantity">
            <span class="quantity"><i class="fas fa-cubes"></i> Quantité :<?= $produit->quantites ?> </span>
            <span class="price"><i class="fas fa-tag"></i> $<?= $produit->prixs ?></span>
        </div>
        <a href="add_pannier.php?smspanier=<?=$produit->id?>"><button><i class="fas fa-shopping-cart"></i> Ajouter au panier</button></a>
        
    </div>


    <?php endforeach; ?>  
</body>
</html>
</div>

  
  
  
  
  
  
  
  
  
  
  
  
  



