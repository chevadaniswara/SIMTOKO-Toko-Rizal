<html>
    <head>
    <?php 
    include "asset_inc.php"
    ?>
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
        
        .btn-info {
            color: #fff;
            background-color: #5bc0de;
            border-color: #46b8da;
            float: inline-start;
        }
        
        .btn-tambah {
            border-radius: 4px;
            background-color: #00c65c;
            border: none;
            color: #00c65c;
            text-align: center;
            font-size: 20px;
            padding: 10px;
            width: 200px;
            height: 50px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .btn-tambah span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
            color: white;
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
            <center><h1>ORDERS</h1></center>
            <button type="button" class="btn-tambah" name="btn_tambah"><a href="main_orders.php?tambah"><span>Tambah</span></a></button>
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
                    <th>Tanggal</th>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Harga Total</th>
                </tr>
                <?php 
                    $link_aksi="main_logout.php";
                    while($row=$this->bm->fetch($data)){
                        echo"
                            <tr>
                                <td>".$row["id"]."</td>
                                <td>".$row["tanggal"]."</td>
                                <td>".$row["nama"]."</td>
                                <td>".$row["jumlah"]."</td>
                                <td>".$row["harga_total"]."</td>   
                            </tr>
                        ";
                    }
                ?>
            </table></center>
            <a href="view/home.php">Home</a>
        </div>
    </body>
</html>
<?php
	if(isset($_POST["btn_tambah"])){ 
		$bc3 = new controller_barang();
        $bc3->viewOrdersAdd();
	}
?>