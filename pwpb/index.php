<html>
    <head>
        <title>Membuat CRUD</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <h2>
            CRUD DATA SISWA
        </h2>
        <p><a href="form_input.php">+ Tambah Data</a></p>
        <table border="1">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Pas Foto</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>NO. Telp</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $query=mysqli_query($koneksi, "SELECT * FROM  tb_biodata ORDER BY nis DESC");
                $no=0;
                while ($data=mysqli_fetch_array($query)){
                    $no++;
                ?>
                <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $data['nis']?></td>
                    <td><img src="<?php echo $data['pasfoto']; ?>" width="80px" height="80px"></td>
                    <td><?php echo $data['nama']?></td>
                    <td><?php echo $data['jurusan']?></td>
                    <td><?php echo $data['telp']?></td>
                    <td><?php echo $data['alamat']?></td>
                    <td>
                        <a href="form_edit.php?id_siswa=<?=$data['id_siswa']?>">Edit</a>
                        <a href="delete.php?id_siswa=<?=$data['id_siswa']?>" onclick="return confirm('Are you sure you want to delete <?php echo $data['jurusan']?> from Database?');">Delete</a>
                        </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>