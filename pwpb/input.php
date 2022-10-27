<?php
include "koneksi.php";
if ($_POST['Submit'] == "Submit") {
    $nis =$_POST['nis'];
    $pasfoto =$_POST['pasfoto'];
    $nama =$_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $telp =$_POST['telp'];
    $alamat =$_POST['alamat'];
    $ceknis =mysqli_num_rows (mysqli_query($koneksi, "SELECT nis FROM tb_biodata WHERE nis='$_POST[nis]'"));
    if($ceknis > 0) {
        ?>
        <script language="JavaScript"> alert('Oops! Duplikat NIS ...');
        document.location='form-input.php';
        </script>
    <?php
    } else {
        $insert =mysqli_query($koneksi, "INSERT INTO tb_biodata (nis, nama, jurusan, telp, alamat) VALUES ('$nis', '$nama', '$jurusan', '$telp', '$alamat')");
        ?>
        <script language="JavaScript"> alert('Good! Input Data Siswa Berhasil ...');
        document.location='./';
        </script>
        <?php
    }
}
?>