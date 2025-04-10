<?php
// Conectar a la base de datos SQLite
$db = new SQLite3('damg.db');

// Obtener los productos de la base de datos
$result = $db->query("SELECT * FROM productes");

// Cerrar la conexión a la base de datos
$db->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="productos.css">
</head>
<body>

<!-- Barra de navegación -->
<nav class="navbar">
    <a href="#">Mi Tienda</a>
</nav>

<!-- Lista de productos -->
<div class="productos">
    <?php while ($producto = $result->fetchArray(SQLITE3_ASSOC)): ?>
    <div class="producto-card">
        <img src="<?php echo $producto['prod_imatge']; ?>" alt="<?php echo $producto['prod_nom']; ?>">
        <h3><?php echo $producto['prod_nom']; ?></h3>
        <p><?php echo substr($producto['prod_descripcio'], 0, 100) . '...'; ?></p>
        <p class="precio">€<?php echo number_format($producto['prod_preu'], 2, ',', '.'); ?></p>
        <a href="productoConcreto.php?id=<?php echo $producto['prod_id']; ?>">Ver detalles</a>
    </div>
    <?php endwhile; ?>
</div>

</body>
</html>