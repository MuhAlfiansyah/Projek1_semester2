<?php
// Create database connection using config file
include_once("config_produk.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id DESC");
?>
 
<html>
<head>    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Kategori Produk</title>
</head>
 
<body>
<a href="add_produk.php">Tambah Produk</a><br/><br/>
 
        <div class="card mt-4">
                    <div class="card-header bg-info text-light">
                        Kategori Pelanggan
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-hover table-bordered">
                            <tr>
                                <th>Kode</th>
                                <th>Nama Produk</th>
                                <th>Harga Jual</th>
                                <th>Harga Beli</th>
                                <th>Stok</th>
                                <th>Min Stok</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>

                            <tr>
                                <td>C015</td>
                                <td>SNACK</td>
                                <td>20.000</td>
                                <td>15.000</td>
                                <td>200</td>
                                <td>20</td>
                                <td>Makanan Ringan</td>
                                <td>13</td>
                                <td>
                                    <a href="'edit_produk.php?id=$user_data[id]'" class="btn btn-warning" >Edit</a>
                                    <a href="'delete_produk.php?id=$user_data[id]'" class="btn btn-danger" >Delete</a>
                                </td>
                            </tr>
                        </table>
                    </div>
            
                    <div class="card-footer bg-info">
                        
                    </div>
                </div>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['kode']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['harga_jual']."</td>";
        echo "<td>".$user_data['harga_beli']."</td>";
        echo "<td>".$user_data['stok']."</td>";
        echo "<td>".$user_data['min_stok']."</td>";
        echo "<td>".$user_data['deskripsi']."</td>";
        echo "<td>".$user_data['kategori_produk_id']."</td>";
        echo "<td><a href='edit_produk.php?id=$user_data[id]'>Edit</a> | <a href='delete_produk.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>

    
</body>
</html>