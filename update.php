<?php
// include database connection file
$koneksi = mysqli_connect("localhost", "root", "", "laptop");
// Check if form is submitted for user update, then redirect to homepage after update
 	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$harga =$_POST['harga'];
	$foto =$_POST['foto'];
		
	// update user data
	$result = mysqli_query($koneksi, "UPDATE stocklaptop SET nama='$nama',harga='$harga',foto='$foto' WHERE id='$id'");
	
	// Redirect to homepage to display updated user in list
	header("Location: barang.php");

?>
