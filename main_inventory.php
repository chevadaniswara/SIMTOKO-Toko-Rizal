<?php
    include "controller/barang_controller.php";

    $bc3 = new controller_barang();

        if (isset($_GET["inv"])) {
            $bc3->viewInventory(); 
        } else{
            //kosong
        }
?>