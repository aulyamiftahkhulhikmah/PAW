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

$nama=$_POST['nama_customer'];
$alamat=$_POST['alamat_customer'];
$telepon=$_POST['telepon_customer'];
$email=$_POST['email_customer'];

$sql="INSERT INTO tbl_050 VALUES (null,'$nama','$alamat','$telepon','$email')";
$hasil=mysqli_query($koneksi,$sql);
if(!$hasil){
	echo "Eksekusi tambah customer gagal";
}else{
	echo "Eksekusi tambah customer berhasil <br>";
	echo "<a href='customer.php'>Show data</a>";
}

?>
</body>
</html>