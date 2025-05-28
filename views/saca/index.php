<link rel="stylesheet" href="css/estilos.css">
<h2>Historial de Préstamos</h2>
<a href="index.php?action=saca_create">Registrar préstamo</a>
<table>
    <tr><th>Usuario</th><th>Ejemplar</th><th>Fecha Préstamo</th><th>Fecha Devolución</th></tr>
    <?php foreach ($registros as $r): ?>
        <tr>
            <td><?= $r['usuario'] ?></td>
            <td><?= $r['ejemplar'] ?></td>
            <td><?= $r['fecha_prest'] ?></td>
            <td><?= $r['fecha_dev'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
