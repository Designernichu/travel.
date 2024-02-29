<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!---swiper css link--->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!---font awsome cdn link-->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--header section start-->
 <section class="header">
    <a href="home.php" class="logo">travel.</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>

    </nav>
    <div id="menu-btn" class="fa-regular fa-bars"></div>
    
</section>
<!--header section ends-->
<!--home section start-->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide" style="background:url(images/HEAD01.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>travel around the world</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

          <div class="swiper-slide slide" style="background:url(images/HEAD2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

          <div class="swiper-slide slide" style="background:url(images/HEAD1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your trip worthwhile</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>


<!--home section ends-->
<!--services section start-->
<section class="services"> 

<h1 class="heading-title"> our services</h1>

<div class="box-container">

 <div class="box">
   <img src="images/mountains.png" alt="">
   <h3>adventure</h3>
 </div>

 <div class="box">
   <img src="images/tour-guide.png" alt="">
   <h3>tour guide</h3>
 </div>

 <div class="box">
   <img src="images/trekking.png" alt="">
   <h3>trekking</h3>
 </div>

 <div class="box">
   <img src="images/fire.png" alt="">
   <h3>camp fire</h3>
 </div>

 <div class="box">
   <img src="images/signpost.png" alt="">
   <h3>off road</h3>
 </div>

 <div class="box">
   <img src="images/camping (1).png" alt="">
   <h3>camping</h3>
 </div>

</div>

</section>



<!--services section ends-->

<!--home about section start-->
<section class="home-about">
    <div class="image">
        <img src="images/home3.jpg" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Perspiciatis, voluptates. Repellat expedita voluptatem assumenda</p>
             <a href="about.php" class="btn">read more</a>
    </div>
</section>
<!--home about section ends-->
<!--home package section start-->

<section class="home-packages">

  <h1 class="heading-title"> our packages</h1>
  <div class="box-container">
     
   <div class="box">
      <div class="image">
        <img src="images/package1.jpg" alt="">
      </div>
      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit</p>
        <a href="book.php" class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
        <img src="images/package1.jpg" alt="">
      </div>
      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit</p>
        <a href="book.php" class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
        <img src="images/package1.jpg" alt="">
      </div>
      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit</p>
        <a href="book.php" class="btn">book now</a>
      </div>
   </div>
  </div>
  <div class="load-more"> <a href="package.php" class="btn">load more</a></div>
</section>
<!--home package section ends-->
<!---home offers start---->
    <section class="home-offer">
      <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Doloribus minus perferendis provident id magni tenetur officia quis nemo veritatis et.</p>
          <a href="book.php" class="btn">book now</a>
      </div>
    </section>

<!---home offers ends---->




<!--footer section start-->
<section class="footer">

    <div class="box-container">

        <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php">  <i class="fas fa-angle-right"></i> about</a>
        <a href="package.php">  <i class="fas fa-angle-right"></i> package</a>
        <a href="book.php">  <i class="fas fa-angle-right"></i> book</a>
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
        <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
        <a href="#"> <i class="fas fa-phone"></i> +331-221-7890</a>
        <a href="#"> <i class="fas fa-envelope"></i> nismanichu@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i> qusais, dubai-48970</a>
        </div>

        <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
        </div>
</div>
    <div class="credit"> created by<span>designer.nisma</span> | all rights reserved!</div>
</section>
<!--footer section ends-->





 <!--swiper js link-->  
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
 <!--custom js file link-->   
<script src="js/script.js"></script>
    
</body>
</html>