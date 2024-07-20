document.addEventListener('DOMContentLoaded', function () {
    // Initialize variables to keep track of cart items and total price
    let cartItems = [];
    let totalPrice = 0;

    // Get references to various elements in the DOM
    const cartCount = document.getElementById('count');
    const cartTotal = document.getElementById('total');
    const cartItemsList = document.getElementById('cartItemsList');
    const checkoutButton = document.getElementById('checkout-button');

    // Function to update the cart display
    function updateCart() {
        cartItemsList.innerHTML = ''; // Clear the cart list
        cartCount.textContent = cartItems.length;

        totalPrice = 0;
        cartItems.forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = `${item.name} - Rs ${item.price.toFixed(2)}`;
            const removeButton = document.createElement('button');
            removeButton.textContent = 'Remove';
            removeButton.addEventListener('click', function () {
                removeItemFromCart(item);
            });
            listItem.appendChild(removeButton);
            cartItemsList.appendChild(listItem);
            totalPrice += item.price;
        });

        cartTotal.textContent = 'Rs ' + totalPrice.toFixed(2);
    }

    // Function to add an item to the cart
    function addItemToCart(name, price) {
        cartItems.push({ name, price });
        updateCart();
    }

    // Function to remove an item from the cart
    function removeItemFromCart(item) {
        const itemIndex = cartItems.indexOf(item);
        if (itemIndex !== -1) {
            cartItems.splice(itemIndex, 1);
            updateCart();
        }
    }

    // Handle "Add to Cart" buttons
    const addToCartButtons = document.querySelectorAll('.btncart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            const packageTitle = this.parentElement.querySelector('.card-title').textContent;
            const price = parseFloat(this.getAttribute('data-price'));
            addItemToCart(packageTitle, price);
        });
    });

    // Handle the "Checkout" button (you can customize this function)
    checkoutButton.addEventListener('click', function () {
        alert('Redirecting to checkout. Total Amount: Rs ' + totalPrice.toFixed(2));
        var checkoutPageURL = "book.php"; // Replace with the actual URL

    // Redirect the user to the checkout page
    window.location.replace(checkoutPageURL);
    });
});
