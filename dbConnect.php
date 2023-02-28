<?php
	class dbConnect {
		function __construct() {
			require_once('config.php');
			$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);
			// mysql_select_db(DB_DATABSE, $conn);

			if(!$conn)
			{
				die("connection failed:".$conn->connect_error());

			}echo "connected successfully.";

			
		}
		public function Close(){
			mysql_close();
		}
	}
?>

