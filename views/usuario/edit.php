<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h2>Editar Usuario</h2>
    <form method="POST" action="index.php?action=usuario_update">
        <input type="hidden" name="codigo" value="<?= $data['codigo'] ?>">
        Nombre: <input type="text" name="nombre" value="<?= $data['nombre'] ?>" required><br>
        Teléfono: <input type="text" name="telefono" value="<?= $data['telefono'] ?>"><br>
        Dirección: <input type="text" name="direccion" value="<?= $data['direccion'] ?>"><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
