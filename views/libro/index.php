<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h2>Lista de Libros</h2>
    <a href="index.php?action=libro_create">Nuevo Libro</a>
    <table>
        <tr><th>Código</th><th>Título</th><th>ISBN</th><th>Editorial</th><th>Páginas</th><th>Acciones</th></tr>
        <?php foreach ($libros as $l): ?>
            <tr>
                <td><?= $l['codigo'] ?></td>
                <td><?= $l['titulo'] ?></td>
                <td><?= $l['ISBN'] ?></td>
                <td><?= $l['editorial'] ?></td>
                <td><?= $l['paginas'] ?></td>
                <td>
                    <a href="index.php?action=libro_edit&codigo=<?= $l['codigo'] ?>">Editar</a> |
                    <a href="index.php?action=libro_delete&codigo=<?= $l['codigo'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
