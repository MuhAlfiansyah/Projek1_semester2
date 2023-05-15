<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index_kategori.php">Go to Home</a>
    <br/><br/>
 
    <form action="add_kategori.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama"></td>
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
        $name = $_POST['nama'];
       
        
        // include database connection file
        include_once("config_kategori.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO kategori_produk(nama) VALUES('$name')");
        
        // Show message when user added
        echo "User added successfully. <a href='index_kategori.php'>LIHAT DISINI</a>";
    }
    ?>
</body>
</html>