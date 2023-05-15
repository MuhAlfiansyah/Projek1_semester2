<?php
// include database connection file
include_once("config_kategori.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $name = $_POST['nama'];
        
    // update user data
    $result = mysqli_query($mysqli, "INSERT INTO kategori_produk(nama) VALUES('$name')");
    
    // Redirect to homepage to display updated user in list
    header("Location: index_kategori.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM kategori_produk WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $name = $_POST['nama'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index_kategori.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit_kategori.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama" value=<?php echo $name;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>