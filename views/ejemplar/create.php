<link rel="stylesheet" href="css/estilos.css">
<h2>Nuevo Ejemplar</h2>
<form method="POST" action="index.php?action=ejemplar_store">
    Código: <input type="number" name="codigo" required><br>
    Localización: <input type="text" name="localizacion" required><br>
    Libro:
    <select name="libro_codigo" required>
        <?php foreach ($libros as $l): ?>
            <option value="<?= $l['codigo'] ?>"><?= $l['titulo'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <button type="submit">Guardar</button>
</form>
