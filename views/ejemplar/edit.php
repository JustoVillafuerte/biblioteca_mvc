<link rel="stylesheet" href="css/estilos.css">
<h2>Editar Ejemplar</h2>
<form method="POST" action="index.php?action=ejemplar_update">
    <input type="hidden" name="codigo" value="<?= $data['codigo'] ?>">
    Localización: <input type="text" name="localizacion" value="<?= $data['localizacion'] ?>" required><br>
    Libro:
    <select name="libro_codigo" required>
        <?php foreach ($libros as $l): ?>
            <option value="<?= $l['codigo'] ?>" <?= $l['codigo'] == $data['libro_codigo'] ? 'selected' : '' ?>>
                <?= $l['titulo'] ?>
            </option>
        <?php endforeach; ?>
    </select><br>
    <button type="submit">Actualizar</button>
</form>
