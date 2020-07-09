<?php
include ( "conexi.php" );
$conexion=new ConexionPGSQL();
$a=$conexion->conectar();
$bandera = $_POST [ "rc" ];
if ($bandera=="agre") {
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $carrera=$_POST["carrera"];
    $materia=$_POST["materia"];
    $email=$_POST["email"];
    try{
        $a->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $a->beginTransaction();
        $a->exec("set transaction isolation level read Committed");
        $a->exec("INSERT INTO registro (id_alumno,nombre,carrera,materia,email) values('$id','$nombre','$carrera','$materia','$email')");
        $a->commit();
       // echo "<script language='javascript'>";
    
        //alert("registro exito");
         //echo "alertaExito();".$metodo->inTransaction()."');";
      
        // echo "location.href='registrarcliente.php';"; 
        echo "</script>";
        
        
    }catch(PDOException $ex){
    
        $a->rollback();
       // echo "<script language='javascript'>";
      //  alert("Exito RB");
       //echo "alertaExito();".$ex->getMessage()."');"; 
     //   echo "location.href='RegistraAlumnoRC.php';";
      //  echo "</script>";
    
    }
    
    
    
    echo "<script language='javascript'>";
      echo "setTimeout ('r()', 1500);";
      echo "</script>";
}
?>