<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: pink;">
    <div class="container">
        <div class="row justify-content-start mt-5">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light bg-opacity-100" style="text-decoration-color: white">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="UTM.png" alt="" width="30" height="30" class="d-inline-block align-text-top-center">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-link " href="customer.php">Data Customer</a>
                    <a class="nav-link " href="form_customer.php">Tambah Customer</a>
                  </div>
                </div>
              </div>
            </nav>
            <?php
            include "koneksi.php";
            $id=$_GET['id'];
            $sql="SELECT*FROM tbl_050 WHERE id_customer=$id";
            $hasil=mysqli_query($koneksi,$sql);
            if(!$hasil){
                echo "Query Salah";
            }
            ?>
                <h1>Form Tambah Customer</h1>
                <?php
                    while($row=mysqli_fetch_array($hasil))
                    {
                ?>
                <form method="POST" action="update.php">
                    <input type="hidden" name="id_customer" value="<?php echo $row['id_customer'];?>">
                    Nama Customer : <input type="text" name="nama_customer" value="<?php echo $row['nama_customer'];?>"><br/>
                    Alamat Customer : <input type="text" name="alamat_customer" value="<?php echo $row['alamat_customer'];?>"><br/>
                    Telepon Customer : <input type="text" name="telepon_customer" value="<?php echo $row['telepon_customer'];?>"><br/>
                    Email Customer : <input type="text" name="email_customer" value="<?php echo $row['email_customer'];?>"><br/>
                    <button type="submit">Update</button>
                </form>
            <?php } ?>
</body>
</html>
