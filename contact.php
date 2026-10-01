<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <!--//font awosame link//-->
    <script src="https://kit.fontawesome.com/7afab252cb.js" crossorigin="anonymous"></script>
  
    <!--CSS link-->
    <link rel="stylesheet" href="CSS/style.css">

   

</head>
<body>
 <!--Header Section start-->
    <section id="header">
        <a href="home.php"><img src="../LIORA/images/logo A.png" alt="Logo"></a>
   
    <div>
      <ul id="navbar">
        <li><a href="home.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="about.php">About</a></li>
        <li><a class="active" href="contact.php">Contact</a></li>
        <li id="lg-i"><a href="cart.php"><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></a></li>
        <li id="lg-i"><a href="login.php"><i class="fa-solid fa-user" style="color: #000000;"></i></a></li>
        <a href="#" id="close"><i class="fa-solid fa-xmark" style="color: #000000;"></i></a>
        
      </ul>
    </div>
    <div id="mobile">
      <a href="cart.php"><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></a>
      <a href="login.php"><i class="fa-solid fa-user" style="color: #000000;"></i></a>
      <i id="bar" class="fas fa-bars" style="color: #000000;"></i>
  </div>
    </section>

 <!--page header section start-->
     <section id="page-header" class="about-header">
     <h1><i>Contact Us</i></h1>
      <p>Have something to say?.... We're ready to listen.</p>
     </section>
<!--page header section end-->

<!--form start-->
<div class="contact-form">
  <h1>We’d Love to Hear from You....</h1>
  <div class="c-container">
    <div class="main">
      <div class="content">
        <h2>Get in Touch</h2>
        <form action="#" method="post">
          <input type="text" name="name" placeholder="Enter Your Name">
          <input type="email" name="email" placeholder="Enter Your Email">
          <textarea name="message" placeholder="Your Message"></textarea>
          <button type="submit" class="cbtn">Send <i class="fas fa-paper-plane"></i></button>
        </form>
      </div>
      <div class="form-img">
        <img src="../LIORA/images/Banner/contact.png" alt="">
      </div>
    </div>
  </div>
</div>




</section>




<!--News letter section start-->
<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
      <h4>Subscribe to our Newsletter</h4>
      <p>Get the latest updates and Hot Deals.</p>
    </div>
    <div class="form">
      <input type="text" placeholder="Your email address">
      <button class="normal">Sign Up</button>

    </div>
</section>
<!--News letter section end-->

<!--Footer section start-->
<footer class="section-p1">
  <div class="col">
    <img class="logo" src="../LIORA/images/logo A.png" alt="Logo">
    <h4>Contact</h4>
    <p><strong>EmailAddress:</strong>LIORA@gmail.com</p>
    <p><strong>Phone:</strong>011 1234567</p>
    <p><strong>Hours:</strong>Mon-Fri 8am - 8pm</p>
    <div class="follow">
      <h4>Follow us</h4>
      <div class="icon">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-pinterest-p"></i>
        <i class="fa-brands fa-tiktok"></i>
      </div>
      </div>
  </div>
<div  class="col">
  <h4>Useful Links</h4>
  <a href="about.php">About us</a>
  <a href="shop.php">Shop</a>
  <a href="contact.php">Contact</a>
  <a href="#">Terms and Conditions</a>
</div>

<div  class="col">
  <h4>My Account</h4>
  <a href="login.php">Login</a>
  <a href="register.php">Register</a>
  <a href="cart.php">View Cart</a>
  <a href="#">My Orders</a>
</div>

<div class="copyright">
  <p>@2025, Liora - HTML CSS Ecommerce Template</p>
</footer>
<!--Footer section end-->





















    <!--custom JS-->
    <script src="Js/script.js"></script>

  
</body>
</html>