<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product details </title>

    <!--//font awosame link//-->
    <script src="https://kit.fontawesome.com/7afab252cb.js" crossorigin="anonymous"></script>
  
    <!--CSS link-->
    <link rel="stylesheet" href="../css/style.css">


   

</head>
<body>
    <!--Header Section start-->
    <section id="header">
        <a href="home.php"><img src="../images/logo A.png" alt="Logo"></a>
   
    <div>
      <ul id="navbar">
        <li><a href="../home.php">Home</a></li>
        <li><a class="active" href="../shop.php">Shop</a></li>
        <li><a href="../about.php">About</a></li>
        <li><a href="../contact.php">Contact</a></li>
        <li id="lg-i"><a href="../cart.php"><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></a></li>
        <li id="lg-i"><a href="../login.php"><i class="fa-solid fa-user" style="color: #000000;"></i></a></li>
        <a href="#" id="close"><i class="fa-solid fa-xmark" style="color: #000000;"></i></a>
        
      </ul>
    </div>
    <div id="mobile">
      <a href="../cart.php"><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></a>
      <a href="../login.php"><i class="fa-solid fa-user" style="color: #000000;"></i></a>
      <i id="bar" class="fas fa-bars" style="color: #000000;"></i>
  </div>
    </section>


<!-- category section start -->
<section class="categories container section">
  <h2 class="section-title"><span>Shop</span> by Categories</h2>

  <div class="categories-grid">
    <a href="../category/jewellary.php" class="category-item">
      <img src="../images/categories/cat-1.png" alt="Jewellery" class="category-image">
      <h3 class="category-title">Jewellery</h3>
    </a>

    <a href="../category/bag.php" class="category-item">
      <img src="../images/categories/cat-2.png" alt="Bags" class="category-image">
      <h3 class="category-title">Bags</h3>
    </a>

    <a href="../category/wallet.php" class="category-item">
      <img src="../images/categories/cat-3.png" alt="Wallets" class="category-image">
      <h3 class="category-title">Wallets</h3>
    </a>

    <a href="../category/sunglass.php" class="category-item">
      <img src="../images/categories/cat-4.png" alt="Sunglasses" class="category-image">
      <h3 class="category-title">Sunglasses</h3>
    </a>

    <a href="../category/hairacc.php" class="category-item">
      <img src="../images/categories/cat-5.png" alt="Hair Accessories" class="category-image">
      <h3 class="category-title">Hair Accessories</h3>
    </a>
  </div>
</section>
<!-- category section end -->

<!--Product detail section start-->
<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
     <img src="../images/singleP/H2/H2.a.png" width="100%" id="MainImg" alt="">
     <div class="small-img-group">
        <div class="small-img-col">
            <img src="../images/singleP/H2/H2.b.png" width="100%" class="small-img" alt="">
        </div>
        <div class="small-img-col">
            <img src="../images/singleP/H2/H2.c.png" width="100%" class="small-img" alt="">
        </div>
        <div class="small-img-col">
            <img src="../images/singleP/H2/H2.d.png" width="100%" class="small-img" alt="">
        </div>
        <div class="small-img-col">
            <img src="../images/singleP/H2/H2.e.png" width="100%" class="small-img" alt="">
        </div>
    
     </div>

    </div>
    <div class="single-pro-details">
        <h3>Home / Hair Accessories</h3>
        <h4>Oversized Wavy hair clip</h4>
        <h2>Rs.990</h2>
        <select>
            <option>Select color</option>
            <option>Dark coffee-Frosted</option>
            <option>Black-Frosted</option>
            <option>Khaki-Frosted</option>
            <option>Apricot-Frosted</option>
        </select>
        <input type="number" value="1">
        <button class="normal" id="addToCartBtn">Add To Cart</button>
        <h4>Product Details</h4>
        <span>This stylish hair accessory combines functionality with fashion. The 13cm oversized "shark clip" features a wavy, frosted matte finish that is both transparent and bright. Its strong interlocking teeth provide a firm grip, making it a reliable and versatile choice for women and girls to wear for everyday use or special occasions.</span>
    </div>

</section>

<!--Featured Products Section Start -->
<section id="Product1" class="section-p1">
<h2>Featured Products</h2>
<p>Discover our exclusive range of featured products handpicked just for you.</p>

