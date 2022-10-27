<?php
if (isset($_GET['id_siswa'])) {
    $id_siswa = $_GET['id_siswa'];
} else {
    die ("Error. ID Selected! ");
}

include "koneksi.php";
$query =mysqli_query($koneksi, "SELECT * FROM tb_biodata WHERE id_siswa='$id_siswa'");
$data =mysqli_fetch_array($query);
?>

<html>
    <head>
        <title>Membuat CRUD dengan PHP MySQLi - Tutorial</title>
    </head>
    <body>
        <h2>Tutorial CRUD PHP 7 dan Mysqli</h2>
        <h4>FORM EDIT DATA SISWA</h4>
        <p><a href="./">&lt;&lt; Kembali</a></p>
        <form action="edit.php?id_siswa=<?=$id_siswa?>" method="POST">
            <table>
                <tr>
                    <td width="100">NIS</td>
                    <td><input type="text" name="nis" maxlength="16" size="50" value="<?php echo $data['nis']?>"/></td>
                </tr>
                <tr>
                    <td width="100">Pas Foto</td>
                    <td><input type="text" name="pasfoto" maxlength="100" size="50" value="<?php echo $data['pasfoto']?>"/></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td><input type="text" name="nama" maxlength="128" size="50" value="<?php echo $data['nama']?>"/></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan" maxlength="128" size="50" value="<?php echo $data['jurusan']?>"/></td>
                </tr>
                <tr>
                    <td>No. Telp</td>
                    <td><input type="text" name="telp" maxlength="16" size="50" value="<?php echo $data['telp']?>"/></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea type="text" name="alamat" maxlength="255" cols="38"><?php echo $data['alamat']?></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Edit" value="Edit" />&nbsp;<input type="reset" value="Reset" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>
