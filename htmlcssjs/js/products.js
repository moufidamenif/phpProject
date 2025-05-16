// Données des produits (simplifiées)
const products = [
    {
        id: 1,
        name: "Collier en Or 18K",
        price: 199.99,
        image: "images/collier-or.jpg",
        description: "Collier en or jaune avec pendentif"
    },
    {
        id: 2,
        name: "Bague en Argent",
        price: 89.99,
        image: "images/bague-argent.jpg",
        description: "Bague en argent 925 avec zirconium"
    }
];

// Panier (initialisé depuis le localStorage ou vide)
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Afficher les produits
function displayProducts() {
    const container = document.getElementById('products-container');
    
    products.forEach(product => {
        container.innerHTML += `
            <div class="product-card">
                <img src="${product.image}" alt="${product.name}">
                <h3>${product.name}</h3>
                <p>${product.description}</p>
                <p class="product-price">${product.price.toFixed(2)}€</p>
                <button class="add-to-cart" data-id="${product.id}">
                    Ajouter au panier
                </button>
            </div>
        `;
    });
}

// Mettre à jour le compteur du panier
function updateCartCount() {
    const count = cart.reduce((total, item) => total + item.quantity, 0);
    document.querySelector('.cart-count').textContent = count;
}

// Au chargement de la page
document.addEventListener('DOMContentLoaded', () => {
    displayProducts();
    updateCartCount();
});

// Gestion du panier
document.addEventListener('click', (e) => {
    if (e.target.classList.contains('add-to-cart')) {
        const id = parseInt(e.target.getAttribute('data-id'));
        const product = products.find(p => p.id === id);
        
        // Vérifier si l'article existe déjà
        const existingItem = cart.find(item => item.id === id);
        
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({
                ...product,
                quantity: 1
            });
        }
        
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCount();
        alert(`${product.name} ajouté au panier !`);
    }
});