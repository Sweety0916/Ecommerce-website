<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>product-items</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="nav">
        <div class="navigation container">
            <div class="logo">
                <h1>Kids Emporium</h1>
            </div>

            <div class="menu">
                <div class="top-nav">
                    <div class="logo">
                        <h1>Codevo</h1>
                    </div>
                    <div class="close">
                        <i class="bx bx-x"></i>
                    </div>
                </div>

                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Products</a>
                    </li>
                    
                        <a href="cart.php" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
                    </li>
                </ul>
            </div>

            <a href="cart.html" class="cart-icon">
                <i class="bx bx-shopping-bag"></i>
            </a>

            <div class="hamburger">
                <i class="bx bx-menu"></i>
            </div>
        </div>
    </nav>

    <!-- All Products -->
    <section class="section all-products" id="products">
        <div class="top container">
            <h1>All Products</h1>
            <form>
                <select>
                    <option value="1">Defualt Sorting</option>
                    <option value="2">Sort By Price</option>
                    <option value="3">Sort By Popularity</option>
                    <option value="4">Sort By Sale</option>
                    <option value="5">Sort By Rating</option>
                </select>
                <span><i class='bx bx-chevron-down'></i></span>
            </form>
        </div>

        <div class="product-center container">
            <div class="product">
                <div class="product-header">
                    <img src="./images/img3.jpeg" alt="">
                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <a href="product-details.php"> <span><i class="bx bx-shopping-bag"></i></span>
                        </a>
                        
                    </ul>
                </div>
                <div class="product-footer">
                    <a href="product-details.php">
                        <h3>Party wear</h3>
                    </a>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star-half"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">Rs 599</h4>
                </div>
            </div>
            <div class="product">
                <div class="product-header">
                    <img src="./images/30.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <span><i class="bx bx-shopping-bag"></i></span>
                        
                    </ul>
                </div>
                <div class="product-footer">
                <a href="product-details.php">
                    <h3> Floral Dress</h3>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star-half"></i>
                        <i class="bx bx-star"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">Rs 399</h4>
                </div>
            </div>
            <div class="product">
                <div class="product-header">
                    <img src="./images/5.png" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <span><i class="bx bx-shopping-bag"></i></span>
                        
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Casual Dress</h3>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">Rs 450</h4>
                </div>
            
           
            </div>
            <div class="row">
            <div class="product-center container">
            <div class="product">
                <div class="product-header">
                    <img src="./images/img3.jpeg" alt="">
                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <a href="product-details.php"> <span><i class="bx bx-shopping-bag"></i></span>
                        </a>
                        
                    </ul>
                </div>
                <div class="product-footer">
                    <a href="product-details.php">
                        <h3>Indian Classical Dress</h3>
                    </a>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star-half"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">Rs 599</h4>
                </div>
            </div>
            <div class="product">
                <div class="product-header">
                    <img src="./images/30.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <span><i class="bx bx-shopping-bag"></i></span>
                        
                    </ul>
                </div>
                <div class="product-footer">
                <a href="product-details.php">
                    <h3> Anti-Slip Sneakers</h3>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star-half"></i>
                        <i class="bx bx-star"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">Rs 399</h4>
                </div>
            </div>
            <div class="product">
                <div class="product-header">
                    <img src="./images/5.png" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <span><i class="bx bx-shopping-bag"></i></span>
                        
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Boy’s summer wear</h3>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">Rs 450</h4>
                </div>
            
           
            </div>
    </section>

    <section class="pagination">
        <div class=" container">
            <a href="product.php"><span>1</span></a>
            <a href="product.php"><span>2</span></a>
            <a href="product.php"><span>3</span></a>
            
            <a href="product.php"><span><i class='bx bx-right-arrow-alt'></i></span></a>
        </div>
</div>
    </section>



    <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>EXTRAS</h3>
          <a href="#">Brands</a>
          <a href="#">Gift Certificates</a>
          <a href="#">Affiliate</a>
          <a href="#">Specials</a>
          <a href="#">Site Map</a>
          
        </div>
        <div class="footer-center">
          <h3>INFORMATION</h3>
          <a href="#">About Us</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact Us</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>MY ACCOUNT</h3>
          <a href="sign.php">My Account</a>
          <a href="Cart.php">Order History</a>
          <a href="#">Wish List</a>
          <a href="#">Newsletter</a>
          <a href="#">Returns</a>
        </div>
        <div class="footer-center">
          <h3>CONTACT US</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            Kids Emporium,Mahadeva Road,Siwan,Bihar 841238
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            kidsemporium@gmail.com
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            456-456-4512
          </div>
          <div>
            <span>
              <i class="far fa-paper-plane"></i>
            </span>
            Siwan Bihar - India
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <!-- End Footer -->

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <!-- Custom Script -->
    <script src="./js/index.js"></script>
</body>



</html>