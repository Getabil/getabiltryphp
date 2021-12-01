<?php 
class Connection{

	protected $isConn;
	protected $datab;
	protected $transaction;

								//un phpmyadmin    pass phpmyadmin     ip 				dbname
	public function __construct($username="tmnilwymxvergd", $password ="00f0209640bdfd48e44d0e959e2a61a0221f8985466832a75f0af5796ab8d053", $host="ec2-3-95-130-249.compute-1.amazonaws.com", $dbname="d5j73fo8ic5ms4, $options = []){
		
		$this->isConn = TRUE;
		try{
			$this->datab = new PDO("mysql:host={$host};  dbname={$dbname}; charset=utf8", $username, $password, $options);
			$this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->transaction = $this->datab;
			$this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			echo 'Connected Successfully!!!';

		}catch(PDOException $e){
			throw new Exception($e->getMessage());			
		}

	}//endDefaultConstructor
 

	//disconnect from db
	public function Disconnect(){
		$this->datab = NULL;//close connection in PDO
		$this->isConn = FALSE;
	}//endDisconnectFunction


	


}//endClassDatabase

 //$con = new Connection(); //for debugging only
//echo '	debug connection';
 ?>
