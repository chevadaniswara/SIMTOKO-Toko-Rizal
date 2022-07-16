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
        .login-box{
            width: 280px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            color:slategray;
        }
        .login-box h1{
            float: left;
            font-size: 40px;
            border-bottom: 6px solid #4caf50;
            margin-bottom: 50px;
            padding: 13px 0;
        }
        .textbox{
            width: 100%;
            overflow: hidden;
            font-size: 20px;
            padding: 8px 0;
            margin: 8px 0;
            border-bottom: 1px solid #4caf50;
        }
        .textbox i{
            width: 26px;
            float: left;
            text-align: center;
        }
        .textbox input{
            border: none;
            outline: none;
            background: none;
            color: rgb(36, 36, 36);
            font-size: 18px;
            width: 80%;
            float: left;
            margin: 0 10px;
        }
        .btn{
            width: 100%;
            background: none;
            border: 2px solid #4caf50;
            color: black;
            padding: 5px;
            font-size: 18px;
            cursor: pointer;
            margin: 12px 0;
        }
        table, td, th{
            border: 1px solid black;
            text-align: center;
        }
        .header {
            padding: 10px 16px;
            background: #555;
            color: #f1f1f1;
        }
    </style>
    </head>

    <body>
        <div class="main_konten">
            <center><h1>TAMBAH BARANG</h1></center>
            <!-- <center><p>Cari berdasarkan judul, tahun, penulis</p></center> -->
            <form action="" method="POST">
                <div class="login-box">
                    <!-- <h1>Login</h1> -->
                    <!-- <div class="textbox">
                        <input type="text" name="inp_idbarang" placeholder="ID Barang">
                    </div> -->
                    <div class="textbox">
                        <input type="text" name="inp_namabarang" placeholder="Nama Barang">
                    </div>
                    <div class="textbox">
                        <input type="text" name="inp_harga" placeholder="Harga Satuan">
                    </div>
                    <div class="textbox">
                        <input type="text" name="inp_stok" placeholder="Stok">
                    </div>
                    <input type="submit" class="btn" name="btn_tambah" value="Tambah">
                    <!-- <input type="button" class="btn" name="btn_register" value="Submit"> -->
                    <div>
                    </div>
                </div>
            </form>
            <a href="view/home.php">Home</a>
        </div>
    </body>
</html>
<?php
    if (isset($_POST["btn_tambah"])) {
        // $id_barang = $_POST["inp_idbarang"];
        // $nama = $_POST["inp_namabarang"];
        // $harga = $_POST["inp_harga"];
        // $stok = $_POST["inp_stok"];
        $bc2 = new controller_barang();
        $bc2->id();
    }
?>