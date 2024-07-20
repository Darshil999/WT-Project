<!DOCTYPE html>
<html>
	<head>
		<title>Madhya Pradesh</title>
		<link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
		<style type="text/css">
			body {
				background-color: #f8f9fa;
			}

			.container {
				background-color: #ffffff;
				padding: 20px;
				border-radius: 10px;
				box-shadow: 0px 2px 10px rgba(0,0,0,0.1);
			}

			h1 {
				font-family: verdana;
				text-align: center;
				margin-bottom: 20px;
			}

			.card {
				margin-bottom: 20px;
				box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
			}

			.card:hover {
				transform: scale(1.03);
			}

			.card-img-top {
				height: 200px;
				object-fit: cover;
			}

			.card-title {
				color: #333333;
			}

			.card-text {
				color: #666666;
			}

			.btn-primary {
				background-color: #007bff;
				border: none;
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
				<H1>Welcome to the Madhya Pradesh</H1>
			</div>

			<div class="row">
				<div class="col-sm-4">
					<div class="card">
						<img class="card-img-top" src="images/ujjain.png" alt="Card image">
						<div class="card-body">
							<h2 class="card-title"><b>Ujjain</b></h2>
							<p class="card-text">Ujjain is considered one of the seven holiest cities in Hinduism and is located on the banks of the Shipra River. It's a prominent pilgrimage destination,
								 with the Mahakaleshwar Jyotirlinga Temple being one of the most important and revered Shiva temples in India. </p>
							<p class="price">Rs. 10000</p> <!-- Add a price element -->
                            <a href="#" class="btncart" data-price="10000">add to cart</a>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="card">
						<img class="card-img-top" src="images/kanha.png" alt="Card image" style="height:190px;">
						<div class="card-body">
							<h2 class="card-title"><b>Kanha national park</b></h2>
							<p class="card-text">
Kanha National Park is one of India's most renowned and significant wildlife reserves. It is located in the state of Madhya Pradesh 
and is celebrated for its remarkable biodiversity, particularly as a sanctuary for the Bengal tiger.</p>
							<p class="price">Rs. 8000</p> <!-- Add a price element -->
                            <a href="#" class="btncart" data-price="8000">add to cart</a>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="card">
						<img class="card-img-top" src="images/khajuraho.png" alt="Card image">
						<div class="card-body">
							<h2 class="card-title"><b>Khajuraho</b></h2>
							<p class="card-text">Khajuraho is a historic town located in the state of Madhya Pradesh, India. It is famous for its exquisite group of temples 
								known as the Khajuraho Group of Monuments, which are renowned for their intricate and erotic sculptures.</p>
							<p class="price">Rs. 12000</p> <!-- Add a price element -->
                            <a href="#" class="btncart" data-price="12000">add to cart</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="acart.js"></script>
    <script src="script.js"></script>
	</body>
</html>
