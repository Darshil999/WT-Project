<!DOCTYPE html>
<html>

<head>
    <title>Kerala</title>
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
                <H1 style="text-align:center;margin-bottom:20px;">Welcome to the Kerala</H1>
            </div>
        </div>

        <div>
            <div class="row">

                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="images/capital.png" alt="Vishakhapatnam">
                        <div class="card-body">
                            <h2 class="card-title"><b>Thiruvanathampuram</b></h2>
                            <p class="card-text">Thiruvananthapuram is known for its lush green landscapes, beautiful beaches, and a rich cultural heritage. The city boasts a blend of traditional Kerala architecture and modernity. Visitors can explore historic sites such as the Padmanabhaswamy
                                 Temple, a magnificent temple dedicated to Lord Vishnu, and the East Fort, which encloses several historical buildings.</p>
                            <p class="price">Rs. 9000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="9000">add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="images/kovalam.png" alt="Puducherry" style="height:190px;">
                        <div class="card-body">
                            <h2 class="card-title"><b>Kovalam</b></h2>
                            <p class="card-text">Kovalam is renowned for its picturesque coastline, with three beautiful crescent-shaped beaches: Lighthouse Beach, Hawah Beach, and Samudra Beach. The name "Kovalam"
                                 itself means "grove of coconut trees," and the palm-fringed shores create a mesmerizing tropical backdrop</p>
                            <p class="price">Rs. 10000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="10000">add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="images/munnar.png" alt="Tirupati">
                        <div class="card-body">
                            <h2 class="card-title"><b>Munnar</b></h2>
                            <p class="card-text">Munnar is a breathtaking hill station located in the Indian state of Kerala. It is known for its lush tea plantations, pristine natural beauty, 
                                and cool climate, making it a popular destination for nature lovers and those seeking a tranquil retreat</p>
                            <p class="price">Rs. 11500</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="11500">add to cart</a>
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
