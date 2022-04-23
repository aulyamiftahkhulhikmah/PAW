<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tabel Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1 style="text-align: center;">Data Siswa </h1>
    <a href="form_siswa.php" button type="tambah data" class="btn btn-success">Tambah Data</a>
        <div class="card-body">
            <table class="table table-bordered table-striped">
            <tr style="text-align: center;">
            <td>ID 050</td>
            <td>Nama 050</td>
            <td>Email 050</td>
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
            <td><?php echo $row['id_050'];?></td>
            <td><?php echo $row['nama_050'];?></td>
            <td><?php echo $row['email_050'];?></td>
            <td><a href="form_siswa_edit.php?id=<?php echo $row['id_050'];?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id_050'];?>">Delete</a> </td>
        </tr>
        <?php
            }
        ?>
        
    </table>
</body>
</html>

