<?php
include "function.php"; 
include "config.php";
session_start();
if(!($_SESSION['user'])){
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en"><script src="js/contact_me.js"></script> -->

  <!-- Custom scripts for this template -->
  <!--
  <script src="js/freelancer.min.js"></script>

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
  <?=style_script();?>
  <script> 
  $(document).ready(function(){
    $('#dataTables').DataTable();
  });
  </script>
  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

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

     
   
<head>
  <title>Daftar Pengaduan</title>
  <link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
</head>
<body>

  <h1>Pencarian Pengaduan</h1>
  <table id="dataTables" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Category</th>
                <th>Message</th>
                <th>Balasan</th>
                
            </tr>
        </thead>
    
    <tbody>
      <?php
       include 'config.php';
       $sql = "SELECT id,name,category,message,komentar FROM tbladuan INNER JOIN tbkomentar 
       ON id = id_pesan";
       $result = mysqli_query($conn, $sql);
       
       if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
                    $row["message"] = base64_decode($row["message"]);
           echo "<tr>
           
           <td>".$row['name']."</td>
           <td>".$row['category']."</td>
           <td>".$row['message']."</td>
           <td>".$row['komentar']."</td>            
             </tr>";
        
         }
      }
      ?>
    </tbody>

  </table>
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

          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>

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
  <script src="jquery-1.12.0.min.js"></script>
  <script src="jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function() {
    $('#dataTables').DataTable();
  } );
  </script>
  <!--<script src="js/contact_me.js"></script> -->

  <!-- Custom scripts for this template -->
  <!--
  <script src="js/freelancer.min.js"></script>
-->
</body>

</html>