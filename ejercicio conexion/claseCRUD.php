<?php
     include_once 'claseConexionBD.php';


        class CRUD
        {
            function insertarRegistros($ced,$nom,$ape){

                $n=new conexion();
                $consulta = "INSERT INTO usuario(cedula, nombre,apellido) VALUES ('$ced','$nom','$ape')";
                
                $result = mysqli_query($n->getConnect(),$consulta);
            }
        }

       


?>