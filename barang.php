<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- My Css -->
    <link rel="stylesheet" href="css/style.css"/    >
    <title>Master Student</title>
</head>
<body>
     <!-- Header -->
     <header class="header">
      <a href="#" class="logo"><img src="img/Logo Studio.png" alt="Logo" /></a>
      <nav class="navbar" id="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="barang.php">Products</a>
        <a href="#review">Review</a>
        <a href="#contact">Contact</a>
      </nav>
      <div class="icons">
        <input type="search" id="search-box" placeholder="Search here..." />
        <label for="search-box" class="fas fa-search" id="search-btn"></label>
      </div>
    </header>
    <!-- Akhir Header -->
</br>
</br>
</br>
</br>
</br>
</br>

    <Table id="example" class="display" style="width:100%">
        <tbody>
            <?php
            $koneksi = mysqli_connect("localhost","root","","laptop");
            if (mysqli_connect_errno()){
                echo "koneksi database gagal :" . mysqli_connect_erorr();
            }
            $no = 1;
            $data = mysqli_query($koneksi,"select * from stocklaptop");
            while ($d = mysqli_fetch_array($data)){
                ?>

            <tr>
                <td>
                    <font color="black" size=5rem><?php echo $d["nama"];?></font></br>
                    <img src="img/<?php echo $d["foto"]?>"  width=100px>
                    <font color="black" size=3rem><?php echo $d["harga"];?></font>
                </td>
                <td>
                        <a href="hapusData.php?id=<?php echo $d["id"];?>" class="btn btn-primary" onclick="return 
                        confirm('Yakin ingin menghapus')">Hapus Data</a> || 
                        <a href="editData.php?id=<?php echo $d["id"];?>" class="btn btn-primary">Edit Data</a>
                </td>
            </tr>
            <?php $no++;}?>
        </tbody>
    </Table>

    <a class="nav-item" href="tambahbarang.php"><font face="poppins" color="black" size=4rem>Tambah Barang</font></a>
    
</body>
</html>