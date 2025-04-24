<?php
// Asegúrate de que la ruta del archivo sea correcta:
$db = new SQLite3('database/damg.db');

// Obtener el ID del producto desde la URL
$id = $_GET['id'] ?? null;
if (!$id || !is_numeric($id)) {
    die("Producto no encontrado.");
}

// Consultar el producto desde la base de datos
$stmt = $db->prepare("SELECT * FROM productes WHERE prod_id = :id");
$stmt->bindValue(':id', $id, SQLITE3_INTEGER);
$result = $stmt->execute();

// Verificar si el producto existe
$producto = $result->fetchArray(SQLITE3_ASSOC);
if (!$producto) {
    die("Producto no encontrado.");
}

$db->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $producto['prod_nom']; ?></title>
    <link rel="stylesheet" href="productoConcreto.css">
</head>
<body>

<!-- Barra de navegación -->
<nav class="navbar">
    <a href="productos.php">Volver a la tienda</a>
</nav>

<!-- Detalles del producto -->
<div class="producto-detalle container">
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo $producto['prod_imatge']; ?>" alt="<?php echo $producto['prod_nom']; ?>">
        </div>
        <div class="col-md-6">
            <h1><?php echo $producto['prod_nom']; ?></h1>
            <h4>€<?php echo number_format($producto['prod_preu'], 2, ',', '.'); ?></h4>
            <p><?php echo $producto['prod_descripcio']; ?></p>

            <div class="detalles">
                <h3>Características del Producto:</h3>
                <ul>
                    <li>Producto: <?php echo $producto['prod_nom']; ?></li>
                    <li>Precio: €<?php echo number_format($producto['prod_preu'], 2, ',', '.'); ?></li>
                    <li>Descripción: <?php echo $producto['prod_descripcio']; ?></li>
                </ul>
            </div>

            <a href="productos.php" class="btn-neon">Volver a la página de productos</a>
        </div>
    </div>
</div>

</body>
</html>