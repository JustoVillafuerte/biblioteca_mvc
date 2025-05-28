<link rel="stylesheet" href="css/estilos.css">
<h2>Registrar Préstamo</h2>
<form method="POST" action="index.php?action=saca_store">
    Usuario:
    <select name="usuario_codigo" required>
        <?php foreach ($usuarios as $u): ?>
            <option value="<?= $u['codigo'] ?>"><?= $u['nombre'] ?></option>
        <?php endforeach; ?>
    </select><br>

    Ejemplar:
    <select name="ejemplar_codigo" required>
        <?php foreach ($ejemplares as $e): ?>
            <option value="<?= $e['codigo'] ?>"><?= $e['codigo'] ?> - <?= $e['localizacion'] ?></option>
        <?php endforeach; ?>
    </select><br>

    Fecha préstamo: <input type="date" name="fecha_prest" required><br>
    Fecha devolución: <input type="date" name="fecha_dev"><br>
    <button type="submit">Guardar</button>
</form>
