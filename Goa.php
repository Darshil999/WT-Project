<!DOCTYPE html>
<html>

<head>
    <title>Goa</title>
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
        body {
            background-color: #f8f9fa;
            font-family: 'Verdana', sans-serif;
        }

        .container {
            background-color: #E6F7FF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .card {
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 1.25rem;
            color: #333;
        }

        .card-text {
            color: #555;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    
<br><br><br>
    <div class="cartstart">
<div class="headercart">
  <p class="logo">Packages Cart</p>
  <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>

</div>
  <div class="containercart">
    <div id="root"></div>
      <div class="sidebar">
        <div class="headcart"><p>My Cart</p></div>
          
          <ul id="cartItemsList">
        <!-- This list will display the items in the cart -->
    </ul>
    
            <div class="footcart">
              <h3>Total</h3>
              <h2 id="total"> Rs 0.00</h2>
            </div>
            

        </div>
  </div>

  <button id="checkout-button" class="btncart-check" onclick="redirectToCheckout()">Checkout</button>
</div>

<br><br>
    <div class="container">
        <div class="row">
            <h1>Welcome to Goa</h1>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="images/bom.png" alt="Basilica of Bom Jesus">
                    <div class="card-body">
                        <h2 class="card-title"><b>Basilica of Bom Jesus</b></h2>
                        <p class="card-text">The Basilica of Bom Jesus is a renowned religious site located in Old Goa, India. This travel package offers you the opportunity to
                             visit this historic and architecturally significant church, which is a UNESCO World Heritage Site.</p>
                        <p class="price">Rs. 11000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="11000">add to cart</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="images/dudhsagar.png" alt="Dudhsagar Waterfalls">
                    <div class="card-body">
                        <h2 class="card-title"><b>Dudhsagar Waterfalls</b></h2>
                        <p class="card-text">Dudhsagar Waterfalls, located in the Western Ghats of Goa, is one of India's most magnificent natural wonders. This travel
                             package offers you the opportunity to witness the breathtaking beauty of Dudhsagar, often referred to as the "Sea of Milk."</p>
                        <p class="price">Rs. 10000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="10000">add to cart</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="images/panaji.png" alt="Panaji">
                    <div class="card-body">
                        <h class="card-title"><b>Panaji</b></h2>
                        <p class="card-text">TPanaji, the capital city of the Indian state of Goa, is a charming and picturesque destination known for its unique blend of Indian and Portuguese influences. 
                            This travel package offers you the opportunity to explore the vibrant and culturally diverse city of Panaji.</p>
                        <p class="price">Rs. 10000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="10000">add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="acart.js"></script>
    <script src="script.js"></script>
</body>

</html>
