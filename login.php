<?php
include 'config.php';

session_start();

if (isset($_POST['submit'])) {

   $email = mysqli_real_escape_string($conn,$_POST['email']);
   $password = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password'") or die ('query failed');

   if (mysqli_num_rows($select_users) > 0) {
      $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');
         

      }elseif($row['user_type'] == 'admin'){
         
         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');


      }
      
   } else {
      $message[] = 'incorrect password or email.';
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>

<?php
      if (isset($message)) {
         foreach ( $message as $message) {
            echo '<span class="error-msg">' . $message . '</span>';
         }
      }
      ?>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 20px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            /* float: right; */
            margin: 5px auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        button:hover {
            background-color: #45a049;
        }

        /* .cancelbtn {
            background-color: #f44336;
            float: left;
        }

        .cancelbtn:hover {
            background-color: #da2c0d;
        } */

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>

    <div class="container">
        <h1>Login</h1>
        <form action="" method="post">
            <label for="email"><b>email</b></label>
            <input type="email" placeholder="Enter Username" name="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <div class="clearfix">
                <button type="submit" name="submit">Login</button>
                <!-- <button type="button" class="cancelbtn">Cancel</button> -->
            </div>
        </form>
    </div>
</body>
</html>