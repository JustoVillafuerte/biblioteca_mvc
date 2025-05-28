<link rel="stylesheet" href="css/estilos.css">
<h2>Editar Autor</h2>
<form method="POST" action="index.php?action=update">
    <input type="hidden" name="codigo" value="<?= $data['codigo'] ?>">
    Nombre: <input type="text" name="nombre" value="<?= $data['nombre'] ?>" required><br>
    <button type="submit">Actualizar</button>
</form>
