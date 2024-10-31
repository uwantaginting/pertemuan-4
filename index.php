<?php
include "koneksi.php";
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Penjualanan</title>
</head>
<body>
    <table border="1">
        <caption>Data Stok Barang</caption>
        <form action="" method="get">
                <select name="filter">
                    <option value="Fashion">Fashion</option>
                    <option value="Food">Food</option>
                    <option value="Farmasi">Farmasi</option>
                </select>
                <input type="submit" value="Filter" />
            </form>
        </caption>
        <tr>
            <th>No</th>
            <th>nama_barang</th>
            <th>harga</th>
            <th>stok_barang</th>
            <th>kategori</th>
        </tr>
        <?php
        $query="SELECT * FROM Barang where kategori='$_GET[filter]';";
        $result=$mysqli->query($query);
        $no=0;
        while($row=$result->fetch_assoc()){
        $no++;
    ?>
    <tr>
        <td><?=$no;?></td>
        <td><?=$row['nama_barang'];?></td>
        <td><?=FormatRupiah($row['harga']);?></td>
        <td><?=$row['stok_barang'];?></td>
        <td><?=$row['kategori'];?></td>

    </tr>
    <?php
        }
        ?>
        </table>
    </body>
    </html>