<?php
session_start();

// 1) Validar campos obligatorios
if (
    !isset($_POST['us_nom']) ||
    !isset($_POST['us_contrasenya']) ||
    !isset($_POST['us_contrasenya2']) ||
    $_POST['us_nom'] === '' ||
    $_POST['us_contrasenya'] === '' ||
    $_POST['us_contrasenya2'] === ''
) {
    $_SESSION['error'] = "Tots els camps són obligatoris";
    header("Location: registro.php");
    exit();
}

$us_nom  = trim($_POST['us_nom']);
$pass1   = $_POST['us_contrasenya'];
$pass2   = $_POST['us_contrasenya2'];

// 2) Comprobar contraseñas coincidentes
if ($pass1 !== $pass2) {
    $_SESSION['error'] = "Les contrasenyes no coincideixen";
    header("Location: registro.php");
    exit();
}

// 3) Conectar a la BD
$db = new SQLite3('../database/damg.db');

// 4) Preparar e insertar
$stmt = $db->prepare("
    INSERT INTO usuaris (us_nom, us_contrasenya)
    VALUES (:us_nom, :us_contrasenya)
");

$stmt->bindValue(':us_nom',$us_nom,  SQLITE3_TEXT);
$stmt->bindValue(':us_contrasenya',$pass1,   SQLITE3_TEXT);

if ($stmt->execute()) {
    // Éxito
    $_SESSION['success'] = "Registre complert. Pots iniciar sessió.";
    header("Location: ../index.php");
    exit();
} else {
    // Fallo genérico
    $_SESSION['error'] = "Error al registrar l'usuari. Torna-ho a provar.";
    header("Location: registro.php");
    exit();
}
?>
