<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <?php include "sidebar.php"; ?>
   <div class="content">
        <?php include "header.php"; ?>
     <div id="vendor" class="table-selection">
            <h2>Vendor Table</h2>
            <table>
                <tr>
                    <th>Id Vendor</th>
                    <th>Nama Vendor</th>
                    <th>Kontak Vendor</th>
                    <th>Nama Barang</th>
                    <th>aksi</th>
                </tr>
                <?php 
                include "koneksi.php";

                $sql = "SELECT * FROM vendor";
                $hsl = mysqli_query($kon, $sql);

                if(!$hsl){
                    die ("Data Gagal Diambil: " . mysqli_error($kon));
                }
                
                if($hsl -> num_rows > 0){
                    while($data = mysqli_fetch_assoc($hsl)){
                        echo "<tr>";
                        echo "<td>{$data['id']}</td>";
                        echo "<td>{$data['nama']}</td>";
                        echo "<td>{$data['kontak']}</td>";
                        echo "<td>{$data['nama_barang']}</td>";
                        echo "<td><a href='CRUD/hapus_vendor.php?id={$data['id']}' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'><button>Hapus</button></a>
                              <a href='CRUD/edit_vendor.php?id={$data['id']}'><button>Edit</button></a></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table><br>
            <a href = "CRUD/tmbh_vendor.php">
                <button>Tambah Data</button>
            </a>
            &nbsp;
           
     </div>
   </div>
</body>
</html>
   
   