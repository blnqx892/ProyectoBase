<?php
            include("../conexiion.php"); 
            $conexion = new Conexion();
            $conexion->conectar();
            $a=$conexion->conectar();
            $a->beginTransaction();
            $a->rollback();
            header("location: /ProyectoBD/RegistraAlumnoRC.php");
            ?>
            