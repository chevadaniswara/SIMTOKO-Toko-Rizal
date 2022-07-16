<?php
    include "controller/login_controller.php";

    $cl = new login_controller();

        if (isset($_GET["daftar"])) {
            $cl->viewregister(); 
        } else {
            $cl->viewlogin();
        }
?>