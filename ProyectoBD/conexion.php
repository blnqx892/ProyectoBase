<?php
 
// detalles de la conexion
$conn_string = "host=localhost port=5432 dbname=Transac_DB user=postgres password=root";
 
// establecemos una conexion con el servidor postgresSQL
$dbconn = pg_connect($conn_string);
 
// Revisamos el estado de la conexion en caso de errores. 
if(!$dbconn) {
echo "Error: No se ha podido conectar a la base de datos\n";
} else {
echo "Conexión exitosa\n";
}
 
// Close connection
pg_close($dbconn);
 
?>

