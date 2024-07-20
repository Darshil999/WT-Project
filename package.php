<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!-- font awsome cdnj link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cart.css">
  </head>
  <body>
    <!-- <!-- header section starts  -->
    <section class="header">

    <a href="home.php" class="logo">travel</a>
    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">packages</a>
        <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
<!-- header section ends --> 
<div class="heading" style="background:url(images/package.png) no-repeat">
    <h1>packages</h1>
</div>
<br><br>
<!-- packages section starts -->

<!-- cart section starts -->
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


<!-- cart section ends -->

<!-- button -->
<br><br>
<label for="redirect" class="centered"><h2>Select state to travel:</h2></label>

    <select id="redirect" class="centered">
        <option value="default" >Select an option</option>
        <option value="Andhra.php">Andhra Pradesh</option>
        <option value="Arunachal.php">Arunachal Pradesh</option>
        <option value="Assam.php">Assam</option>
        <option value="Bihar.php">Bihar</option>
        <option value="Chattisgadh.php">Chattisgarh</option>
        <option value="Goa.php">Goa</option>
        <option value="Gujarat.php">Gujarat</option>
        <option value="Haryana.php">Haryana</option>
        <option value="Himachal.php">Himachal Pradesh</option>
        <option value="Jharkhand.php">Jharkhand</option>
        <option value="Karnataka.php">Karnataka</option>
        <option value="Kerala.php">kerala</option>
        <option value="Madhya.php">Madhaya Pradesh</option>
        <option value="Maharashtra.php">Maharashtra</option>
        <option value="Manipur.php">Manipur</option>
        <option value="Meghalaya.php">Meghalaya</option>
        <option value="Mizoram.php">Mizoram</option>
        <option value="Nagaland.php">Nagaland</option>
        <option value="Odisha.php">Odisha</option>
        <option value="Punjab.php">Punjab</option>
        <option value="Rajasthan.php">Rajasthan</option>
        <option value="Sikkim.php">Sikkim</option>
        <option value="Tamil.php">Tamil Nadu</option>
        <option value="Telanagana.php">Telangana</option>
        <option value="Tripura.php">Tripura</option>
        <option value="Uttarakhan.php">Uttarakhand</option>
        <option value="Uttar.php">Uttar Pradesh</option>
        <option value="Bengal.php">West Bengal</option>
    </select>
    <!-- button ends -->


  <section class="packages">
    <h1 class="heading-title">Recomemndations</h1>
    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="images/goldentem.png" alt="">
        </div>
        <div class="content">
          <h3>Golden Temple</h3>
          <p>One of the most spiritual places in India, the Golden Temple, also known as Sri Harmandir Sahib,
             is the holiest shrine in all of Sikhism. Located right in the heart of Amritsar, the stunning golden
              architecture of the temple and the daily Langar (community kitchen) attract a large number of visitors
               and devotees each day.</p>
               <p class="price">Rs. 10000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="10000">add to cart</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/sou.png" alt="">
        </div>
        <div class="content">
          <h3>Statue Of Unity</h3>
          <p>Statue of Unity is a memorial to The Iron Man of India, Sardar Vallabhbhai Patel. The statue has 
            been erected to propagate Sardar Vallabhbhai Patel's vision of India and to inspire the Citizens of 
            India through his patriotism and freedom struggle. The Bronze statue of the founding father of the
             Republic of India stands 182 metres tall grabbing the attention of the whole world as the 'Tallest 
             statue in the World'</p>
             <p class="price">RS. 15000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="15000">add to cart</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/tajmahal.png" alt="">
        </div>
        <div class="content">
          <h3>Taj Mahal</h3>
          <p>The Taj Mahal is a world-renowned monument located in Agra, India. Many tour operators and travel 
            agencies offer various Taj Mahal tour packages. These packages typically include transportation, 
            accommodation, guided tours, and sometimes additional activities or visits to other nearby attractions.</p>
            <p class="price">RS. 9000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="9000">add to cart</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/leh.png" alt="">
        </div>
        <div class="content">
          <h3>Leh Ladakh</h3>
          <p>Ladakh is a union territory in the Kashmir region of India. Formerly falling in the state of Jammu &
             Kashmir, Ladakh was administered a union territory on 31st October 2019. Extending from the Siachen
              Glacier to the main Great Himalayas, Ladakh is a land like no other. Dominated by dramatic landscapes,
               Ladakh is known as the world's coldest desert.</p>
               <p class="price">RS. 20000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="20000">add to cart</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/srinagar.png" alt="">
        </div>
        <div class="content">
          <h3>Srinagar</h3>
          <p>Famously known as 'Heaven on Earth, Srinagar is located in the union territory of Jammu & Kashmir, 
            on the banks of river Jhelum. Srinagar is known for the stationary houseboats and gondola-type rowboats-
             Shikaras on Dal Lake. Adorned with tranquil Dal Lake & Nigeen Lake, Srinagar is the dream destination
              for honeymoon and family holidays</p>
              <p class="price">RS. 17000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="17000">add to cart</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/rishi.png" alt="">
        </div>
        <div class="content">
          <h3>Rishikesh</h3>
          <p> Rishikesh (also called as Hrishikesh) is known for its adventure activities, ancient temples, 
            popular cafes and as the "Yoga Capital of the World". Gateway to Garhwal Himalayas, Rishikesh is also 
            a pilgrimage town and one of the holiest places for Hindus.Rishikesh became known worldwide in the
             1960s after The Beatles visited the ashram of Maharishi Mahesh Yogi here.</p>
             <p class="price">RS. 12000</p> <!-- Add a price element -->
        <a href="#" class="btncart" data-price="12000">add to cart</a>
        </div>
      </div>

    </div>
  </section>

<!-- packages section ends -->
<!-- footer section starts -->
<section class="footer">

  <div class="box-container">

    <div class="box">
      <h3>quick links</h3>
      <a href="index.php">   <i class="fas fa-angle-right"></i> home</a>
      <a href="about.php">  <i class="fas fa-angle-right"></i> about</a>
      <a href="package.php"><i class="fas fa-angle-right"></i> packages</a>
      <a href="book.php">   <i class="fas fa-angle-right"></i> book</a>

    </div>

    <div class="box">
      <h3>extra links</h3>
      <a href="#">   <i class="fas fa-angle-right"></i> ask questions</a>
      <a href="#">   <i class="fas fa-angle-right"></i> about us</a>
      <a href="#">   <i class="fas fa-angle-right"></i> privacy policy</a>
      <a href="#">   <i class="fas fa-angle-right"></i> terms of use</a>

    </div>
    
    <div class="box">
      <h3>contact info</h3>
      <a href="#">   <i class="fas fa-phone"></i> +123-456-789</a>
      <a href="#">   <i class="fas fa-phone"></i> +111-222-333</a>
      <a href="#">   <i class="fas fa-envelope"></i> devanshu@gmail.com</a>
      <a href="#">   <i class="fas fa-map"></i> Gujarat , India -380001</a>
    </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook"></i>facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
     </div>
  </div>
  <div class="credit">createdy by <span>Devanshu Harsh</span> | all rights reserved!</div>
</section>
<!-- footer section ends -->
    <!-- swiper js link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- custom js file link -->
	<script src="scriptselect.js"></script>
  <script src="cart.js"></script>
  </body>
</html>
