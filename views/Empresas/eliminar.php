<?php 
ob_start();

    $id=$_GET['id'];
    #conexion
    include "../../includes/_functions.php";
    $conexion=conexion();
    #eliminar
    $query=eliminarArchivo($conexion,$id);
    if($query){
        header('location:../empresas.php');
                    ob_end_clean();

    }else{
        header('location:../empresas.php');
                    ob_end_clean();

    }


?>