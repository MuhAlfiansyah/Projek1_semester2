<?php
// Create database connection using config file
include_once("config_pesanan.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pesanan ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add_pesanan.php">Tambah Pesanan</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Tanggal</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>NO Handphone</th>
        <th>Email</th>
        <th>Jumlah Pesanan</th>
        <th>Deskripsi</th>
        <th>Produk</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['tanggal']."</td>";
        echo "<td>".$user_data['nama_pesanan']."</td>";
        echo "<td>".$user_data['alamat_pemesan']."</td>";
        echo "<td>".$user_data['no_hp']."</td>"; 
        echo "<td>".$user_data['email']."</td>"; 
        echo "<td>".$user_data['jumlah_pesanan']."</td>"; 
        echo "<td>".$user_data['deskripsi']."</td>"; 
        echo "<td>".$user_data['produk_id']."</td>";     
        echo "<td><a href='edit_pesanan.php?id=$user_data[id]'>Edit</a> | <a href='delete_pesanan.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>