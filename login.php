<?php


require_once("koneksi.php");
if(isset($_POST['login']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];


  $query = "SELECT * FROM pelanggan WHERE 
  username ='$username' AND password ='$password' ";


  $hasil = $koneksi->query($query);
  if ($hasil->num_rows > 0)
  {
    header("Location: dashboard.php");
  }
  else{
    echo "
    <script>alert('password yang anda masukan salah')</script> ";
  }


}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Point Online Bank</title>
    <link rel="shortcut icon" href="img/PP. AR-RAZZAQ.png" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<nav class="navbar" >
        <img  src="img/PP._AR-RAZZAQ-removebg-preview.png" alt="">
    <div class="head1">
         <div class="head2">
            <h1 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">PP. AR-RAZZAQ</h1>
            <p>Payment Point Online Bank</p>
         </div>
            <ul class="navbar-list">
                   <a href="index.php"><li onclick="scrolltohome()">Home</li></a> 
                   <a href="login.php"><li>Login</li></a>
                    <a href="Register.php"><li>Register</li></a>
            </ul>

    </nav>
    </div>

    
    <section class="form-cont">
      <form action="" method="POST">
    
        <label for="">Username</label>
        <input name="username" type="text">

        <label for="">Password</label>
        <input name="password" type="password">

        <p class="sudah-login">Belum mempunyai akun? silahkan <a href="Register.php">Register</a> disini</p>
        <button type="submit" name ="login" class="btn1">Login</button>


        <script src="main.js"></script>
    
    
</body>
</html>