<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    
    <!--//font awosame link//-->
    <script src="https://kit.fontawesome.com/7afab252cb.js" crossorigin="anonymous"></script>
  
    <!--CSS link-->
    <link rel="stylesheet" href="CSS/style.css">
    <style>
#cart
{
   color: #000 !important;
}
</style>
</head>
<body>

<!--Header Section start-->
    <section id="header">
        <a href="home.php"><img src="images/logo A.png" alt="Logo"></a>
   
    <div>
      <ul id="navbar">
        <li><a href="home.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li id="lg-i"><a class="active" href="cart.php"><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></a></li>
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
     <h1><i>Your Cart</i></h1>
      <p>Your cart is waiting. Enjoy the rest of your visit</p>
     </section>
<!--page header section end-->

<!--cart section start-->
<section id="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr>
            <td>Remove</td>
            <td>Image</td>
            <td>Product</td>
            <td>Option</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Subtotal</td>
        </tr>
        </thead>
        <tbody id="cartBody">
            <!--<tr>
                <td><a href="#" ><i class="fa-solid fa-trash" style="color: #000000;"></i></a></td>
                <td><img src=""></td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="number" value="1"></td>
                <td></td>
            </tr>-->
        </tbody>
    </table>
</section>

<section id="cart-add" class="section-p1">
    <div id="subtotal">
        <h3>Cart Totals</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td id="cartSubtotal">Rs.</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td id="shipping">Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td id="cartTotal"><strong>RS</strong></td>
            </tr>
        </table>
        <button class="normal" onclick="window.location.href='checkout.php'">Checkout</button>

    </div>
</section>


    
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

<!--Cart script-->
<script>
  window.onload = function () {
    let cartBody = document.getElementById("cartBody");
    let product = JSON.parse(localStorage.getItem("cartItem"));

    if (product) {
      let subtotal = parseInt(product.price.replace(/\D/g, '')) * product.qty;

      cartBody.innerHTML = `
        <tr>
          <td><a href="#" onclick="removeItem()"><i class="fa-solid fa-trash" style="color: #000000;"></i></a></td>
          <td><img src="${product.image}" width="80"></td>
          <td>${product.title}</td>
          <td>${product.option}</td>
          <td>${product.price}</td>
          <td><input type="number" value="${product.qty}" min="1" onchange="updateQty(this.value)"></td>
          <td>Rs.${subtotal}</td>
        </tr>
      `;
    }
  };

  // Remove item from cart
  function removeItem() {
    localStorage.removeItem("cartItem");
    location.reload();
  }

  // Update quantity in cart
  function updateQty(newQty) {
    let product = JSON.parse(localStorage.getItem("cartItem"));
    product.qty = newQty;
    localStorage.setItem("cartItem", JSON.stringify(product));
    location.reload();
  }
</script>
<!--Subtotal cart-->
<script>
  window.onload = function () {
    let cartBody = document.getElementById("cartBody");
    let product = JSON.parse(localStorage.getItem("cartItem"));

    if (product) {
      // clean price (remove Rs. and dots)
      let unitPrice = parseInt(product.price.replace(/\D/g, ''));
      let subtotal = unitPrice * product.qty;

      // display product row
      cartBody.innerHTML = `
        <tr>
          <td><a href="#" onclick="removeItem()"><i class="fa-solid fa-trash" style="color: #000000;"></i></a></td>
          <td><img src="${product.image}" width="80"></td>
          <td>${product.title}</td>
          <td>${product.option}</td>
          <td>Rs.${unitPrice}</td>
          <td><input type="number" value="${product.qty}" min="1" onchange="updateQty(this.value)"></td>
          <td>Rs.${subtotal}</td>
        </tr>
      `;

      // update totals
      document.getElementById("cartSubtotal").innerText = "Rs." + subtotal;
      document.getElementById("cartTotal").innerText = "Rs." + subtotal; // shipping free
    }
  };

  // Remove item from cart
  function removeItem() {
    localStorage.removeItem("cartItem");
    location.reload();
  }

  // Update quantity in cart
  function updateQty(newQty) {
    let product = JSON.parse(localStorage.getItem("cartItem"));
    product.qty = newQty;
    localStorage.setItem("cartItem", JSON.stringify(product));
    location.reload();
  }
</script>


 
</body>
</html>