document.addEventListener('DOMContentLoaded', function () {
    let cartItems = 0;
    let totalPrice = 0;
    const cartCount = document.getElementById('count');
    const cartTotal = document.getElementById('total');
    const cartItemsList = document.getElementById('cartItemsList');
    const checkoutButton = document.getElementById('checkout-button');

    checkoutButton.addEventListener('click', function () {
        // Implement the logic to proceed to checkout here
        // You can use window.location to redirect the user to the checkout page
        // Example: window.location.href = 'checkout.php';
    });

    const buttons = document.querySelectorAll('.btncart');
    buttons.forEach(function (button) {
        button.addEventListener('click', function (e) {
            e.preventDefault();

            // Get the package title and price
            const packageTitle = this.parentElement.querySelector('h3').textContent;
            const price = parseFloat(this.getAttribute('data-price'));

            // Create a list item and add it to the cart items list
            const listItem = document.createElement('li');
            listItem.textContent = `${packageTitle} - Rs ${price.toFixed(2)}`;
            const removeButton = document.createElement('button');
            removeButton.textContent = 'Remove';
            removeButton.addEventListener('click', function () {
                // Remove the item from the cart list when the "Remove" button is clicked
                cartItemsList.removeChild(listItem);

                // Update cart count and total price
                cartItems--;
                cartCount.textContent = cartItems;
                totalPrice -= price;
                cartTotal.textContent = 'Rs ' + totalPrice.toFixed(2);
            });
            listItem.appendChild(removeButton);
            cartItemsList.appendChild(listItem);

            // Update cart count and total price
            cartItems++;
            cartCount.textContent = cartItems;
            totalPrice += price;
            cartTotal.textContent = 'Rs ' + totalPrice.toFixed(2);
        });
    });
    checkoutButton.addEventListener('click', function () {
        alert('Redirecting to checkout. Total Amount: Rs ' + totalPrice.toFixed(2));
        var checkoutPageURL = "book.php"; // Replace with the actual URL

    // Redirect the user to the checkout page
    window.location.replace(checkoutPageURL);
    });
});




    










