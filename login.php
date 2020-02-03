<?php

session_start();
include "config.php";
if(isset($_SESSION['admin'])){
  header("Location: admin.php ");
}else if(isset($_SESSION['user'])){
  header("Location: /final/webprogramming-master/ ");
}
//cek button    
    if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $userpass = $_POST['password'];
  
  $login = mysqli_query($conn, "SELECT nama, password FROM tbluser WHERE nama = '{$name}'");
  list($name, $password) = mysqli_fetch_array($login);

  if (mysqli_num_rows($login) == 0) {
    die("Username atau password salah!");
  } else {
    if($name=="admin"){
      if (password_verify($userpass, $password)){
        $_SESSION['admin'] = 1;
        header("Location: admin.php ");
      }
    }else{
      if (password_verify($userpass, $password)){
        $_SESSION['user'] = 1;
        header("Location: index.php ");
      }

    }

}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pengaduan Online - BSSN</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">
<script> 
function validateForm() {
  var x = document.forms["login"]["name"]["password"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
} 

</script>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Anda Punya Masalah, Laporkan!</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="img/LOGO_BSSN.png" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">BSSN - Report</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Intan - Lia</p>

    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

     
      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
           <h3>
          Silakan login untuk masuk ke laman aduan siber
            </h3>
          <form name="login" method="POST" id="contactForm" novalidate="novalidate"  >
                        <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nama</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="Nama"  data-validation-required-message="Masukkan Nama Anda" required>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>password</label>
                <input class="form-control" id="password" name="password" type="password" placeholder="Password" data-validation-required-message="Masukkan Password Anda" required>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" name="submit" value="submit" class="btn btn-primary btn-xl" href= "#" id="sendMessageButton">Kirim</button>
            </div>
          </form>
        </div>
      </div>
      <div class="text-center p-t-12">
						<span class="txt1">
							Belum punya akun?
						</span>
						<a class="txt2" href="daftar.php">
							Daftar Akun
						</a>
					</div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Alamat</h4>
          <p class="lead mb-0">Jl. Raya Haji Usa, Putat Nutug, Ciseeng, Putat Nutug, Kec. Ciseeng
            <br>Bogor, Jawa Barat 16120</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Contact</h4>
         <!-- <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a> -->
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <!-- <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a> -->
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Tentang Admin</h4>
          <p class="lead mb-0"> "Sistem Pengaduan Masyarakat"
            <a href="https://bssn.go.id/">Laman Resmi</a>.</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Web Programming Project 2020</small>
    </div>
  </section>

 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <!--
  <script src="js/freelancer.min.js"></script>
-->
</body>

</html>