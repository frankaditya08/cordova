<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $jenis=$_POST['jenis'];
 $harga=$_POST['harga'];
 $alamat=$_POST['alamat'];
 $q=mysqli_query($con,"INSERT INTO `barang` (`id`,`nama`,`jenis`,`harga`,`alamat`) VALUES ('$id','$nama','$jenis','$harga','$alamat')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>