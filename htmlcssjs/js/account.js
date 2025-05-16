// Exemple de chargement des commandes
function loadOrders() {
    const orders = JSON.parse(localStorage.getItem('orders')) || [];
    const user = JSON.parse(sessionStorage.getItem('currentUser'));
    
    const userOrders = orders.filter(order => order.userId === user.id);
    const container = document.getElementById('orders-list');
    
    if (userOrders.length === 0) return;
    
    container.innerHTML = userOrders.map(order => `
        <div class="order-card">
            <h3>Commande #${order.id}</h3>
            <p>Date: ${new Date(order.date).toLocaleDateString()}</p>
            <p>Total: ${order.total.toFixed(2)}€</p>
            <p>Statut: ${order.status}</p>
            <a href="order-details.html?id=${order.id}">Voir détails</a>
        </div>
    `).join('');
}