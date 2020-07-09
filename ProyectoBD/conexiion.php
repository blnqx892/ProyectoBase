<?php 
class Conexion{
	
	private $db='pgsql:dbname=Transac_DB';
	private $user='postgres';
	private $pass='root';
	
	public function conectar(){
		
		try{
		
$base= new PDO($this->db,$this->user,$this->pass,array(PDO::ATTR_PERSISTENT => true));
		//$base->exec("SET CARACTER SET utf8");
		
		if($base){
			//echo "conexion exitosa oracle";
			return $base;
		}
		
		}catch(Exception $e){
			echo "Error de conexion:".$e->getMessage();
			
		}
		
		
	}
	
}
?>