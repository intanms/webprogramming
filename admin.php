<?php
include "function.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Admin</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <?=style_script();?>
  <script> 
  $(document).ready(function(){
    $('#dataTables').DataTable();
  });
  </script>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-light">Logout</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
        </div>
      </nav>

      <div class="container-fluid">
      <table id="dataTables" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Category</th>
                <th>Message</th>
                <!-- <th>Komentar</th> -->
                <th>Menu</th>
                
                
            </tr>
        </thead>
    
    <tbody>
      <?php
       include 'config.php';
       $sql = "SELECT id,name,category,message FROM tbladuan";
       $result = mysqli_query($conn, $sql);
       
       if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
                    $row["message"] = base64_decode($row["message"]);?>
           <tr>
           
           <td><?=$row['name']?></td>
           <td><?=$row['category']?></td>
           <td><?=$row['message']?></td>  
           <td>
             <a type="button" class="btn btn-sm btn-outline btn-success edit" href="balas.php?id=<?=$row['id']?>">Balas</a>
           </td>          
             </tr>
        <?php
         }
      }
      ?>
    </tbody>

  </table>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
