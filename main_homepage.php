<?php
    include "controller/barang_controller.php";

    $bc = new controller_barang();

       if (isset($_GET["tambah"])){
            $bc->viewTambahBrg();
        } else if (isset($_GET["orders"])){
            $bc->viewOrders();
        } else if (isset($_GET["add"])){
            $bc->viewOrdersAdd();
        } else{
            $bc->viewHomepage();
        }
?>