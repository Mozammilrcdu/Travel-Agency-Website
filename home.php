<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel with MOZ|Home</title>
   <link rel = "icon" href ="images/logo.png"
        type = "image/x-icon">
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
</head>
<body>
   
<!-- header section starts  -->
<section class="header">
   <a href="home.php" class="logo"><img src="images/logo.png" width= "60" height="60">Travel with MOZ</a>
   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->
<!-- home section starts  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/home-slide-1i.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>travel around the world</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
<!-- home section ends -->
<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">
      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>
      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>
      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>
      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>
   </div>
</section>
<!-- services section ends -->
<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>
   <div class="content">
      <h3>about us</h3>
      <p>"Travel with MOZ" crafts bespoke journeys, transforming travel dreams into unforgettable experiences. Our passionate team tailors seamless adventures, ensuring each trip reflects your unique desires. With a commitment to personalized service, sustainability, and immersive exploration, we curate exceptional moments that linger long after your journey ends. Explore the world's wonders with us, uncover hidden gems, and embrace diverse cultures. Let "Travel with MOZ" be your trusted companion on your next extraordinary adventure.</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>
<!-- home about section ends -->
<!-- home packages section starts  -->
<section class="home-packages">
   <h1 class="heading-title"> our packages </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
         <h3>The Taj Mahal-India</h3>
            <p>Immerse yourself in the cultural grandeur of India with a visit to the iconic Taj Mahal. Marvel at its architectural brilliance and historical significance, experiencing the rich heritage of this UNESCO World Heritage Site.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Island Escapes</h3>
            <p>Traverse breathtaking island paradises curated by us. From the Maldives' turquoise waters to the lush landscapes of Fiji, surrender to the tranquility and beauty of these idyllic escapes.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>River Sunset Serenity</h3>
            <p>Delight in the beauty of river sunsets, handpicked by "Travel with MOZ" for an unforgettable experience. Whether it's the romantic Seine in Paris, the majestic Nile in Egypt, or the serene Mekong in Southeast Asia, immerse yourself in the breathtaking hues painting the sky as the sun bids adieu to another day.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
</section>
<!-- home packages section ends -->
<!-- home offer section starts  -->
<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>This Christmas and New Year, revel in joyous savings! "Travel with MOZ" offers up to 50% off select destinations and experiences. Create unforgettable memories at incredible prices. Book now and make this holiday season extraordinary with us!</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>
<!-- home offer section ends -->
<!-- footer section starts  -->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +91-9708138005 </a>
         <a href="#"> <i class="fas fa-phone"></i> +91-9876543210 </a>
         <a href="mailto:mdmozammilrcdu67@gmail.com"><i class="fas fa-envelope"></i>mdmozammilrcdu67@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> New Delhi-India 110025 </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>
   </div>
   <div class="credit"> created by <span>MD MOZAMMIL ALAM</span> | &copy all rights reserved!</div>
</section>
<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="script.js"></script>
</body>
</html>