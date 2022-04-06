<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<center><h3> Tambah Barang </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> Nama Barang </td>
        <td> <input type="text" name="nama"> </td>
    </tr>
    <tr>
        <td> Harga </td>
        <td> <input type="text" name="harga"> </td>
    </tr>
    <tr>
        <td>foto</td>
        <td><input type="file" name="foto"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
</table>
</form>
    </center>

    <?php
include "koneksi.php";

    if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into stocklaptop set  
    nama = '$_POST[nama]',
    harga = '$_POST[harga]',
    foto  = '$_POST[foto]'");

echo "Data barang baru telah tersimpan";
header ("location: barang.php");
}
?>

INSERT INTO daftarmakanan Values "mie ayam", 15000, "ada", "dadada", 123123, "belum ada", 

</div>
</body>
</html>