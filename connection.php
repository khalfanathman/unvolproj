<?php

	//require_once("db.php");

	class DB{ 
		
		public function __construct(){
			//echo "db object has been created <br/>";
		}
		public function connect(){
			
			$host = "localhost";
			$d_b = "unvol";
			$user = "root";
			$pass = 'toor';
			
			try{
			 	$db = new PDO('mysql:server=$host,db_name=$d_b',$user,$pass);
				//$db = $this->db;
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    		//2	echo "Connected successfully</br>";
			}
			catch(PDOException $e){
					echo "<div class='w3-container w3-red w3-half w3-display-middle'>
  				<h3>Error</h3>
				<p>There is an error.</p>
			</div>" . $e->getMessage() . "<br/>";
			}
			return $db;
    	}
	
		public function db_query($sql){
			
			$db = self::connect();
			try{	

				$stmt = $db->query($sql);
				
				if($stmt){
					return $stmt;
					echo "query ran smoothly<br>";
				}
				echo "the query did run finely</br>";
			}
			catch(PDOException $e){
	 		/*	echo "<div class='w3-container w3-red w3-half w3-display-middle'>
  				<h3>". $e->getMessage() . "Error</h3>
				<p>There is an erroro.</p>
			</div></br>";*/
			}
			
		}
		public function __destruct(){
		//	echo "<br> db object has been destroyed <br/>";
		}

		
		
}

?>
