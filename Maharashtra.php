<!DOCTYPE html>
<html>

<head>
    <title>Andhra Pradesh</title>
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
                <H1 style="text-align:center;margin-bottom:20px;">Welcome to the Andhra Pradesh</H1>
            </div>
        </div>

        <div>
            <div class="row">

                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="images/nashik.png" alt="Vishakhapatnam">
                        <div class="card-body">
                            <h2 class="card-title"><b>Nashik</b></h2>
                            <p class="card-text">Nashik, often referred to as the "Wine Capital of India," is famous for its vineyards and wine production. The region's climate and
                                 fertile soil make it ideal for grape cultivation, leading to the development of a thriving wine industry. </p>
                            <p class="price">Rs. 7000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="7000">add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="images/mumbai.png" alt="Puducherry" style="height:190px;">
                        <div class="card-body">
                            <h2 class="card-title"><b>Mumbai</b></h2>
                            <p class="card-text">Mumbai is a city of contrasts, where towering skyscrapers and historic landmarks coexist amid a bustling and diverse population. It is the
                                 center of India's booming film industry, known as Bollywood, and is home to the famous film studios.</p>
                            <p class="price">Rs. 10000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="10000">add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="images/pune.png" alt="Tirupati">
                        <div class="card-body">
                            <h2 class="card-title"><b>Pune</b></h2>
                            <p class="card-text">
Pune is a thriving city in the Indian state of Maharashtra. It is known for its rich history, educational institutions, cultural diversity, and a growing IT and industrial presence. 
Pune, often referred to as the "Oxford of the East," is a major educational and cultural hub. The city boasts a number of esteemed educational institutions, including the University of Pune, which has contributed to its reputation as a center for learning and research.</p>
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
