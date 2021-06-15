<?php 
include 'conexion.php';
/*
$cedula='080981287';
$nombre='David';
$apellido='Cedeño';
$direccion='San Rafael';
*/
//con dato desde el formulario
$Cedula=$_POST['Cedula'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Direccion=$_POST['Direccion'];

$sql=  ' INSERT INTO usuarios (Cedula,Nombre,Apellidos,Direccion) VALUES ('$Cedula','$Nombre','$Apellidos','$Direccion')' ;
if (mysql_query($conection,$sql)){

echo "registro ingresado correctamente";

}else{
echo "registro no insertado";

}




}



