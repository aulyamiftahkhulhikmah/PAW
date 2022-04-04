<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Customer</title>
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
            <h1>Data Customer</h1>
            <div class="row justify-content-start mt-5">
            <a href="form_customer.php">Tambah Data</a>
            <div class="card mt-3">
              <div class="card-body">
                <table class="table table-bordered table-striped">
                <tr style="text-align: center;">
                    <td>ID Customer</td>
                    <td>Nama Customer</td>
                    <td>Alamat Customer</td>
                    <td>Telepon Customer</td>
                    <td>Email Customer</td>
                    <td>action</td>
                </tr>
                <?php
                    include "koneksi.php";
                    $sql="SELECT*FROM tbl_050";
                    $hasil= mysqli_query($koneksi,$sql);

                    while($row=mysqli_fetch_array($hasil))
                    {
                ?>
                <tr>
                    <td><?php echo $row['id_customer'];?></td>
                    <td><?php echo $row['nama_customer'];?></td>
                    <td><?php echo $row['alamat_customer'];?></td>
                    <td><?php echo $row['telepon_customer'];?></td>
                    <td><?php echo $row['email_customer'];?></td>
                    <td><a href="form_customer_edit.php?id=<?php echo $row['id_customer'];?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id_customer'];?>">Delete</a> </td>
                </tr>
                <?php
                    }
                ?>
                
            </table>
</body>
</html>

