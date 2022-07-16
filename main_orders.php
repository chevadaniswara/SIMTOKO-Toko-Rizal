<?php
    include "controller/barang_controller.php";

    $bc4 = new controller_barang();

       if (isset($_GET["tambah"])){
            $bc4->viewOrdersBarang();
        } else if (isset($_GET["addbrg"])) {
            $idbrg = $_GET['idbrg'];
            $bc4->viewOrdersAdd($idbrg);
        } else {

        }
?>