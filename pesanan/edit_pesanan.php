<?php
// include database connection file
include_once("config_pesanan.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE pesanan SET nama='$name',email='$email',mobile='$mobile' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index_pesanan.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM pesanan WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['id'];
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index_pesanan.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit_pesanan.php">
        <table border="0">
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" value=<?php echo $Tanggal;?>></td>
            </tr>
            <tr> 
                <td>Nama Pemesanan</td>
                <td><input type="text" name="nama_pemesanan" value=<?php echo $Nama;?>></td>
            </tr>
            <tr> 
                <td>Alamat Pemesanan</td>
                <td><input type="text" name="alamat_pemesanan" value=<?php echo $Alamat;?>></td>
            </tr>
            <tr> 
                <td>No HP</td>
                <td><input type="text" name="no_hp" value=<?php echo $Nomor;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $Email;?>></td>
            </tr>
            <tr> 
                <td>Jumlah Pemesanan</td>
                <td><input type="text" name="jumlah_pesanan" value=<?php echo $Jumlah;?>></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="mobile" value=<?php echo $Deskripsi;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>