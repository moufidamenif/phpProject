// script.js

// Récupérer les produits stockés dans localStorage
let products = JSON.parse(localStorage.getItem('products')) || [];
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Elements du DOM
const productList = document.getElementById('product-list');
const cartItems = document.getElementById('cart-items');
const cartTotal = document.getElementById('cart-total');
const clearCartBtn = document.getElementById('clear-cart');

const tabLinks = document.querySelectorAll('.tab-link');
const tabContents = document.querySelectorAll('.tab-content');

// Fonction pour afficher les produits dans la page
function displayProducts() {
  if (products.length === 0) {
    productList.innerHTML = `<p>Aucun produit disponible. Veuillez en ajouter depuis le dashboard admin.</p>`;
    return;
  }
  productList.innerHTML = '';
  products.forEach(product => {
    const prodDiv = document.createElement('div');
    prodDiv.className = 'product';
    prodDiv.innerHTML = `
      <img src="${product.img}" alt="${product.name}" />
      <h3>${product.name}</h3>
      <p>${product.desc}</p>
      <strong>${product.price} €</strong>
      <button data-id="${product.id}">Ajouter au panier</button>
    `;
    productList.appendChild(prodDiv);
  });

  // Ajouter événement click sur chaque bouton "Ajouter au panier"
  document.querySelectorAll('.product button').forEach(btn => {
    btn.addEventListener('click', e => {
      const id = Number(e.target.getAttribute('data-id'));
      addToCart(id);
    });
  });
}

// Ajouter produit au panier
function addToCart(id) {
  const product = products.find(p => p.id === id);
  if (!product) return;

  const found = cart.find(item => item.id === id);
  if (found) {
    found.quantity++;
  } else {
    cart.push({...product, quantity: 1});
  }
  saveCart();
  displayCart();
}

// Afficher le panier
function displayCart() {
  if (cart.length === 0) {
    cartItems.innerHTML = `<p>Votre panier est vide.</p>`;
    cartTotal.textContent = '';
    return;
  }

  cartItems.innerHTML = '';
  cart.forEach(item => {
    const itemDiv = document.createElement('div');
    itemDiv.className = 'cart-item';
    itemDiv.innerHTML = `
      <div>
        <strong>${item.name}</strong><br />
        ${item.quantity} × ${item.price} €
      </div>
      <button data-id="${item.id}">X</button>
    `;
    cartItems.appendChild(itemDiv);
  });

  // Total
  const total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
  cartTotal.textContent = `Total : ${total.toFixed(2)} €`;

  // Supprimer un item
  document.querySelectorAll('.cart-item button').forEach(btn => {
    btn.addEventListener('click', e => {
      const id = Number(e.target.getAttribute('data-id'));
      removeFromCart(id);
    });
  });
}

// Supprimer produit du panier
function removeFromCart(id) {
  cart = cart.filter(item => item.id !== id);
  saveCart();
  displayCart();
}

// Vider le panier
clearCartBtn.addEventListener('click', () => {
  cart = [];
  saveCart();
  displayCart();
});

// Sauvegarder panier dans localStorage
function saveCart() {
  localStorage.setItem('cart', JSON.stringify(cart));
}

// Gestion des onglets (Produits / Panier)
tabLinks.forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    const target = link.getAttribute('data-tab');

    tabLinks.forEach(l => l.classList.remove('active'));
    link.classList.add('active');

    tabContents.forEach(c => {
      if (c.id === target) {
        c.classList.add('active');
      } else {
        c.classList.remove('active');
      }
    });
  });
});

// Initialisation
displayProducts();
displayCart();
