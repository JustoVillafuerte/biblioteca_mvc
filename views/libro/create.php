<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Libro</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h2>Nuevo Libro</h2>
    <form method="POST" action="index.php?action=libro_store">
        Código: <input type="number" name="codigo" required><br>
        Título: <input type="text" name="titulo" required><br>
        ISBN: <input type="text" name="isbn"><br>
        Editorial: <input type="text" name="editorial"><br>
        Páginas: <input type="number" name="paginas"><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
