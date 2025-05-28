<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h2>Lista de Usuarios</h2>
    <a href="index.php?action=usuario_create">Nuevo Usuario</a>
    <table>
        <tr><th>Código</th><th>Nombre</th><th>Teléfono</th><th>Dirección</th><th>Acciones</th></tr>
        <?php foreach ($usuarios as $u): ?>
            <tr>
                <td><?= $u['codigo'] ?></td>
                <td><?= $u['nombre'] ?></td>
                <td><?= $u['telefono'] ?></td>
                <td><?= $u['direccion'] ?></td>
                <td>
                    <a href="index.php?action=usuario_edit&codigo=<?= $u['codigo'] ?>">Editar</a> |
                    <a href="index.php?action=usuario_delete&codigo=<?= $u['codigo'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
