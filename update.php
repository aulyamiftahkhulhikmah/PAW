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
<?php
include "koneksi.php";

$id=$_POST['id_customer'];
$nama=$_POST['nama_customer'];
$alamat=$_POST['alamat_customer'];
$telepon=$_POST['telepon_customer'];
$email=$_POST['email_customer'];

$sql="UPDATE tbl_050 SET nama_customer='$nama',alamat_customer='$alamat',telepon_customer='$telepon',email_customer='$email' WHERE id_customer=$id";
$hasil=mysqli_query($koneksi,$sql);
if(!$hasil){
    echo "Eksekusi update customer gagal";
}else{
    echo "Eksekusi update customer berhasil <br>";
    echo "<a href='customer.php'>Show data</a>";
}

?>
</body>
</html>