<?php
// Mostrar errores para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Conexión a la base de datos
$db = new SQLite3('database/damg.db');

if (!$db) {
    die("No se pudo abrir la base de datos.");
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

        // Corregir posibles espacios en la URL de la imagen
        $imagen_corregida = str_replace(' ', '%20', $producto['prod_imatge']);
    ?>
        <div class="producto-card">
            <img src="<?php echo htmlspecialchars($imagen_corregida); ?>" alt="<?php echo htmlspecialchars($producto['prod_nom']); ?>">
            <h3><?php echo htmlspecialchars($producto['prod_nom']); ?></h3>
            <p><?php echo htmlspecialchars(substr($producto['prod_descripcio'], 0, 100)) . '...'; ?></p>
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
