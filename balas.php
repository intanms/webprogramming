<?php
include 'function.php';
include 'config.php';
// if(!isset($_SESSION['admin'])){
//     header("Location: login.php");
// }
if(isset($_GET['id'])){
    if(!empty($_POST)){
        $pesan = $_POST['pesan'];
        $sql = "INSERT INTO tbkomentar (id_kmt,komentar,id_pesan) VALUES (NULL,'{$pesan}','{$_GET['id']}')";
        if($conn->query($sql)===TRUE){
            echo "Data berhasil dimasukkan";
            header("Location: admin.php");
        }else{
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?=style_script();?>
    <title>Balas pesan</title>
</head>
<body>
    <div class="container" style="margin-top:50px">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Balas id: <?=$_GET['id']?></h5>
                    <form action="balas.php?id=<?=$_GET['id']?>" method="post">
                        <input class="form-control form-control-sm" placeholder="Pesan" type="text" name="pesan" value="" id="pesan" ><br>
                       
                        <input class="btn btn-primary btn-sm" type="submit" value="Balas">
                        <a href="admin.php" type="button" class="btn btn-warning btn-sm">Cancel</a>

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>