<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="tabla">
        <table class="table">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Notass</th>
                    <th colspan=2>Accions</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($datos)): ?>
                <?php foreach ($datos as $dato) : ?>
                <tr>

                    <td><?= $dato["Cod"] ?></td>
                    <td><?= $dato["Nome"] ?></td>
                    <td><?= $dato["Nota"] ?></td>
                    <td>
                        <a href="index.php?opcion=Eliminar&id=<?=$dato["Cod"]?>">Baixa</a>
                    </td>
                    <td> <a href="index.php?opcion=Modificar&id=<?=$dato["Cod"]?>">Modificar</a></td>
                </tr>
                <?php endforeach ?>
                <?php else : ?>
                <tr>
                    <td>No hay resultados</td>
                </tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</body>
</html>