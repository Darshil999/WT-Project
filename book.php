<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!-- font awsome cdnj link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- <!-- header section starts  -->
    <section class="header">

    <a href="index.php" class="logo">travel</a>
    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">packages</a>
        <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    

    <!-- header section ends -->

    <div class="heading" style="background:url(images/ab.png)">
      <!--Image is not given at 26:59 -->
      <h1>book now</h1>
    </div>

    <!-- booking section starts -->

      <section class="booking">

        <h1 class="heading-title">book your trip!</h1>

        <form action="book_form.php" method="post" class="book-form"> 
          <div class="flex">
            <div class="inputBox">
              <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>

             <div class="inputBox">
              <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>

             <div class="inputBox">
              <span>mobile_no :</span>
                <input type="number" placeholder="enter your number" name="mobile_no">
            </div>
          
           <div class="inputBox">
              <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>

           <div class="inputBox">
              <span>enter selected packages:</span>
                <input type="text" placeholder="places you selected in cart" name="location">
            </div>

             <div class="inputBox">
              <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>

             <div class="inputBox">
              <span>arrival :</span>
                <input type="date"  name="arrival">
            </div>

             <div class="inputBox">
              <span>Departure:</span>
                <input type="date"  name="departure">
            </div>
          


            <div class="inputBox" id="toalamount">
              <span>Enter the amount displayed in cart:</span>
                <input type="number"  placeholder="enter the amount" name="money">
            </div>
          </div>
          <input type="submit" value="submit" class="btn" name="send" >

                 
        </form>
      </section>
    <!-- booking section ends -->
















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
	<script src="scripty.js"></script>
  <script src="script.js"></script>
  </body>
</html>