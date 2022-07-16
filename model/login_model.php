<?php
	class login_model{

		public $conn;

		function __construct(){
			// buat koneksi
			$this->conn = new mysqli("localhost", "root", "", "tokorizal");
			// if ($this->conn->connect_error) {
			//   die("Connection failed: ".$conn->connect_error);
			// }

		}

		function execute($query)
		{
			return $this->conn->query($query);
		}

		function login_member($uname, $pass)
		{
			$query = "SELECT * FROM tbl_user WHERE user='$uname' and password='$pass'";
            $result = $this->execute($query);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    return '1';
                }
            }
            else{ 
                return '0';
            }
		}

		// function select($x){
		// 	$query = "select * from tbl_member where username='$x'";
		// 	return $this->execute($query);
		// }

		// function login_select($x)
		// {
		// 	$query = "select * from tbl_member where username='$x'";
		// 	return $this->execute($query);
		// 	header("location:/view/homepage.php")
		// }

		function insert($x, $y, $z){
			$query = "INSERT INTO tbl_member VALUES ('$x', '$y', '$z')";
			return $this->execute($query);
		}

		function fetch($var){
            return $var->fetch_assoc();
        }

		function __destruct()
		{
			// kosong
		}
	}
?>