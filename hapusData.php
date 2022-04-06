<?php
$koneksi = mysqli_connect("localhost", "root", "", "laptop");

// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
mysqli_query($koneksi, "DELETE FROM stocklaptop WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("location:barang.php");
?>