<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Usuario</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h2>Nuevo Usuario</h2>
    <form method="POST" action="index.php?action=usuario_store">
        Código: <input type="number" name="codigo" required><br>
        Nombre: <input type="text" name="nombre" required><br>
        Teléfono: <input type="text" name="telefono"><br>
        Dirección: <input type="text" name="direccion"><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
