<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="formAlta">
        <h3>Registrando Alumno: </h3>
        <div class="formAltaAlumno">
            <form method="POST" action="index.php?opcion=Alta">
                <label for="nm">Nome do Alumno</label>
                <input type="text" name="Nombre" id="nm" required>
                <br />
                <br />
                <label for="cod">Codigo do Alumno</label>
                <input type="number" name="Cod" id="cod" required>
                <br />
                <br />
                <label for="nt">Nota do Alumno</label>
                <input type="number" name="Nota" id="nt" required>
                <br />
                <br />
                <input type="submit" name="EnvEj_Form" value="Enviar">
            </form>
        </div>
    </div>

</body>

</html>