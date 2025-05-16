<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Luxe Bijoux</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Styles spécifiques à la page de connexion */
        .auth-main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 70vh;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
        }
        
        .auth-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        
        .auth-title {
            text-align: center;
            margin-bottom: 25px;
            color: #8b5a2b;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .form-input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        
        .btn-auth {
            width: 100%;
            padding: 12px;
            background-color: #8b5a2b;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .btn-auth:hover {
            background-color: #6d4722;
        }
        
        .auth-footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }
        
        .auth-link {
            color: #8b5a2b;
            text-decoration: none;
            font-weight: 500;
        }
        
        .error-message {
            color: #ff4d4d;
            margin-top: 10px;
            text-align: center;
            display: none;
        }
    </style>
</head>
<body>
    <div class="background-image"></div>
    
<?php include(VIEWS . "inc/navbar.php") ?>

    <main class="auth-main">
        <div class="auth-box">
            <h2 class="auth-title">Connexion</h2>
            
            <form id="login-form"  method="POST"action ="<?PHP  url("user/loggedIn")?>">
                <div class="form-group">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" id="email" class="form-input"  name="emailLogin"required>
                </div>
                
                <div class="form-group">
                    <label for="password" class="form-label">Mot de passe :</label>
                    <input type="password" id="password" class="form-input" required minlength="6" name="passwordLogin">
                </div>
                
                
                <input type="submit" class="btn-auth">Se connecter</input>
                
                <div class="auth-footer">
                    <p>Pas encore de compte ? <a href="<?php url("user/signUp")?>" class="auth-link">Créez un compte</a></p>
                    <p><a href="#" class="auth-link">Mot de passe oublié ?</a></p>
                </div>
            </form>
        </div>
    </main>

    <?php include(VIEWS . "inc/footer.php") ?>

   
</body>
</html>