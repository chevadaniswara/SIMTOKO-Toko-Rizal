<?php
    class model_barang {
        public $conn;

        function __construct(){
            $this->conn=new mysqli("localhost", "root", "", "tokorizal");
            if ($this->conn->connect_error){
                die("Connection failed: ".$conn->connect_error);
            }
        }

        function execute($query){
            return $this->conn->query($query);
        }

        function selectAll(){
            $query = "select * from tbl_barang";
            return $this->execute($query);
        }

        function select_order($idbrg){
            $query = "select * from tbl_barang where id_barang='$idbrg'";
            return $this->execute($query);
        }

        function selectOrder(){
            $query = "select * from tbl_laku";
            return $this->execute($query);
        }

        function insertBarang($id_barang, $nama, $harga, $stok){
			$query = "INSERT INTO tbl_barang VALUES ('$id_barang', '$nama', '$harga', '$stok')";
			return $this->execute($query);
		}

        function updateStok($id_barang, $stok){
            $query = "UPDATE tbl_barang SET '$stok' WHERE 'id_barang'='$id_barang'";
            return $this->execute($query);
        }

        function delete($x){
            $query = "delete from tbl_barang where id_barang='$x'";
            return $this->execute($query);
        }

        function select_id(){
            $query = "select id_barang from tbl_barang";
            return $this->execute($query);
        }

        function select_id_order(){
            $query = "select id from tbl_laku";
            return $this->execute($query);
        }

        function select_maxid_order($id){
            $query = "select max(id) as num_id from tbl_laku where id='$id'";
            return $this->execute($query);
        }

        function insertOrder($id, $tgl, $nama, $jumlah, $harga, $total){
            $query = "INSERT INTO tbl_laku VALUES ('$id', '$tgl', '$nama', '$jumlah', '$harga', '$total')";
			return $this->execute($query);
        }

        function caribrg($cari){
			$query = "select * from tbl_barang where nama like '%".$cari."%'";
			return $this->execute($query);
		}

        function select_maxid($id){
            $query = "select max(id_barang) as num_id from tbl_barang where id_barang='$id'";
            return $this->execute($query);
        }

        // function insert($name, $desc, $buy, $sell, $pict, $id){
        //     $query = "insert into barang values ('$name', '$desc', '$buy', '$sell','$pict', '$id')";
        //     return $this->execute($query);
        // }

        function fetch($var){
            return $var->fetch_assoc();
        }

        function __destruct()
        {
            //kosong
        }
    }
?>