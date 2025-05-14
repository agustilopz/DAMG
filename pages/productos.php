<?php
// Mostrar errores para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Conexión a la base de datos
$db = new SQLite3('../database/damg.db');

if (!$db) {
    die("No se pudo abrir la base de datos.");
}

// Verificar que la tabla existe
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
    <?php include("../includes/head.html") ?>
    <link rel="stylesheet" href="../css/productos.css">
</head>
<body>
    <?php include("../includes/nav.php") ?>

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
