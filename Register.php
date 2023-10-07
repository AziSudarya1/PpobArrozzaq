  <?php

      require_once("koneksi.php");
      if (isset($_POST['register']))
      {

          $username = $_POST ['username'];
          $email = $_POST ['email'];
          $password = $_POST ['password']; 
          $tanggal = $_POST ['date'];




          $query = "INSERT INTO pelanggan (username, email, password, tanggal) VALUES 
          ('$username', '$email', '$password', '$tanggal')";
      
          $hasil = $koneksi->query($query);

          if ($hasil){
              header("location: login.php");
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
        <form method="POST" data-aos="fade-up" data-aos-duration="3000">
      
          <label for="">Username</label>
          <input name="username" type="text">

          <label for="">Email</label>
          <input name="email" type="text">

          <label for="">Password</label>
          <input name="password" type="password">

          <label for="">Tanggal Lahir</label>
          <input name="date" type="date">


          <p class="sudah-login">Sudah mempunyai akun? silahkan <a href="login.php">Login</a> disini</p>
          <button class="btn1" name ="register" type="submit">Register</button>


        </form>
      </section>


      <script src="main.js"></script>
  </body>
  </html>