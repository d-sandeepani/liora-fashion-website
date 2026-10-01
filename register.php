<?php 
include "config.php";

if(isset($_POST['register'])){
    $name     = mysqli_real_escape_string($conn, $_POST['reg_name']);
    $email    = mysqli_real_escape_string($conn, $_POST['reg_email']);
    $password = mysqli_real_escape_string($conn, $_POST['reg_password']);
    $hashed   = password_hash($password, PASSWORD_DEFAULT);

    // Check if email exists
    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if(mysqli_num_rows($check) > 0){
        echo "<script>alert('Email already registered! Please login.');</script>";
    } else {
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$hashed')";
        if(mysqli_query($conn, $sql)){
            echo "<script>alert('Registration Successful! You can now login.'); window.location='login.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
  }

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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
        <li><a href="contact.php">Contact</a></li>
        <li id="lg-i"><a href="cart.php"><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></a></li>
        <li id="lg-i"><a class="active" href="login.php"><i class="fa-solid fa-user" style="color: #000000;"></i></a></li>
        <a href="#" id="close"><i class="fa-solid fa-xmark" style="color: #000000;"></i></a>
        
      </ul>
    </div>
    <div id="mobile">
      <a href="cart.php"><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></a>
      <a href="login.php"><i class="fa-solid fa-user" style="color: #000000;"></i></a>
      <i id="bar" class="fas fa-bars" style="color: #000000;"></i>
  </div>
    </section>

<!--login form start-->
<form method="POST">
<section id="login" class="section-p1">
<div class="login-box" >
    <div class="login-header">
        <h2>Register Now</h2>
    </div>
    <div class="input-box">
        <input type="text" name="reg_name" class="input-field" placeholder="Username" required autocomplete="off">
    </div>
    <div class="input-box">
        <input type="text" name="reg_email" class="input-field" placeholder="Email" required autocomplete="off">
    </div>
    <div class="input-box">
        <input type="password" name="reg_password" class="input-field" placeholder="password" required autocomplete="new-password">
    </div>
    <div class="forgot">
        <section>
            <input type="checkbox" id="check">
            <label for="check">I agree to terms & Conditions</label>
        </section>

    </div>
    <div class="input-submit">
        <button class="submit-btn" name="register" type="submit" >Sign up</button>
    </div>
    <div class="Sign-up-link">
        <p>Already have Account? <a href="login.php">login</a></p>
    </div>
</div>
</section>
</form>
   

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