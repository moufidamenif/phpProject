<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription | Luxe Bijoux</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include(VIEWS . "inc/navbar.php") ?>

<main class="auth-main d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="auth-box border p-4 rounded shadow" style="width: 100%; max-width: 400px;">
        <h2 class="text-center mb-4">Inscription</h2>

        <form method="POST" action="<?php  url('user/storeUser'); ?>">
            <div class="mb-3">
                <label for="signupEmail" class="form-label">Adresse e-mail</label>
                <input type="email" class="form-control" id="signupEmail" name="signupEmail" required>
            </div>
            <div class="mb-3">
                <label for="signupPassword" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="signupPassword" name="signupPassword" required>
            </div>
            <div class="mb-3">
                <label for="signupConfirmPassword" class="form-label">Confirmer le mot de passe</label>
                <input type="password" class="form-control" id="signupConfirmPassword" name="signupConfirmPassword" required>
            </div>
            <input type="submit" name="submit"  class="btn btn-success w-100">S'inscrire</input>
        </form>

        <p class="auth-hint text-center mt-3">
            Déjà inscrit ? <a href="<?php  url('user/login'); ?>">Connectez-vous</a>
        </p>
    </div>
</main>

<?php include(VIEWS . "inc/footer.php") ?>

</body>
</html>
