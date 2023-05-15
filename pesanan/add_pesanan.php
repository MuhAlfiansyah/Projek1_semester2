<html>
<head>
    <title>Add Furniture</title>
</head>
 
<body>
    <a href="index_pesanan.php">Go to Home</a>
    <br/><br/>
 
    <form action="add_pesanan.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama_pesananan "></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat_pemesanan"></td>
            </tr>
            <tr> 
                <td>No HP</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>Jumlah Pesanan</td>
                <td><input type="text" name="jumlah_pesanan"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr> 
                <td>Produk</td>
                <td><input type="text" name="produk_id"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $Tanggal = $_POST['tanggal'];
        $Nama = $_POST['nama_pemesanan'];
        $Alamat = $_POST['alamat_pemesanan'];
        $Nomor= $_POST['no_hp'];
        $Email = $_POST['email'];
        $Jumlah = $_POST['jumlah_pesanan'];
        $Deskripsi = $_POST['deskripsi'];
        $Produk = $_POST['produk_id'];
        
        // include database connection file
        include_once("config_pesanan.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pesanan(tanggal,nama_pemesanan,alamat_pemesanan,no_hp,email,jumlah_pesanan,deskripsi,produk_id) 
        VALUES('$Tanggal','$Nama','$Alamat','$Nomor','$Email','$Jumlah','$Deskripsi','$Produk')");
        
        // Show message when user added
        echo "User added successfully. <a href='index_pesanan.php'>View Users</a>";
    }
    ?>
</body>
</html>