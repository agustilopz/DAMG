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
('Laptop Pro UltraTech', 1053, 'Portátil de 15.6\" Full HD con procesador Intel Core i7 de 12ª generación, 16GB de RAM, 512GB SSD, tarjeta gráfica NVIDIA GTX 1650 y Windows 11', 'https://cdn.grupoelcorteingles.es/SGFM/dctm/MEDIA03/202310/19/00115215594720____1__1200x1200.jpg'),
('Smartphone Quantum X', 730, 'Smartphone con pantalla 6.5\", doble SIM, 128GB de almacenamiento interno y cámara principal de 48MP', 'https://images-cdn.ubuy.co.in/633a87dfd6b53a07f76e0444-ip12-pro-max-unlocked-smartphone-for.jpg'),
('Placa Base TechMaster Pro', 230, 'Placa base con socket LGA1700 compatible con Intel de 10ª/11ª/12ª generación, 4 ranuras para RAM, 2 slots M.2 y una velocidad de hasta 3200 MHz', 'https://img.pccomponentes.com/pcblog/1736809200000/que-es-una-placa-base-tipos-instalar-2.jpg'),
('Memoria Ram SpeedMax 16GB DDR4', 83, 'Módulo de 16 GB DDR4 3200 MHz, latencia CL16 y alta compatibilidad para gaming', 'https://www.pcmontajes.com/85682/modulo-memoria-ram-ddr4-16gb-2x8gb-3200mhz-kingston-fury-be.jpg'),
('Tarjeta Gráfica NeoGaming RTX 3060', 365, 'Tarjeta gráfica de 6 GB GDDR6, tecnología de ray tracing y sistema de refrigeración avanzado con 2 ventiladores para un rendimiento óptimo en juegos', 'https://images.nvidia.com/aem-dam/Solutions/geforce/ampere/rtx-3060-ti/geforce-rtx-3060-ti-product-gallery-full-screen-3840-3-bl.jpg'),
('Teclado Mecánico ProKeys RGB', 110, 'Teclado mecánico con retroiluminación RGB, switches táctiles de alta respuesta, teclas multimedia y anti-ghosting', 'https://www.nerdytec.com/wp-content/uploads/2023/10/04_nerdytec_CYKEY_ISO_RGB.jpg'),
('Ratón Gamer Precision X', 45, 'Ratón óptico de alta precisión con sensor de 16.000 DPI, 7 botones programables, diseño ergonómico y peso ajustable', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_97028894?x=536&y=402&format=jpg&quality=80&sp=yes&strip=yes&trim&ex=536&ey=402&align=center&resizesource&unsharp=1.5x1+0.7+0.02&cox=0&coy=0&cdx=536&cdy=402'),
('Auriculares SoundBlaze Wireless', 137, 'Auriculares inalámbricos con sonido envolvente, cancelación activa de ruido y batería de larga duración, ideales para gaming y multimedia', 'https://canarias.worten.es/i/2f387c2a800f9470a7769b249e192986c276e77e'),
('Monitor UltraVision 27\" 4K UHD', 309, 'Monitor de 27 pulgadas con 4K UHD, panel IPS de alta definición y 144Hz de refresco con tecnología FreeSync', 'https://image.benq.com/is/image/benqco/gaming-product-kv-m?$ResponsivePreset$'),
('Disco Duro Externo DataVault 2TB', 91, 'Unidad de almacenamiento externo de 2 TB, interfaz USB 3.2, diseño compacto y resistente para backups, transferencia de archivos y almacenamiento adicional', 'https://cdnx.jumpseller.com/easytech-store/image/24140141/resize/610/610?1652503413')
");

$db->close();
?>