<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Espace Client | Luxe Bijoux</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400&display=swap">
    <style>
        :root {
            --tiffany-blue: #81D8D0;
            --gold: #C5A482;
            --dark-blue: #0F4C81;
            --ivory: #F8F4EA;
        }
        
        body {
            font-family: 'Lato', sans-serif;
            background-color: var(--ivory);
            color: #333;
            margin: 0;
        }
        
        .luxe-header {
            background-color: white;
            border-bottom: 1px solid rgba(0,0,0,0.1);
            padding: 20px 0;
        }
        
        .luxe-logo {
            font-family: 'Playfair Display', serif;
            color: var(--dark-blue);
            font-size: 28px;
            letter-spacing: 1px;
        }
        
        .account-hero {
            background: linear-gradient(rgba(129, 216, 208, 0.2), rgba(129, 216, 208, 0.1)),
                        url('images/diamond-pattern.jpg');
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--dark-blue);
        }
        
        .account-container {
            display: grid;
            grid-template-columns: 250px 1fr;
            max-width: 1200px;
            margin: 40px auto;
            gap: 30px;
        }
        
        .luxe-sidebar {
            background: white;
            padding: 30px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.05);
        }
        
        .luxe-sidebar h3 {
            color: var(--gold);
            border-bottom: 1px solid var(--gold);
            padding-bottom: 10px;
            font-family: 'Playfair Display', serif;
        }
        
        .luxe-nav a {
            display: block;
            padding: 12px 0;
            color: #555;
            text-decoration: none;
            transition: all 0.3s;
            border-bottom: 1px solid #eee;
        }
        
        .luxe-nav a:hover {
            color: var(--dark-blue);
            padding-left: 10px;
        }
        
        .order-card {
            background: white;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.05);
            border-left: 4px solid var(--tiffany-blue);
            transition: transform 0.3s;
        }
        
        .order-card:hover {
            transform: translateY(-5px);
        }
        
        .btn-luxe {
            background: var(--gold);
            color: white;
            border: none;
            padding: 12px 25px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn-luxe:hover {
            background: var(--dark-blue);
        }
    </style>
</head>
<body>
    
<?php include (VIEWS."inc/navbar.php")?>
    <section class="account-hero">
        <div>
            <h1 style="font-family: 'Playfair Display', serif;">Votre Espace Client</h1>
            <p>Suivez vos commandes et découvrez des services exclusifs</p>
        </div>
    </section>

    <div class="account-container">
        <!-- Menu latéral -->
        <aside class="luxe-sidebar">
            <h3>Mon Compte</h3>
            <nav class="luxe-nav">
                <a href="#orders" class="active">Mes Commandes</a>
                <a href="#wishlist">Ma Wishlist</a>
                <a href="#settings">Paramètres</a>
                <a href="#appointments">Rendez-vous VIP</a>
                <a href="#" id="logout">Déconnexion</a>
            </nav>
            
            <div style="margin-top: 40px;">
                <h3>Services Exclusifs</h3>
                <ul>
                    <li>Conseiller personnel</li>
                    <li>Essayage à domicile</li>
                    <li>Nettoyage gratuit</li>
                </ul>
            </div>
        </aside>

        <!-- Contenu principal -->
        <main>
            <section id="orders">
                <h2 style="color: var(--dark-blue); font-family: 'Playfair Display';">Mes Dernières Commandes</h2>
                
                <div class="order-card">
                    <div style="display: flex; justify-content: space-between;">
                        <h3>Commande #LB-1254</h3>
                        <span style="color: var(--gold);">Expédiée</span>
                    </div>
                    <p>Date: 15 juin 2023</p>
                    <p>Montant: 1 250€</p>
                    <button class="btn-luxe">Suivre le colis</button>
                </div>
                
                <!-- Plus de commandes... -->
            </section>
        </main>
    </div>

    <script>
        // Effets luxe
        document.querySelectorAll('.luxe-nav a').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                document.querySelectorAll('.luxe-nav a').forEach(a => a.classList.remove('active'));
                link.classList.add('active');
                
                // Ici: charger le contenu dynamique
            });
        });
        
        // Déconnexion
        document.getElementById('logout').addEventListener('click', () => {
            if(confirm('Voulez-vous vraiment vous déconnecter ?')) {
                sessionStorage.removeItem('currentUser');
                window.location.href = 'index.html';
            }
        });
    </script>
    <?php include (VIEWS."inc/footer.php")?>
</body>
</html>