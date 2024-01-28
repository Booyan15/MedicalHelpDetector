<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MHD Store Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="detail.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body>
<br><br>
    <div class = "card-wrapper">
      <div class = "card">
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "sliki/slika2.jpg" alt = "shoe image">
              <img src = "sliki/slika3.jpg" alt = "shoe image">
              <img src = "sliki/slika4.jpg" alt = "shoe image">
              <img src = "sliki/slika2.jpg" alt = "shoe image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
              <img src = "sliki/slika2.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
              <img src = "sliki/slika3.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
              <img src = "sliki/slika4.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
              <img src = "sliki/slika2.jpg" alt = "shoe image">
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title">Medical Help Detector</h2>
          <a href = "index.php" class = "product-link">visit MHD store</a>

          <div class = "product-price">
            <p class = "last-price">Old Price: <span>$50</span></p>
            <p class = "new-price">New Price: <span>$30 (40% Off)</span></p>
          </div>

          <div class = "product-detail">
            <h2>About this item: </h2>
            <p>The Medical Help Detector is not just a smart watch; it's a 
              lifeline in times of need, a guardian of well-being, and an 
              essential tool for modern living. Designed to seamlessly 
              integrate into your daily routine, this innovative device
               combines cutting-edge technology with practical features 
               to provide comprehensive health monitoring and emergency
                assistance. Let's explore how the Medical Help Detector
                 is revolutionizing the way we approach personal health
                  and safety.</p>
            <ul>
              <li>Color: <span>Black</span></li>
              <li>Available: <span>in stock</span></li>
              <li>Category: <span>Medical Watch</span></li>
              <li>Shipping Area: <span>All over the world</span></li>
              <li>Shipping Fee: <span>Free</span></li>
            </ul>
          </div>

          <div class = "purchase-info">
            <button id="openBtn" class="btn">Purchase 
            <i class = "fas fa-shopping-cart"></i></button>
          </div>
          


          <div id="popupForm" class="popup">
          <form action="submit.php" method="POST" class="popup-content">
              <span class="close">&times;</span>
              <h2>Purchase Info</h2>
              <?php include "formValidation.php"?>    
              <label for="name">Name and Surename:</label><br>
              <input type="text" id="name" name='name' required><br><br>

              <label for="email">E-mail:</label><br>
              <input type="email" id="email" name="email" required><br><br>

              <label for="city">City and Country:</label><br>
              <input type="text" id="city" name='city' required><br><br>

              <label for="phone">Phone Number:</label><br>
              <input type="text" id="phone" name='phone' required><br><br>

              <label for="color">Color:</label><br>
              <input type="text" id="color" name='color' required><br><br>

              <input type="submit" class="btnn" value="Purchase" name="send">
              <?php if(!empty($message1)){?>
              <strong><?php echo $message1; ?></strong>
              <?php } ?>
                    </form>
      
          </div>
          
          <script src="script.js"></script>
          
        </div>
      </div>
    </div>

    
    <script src="detail.js"></script>
  </body>
</html>