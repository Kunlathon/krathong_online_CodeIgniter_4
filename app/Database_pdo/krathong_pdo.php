<?php header('Content-Type: text/html; charset=UTF-8'); ?>

<?php
	class count_krathong{
		public $id_system;
		public $conndb_krathong;
		function __construct($id_system){
			$this->id_system=$id_system;
//------------------------------------------------------------------------------------------------------------			
				if($this->id_system=="127.0.0.1" or $this->id_system=="localhost" or $this->id_system=="::1"){
					$newstu_server="localhost";
					$newstu_username="root";
					$newstu_password="053282395";
					$newstu_db="krathong";
					$newstu_port=3399;
						try{
							$conndb_krathong= new PDO("mysql:host=$newstu_server;dbname=$newstu_db;port=$newstu_port;charset=utf8",$newstu_username,$newstu_password);
							$conndb_krathong->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							//echo "Connected successfully";
						}catch(PDOException $e){
							echo "Connection failed: ->pdo_krathong<-" . $e->getMessage();
							$conndb_krathong=$e->getMessage();
						}
				}else{
					$newstu_server="localhost";
					$newstu_username="Regina@ict2022";
					$newstu_password="Regina@ict2022";
					$newstu_db="krathong";
					$newstu_port=3306;
						try{
							$conndb_krathong= new PDO("mysql:host=$newstu_server;dbname=$newstu_db;port=$newstu_port;charset=utf8",$newstu_username,$newstu_password);
							$conndb_krathong->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							//echo "Connected successfully";
						}catch(PDOException $e){
							echo "Connection failed: ->pdo_krathong<-" . $e->getMessage();
							$conndb_krathong=$e->getMessage();
						}					
				}		
//------------------------------------------------------------------------------------------------------------				
				$this->conndb_krathong=$conndb_krathong;
		}function call_coun_krathong(){
			return $this->conndb_krathong;
		}
	}
?>