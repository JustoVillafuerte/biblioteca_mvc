<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Libro</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h2>Editar Libro</h2>
    <form method="POST" action="index.php?action=libro_update">
        <input type="hidden" name="codigo" value="<?= $data['codigo'] ?>">
        Título: <input type="text" name="titulo" value="<?= $data['titulo'] ?>" required><br>
        ISBN: <input type="text" name="isbn" value="<?= $data['ISBN'] ?>"><br>
        Editorial: <input type="text" name="editorial" value="<?= $data['editorial'] ?>"><br>
        Páginas: <input type="number" name="paginas" value="<?= $data['paginas'] ?>"><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
