<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div  >
        <form method="POST" action="index.php?opcion=Modificar">
            <input type="hidden" name="id" value="<?php if(isset($_GET['id']))echo $_GET['id']; ?>">  
            <label for="nm">Nome do Alumno</label>
            <input type="text" name="Nombre" id="nm" >
            <br />
            <br />
            <label for="cod">Nota do Alumno</label>
            <input type="Number" name="Nota" id="cod" >
            <br />
            <br />
            <input type="submit" name="modificar" value="Modificar">
        </form>
    </div>
</body>

</html>