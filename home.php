<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>
        <!-- Render All Elements Normally -->
        <link rel="stylesheet" href="css/normalize.css" />
        <!-- Font Awesome Library -->
        <link rel="stylesheet" href="css/all.min.css" />
        <!-- Main Template CSS File -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    </head>
<body>
   
<!-- start php -->
<?php
include('config.php');
?>
<!-- end php -->

    <!-- Start header -->
    <div class="header" id="header">
        <div class="container">
            <ul>
                <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
            <p>
                
                <a href="login.php">login</a>
                | 
                <a href="register.php">register</a>
            </p>    
        </div>
    </div>
    <!-- End header -->
    <!-- Start header_2 -->
    <div class="header_2">
        <div class="container">
            <a href="" class="logo">Book.Egy</a>
            <nav class="navbar">
                <a href="home.php">home</a>
                <a href="about.php">about</a>
                <a href="shop2.php">shop</a>
                <a href="contact.php">contact</a>
                <a class="icon_4" href="orders.php">orders</a>
            </nav>
            <ul>
                <li class="barn"><i class="fa-solid fa-bars bari"></i></li>
                <li><a href=""><i class="fa-solid fa-magnifying-glass" ></i></a></li>
                <!-- <input type="search"> -->
                <!-- <li><i class="fa-solid fa-user"></i></li> -->
                <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
                <span>(0)</span>
            </ul>
        </div>
    </div>
    <!-- end header_2 -->
    <!-- start home -->
    <div class="home">
        <div class="contact">
            <h3>Hand Picked Book to your door.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quod? Reiciendis ut porro iste totam.</p>
            <a href="">Discover More</a>
        </div>
    </div>
    <!-- end home -->
    <!-- Start products -->
    <!-- <section class="products">
        <h1 class="title_1">latest products</h1>
        <div class="box-container">
     
           <p class="empty">no products added yet!</p>   </div>
     
        <div class="load-more" style="margin-top: 32px; text-align:center">
           <a href="shop.php" class="option-btn">Load More</a>
        </div>
     </section> -->
    <!-- End products -->
    <!-- start about -->
    <section class="about">
        <div class="container">
           <div class="image">
              <img src="image/about-img.jpg" alt="">
           </div>
           <div class="content">
              <h3>about us</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta officia corporis ratione saepe sed adipisci?</p>
                            <a href="" class="btn"><details> <summary>read more</summary> <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, laborum.</p></details>
                          </a>

           </div>
        </div>
     </section>
     <!-- end about -->

     <!-- start home-contact -->
     <section class="home-contact">
        <div class="content">
           <h3>have any questions?</h3>
           <p>|-| Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cumque exercitationem repellendus, amet ullam voluptatibus?</p>
           <a href="contact.php" class="white-btn">contact us</a>
        </div>    
     </section>
     <!-- end home-contact -->
     <!-- start footer -->
     <section class="footer">

        <div class="box-container">
     
           <div class="box">
              <h3>quick links</h3>
              <a href="home.php">home</a>
              <a href="about.php">about</a>
              <a href="shop2.php">shop</a>
              <a href="contact.php">contact</a>
           </div>
     
           <div class="box">
              <h3>extra links</h3>
              <a href="login.php">login</a>
              <a href="register.php">register</a>
              <a href="cart.php">cart</a>
              <a href="orders.php">orders</a>
           </div>
     
           <div class="box">
              <h3>contact info</h3>
              <p> <i class="fas fa-phone"></i> 020-01255858862 </p>
              <p> <i class="fas fa-phone"></i> 020-01023388886 </p>
              <p> <i class="fas fa-envelope"></i> TeamBookEgy@gmail.com </p>
              <p> <i class="fas fa-map-marker-alt"></i> Bani Sweif, Bani Sweif -Abdul Salam Arif Street</p>
           </div>
     
           <div class="box">
              <h3>follow us</h3>
              <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
              <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
              <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
              <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
           </div>



           
     
        </div>
        <p class="credit"> © copyright  @ 2023 by <span>Project</span> </p>
     
     </section>
     <!-- end footer -->
     <script src="main.js"></script>
</body>
</html>