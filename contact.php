<!-- start php -->
<?php
include('config.php');
session_start();
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');
}

if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM message WHERE name = '$name'
    AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query fail');

    if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message send already!';
    }else{
        mysqli_query($conn, "INSERT INTO message(user_id, name, email, number, message) VALUE(
            '$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
            $message[] = 'message send successfully!';
    }
}
?>
<!-- end php -->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>contact</title>
</head>
<body>
 <!-- Start header -->
      </q><div class="header" id="header">
         <div class="container">
             <ul>
                 <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                 <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                 <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                 <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
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
                <li><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li><i class="fa-solid fa-user"></i></li>
                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                <span>(0)</span>
            </ul>
         </div>
      </div>
      <!-- end header_2 -->
    <div class="heading">
        <h3>CONTACT US</h3>
        <p><a href="home.php">home</a> <span>/</span>contact</p>
    </div>
    <section class="contact">
        <form action="" method="post">
            <h3>say something</h3>
            <input type="text" class="box" placeholder="enter your name" name="name" required>
            <input type="email" class="box" placeholder="enter your gmail" name="email" required>
            <input type="number" class="box" placeholder="enter your number" name="number" required>
            <textarea name="message" class="box" id="" placeholder="enter your message" cols="30" rows="10"></textarea>
            <button class="btn" type="submit" value="send message" name="send"> send message</button>
        </form>
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