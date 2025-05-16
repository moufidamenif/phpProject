// Mot de passe admin (à changer en production)
const ADMIN_EMAIL = "admin@luxebijoux.com";
const ADMIN_PASSWORD = "admin123";

document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (email === ADMIN_EMAIL && password === ADMIN_PASSWORD) {
        // Stocker la session (simplifié)
        sessionStorage.setItem('isAdmin', 'true');
        alert('Connexion réussie !');
        window.location.href = "admin/index.html";
    } else {
        alert('Identifiants incorrects');
    }
});

// Vérifier l'accès admin (à ajouter dans admin/index.html)
function checkAdminAccess() {
    if (!sessionStorage.getItem('isAdmin')) {
        window.location.href = "../login.html";
    }
}
// Gestion de l'inscription
document.getElementById('register-form')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const users = JSON.parse(localStorage.getItem('users')) || [];
    const newUser = {
        id: Date.now(),
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        password: document.getElementById('password').value,
        isAdmin: false
    };

    // Vérifier si l'email existe déjà
    if (users.some(user => user.email === newUser.email)) {
        alert('Cet email est déjà utilisé');
        return;
    }

    users.push(newUser);
    localStorage.setItem('users', JSON.stringify(users));
    
    alert('Inscription réussie !');
    window.location.href = "login.html";
});