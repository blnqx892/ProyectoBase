<?php
            include("../conexiion.php"); 
            $conexion = new Conexion();
            $conexion->conectar();
            $a=$conexion->conectar();
            $a->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $a->beginTransaction();
            $a->exec("set transaction isolation level read Committed");
            $a->commit();
            header("location: /ProyectoBD/RegistraAlumnoRC.php");
            ?>