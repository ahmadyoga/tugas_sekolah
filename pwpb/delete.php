<?php
include "koneksi.php";
$id_siswa = $_GET['id_siswa'];

 $query=mysqli_query($koneksi, "DELETE FROM tb_biodata WHERE id_siswa='$id_siswa'");

 if($query){
    ?><script language="javascript">document.location.href="index.php";</script><?php
 } else {
     echo "gagal hapus data";
     ?><a href="index.php">Lihat data di tabel</a><?php
 }
 ?>