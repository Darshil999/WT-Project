<!DOCTYPE html>
<html>
	<head>
		<title>Karnataka</title>
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
					<H1 style="text-align:center;margin-bottom:20px;">Welcome to the Karnataka</H1>
				</div>
			</div>

			<div>
				<div class="row">

					<div class="col-sm-4">
						<div class="card">
						  <img class="card-img-top" src="images/bengaluru.png" alt="Card image">
						  <div class="card-body">
						    <h2 class="card-title"><b>Bengaluru</b></h2>
						    <p class="card-text">Bengaluru is a city of contrasts, where modernity blends seamlessly with tradition. It's a hub for technology, innovation, and education, with numerous IT parks, startups, and prestigious educational institutions. The city's
								 thriving IT sector has attracted a diverse and international population, giving it a cosmopolitan character.</p>
						    <p class="price">Rs. 17000</p> <!-- Add a price element -->
                            <a href="#" class="btncart" data-price="17000">add to cart</a>
						  </div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="card">
						  <img class="card-img-top" src="images/mysuru.png" alt="Card image" style="height:190px;">
						  <div class="card-body">
						    <h2 class="card-title"><b>Mysuru</b></h2>
						    <p class="card-text">Mysuru is a city steeped in tradition and history. It is best known for the opulent Mysore Palace, an architectural masterpiece that reflects the grandeur of the Wodeyar dynasty, who once ruled the region. Visitors can explore the palace's ornate interiors, including the Durbar Hall and private chambers.

The city is famous for its vibran </p>
							<p class="price">Rs. 10000</p> <!-- Add a price element -->
                            <a href="#" class="btncart" data-price="10000">add to cart</a>
						  </div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="card">
						  <img class="card-img-top" src="images/hampi.png" alt="Card image">
						  <div class="card-body">
						    <h2 class="card-title"><b>Hampi</b></h2>
						    <p class="card-text">Hampi was once the capital of the powerful Vijayanagara Empire during the 14th to 16th centuries, and it stands today as a mesmerizing open-air museum of ruins and relics. The site is renowned for its stunning and extensive collection 
								of ancient temples, palaces, bazaars, and other architectural marvels, all set against a dramatic rocky landscape.</p>
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