<div class="pro-container">
  <div class="pro">
    <img src="../images/Products/B-1.png" alt="Product 1">
    <div class="des">
      <h5>Y2K Zircon Ins Bracelets</h5>
      <div class="star">
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
      </div>
      <h4>RS.1190.00</h4>
    </div>
    <a href="../Pro-detail/sproduct-B1.php" class="cart"><i class="fa-solid fa-cart-shopping " style=color:#088178;></i></a>

  </div>
  <div class="pro">
    <img src="../images/Products/R-1.png" alt="Product 2">
    <div class="des">
      <h5>Minimalist Silver Color ring</h5>
      <div class="star">
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
      </div>
      <h4>RS.1090.00</h4>
    </div>
    <a href="../Pro-detail/sproduct-R1.php" class="cart"><i class="fa-solid fa-cart-shopping " style=color:#088178;></i></a>

  </div>
<div class="pro">
    <img src="../images/Products/N-1.png" alt="Product 3">
    <div class="des">
      <h5>14k Gold Plated Necklace</h5>
      <div class="star">
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
      </div>
      <h4>RS.1290.00</h4>
    </div>
    <a href="../Pro-detail/sproduct-N1.php" class="cart"><i class="fa-solid fa-cart-shopping " style=color:#088178;></i></a>

  </div>
<div class="pro">
    <img src="../images/Products/E-1.png" alt="Product 4">
    <div class="des">
      <h5>Zirconia Stud Earrings</h5>
      <div class="star">
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
        <i class="fa-solid fa-star" ></i>
      </div>
      <h4>Rs.1590.00</h4>
    </div>
    <a href="../Pro-detail/sproduct-E1.php" class="cart"><i class="fa-solid fa-cart-shopping " style=color:#088178;></i></a>
</div>
</section>
<!--Featured Products Section End -->


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
    <img class="logo" src="../images/logo A.png" alt="Logo">
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
  <a href="../about.php">About us</a>
  <a href="../shop.php">Shop</a>
  <a href="../contact.php">Contact</a>
  <a href="#">Terms and Conditions</a>
</div>

<div  class="col">
  <h4>My Account</h4>
  <a href="../login.php">Login</a>
  <a href="../register.php">Register</a>
  <a href="../cart.php">View Cart</a>
  <a href="#">My Orders</a>
</div>

<div class="copyright">
  <p>@2025, Liora - HTML CSS Ecommerce Template</p>
</footer>
<!--Footer section end-->

<script>
    var MainImg = document.getElementById("MainImg");
    var smallimg = document.getElementsByClassName("small-img");
    
    smallimg[0].onclick = function(){
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function(){
        MainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function(){
        MainImg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function(){
        MainImg.src = smallimg[3].src;
    }
</script>
<!--option selection-->
<script>
  // get elements
  const mainImg = document.getElementById("MainImg");
  const select = document.querySelector("select");

  // mapping options to small images
  const imageMap = {
    "Dark coffee-Frosted": "../images/singleP/H2/H2.b.png",
    "Black-Frosted": "../images/singleP/H2/H2.c.png",
    "Khaki-Frosted": "../images/singleP/H2/H2.d.png",
    "Apricot-Frosted": "../images/singleP/H2/H2.e.png"
  };

  // listen for change in dropdown
  select.addEventListener("change", function () {
    const selected = this.value;
    if (imageMap[selected]) {
      mainImg.src = imageMap[selected];
    }
  });

  // also allow small images to update main image on click
  const smallImgs = document.querySelectorAll(".small-img");
  smallImgs.forEach(img => {
    img.addEventListener("click", function () {
      mainImg.src = this.src;
    });
  });
</script>


<!--Add to cart-->>
<script>
  document.getElementById("addToCartBtn").addEventListener("click", function () {
    // Get product details
    let product = {
      title: document.querySelector(".single-pro-details h4").innerText,
      price: document.querySelector(".single-pro-details h2").innerText,
      option: document.querySelector(".single-pro-details select").value,
      qty: document.querySelector(".single-pro-details input[type='number']").value,
      image: document.getElementById("MainImg").src
    };

    // Save to localStorage
    localStorage.setItem("cartItem", JSON.stringify(product));

    // Redirect to cart page
    window.location.href = "../cart.html";
  });
</script>





    <!--custom JS-->
    <script src="../Js/script.js"></script>

  
</body>
</html>