<html>
    <head>
        <?php 
        include "asset_inc.php";
        include "datepicker_inc.php";
        ?>
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
    </style>
    </head>
    <body>
    
    <?php
        date_default_timezone_set('Asia/Jakarta');
        $dateNow = new DateTime(date("Y-m-d")); 
        $dateNow = $dateNow->format("Y-m-d");

        $tampil_nama;
        $tampil_harga;
        $tampil_stok;

        if($row=$this->bm->fetch($data)){
            $tampil_mama = $row["nama_barang"];
            $tampil_harga = $row["harga"];
            $tampil_stok = $row["stok"];
        } else {
            //
        }
    ?>

    <form action="" method="POST">
                <div class="login-box">
                    <!-- <h1>Login</h1> -->
                    <!-- <div class="textbox">
                        <input type="text" name="inp_idbarang" placeholder="ID Barang">
                    </div> -->
                    <div class="textbox">
                        <input readonly type="text" name="inp_tgl" id="textinput-disabled" placeholder="Tgl Peminjaman" value="<?php echo $dateNow;?>">
                    </div>
                    <div class="textbox">
                        <input readonly type="text" name="inp_nama" id="textinput-disabled" placeholder="" value="<?php echo $tampil_mama;?>">
                    </div>
                    <div class="textbox">
                        <input readonly type="text" name="inp_idbrg" id="textinput-disabled" placeholder="" value="<?php echo $idbrg;?>">
                    </div>
                    <div class="textbox">
                        <input type='number' name='inp_jmlbarang' placeholder="Jumlah dibeli" min='1' max='90'><br>
                    </div>
                    <div class="textbox">
                        <input readonly type="text" name="inp_harga" id="textinput-disabled" placeholder="" value="<?php echo $tampil_harga; ?>">
                    </div>
                    <div class="textbox">
                        <input type="number" name="inp_hargatotal" placeholder="Harga Total" min='1'>
                    </div>
                    <div class="textbox">
                        <input readonly type="text" name="inp_stok" id="textinput-disabled" placeholder="Stok" value="<?php echo $tampil_stok; ?>">
                    </div>
                    <input type="submit" class="btn" name="btn_tambah" value="Tambah">
                    <div>
                    </div>
                </div>
            </form>
    </body>
</html>
<?php
    if (isset($_POST["btn_tambah"])) {
        // $id_barang = $_POST["inp_idbarang"];
        // $nama = $_POST["inp_namabarang"];
        // $harga = $_POST["inp_harga"];
        // $stok = $_POST["inp_stok"];
        $bc2 = new controller_barang();
        $bc2->insertOrderData();
    }
?>