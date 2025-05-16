<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commandes | Luxe Bijoux</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- Utilisez les mêmes styles que products.html -->
</head>
<body>
   
<?php include (VIEWS."inc/navbarAdmin.php")?>
    <div class="admin-container">
        <div class="admin-sidebar">
            <h2>Administration</h2>
            <nav><!-- Identique à index.html --></nav>
        </div>

        <div class="admin-main">
            <h1>Commandes Clients</h1>
            
            <table>
                <thead>
                    <tr>
                        <th>N° Commande</th>
                        <th>Client</th>
                        <th>Montant</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1001</td>
                        <td>client@exemple.com</td>
                        <td>199.99€</td>
                        <td>Expédié</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php include (VIEWS."inc/footer.php")?>
</body>
</html>