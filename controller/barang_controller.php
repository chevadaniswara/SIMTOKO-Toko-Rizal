<?php
    include "model/barang_model.php";

    class controller_barang{

        public $bm;
        

        function __construct()
        {
            $this->bm=new model_barang();
        }

        function viewInventory(){
            $data = $this->bm->selectAll();
            include "view/inventory.php";
        }

        function dropdownBarang(){
            $data = $this->bm->selectAll();
        }

        function viewHomepage(){
            include "view/home.php";
        }

        function viewTambahBrg(){
            $data = $this->bm->selectAll();
            include "view/tambah_barang.php";
        }

        function viewOrders(){
            $data = $this->bm->selectOrder();
            include "view/orders.php";
        }

        function viewOrdersAdd($idbrg){
            $data = $this->bm->select_order($idbrg);
            include "view/orders_add.php";
            include "view/asset_inc.php";
            include "view/datepicker_inc.php";
        }

        function viewOrdersBarang(){
            $data = $this->bm->selectAll();
            include "view/orders_barang.php";
        }
        
        // function insertBarang()
        // {
        //     $id_barang = $_POST["inp_idbarang"];
        //     $nama = $_POST["inp_namabarang"];
        //     $harga = $_POST["inp_harga"];
        //     $stok = $_POST["inp_stok"];
        //     $insert = $this->bm->insertBarang($id_barang, $nama, $harga, $stok,);
        //     $message = "Barang telah ditambah";
        //     echo "<script type='text/javascript'>alert('$message');</script>";
        // }

        function id(){
            $id_barang = $_POST["inp_idbarang"];
            $nama = $_POST["inp_namabarang"];
            $harga = $_POST["inp_harga"];
            $stok = $_POST["inp_stok"];
            $id;
            //mencari ID
            $data = $this->bm->select_id();
            if ($data->num_rows > 0) {
                while($row = $this->bm->fetch($data)){
                    $data_id = $this->bm->select_maxid($row['id_barang']);
                    if ($data_id->num_rows > 0) {
                        while($row = $this->bm->fetch($data_id)){
                            $idtemp = (int)$row['num_id'];
                            $idtemp++;
                            $idtemp2 = str_pad($idtemp,4,"0", STR_PAD_LEFT);
                            $id = $idtemp2;
                        }
                    }

                }
            }else{
                $id = '0001';
            }
            $insert = $this->bm->insertBarang($id, $nama, $harga, $stok);
            header("location:view/home.php");
        }

        function insertOrderData(){
            $nama = $_POST["inp_nama"];
            $harga = $_POST["inp_harga"];
            $jumlah = $_POST["inp_jmlbarang"];
            $tgl = $_POST["inp_tgl"];
            $total = $_POST["inp_hargatotal"];
            $id;
            //mencari ID
            $data = $this->bm->select_id_order();
            if ($data->num_rows > 0) {
                while($row = $this->bm->fetch($data)){
                    $data_id = $this->bm->select_maxid_order($row['id']);
                    if ($data_id->num_rows > 0) {
                        while($row = $this->bm->fetch($data_id)){
                            $idtemp = (int)$row['num_id'];
                            $idtemp++;
                            $idtemp2 = str_pad($idtemp,4,"0", STR_PAD_LEFT);
                            $id = $idtemp2;
                        }
                    }

                }
            }else{
                $id = '0001';
            }
            $insert = $this->bm->insertOrder($id, $tgl, $nama, $jumlah, $harga, $total);
            header("location:main_homepage.php");
        }

        function cariBrg(){
            if(isset($_GET["inp_cari"])){
                $cari = $_GET["inp_cari"];
                $data = $this->bm->caribrg($cari);
            } else {
                $message = "Gaonok mbot";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            header("location:/view/res_cari.php");
        }
        

        function __destruct()
        {
            //kosong
        }
    }
?>