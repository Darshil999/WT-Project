<!DOCTYPE html>
<html>
	<head>
		<title>Himachal Pradesh</title>
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
					<H1 style="text-align:center;margin-bottom:20px;">Welcome to the himachal Pradesh</H1>
				</div>
			</div>

			<div>
				<div class="row">

					<div class="col-sm-4">
						<div class="card">
						  <img class="card-img-top" src="images/shimla.png" alt="Card image">
						  <div class="card-body">
						    <h2 class="card-title"><b>Shimla</b></h2>
						    <p class="card-text">
Nestled in the Himalayas, Shimla is a captivating hill station with colonial charm. Explore the Mall Road, Jakhoo Temple, and enjoy adventure activities amidst stunning landscapes. 
Discover Shimla's timeless allure, where history and nature converge, making it a must-visit destination.</p>
						    <p class="price">Rs. 16500</p> <!-- Add a price element -->
                            <a href="#" class="btncart" data-price="16500">add to cart</a>
						  </div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="card">
						  <img class="card-img-top" src="images/dalhousie.png" alt="Card image" style="height:190px;">
						  <div class="card-body">
						    <h2 class="card-title"><b>Dalhousie</b></h2>
						    <p class="card-text">Nestled amidst the Dhauladhar mountain range, Dalhousie offers a serene escape from the hustle and bustle of city life. This picturesque town boasts Victorian-style architecture, lush green landscapes, and a tranquil ambiance. Visitors 
								can explore the colonial-era buildings, take leisurely walks, and enjoy panoramic views of the surrounding hills.</p>
						    <p class="price">Rs. 13000</p> <!-- Add a price element -->
                            <a href="#" class="btncart" data-price="13000">add to cart</a>
						  </div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="card">
						  <img class="card-img-top" src="images/dharamshala.png" alt="Card image">
						  <div class="card-body">
						    <h2 class="card-title"><b>Dharamshala</b></h2>
						    <p class="card-text">Nestled in the lap of the Dhauladhar mountain range, Dharamshala offers a unique blend of Tibetan and Indian influences. The town is known for its peaceful ambiance, lush landscapes, and a thriving Tibetan community. Visitors can explore
								 the serene monasteries, enjoy breathtaking mountain views, and immerse themselves in the Tibetan culture. </p>
							<p class="price">Rs. 16000</p> <!-- Add a price element -->
                            <a href="#" class="btncart" data-price="16000">add to cart</a>
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