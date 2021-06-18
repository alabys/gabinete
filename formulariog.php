<?php

	include 'conexion.php';
?>


 <html>

<head>
	<title> formulario </title>
</head>
	<body>

<form action= "insert1.php" method= "post">

<label>n_expediente </label> <input type="text" name="n_expediente "> </input>
<label>periodo</label>		<input type="text" name="periodo"> </input>
<label>estado</label>		<input type="text" name="estado"> </input>

<input type="submit">

</form>

<a href="indexg.php">pagina principal</a>


</body>


