<html>
    <head>
        <title>CRUD dengan PHP</title>
    </head>
    <body>
        <h4>FORM INPUT DATA SISWA</h4>
        <p><a href="./">&lt;&lt; Kembali</a></p>
        <form action="input.php" method="POST">
            <table>
                <tr>
                    <td width="100">NIS</td>
                    <td><input type="text" name="nis" maxlength="16" size="50"/></td>
                </tr>
                <tr>
                    <td width="100">Pas foto</td>
                    <td><input type="text" name="pasfoto" maxlength="100" size="50"/></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td><input type="text" name="nama" maxlength="128" size="50"/></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan" maxlength="128" size="50"/></td>
                </tr>
                <tr>
                    <td>No. Telp</td>
                    <td><input type="text" name="telp" maxlength="16" size="50"/></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea type="text" name="alamat" maxlength="255" cols="38"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Submit"/>&nbsp;<input type="reset" value="Reset" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>