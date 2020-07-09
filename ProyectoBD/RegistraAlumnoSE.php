<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SE-Registrar Alumno</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css">
</head>

<body>
    <div id="wrapper">
         <!--/////MENU -->
         <?php include ("Menu.php"); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    Registrar Alumno SERIALIZABLE<small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Registrar Alumno SERIALIZABLE</a></li>
                    <li class="active">Data</li>
                </ol>

            </div>
            <div id="page-inner">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-action">

                            </div>
                            <div class="card-content">
                            <form class="col s12" action="RegistraAlumnoSE.php" method="post" id="frmfin"
                                    name="frmfin">
                                    <input type="hidden" value="" name="bandera" id="bandera">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input id="id" name="id" type="number" class="validate">
                                            <label for="icon_prefix">ID</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input id="nombre" name="nombre" type="text" class="validate">
                                            <label for="icon_prefix">Nombre</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input id="carrera" name="carrera" type="text" class="validate">
                                            <label for="icon_prefix">Carrera</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input id="materia" name="materia" type="text" class="validate">
                                            <label for="icon_prefix">Materia</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="email" name="email" type="email" class="validate">
                                            <label for="email" data-error="wrong" data-success="right">Email</label>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <button class="waves-effect waves-light btn"  type="button" id="enviar" name="enviar" 
                                        class="btn btn-success" value="" onClick="verificar()">Guardar</button>
                                        <button class="waves-effect waves-light btn" type="reset" id="cancelar"
                                            name="cancelar">Eliminar</button>
                                    </div>
                                </form>
                                <div class="clearBoth"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. PAGE INNER  -->
                <!-- /. PAGE WRAPPER  -->
            </div>

<?php
include("conexiion.php"); 
$conexion = new Conexion();
$conexion->conectar();
$a=$conexion->conectar();

$bandera=$_REQUEST["bandera"];
$id=$_REQUEST["id"];
$nombre=$_REQUEST["nombre"];
//$nombre=ucwords($nombre);
$carrera=$_REQUEST["carrera"];
$materia=$_REQUEST["materia"];
$email=$_REQUEST["email"];
var_dump($_REQUEST);
if ($bandera=="add") {
    try{
        $a->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $a->beginTransaction();
        $a->exec("set transaction isolation level serializable");
        echo $a->exec("INSERT INTO registro (id_alumno,nombre,carrera,materia,email) values('$id','$nombre','$carrera','$materia','$email')");
        
        $a->commit();
       // echo "<script language='javascript'>";


        alert("exito");
         echo "Exito".$a->inTransaction()."');";
      
        // echo "location.href='registrarcliente.php';"; 
        //echo "</script>";
        
        
    }catch(PDOException $ex){
    
        $a->rollback();
        echo "<script language='javascript'>";
        alert("fallo rollback");
       echo "fallo rollback".$ex->getMessage()."');"; 
        echo "location.href='RegistraAlumnoSE.php';";
        echo "</script>";
    
    }
    
    
    
    echo "<script language='javascript'>";
      echo "setTimeout ('r()', 1500);";
      echo "</script>";
}

?>

<script>
                function verificar() {
                    if (document.getElementById('id').value == "" ||
                        document.getElementById('nombre').value == "" ||
                        document.getElementById('carrera').value == "" ||
                        document.getElementById('materia').value == "" ||
                        document.getElementById('email').value == ""
                    ) {

                        alert("Llene los campos");
                        // alertaError();

                    } else {
                        document.getElementById('bandera').value = "add";

                        document.frmfin.submit();
                    }


                }
                
            </script>

            <!-- /. WRAPPER  -->

<!--/////FINAL SCRIP //-->
<?php include ("Final.php"); ?>

</body>

</html>