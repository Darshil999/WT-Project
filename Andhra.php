<!DOCTYPE html>
<html lan="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

        

        .card-text {
            color: #555;
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

    <div class="container" >
        <div>
            <div class="row">
                <H1 style="text-align:center;margin-bottom:20px;">Welcome to the Andhra Pradesh</H1>
            </div>
        </div>

        <div>
            <div class="row">

                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="images/vishakhapatnam.png" alt="Vishakhapatnam">
                        <div class="card-body">
                            <h2 class="card-title"><b>Vishakhapatnam</b></h2>
                            <p class="card-text">Explore the coastal gem of Vishakhapatnam, also known as Vizag, on this exciting travel package. Vishakhapatnam is a vibrant city nestled along the Bay of Bengal, offering a mix of natural beauty, historical sites, and cultural experiences. 
                                This package allows you to discover the best of Vishakhapatnam's attractions and experiences.</p>
                            <p class="price">Rs. 15000</p> <!-- Add a price element -->
                            <a href="#" class="btncart" data-price="15000">add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="images/puducherry.png" alt="Puducherry" style="height:190px;">
                        <div class="card-body">
                            <h2 class="card-title"><b>Puducherry</b></h2>
                            <p class="card-text">Puducherry, often referred to as Pondicherry, is a small coastal paradise nestled on the southeastern coast of India. Known for its unique blend of Indian and French cultures, Puducherry is a place of tranquility, spirituality, and aestheti
                                   beauty. This travel package invites you to immerse yourself in the distinct ambiance of Puducherry.</p>
                            <p class="price">Rs. 16000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="16000">add to cart</a>                      
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="images/tirupati.png" alt="Tirupati">
                        <div class="card-body">
                            <h2 class="card-title"><b>Tirupati</b></h2>
                            <p class="card-text">Tirupati, located in the southern state of Andhra Pradesh, is a city of immense spiritual significance. It is most renowned for its famous temple, the Sri Venkateswara Temple, which is dedicated to Lord Venkateswara, an incarnation of Lord Vishnu. This travel package invites you to embark on a spiritual journey 
                                to Tirupati and experience the rich religious and cultural heritage of this sacred city.</p>
                            <p class="price">Rs. 13000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="13000">add to cart</a>
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
