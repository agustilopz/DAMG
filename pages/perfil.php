<!DOCTYPE html>
<html lang="es">
<head>
  <?php include("../includes/head.html"); ?>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/perfil.css">
</head>
<body>
    <?php include("../includes/nav.php") ?>
    <?php
      session_start();
    ?>
  <div class="sidebar">
    <div class="profile-pic">
      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        <path fill-rule="evenodd" d="M8 9a5 5 0 0 0-5 5v.5h10V14a5 5 0 0 0-5-5z"/>
      </svg>
    </div>
    <h4><?= htmlspecialchars($_SESSION['us_nom']) ?></h4>
    <a href="#" class="active">Mi perfil</a>
    <a href="logout.proc.php">Cerrar sesión</a>
  </div>

  <div class="main">
    <h2>Mi perfil</h2>
    <div class="card-profile">
      <form>
        <div class="row">
          <div class="col-md-6">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" class="form-control" value="<?= htmlspecialchars($_SESSION['us_nom']) ?>" placeholder="Tu nombre">
          </div>
          <div class="col-md-6">
            <label for="password">Cambiar Contraseña</label>
            <input type="password" id="password" class="form-control" placeholder="********">
          </div>
        </div>
        <button type="submit" class="btn btn-save">Guardar cambios</button>
      </form>
    </div>
  </div>

</body>
</html>