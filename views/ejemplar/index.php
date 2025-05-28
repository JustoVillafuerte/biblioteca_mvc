<link rel="stylesheet" href="css/estilos.css">
<h2>Lista de Ejemplares</h2>
<a href="index.php?action=ejemplar_create">Nuevo Ejemplar</a>
<table>
    <tr><th>Código</th><th>Localización</th><th>Libro</th><th>Acciones</th></tr>
    <?php foreach ($ejemplares as $e): ?>
        <tr>
            <td><?= $e['codigo'] ?></td>
            <td><?= $e['localizacion'] ?></td>
            <td><?= $e['titulo'] ?></td>
            <td>
                <a href="index.php?action=ejemplar_edit&codigo=<?= $e['codigo'] ?>">Editar</a> |
                <a href="index.php?action=ejemplar_delete&codigo=<?= $e['codigo'] ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
