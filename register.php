<?php
include 'config.php';
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    $user_type=$_POST['user_type'];
    
    $select_users = mysqli_query($conn,"SELECT * FROM users WHERE email ='$email' 
    AND password = ' $password'")or die('query failed 1');
   
        if(mysqli_num_rows($select_users) > 0 ){
        $message[] = 'user already exist!';

    } else {
        mysqli_query($conn, "INSERT INTO users(name, email, password,user_type)
        VALUES('$name','$email','$cpassword','$user_type')")or die('query failed 2');
        $message[]='mission passed!';
        header('location:login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REGISTER</title>
    <link rel="stylesheet" href="css/register.css" />
  </head>
  <body>

  <?php
if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message">
            <span>'.$message.'</span>
            <i class = "fas fa-times" onclick="this.parentElement.remove();" ></i>
        </div>
        ';
    }
}
?>

    <div class="container">
      <h1>Registration</h1>
      <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required />

        <label for="email">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          required
          value="@gmail.com"
        />

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required />

        <label for="confirm-password">Confirm Password</label>
        <input
          type="password"
          id="confirm-password"
          name="cpassword"
          required
        />
        <select class="option"name="user_type">
            <option value="user">user</option>
            <option value="admin">admin</option> 
         </select>
        <button type="submit" name="submit" id="register-btn">Register</button>
      </form>
      <div class="links">
        <a href="login.php">Already have an account?</a>
      </div>
    </div>
  </body>
</html>
