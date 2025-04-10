<?php
// Array de productos con sus detalles
$productos = [
    1 => [
        'nombre' => 'Laptop UltraTech Pro',
        'descripcion' => 'Portátil de 15.6″ Full HD con procesador Intel Core i7, 16 GB de RAM, 512 GB SSD, tarjeta gráfica NVIDIA GTX 1650 y sistema operativo Windows 11.',
        'precio' => '€1,200',
        'imagen' => 'laptop.jpg',
    ],
    2 => [
        'nombre' => 'Smartphone Quantum X',
        'descripcion' => 'Smartphone con pantalla OLED de 6,7″, doble SIM, 128 GB de almacenamiento interno, conectividad 5G y cámara principal de 48 MP.',
        'precio' => '€730',
        'imagen' => 'smartphone.jpg',
    ],
    3 => [
        'nombre' => 'Placa Base TechMaster',
        'descripcion' => 'Placa base con chipset Intel Z590, compatible con procesadores Intel de 10ª/11ª generación, 4 ranuras para RAM, soporte para M.2 y puertos USB 3.2.',
        'precio' => '€230',
        'imagen' => 'placa_base.jpg',
    ],
    4 => [
        'nombre' => 'Memoria RAM SpeedMax 16GB DDR4',
        'descripcion' => 'Módulo de 16 GB DDR4 con una velocidad de 3200 MHz, latencia CL16 y alta compatibilidad para gaming y aplicaciones de alto rendimiento.',
        'precio' => '€83',
        'imagen' => 'ram.jpg',
    ],
    5 => [
        'nombre' => 'Tarjeta Gráfica NeoGaming RTX 3060',
        'descripcion' => 'Tarjeta gráfica con 6 GB GDDR6, tecnología de ray tracing y sistema de refrigeración avanzado con 2 ventiladores para un rendimiento óptimo en juegos.',
        'precio' => '€365',
        'imagen' => 'tarjeta_grafica.jpg',
    ],
    6 => [
        'nombre' => 'Teclado Mecánico ProKeys RGB',
        'descripcion' => 'Teclado mecánico con retroiluminación RGB, switches táctiles de alta respuesta, teclas programables, diseño ergonómico y función anti-ghosting.',
        'precio' => '€110',
        'imagen' => 'teclado.jpg',
    ],
    7 => [
        'nombre' => 'Ratón Gamer Precision X',
        'descripcion' => 'Ratón óptico de alta precisión con sensor ajustable hasta 16,000 DPI, 7 botones programables, diseño ergonómico y peso ajustable para sesiones prolongadas.',
        'precio' => '€64',
        'imagen' => 'raton.jpg',
    ],
    8 => [
        'nombre' => 'Auriculares SoundBlaze Wireless',
        'descripcion' => 'Auriculares inalámbricos con sonido envolvente, cancelación activa de ruido, micrófono integrado y batería de larga duración, ideales para gaming y multimedia.',
        'precio' => '€137',
        'imagen' => 'auriculares.jpg',
    ],
    9 => [
        'nombre' => 'Monitor UltraVision 27" 4K UHD',
        'descripcion' => 'Monitor de 27 pulgadas con resolución 4K UHD, panel IPS de alta fidelidad de color, frecuencia de actualización de 144Hz y tecnología FreeSync.',
        'precio' => '€320',
        'imagen' => 'monitor.jpg',
    ],
    10 => [
        'nombre' => 'Disco Duro Externo DataVault 2TB',
        'descripcion' => 'Unidad de almacenamiento externa de 2 TB, interfaz USB 3.1, diseño compacto y resistente, perfecta para backups, transferencias de archivos y almacenamiento adicional.',
        'precio' => '€91',
        'imagen' => 'disco_duro.jpg',
    ],
];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - DAMG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="productos.css">
</head>
<body>

    <nav class="navbar">
        <a href="productos.php" class="navbar-brand">DAMG</a>
        <div>
            <a href="index.html" class="nav-link">Volver al Inicio</a>
        </div>
    </nav>

    <section class="productos">
        <div class="container">
            <div class="row">
                <?php foreach ($productos as $id => $producto): ?>
                    <div class="col-md-4">
                        <div class="producto-card">
                            <img src="images/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" class="img-fluid">
                            <h3><?php echo $producto['nombre']; ?></h3>
                            <p><?php echo $producto['descripcion']; ?></p>
                            <h4><?php echo $producto['precio']; ?></h4>
                            <a href="productoConcreto.php?id=<?php echo $id; ?>" class="btn-neon">Ver Producto</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</body>
</html>