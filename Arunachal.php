<!DOCTYPE html>
<html>

<head>
    <title>Arunachal Pradesh</title>
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

    <div class="container" style="background-color:#E6F7FF;">
        <div>
            <div class="row">
                <H1 style="text-align:center;margin-bottom:20px;">Welcome to the Arunachal Pradesh</H1>
            </div>
        </div>

        <div>
            <div class="row">

                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="images/itanagar.png" alt="Itanagar">
                        <div class="card-body">
                            <h2 class="card-title"><b>Itanagar</b></h2>
                            <p class="card-text">Itanagar, the capital of the Indian state of Arunachal Pradesh, is a city of breathtaking natural beauty and cultural diversity. This travel package invites you to explore the enchanting landscapes and experience the rich culture of Itanagar, nestled in the eastern Himalayas.</p>
                            <p class="price">Rs. 10000</p> <!-- Add a price element -->
                            <a href="#" class="btncart" data-price="10000">add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="images/dibang.png" alt="Dibang valley" style="height:190px;">
                        <div class="card-body">
                            <h2 class="card-title"><b>Dibang valley</b></h2>
                            <p class="card-text">Dibang Valley, situated in the northeastern state of Arunachal Pradesh, is a pristine and remote wilderness destination.
                                 This travel package offers you the chance to embark on an extraordinary adventure in one of the least-explored regions of India.</p>
                            <p class="price">Rs. 10000</p> <!-- Add a price element -->
                            <a href="#" class="btncart" data-price="10000">add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="images/tezu.png" alt="Tezu">
                        <div class="card-body">
                            <h2 class="card-title"><b>Tezu</b></h2>
                            <p class="card-text">Tezu, located in the Lohit district of Arunachal Pradesh, is a charming town surrounded by natural beauty and 
                                cultural richness. This travel package invites you to explore Tezu and its unique blend of scenic landscapes, tribal cultures, and warm hospitality.</p>
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
