<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Autores</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h2>Lista de Autores</h2>
    <a href="index.php?action=create">Nuevo Autor</a>
    <table>
        <tr><th>Código</th><th>Nombre</th><th>Acciones</th></tr>
        <?php foreach ($autores as $a): ?>
            <tr>
                <td><?= $a['codigo'] ?></td>
                <td><?= $a['nombre'] ?></td>
                <td>
                    <a href="index.php?action=edit&codigo=<?= $a['codigo'] ?>">Editar</a> |
                    <a href="index.php?action=delete&codigo=<?= $a['codigo'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
