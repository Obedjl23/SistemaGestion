<?php 
$con = new mysqli('localhost', 'id20534214_root', 'F)iQncN%NH5zaQ_F', 'id20534214_r_user');
if ($con->connect_errno) {
    die('fail');
}
$id=$_GET['id'];
include ('../upload.php');

$query=eliminar($con,$id);
if($query){
 header('location:../index.php');
}else{
    header('location:../index.php');
}
?>