<?php
// Definir los productos con su información
$productos = [
    1 => [
        "nombre" => "Laptop UltraTech Pro",
        "precio" => 1200,
        "imagen" => "imagenes/laptop.jpg"
    ],
    2 => [
        "nombre" => "Smartphone Quantum X",
        "precio" => 730,
        "imagen" => "imagenes/smartphone.jpg"
    ],
    3 => [
        "nombre" => "Placa Base TechMaster",
        "precio" => 230,
        "imagen" => "imagenes/placa-base.jpg"
    ],
    4 => [
        "nombre" => "Memoria RAM SpeedMax 16GB DDR4",
        "precio" => 83,
        "imagen" => "imagenes/memoria-ram.jpg"
    ],
    5 => [
        "nombre" => "Tarjeta Gráfica NeoGaming RTX 3060",
        "precio" => 365,
        "imagen" => "imagenes/tarjeta-grafica.jpg"
    ],
    6 => [
        "nombre" => "Teclado Mecánico ProKeys RGB",
        "precio" => 110,
        "imagen" => "imagenes/teclado.jpg"
    ],
    7 => [
        "nombre" => "Ratón Gamer Precision X",
        "precio" => 64,
        "imagen" => "imagenes/raton.jpg"
    ],
    8 => [
        "nombre" => "Auriculares SoundBlaze Wireless",
        "precio" => 137,
        "imagen" => "imagenes/auriculares.jpg"
    ],
    9 => [
        "nombre" => "Monitor UltraVision 27\" 4K UHD",
        "precio" => 320,
        "imagen" => "imagenes/monitor.jpg"
    ],
    10 => [
        "nombre" => "Disco Duro Externo DataVault 2TB",
        "precio" => 91,
        "imagen" => "imagenes/disco-duro.jpg"
    ]
];

// Obtener el ID del producto desde la URL
$id = $_GET['id'];
if (!isset($productos[$id])) {
    die("Producto no encontrado.");
}

$producto = $productos[$id];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $producto['nombre']; ?></title>
    <link rel="stylesheet" href="productoConcreto.css">
</head>
<body>

<!-- Barra de navegación -->
<nav class="navbar">
    <a href="productos.php">Mi Tienda</a>
</nav>

<!-- Sección de detalles del producto -->
<div class="producto-detalle container">
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1><?php echo $producto['nombre']; ?></h1>
            <h4>€<?php echo $producto['precio']; ?></h4>
            <p><?php echo $producto['descripcion']; ?></p>

            <!-- Características del Producto -->
            <div class="detalles">
                <h3>Características del Producto:</h3>
                <ul>
                    <?php
                    // Mostrar las características según el producto
                    switch($id) {
                        case 1:
                            echo "<li>Procesador: Intel Core i7</li>";
                            echo "<li>RAM: 16GB</li>";
                            echo "<li>Almacenamiento: 512GB SSD</li>";
                            echo "<li>Tarjeta Gráfica: NVIDIA GTX 1650</li>";
                            echo "<li>Sistema Operativo: Windows 11</li>";
                            break;
                        case 2:
                            echo "<li>Pantalla: OLED 6.7\"</li>";
                            echo "<li>Almacenamiento: 128GB</li>";
                            echo "<li>Cámara: 48 MP</li>";
                            echo "<li>Conectividad: 5G</li>";
                            break;
                        case 3:
                            echo "<li>Chipset: Intel Z590</li>";
                            echo "<li>Compatibilidad: Procesadores Intel 10ª/11ª generación</li>";
                            echo "<li>Ranuras RAM: 4</li>";
                            echo "<li>Soporte M.2 y puertos USB 3.2</li>";
                            break;
                        case 4:
                            echo "<li>Capacidad: 16GB DDR4</li>";
                            echo "<li>Velocidad: 3200MHz</li>";
                            echo "<li>Latencia: CL16</li>";
                            break;
                        case 5:
                            echo "<li>Memoria: 6GB GDDR6</li>";
                            echo "<li>Tecnología: Ray tracing</li>";
                            echo "<li>Ventiladores: 2 para refrigeración avanzada</li>";
                            break;
                        case 6:
                            echo "<li>Retroiluminación: RGB</li>";
                            echo "<li>Switches: Táctiles</li>";
                            echo "<li>Función anti-ghosting</li>";
                            break;
                        case 7:
                            echo "<li>Sensor: Ajustable hasta 16.000 DPI</li>";
                            echo "<li>Botones: 7 programables</li>";
                            echo "<li>Diseño ergonómico</li>";
                            break;
                        case 8:
                            echo "<li>Sonido: Envolvente</li>";
                            echo "<li>Cancelación activa de ruido</li>";
                            echo "<li>Micrófono integrado</li>";
                            echo "<li>Batería de larga duración</li>";
                            break;
                        case 9:
                            echo "<li>Pantalla: 27\" 4K UHD</li>";
                            echo "<li>Frecuencia de actualización: 144Hz</li>";
                            echo "<li>FreeSync: Sí</li>";
                            break;
                        case 10:
                            echo "<li>Capacidad: 2TB</li>";
                            echo "<li>Interfaz: USB 3.1</li>";
                            echo "<li>Diseño compacto y resistente</li>";
                            break;
                        default:
                            echo "<li>No hay detalles disponibles.</li>";
                    }
                    ?>
                </ul>
            </div>

            <!-- Botón para regresar a la página de productos -->
            <a href="productos.php" class="btn-neon">Volver a la página de productos</a>
        </div>
    </div>
</div>

</body>
</html>