<?php
require('Vista/incluye/menu.php');
require('Controlador/C_Alumno.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="Vista/incluye/style.css">
</head>
<body>

	<?php
	//comprobamos si é a primeira vez que entramos no index
	/* $url=$_SERVER['REQUEST_URI'];
	$archivo = basename($url);
	if($archivo=='index.php')
		require('Inicio/home.html'); */


	$obx_X=new C_Alumno();
	$obx_X->capturar_opcion();

	switch ($obx_X->opcion) {
		case 'Alta':
			$obx_X->Alta();
			break;
		case 'Ver_T':
			C_Alumno::Ver_T();
			break;
		case 'Eliminar':
			C_Alumno::Eliminar();
			break;
		case 'Modificar':
			C_Alumno::Modificar();
			break;
		case 'Buscar_Al':
			C_Alumno::Buscar_Al();
			break;
        default:
			require('Vista/Home.php');
			break;	
        }
?>
</body>
</html>