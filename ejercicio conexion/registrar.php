<?php
include 'claseCRUD.php';

 /* if (isset($_POST['Enviar'])) {
    if (strlen($_POST['ced']) <= 1 && strlen($_POST['nom']) <= 1 && strlen($_POST['ape']) <= 1) {
        
 */
        $obj= new CRUD(); 
        $cedula = trim($_POST['ced']);
        $nombre = trim($_POST['nom']);
        $apellido = trim($_POST['ape']);

         $result= $obj->insertarRegistros($cedula,$nombre,$apellido); 

        print_r($result);
      


        

/*     }
}  */
?>