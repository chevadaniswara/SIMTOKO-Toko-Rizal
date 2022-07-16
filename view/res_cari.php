<html>
    <head>

    </head>
    <body>
    <center><table>
                <tr>
                    <!-- <th>Kode Buku</th> -->
                    <th>ID</th>
                    <th>Barang</th>
                    <th>Harga Satuan</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
                <?php 
                    $link_aksi="#";
                    while($row=$this->bm2->fetch($data)){
                        echo"
                            <tr>
                                <td>".$row["id_barang"]."</td>
                                <td>".$row["nama_barang"]."</td>
                                <td>".$row["harga"]."</td>
                                <td>".$row["stok"]."</td>
                                <td><a href=\"$link_aksi\">Lihat</a></td>   
                            </tr>
                        ";
                    }
                ?>
    </table></center>
    </body>
</html>