<html>
<head>
    <title>Add Product</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Kategori Produk</title>
</head>
 
<body>
    <a href="index_produk.php">Go to Home</a>
    <br/><br/>  
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Kode</td>
                <td><input type="text" name="kode"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Harga Jual</td>
                <td><input type="text" name="harga_jual"></td>
            </tr>
            <tr> 
                <td>Harga Beli</td>
                <td><input type="text" name="harga_beli"></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="text" name="stok"></td>
            </tr>
            <tr> 
                <td>Min Stok</td>
                <td><input type="text" name="min_stok"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr> 
                <td>Kategori</td>
                <td><input type="text" name="kategori_produk_id"></td>
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
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $harju = $_POST['harga_jual'];
        $harbel = $_POST['harga_beli'];
        $stok = $_POST['stok'];
        $minstok = $_POST['min_stok'];
        $deskripsi = $_POST['deskripsi'];
        $kategori = $_POST['kategori_produk_id'];
        
        // include database connection file
        include_once("config_kategori.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO produk(kode,nama,harga_jual,harga_beli,stok,min_stok,deskripsi,kategori_produk_id) 
        VALUES('$kode','$nama','$harju','$harbel','$stok','$minstok','$deskripsi',
        '$kategori')");
        
        // Show message when user added
        echo "User added successfully. <a href='index_produk.php'>Lihat List Produk</a>";
    }
    ?>
</body>
</html>
