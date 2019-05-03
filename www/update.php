<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $id=$_POST['id'];
 $nim=$_POST['nama'];
 $nama=$_POST['jenis'];
 $jurusan=$_POST['harga'];
 $alamat=$_POST['alamat'];
 $q=mysqli_query($con,"UPDATE `barang` SET `id`='$id',`nama`='$nama',`jenis`='$jenis',`harga`='$harga',`alamat`='$alamat' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>