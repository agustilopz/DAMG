<?php 
$db = new SQLite3('damg.db');

/*
// Si quisieras limpiar tablas antes de crearlas, descomenta:
// $db->exec("DROP TABLE IF EXISTS usuaris;");
// $db->exec("DROP TABLE IF EXISTS productes;");
*/

// Crear la tabla usuaris si no existe
$db->exec("CREATE TABLE IF NOT EXISTS 'usuaris' (
    'us_id' INTEGER PRIMARY KEY AUTOINCREMENT,
    'us_nom' TEXT,
    'us_contrasenya' TEXT
);");

// Insert de ejemplo en usuaris
$db->exec("INSERT INTO usuaris (us_nom, us_contrasenya) VALUES 
('Damg', 'damg')
");

// Crear la tabla productes si no existe
$db->exec("CREATE TABLE IF NOT EXISTS 'productes' (
    prod_id INTEGER PRIMARY KEY AUTOINCREMENT,
    prod_nom TEXT NOT NULL,
    prod_preu REAL NOT NULL,
    prod_descripcio TEXT NOT NULL,
    prod_imatge TEXT
);");

// INSERTS para productes
$db->exec("
INSERT INTO productes (prod_nom, prod_preu, prod_descripcio, prod_imatge) VALUES
('Laptop Pro UltraTech', 1053, 'Portátil de 15.6\" Full HD con procesador Intel Core i7 de 12ª generación, 16GB de RAM, 512GB SSD, tarjeta gráfica NVIDIA GTX 1650 y Windows 11', 'https://thumb.pccomponentes.com/w-53-50-33/articles/1085311-1663-lenovo-thinkpad-e16-gen-2-intel-core-i7-1355u16gb-512gb-ssd-16.jpg'),
('Smartphone Quantum X', 730, 'Smartphone con pantalla 6.5\", doble SIM, 128GB de almacenamiento interno y cámara principal de 48MP', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSqIGkvYTFu6MXIzlMqNImRV-StxZLyMg4xrw&usqp=CAU'),
('Placa Base TechMaster Pro', 230, 'Placa base con socket LGA1700 compatible con Intel de 10ª/11ª/12ª generación, 4 ranuras para RAM, 2 slots M.2 y una velocidad de hasta 3200 MHz', 'https://thumb.pccomponentes.com/w-53-50-33/articles/1744830/1582-asus-prime-b760m-a-d4.jpg'),
('Memoria Ram SpeedMax 16GB DDR4', 83, 'Módulo de 16 GB DDR4 3200 MHz, latencia CL16 y alta compatibilidad para gaming', 'https://thumb.pccomponentes.com/w-53-50-33/articles/1072875/452-kingston-fury-beast-ddr4-16gb-3200mhz-cl16.jpg'),
('Tarjeta Gráfica NeoGaming RTX 3060', 365, 'Tarjeta gráfica de 6 GB GDDR6, tecnología de ray tracing y sistema de refrigeración avanzado con 2 ventiladores para un rendimiento óptimo en juegos', 'https://thumb.pccomponentes.com/w-53-50-33/articles/4343/gigabyte-geforce-rtx-3060-ga-mv-oc-12gb-gddr6.jpg'),
('Teclado Mecánico ProKeys RGB', 110, 'Teclado mecánico con retroiluminación RGB, switches táctiles de alta respuesta, teclas multimedia y anti-ghosting', 'https://www.nerdytec.com/webpages/2023/10/03_nerdytec_CYKEY_TSO_RGB_1.png'),
('Ratón Gamer Precision X', 45, 'Ratón óptico de alta precisión con sensor de 16.000 DPI, 7 botones programables, diseño ergonómico y peso ajustable', 'https://m.media-amazon.com/images/I/51NDmYklL+L._AC_UF894,1000_QL80_.jpg'),
('Auriculares SoundBlaze Wireless', 137, 'Auriculares inalámbricos con sonido envolvente, cancelación activa de ruido y batería de larga duración, ideales para gaming y multimedia', 'https://canarias.worten.es/img/campaigns/22_01/87/1ac42e6fc05e21 7db1c0b52b19.jpg'),
('Monitor UltraVision 27\" 4K UHD', 309, 'Monitor de 27 pulgadas con 4K UHD, panel IPS de alta definición y 144Hz de refresco con tecnología FreeSync', 'https://images.visunexport.com/imageE/5038/d7Original2/1000x627/2/monitor-lg-ultra-4k-27-inch.jpg'),
('Disco Duro Externo DataVault 2TB', 91, 'Unidad de almacenamiento externo de 2 TB, interfaz USB 3.2, diseño compacto y resistente para backups, transferencia de archivos y almacenamiento adicional', 'https://thumb.pccomponentes.com/w-53-50-33/articles/1512155/toshiba-25-usb-3-0-1tb-3.jpg')
");

$db->close();
?>
