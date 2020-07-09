<?php 
//class Conn{
	

	$usuario = 'postgres';
	$password = 'root';
	
	/*En este caso el tipo es pgsql, además le indicamos el puerto */
	$conn = new PDO('pgsql:host=localhost;port=5432;dbname=Transac_DB', $usuario, $password);
	function co(){
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if (!$conn) {
		echo "error";
	}else{
		echo "exito";
	}
}
//}

?>