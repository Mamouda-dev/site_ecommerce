<?php require("./conn1.php");?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Clients - Ecommerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background-color: #f5f6fa;
            padding: 2rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .table-header {
            padding: 1.5rem;
            background: #2c3e50;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .search-box {
            background: rgba(255,255,255,0.1);
            padding: 0.5rem 1rem;
            border-radius: 25px;
            display: flex;
            align-items: center;
        }

        .search-box input {
            background: none;
            border: none;
            color: white;
            margin-left: 0.5rem;
            outline: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #f8f9fa;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            color: #2c3e50;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        th:hover {
            background: #f8f9fa;
        }

        tr:hover {
            background: #f8f9fa;
        }

        .client-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .status {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        .status.active {
            background: #e8f5e9;
            color: #2ecc71;
        }

        .status.inactive {
            background: #ffebee;
            color: #e74c3c;
        }

        .action-btn {
            padding: 0.5rem;
            border: none;
            background: none;
            cursor: pointer;
            margin: 0 0.2rem;
            border-radius: 50%;
            transition: 0.3s;
        }

        .action-btn:hover {
            background: #f0f0f0;
        }

        .pagination {
            padding: 1.5rem;
            display: flex;
            justify-content: center;
            gap: 0.5rem;
        }

        .page-item {
            padding: 0.5rem 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
        }

        .page-item.active {
            background: #2c3e50;
            color: white;
            border-color: #2c3e50;
        }

        @media (max-width: 768px) {
            td, th {
                padding: 0.8rem;
            }
            
            .container {
                margin: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="table-header">
            <h2>Liste des produit</h2>
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Rechercher un client..." id="searchInput">
            </div>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th onclick="sortTable(1)">nom <i class="fas fa-sort"></i></th>
                    <th >image </th>
                    <th onclick="sortTable(2)">description<i class="fas fa-sort"></i></th>
                    <th >prix </th>
                    <th>quantites</th>
                    <!-- <th>Statut</th> -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="clientTable">

            <?php
            try{
                $stmt = $conn->prepare("SELECT * FROM produits");
                $stmt->execute();
                $result= $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach($stmt->fetchAll() as $k=>$v){

                
            
            
            ?>


                <tr>
                    <td>
                        <div class="client-avatar"><?= $v["id"]?></div>
                        
                    </td>
                    <td><?= $v["noms"]?></td>
                    
                    <td>
                        <img src="<?= $v["images"]?>" alt="" width="35%"></td>
                    <td><?= $v["descriptions"]?></td>
                    <td><?= $v["prixs"]?></td>
                   
                    <td><span class="status active"><?= $v["quantites"]?></span></td>
                    <td>
                    <a href="modifier_produit.php?id=<?=$v["id"]?>"><button class="action-btn" ><i class="fas fa-edit"></i></button></a> 
                    <a href="suprimer_produit.php?id=<?=$v["id"]?>"><button class="action-btn"><i class="fas fa-trash"></i> </button></a>  
                    <a href="formulaire.php"><svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; color: black;" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
              </svg></a>  
                       
                    </td>
                </tr>
                <!-- Ajouter plus de lignes -->

                <?php
        }
            }
            catch(PDOException $e){
                echo"Error :". $e->getMessage();
            }
            ?>
            </tbody>
        </table>

        <div class="pagination">
            <a href="administrateur.php"><span class="page-item active">back</span></a>
            
            <!-- <span class="page-item">2</span>
            <span class="page-item">3</span> -->
        </div>
    </div>


