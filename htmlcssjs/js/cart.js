let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Mettre à jour le compteur
function updateCartCount() {
    const count = cart.reduce((total, item) => total + item.quantity, 0);
    document.querySelectorAll('.cart-count').forEach(el => el.textContent = count);
}

// Afficher les articles
function renderCart() {
    const container = document.getElementById('cart-items');
    
    if (cart.length === 0) {
        container.innerHTML = '<p class="empty-cart">Votre panier est vide</p>';
        return;
    }

    container.innerHTML = '';
    let subtotal = 0;

    cart.forEach(item => {
        subtotal += item.price * item.quantity;
        
        container.innerHTML += `
            <div class="cart-item">
                <img src="${item.image}" alt="${item.name}">
                <div class="cart-item-info">
                    <h3>${item.name}</h3>
                    <p>${item.price.toFixed(2)}€ × ${item.quantity}</p>
                </div>
                <span class="remove-item" data-id="${item.id}">🗑</span>
            </div>
        `;
    });

    document.getElementById('subtotal').textContent = subtotal.toFixed(2) + '€';
}

// Gestion des événements
document.addEventListener('click', (e) => {
    // Retirer un article
    if (e.target.classList.contains('remove-item')) {
        const id = parseInt(e.target.getAttribute('data-id'));
        cart = cart.filter(item => item.id !== id);
        localStorage.setItem('cart', JSON.stringify(cart));
        renderCart();
        updateCartCount();
    }
});

// Au chargement
document.addEventListener('DOMContentLoaded', () => {
    renderCart();
    updateCartCount();
});