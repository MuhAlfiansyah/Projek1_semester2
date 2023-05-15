<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harju = $_POST['harga_jual'];
    $harbel = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $minstok = $_POST['min_stok'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori_produk_id'];
    
    
        
    // update user data
    $result = mysqli_query($mysqli, "INSERT INTO produk(kode,nama,harga_jual,harga_beli,stok,min_stok,deskripsi,kategori_produk_id) 
        VALUES('$kode','$nama','$harju','$harbel','$stok','$minstok','$deskripsi',
        '$kategori')");
    
    // Redirect to homepage to display updated user in list
    header("Location: index_produk.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harju = $_POST['harga_jual'];
    $harbel = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $minstok = $_POST['min_stok'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori_produk_id'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index_produk.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
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
</body>
</html>