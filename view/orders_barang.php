<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <div class="header" id="myHeader">
            <h2><center>SIMTOKO</center></h2>
        </div>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: white;
            background-size: cover;
        }
        .header {
            padding: 10px 16px;
            background: #555;
            color: #f1f1f1;
        }
        .container_card{
            display: flex;
            justify-content: center;
        }
        .card{
            background: gray;
            width: 270px;
            height: 350px;
            margin: 10px;
            border-radius: 15px;
            text-align: center;
        }
        .card a{
            background: black;
            color: white;
            padding: 15px 20px;
            display: block;
            margin: 20px 50px;
            margin-top: 100px;
        }
        .gambar_card{
            background-color: papayawhip;
            height: 150px;
            margin-bottom: 15px;
            text-align: center;
        }
        table, td, th{
            border: 1px solid black;
            text-align: center;
        }
        table{
            border-collapse: collapse;
            width: 50%;
        }

        tr:hover {background-color: lightblue;}
    </style>
    </head>

    <body>
        <div class="main_konten">
            <center><h1>ORDER BARANG</h1></center>
            <!-- <center><p>Cari berdasarkan judul, tahun, penulis</p></center> -->
            <center><form>
                <!-- <label for="fname">First Name</label> -->
                <input type="text" id="fname" name="inp_cari">
                <input type="submit" class="btn" name="btn_cari" value="Cari">
                <!-- <a href="view/res_cari.php">Lihat</a> -->
            </form></center>
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
                    while($row=$this->bm->fetch($data)){
                        echo"
                            <tr>
                                <td>".$row["id_barang"]."</td>
                                <td>".$row["nama_barang"]."</td>
                                <td>".$row["harga"]."</td>
                                <td>".$row["stok"]."</td>
                                <td class='tab_selengkapnya'><a href='main_orders.php?addbrg&idbrg=".$row["id_barang"]."'>Lihat</a></td>     
                            </tr>
                        ";
                    }
                ?>
            </table></center>
            <a href="view/home.php">Home</a>
            <a href="main_homepage.php?tambah">Tambah Barang</a>
        </div>
    </body>
</html>
<?php
	if(isset($_POST["btn_cari"])){ 
		$bc3 = new controller_barang();
        $bc3->cariBrg();
	}
?>