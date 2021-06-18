<?php 
include 'conexion.php';





$n_expediente=$_POST ['n_expediente'];
$periodo=$_POST ['periodo'];
$estado=$_POST ['estado'];


$sql=  ' INSERT INTO asuntos ("n_expediente,periodo,estado") VALUES ("$n_expediente","$periodo","$estado")' ;
if (mysql_query('$conection,$sql'))
{

echo "registro ingresado correctamente";

}
else
{
echo "registro no insertado";

}

?>

