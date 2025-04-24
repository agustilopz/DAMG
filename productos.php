<?php
// Mostrar errores para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Conexión a la base de datos
$db = new SQLite3('database/damg.db'); // Cambia a 'database/damg.db' si está en una subcarpeta

if (!$db) {
    die("No se pudo abrir la base de datos.");
}

// Verificar que la tabla existe (opcional pero útil para depurar)
$check = $db->query("SELECT name FROM sqlite_master WHERE type='table' AND name='productes'");
if (!$check->fetchArray()) {
    die("La tabla 'productes' no existe.");
}

// Obtener productos
$result = $db->query("SELECT * FROM productes");
if (!$result) {
    die("Error al ejecutar la consulta: " . $db->lastErrorMsg());
}
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
    <?php
    $hay_productos = false;
    while ($producto = $result->fetchArray(SQLITE3_ASSOC)):
        $hay_productos = true;
    ?>
        <div class="producto-card">
            <img src="<?php echo $producto['prod_imatge']; ?>" alt="<?php echo $producto['prod_nom']; ?>">
            <h3><?php echo $producto['prod_nom']; ?></h3>
            <p><?php echo substr($producto['prod_descripcio'], 0, 100) . '...'; ?></p>
            <p class="precio">€<?php echo number_format($producto['prod_preu'], 2, ',', '.'); ?></p>
            <a href="productoConcreto.php?id=<?php echo $producto['prod_id']; ?>">Ver detalles</a>
        </div>
    <?php endwhile; ?>

    <?php if (!$hay_productos): ?>
        <p>No se encontraron productos en la base de datos.</p>
    <?php endif; ?>
</div>

</body>
</html>

<?php
$db->close();
?>
