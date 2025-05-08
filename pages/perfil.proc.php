<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION["us_nom"])) {
    header("Location: login.php");
    exit();
}

// Conectar con la base de datos
$db = new SQLite3('../database/damg.db');

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!empty($_POST['password'])) {
        $contrasenya = $_POST['password'];
        $nombre = $_SESSION["us_nom"];

        // Preparar y ejecutar el update
        $stmt = $db->prepare("UPDATE usuaris SET us_contrasenya = :contrasenya WHERE us_nom = :nombre");
        $stmt->bindValue(':contrasenya', $contrasenya, SQLITE3_TEXT);
        $stmt->bindValue(':nombre', $nombre, SQLITE3_TEXT);

        if ($stmt->execute()) {
            echo "<script>alert('Contraseña actualizada correctamente.'); window.location.href = 'perfil.php';</script>";
        } else {
            echo "<script>alert('Error al actualizar la contraseña.'); window.location.href = 'perfil.php';</script>";
        }
        
        // No es necesario cerrar en SQLite3, esta línea puede causar errores
        // $stmt->close();
    } else {
        echo "<script>alert('La contraseña no puede estar vacía.'); window.location.href = 'perfil.php';</script>";
    }
} else {
    // Si se accede directamente sin POST, redirigir
    header("Location: perfil.php");
    exit();
}
?>