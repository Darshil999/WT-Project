<!DOCTYPE html>
<html>

<head>
    <title>West Bengal</title>
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
    <div class="container" style="background-color:#E6F7FF;">
        <div>
            <div class="row">
                <H1 style="text-align:center;margin-bottom:20px;">Welcome to the West Bengal</H1>
            </div>
        </div>

        <div>
            <div class="row">

                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="images/kolkata.png" alt="Vishakhapatnam">
                        <div class="card-body">
                            <h2 class="card-title"><b>Kolkata</b></h2>
                            <p class="card-text">Kolkata, formerly known as Calcutta, is the capital city of West Bengal and a cultural hub of India. This travel package provides you with the
                                 opportunity to explore the rich heritage, artistic expression, and culinary delights of Kolkata.</p>
                            <p class="price">Rs. 12000</p> <!-- Add a price element -->
                            <a href="#" class="btncart" data-price="12000">add to cart</a>
                         </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="images/siliguri.png" alt="Puducherry" style="height:190px;">
                        <div class="card-body">
                            <h2 class="card-title"><b>Siliguri</b></h2>
                            <p class="card-text">Siliguri is a vibrant city located in the Darjeeling district of West Bengal, serving as a gateway to the enchanting hills of North Bengal and the neighboring states. This travel package offers you the chance to explore Siliguri's strategic 
                                location and its significance as a transit point for travelers heading to the Himalayan regions and tea estates.</p>
                            <p class="price">Rs. 11000</p> <!-- Add a price element -->
                            <a href="#" class="btncart" data-price="11000">add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="images/darjelling.png" alt="Tirupati">
                        <div class="card-body">
                            <h2 class="card-title"><b>Darjelling</b></h2>
                            <p class="card-text">Darjeeling is a picturesque hill station located in the Indian state of West Bengal. This travel package offers you the opportunity to explore the 
                                serene beauty and pleasant climate of Darjeeling, often referred to as the "Queen of the Himalayas."</p>
                            <p class="price">Rs. 10000</p> <!-- Add a price element -->
                            <a href="#" class="btncart" data-price="10000">add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="acart.js"></script>
    <script src="script.js"></script>
    
</body>

</html>
