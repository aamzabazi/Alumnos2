<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <div class="dbForm" >
    <div>
        <form method="POST" action="index.php?opcion=Buscar_Al">
            <label for="nm">Nome do Alumno:</label>
            <input type="text" name="Nombre" id="nm">
            <br />
            <br />
            <input type="submit" name="Buscar" value="BuscarNombre">
        </form>
    </div>
    <div>
        <form method="POST" action="index.php?opcion=Buscar_Al">
            <label for="cod">Codigo do Alumno:</label>
            <input type="Number" name="Cod" id="cod">
            <br />
            <br />
            <input type="submit" name="Buscar" value="BuscarCod">
        </form>
    </div>
    </div>
</body>

</html>