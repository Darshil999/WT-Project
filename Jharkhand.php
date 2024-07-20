<!DOCTYPE html>
<html>
	<head>
		<title>Jharkhand</title>
		<link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  		<style type="text/css">
  			h1
  			{
  				font-style: verdana;
  				
  				top: 0;
  				left:0;
  				width: 100%;
  			}

  			.card 
  			{
  				margin-bottom: 10px;
  			}

  			.card-img-top
  			{
  				height:200px;

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
					<H1 style="text-align:center;margin-bottom:20px;">Welcome to the Jharkhand</H1>
				</div>
			</div>

			<div>
				<div class="row">

					<div class="col-sm-4">
						<div class="card">
						  <img class="card-img-top" src="images/ranchi.png" alt="Card image">
						  <div class="card-body">
						    <h2 class="card-title"><b>Ranchi</b></h2>
						    <p class="card-text">Nestled in the Chotanagpur Plateau, Ranchi is a city that offers a unique blend of modernity and tradition. Surrounded by lush forests, hills, and waterfalls, it's often called the "City of Waterfalls" and is a haven 
								for nature enthusiasts. The city is also significant for its tribal communities and their rich cultural heritage.</p>
						    <p class="price">Rs. 10000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="10000">add to cart</a>
						  </div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="card">
						  <img class="card-img-top" src="images/jubilee.png" alt="Card image" style="height:190px;">
						  <div class="card-body">
						    <h2 class="card-title"><b>Jubilee WaterPark</b></h2>
						    <p class="card-text">
"Jubilee Water Park" likely refers to a water park or recreational facility with the name "Jubilee" in its title. Water parks are popular destinations for 
families and individuals looking to enjoy water-based rides, slides, pools, and other aquatic activities.</p>
						    <p class="price">Rs. 2000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="2000">add to cart</a>
						  </div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="card">
						  <img class="card-img-top" src="images/netarhat.png" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">Netarhat</h4>
						    <p class="card-text">Netarhat is a picturesque hill station located in the state of Jharkhand, India. Known for its serene beauty, lush forests, and cool
								 climate, Netarhat is a popular destination for nature lovers and those seeking a tranquil retreat.t</p>
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