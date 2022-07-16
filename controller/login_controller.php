<?php
    include "model/login_model.php";

    class login_controller {
        public $lm;

        function __construct()
        {
            $this->lm = new login_model();
        }

        function viewlogin()
        {
            include "view/login.php";
        }

        function member_login()
        {
            session_start();

            $uname = $_POST["tb_username"];
            $pass = $_POST["tb_password"];

            echo $uname;

            $_SESSION['uname'] = $uname;

            $login = $this->lm->login_member($uname, $pass);
            if ($login == '1') {
                header("location:main_homepage.php");
            } else {
                header("location:main_login.php");
            }
        }

        // function viewregister()
        // {
        //     include "view/register.php";
        // }

        function insert()
        {
            $uname = $_POST["inp_username"];
            $pass = $_POST["inp_password"];
            $npm = $_POST["inp_npm"];
            $insert = $this->lm->insert($uname, $pass, $npm);
            header("location:main_login.php");
        }

        function __destruct()
        {
            //kosong
        }
    }
?>