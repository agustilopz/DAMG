<?php

// Arranca la sesión
session_start();

// Conectar con la base de datos de usuarios
$db = new SQLite3('database/damg.db');

// Si ya hay usuario logado, redirigir
if (isset($_SESSION['us_nom'])) {
    $_SESSION['error'] = "Usuari ja logat";
    header("Location: ../index.php");
    exit();
}

// Comprobar que nos llegan us_nom y us_contrasenya por POST
if (!empty($_POST['us_nom']) && !empty($_POST['us_contrasenya'])) {
    $us_nom        = trim($_POST['us_nom']);
    $us_contrasenya = trim($_POST['us_contrasenya']); 

    // Preparar la consulta
    $stmt = $db->prepare("
        SELECT us_id 
        FROM usuaris 
        WHERE us_nom = :us_nom 
          AND us_contrasenya = :us_contrasenya
    ");
    $stmt->bindValue(':us_nom',        $us_nom,         SQLITE3_TEXT);
    $stmt->bindValue(':us_contrasenya',$us_contrasenya, SQLITE3_TEXT);

    // Ejecutar y obtener resultado
    $result = $stmt->execute();
    $usuari = $result->fetchArray(SQLITE3_ASSOC);

    // Si no coincide, error
    if (!$usuari) {
        $_SESSION['error'] = "Usuari i/o paraula clau incorrecte";
        header("Location: login.php");
        exit();
    }

    // Login correcto: regenerar id de sesión y guardar nombre
    session_regenerate_id(true);
    $_SESSION['us_nom'] = $us_nom;
    header("Location: ../index.php");
    exit();
}

// Si faltan datos, redirigimos también
$_SESSION['error'] = "Falten credencials";
header("Location: login.php");
exit();
?>
