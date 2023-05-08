<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>orders</title>
</head>
<body>
          <!-- Start header -->
        </q><div class="header" id="header">
            <div class="container">
               <ul>
                  <li class="barn"><i class="fa-solid fa-bars bari"></i></li>
                  <li><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></li>
                  <li><i class="fa-solid fa-user"></i></li>
                  <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                  <span>(0)</span>
              </ul>
                <p>
                    new
                    <a href="">login</a>
                    | 
                    <a href="">register</a>
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
                    <li><i class="fa-solid fa-magnifying-glass"></i></li>
                    <li><i class="fa-solid fa-user"></i></li>
                    <li><i class="fas fa-shopping-cart"></i></li>
                    <span>(0)</span>
                </ul>
            </div>
         </div>
         <!-- end header_2 -->
         <div class="heading">
            <h3>YOUR ORDERS</h3>
            <p><a href="home.php">home</a> <span>/</span>orders</p>
        </div>
        <section class="products">
            <h1 class="title_1">PLACED ORDERS</h1>
            <div class="box-container">
               
               <?php
               
               include('config.php');
                  
                 $order_query = mysqli_query($conn, "SELECT * FROM orders WHERE user_id = '$user_id'") or die ('query failed');
                 if(mysqli_num_rows($order_query) > 0){
                    while($fetch_orders = mysqli_fetch_assoc($order_query)){
               ?>
               <div class="boxy">
               <p> placed on : <span><?php echo $fetch_orders['placed_on']; ?></span></p>
               <p> name : <span><?php echo $fetch_orders['name']; ?></span></p>
               <p> number : <span><?php echo $fetch_orders['number']; ?></span></p>
               <p> email : <span><?php echo $fetch_orders['email']; ?></span></p>
               <p> address : <span><?php echo $fetch_orders['address']; ?></span></p>
               <p> payment method : <span><?php echo $fetch_orders['method']; ?></span></p>
               <p> your orders : <span><?php echo $fetch_orders['total_products']; ?></span></p>
               <p> total price : <span>$<?php echo $fetch_orders['total_price']; ?>/-</span></p>
               <p> payment status : <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; }?>;"><?php echo $fetch_orders['payment_status']; ?></span></p>
               </div>
               <?php
                }
               }else{
                echo '<p class="empty">no orders placed yet!</p>';
               }
               
               ?>



               
            </div>
         </section>
        <!-- start footer -->
             <section class="footer">

                <div class="box-container">
             
                   <div class="box">
                      <h3>quick links</h3>
                      <a href="home.php">home</a>
                      <a href="about.php">about</a>
                      <a href="shop.php">shop</a>
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