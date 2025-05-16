<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord | Luxe Bijoux</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --gold: #d4af37;
            --gold-light: #f0e6d2;
            --gold-dark: #8b5a2b;
            --sidebar-bg: #1a120b;
            --sidebar-text: #f0e6d2;
            --sidebar-active: #d4af37;
            --card-bg: #fff;
            --text-dark: #333;
        }

        /* Styles globaux */
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            color: var(--text-dark);
            background-color: #f9f9f9;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            color: var(--gold-dark);
        }

        /* Layout principal */
        .admin-container {
            display: flex;
            min-height: 100vh;
        }

        /* Barre latérale - Style luxe */
        .admin-sidebar {
            width: 280px;
            background: var(--sidebar-bg);
            color: var(--sidebar-text);
            padding: 30px 0;
            box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 10;
        }

        .admin-sidebar::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(to bottom, var(--gold), transparent);
        }

        .admin-sidebar h2 {
            color: var(--gold);
            font-size: 1.8rem;
            padding: 0 25px 20px;
            margin: 0 0 20px;
            border-bottom: 1px solid rgba(212, 175, 55, 0.3);
        }

        .admin-sidebar nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .admin-sidebar nav li {
            margin-bottom: 5px;
        }

        .admin-sidebar nav a {
            color: var(--sidebar-text);
            text-decoration: none;
            display: block;
            padding: 12px 25px;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .admin-sidebar nav a:hover {
            background: rgba(212, 175, 55, 0.1);
            color: var(--gold);
        }

        .admin-sidebar nav a.active {
            background: rgba(212, 175, 55, 0.15);
            color: var(--gold);
            border-left: 4px solid var(--gold);
        }

        .admin-sidebar nav a.active::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: var(--gold);
        }

        /* Contenu principal */
        .admin-main {
            flex: 1;
            padding: 40px;
            background: linear-gradient(135deg, #f9f9f9 0%, #f0e6d2 100%);
        }

        .admin-main h1 {
            font-size: 2.2rem;
            margin-top: 0;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }

        .admin-main h1::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, var(--gold), var(--gold-dark));
        }

        /* Cartes de statistiques */
        .stat-card {
            background: var(--card-bg);
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border-top: 3px solid var(--gold);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .stat-card h3 {
            font-size: 1.2rem;
            margin-top: 0;
            margin-bottom: 15px;
            color: var(--gold-dark);
        }

        .stat-card p {
            font-size: 1.8rem;
            margin: 0;
            font-weight: 600;
            color: var(--text-dark);
        }

        .stat-card .highlight {
            color: var(--gold-dark);
            font-weight: 700;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .admin-container {
                flex-direction: column;
            }
            
            .admin-sidebar {
                width: 100%;
                padding: 20px 0;
            }
            
            .admin-sidebar nav ul {
                display: flex;
                overflow-x: auto;
                padding: 0 15px;
            }
            
            .admin-sidebar nav li {
                margin-bottom: 0;
                margin-right: 10px;
            }
            
            .admin-sidebar nav a {
                padding: 10px 15px;
                white-space: nowrap;
            }
            
            .admin-main {
                padding: 25px;
            }
        }
    </style>
</head>
<body>

<?php include (VIEWS."inc/navbarAdmin.php")?>

        <!-- Contenu principal -->
        <div class="admin-main">
            <h1>Tableau de Bord</h1>
            
            <div class="stat-card">
                <h3>5 Commandes aujourd'hui</h3>
                <p>Total : <span class="highlight">1 240€</span></p>
            </div>
            
            <div class="stat-card">
                <h3>12 Produits en stock</h3>
                <p>Dernier ajout : <span class="highlight">Collier en Or</span></p>
            </div>
        </div>
    </div>
    <?php include (VIEWS."inc/footer.php")?>

   
</body>
</html>