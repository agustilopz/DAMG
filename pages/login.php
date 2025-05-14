<!DOCTYPE html>
<html lang="es">
<?php include("../includes/head.html"); ?>
<link rel="stylesheet" href="../css/login.css">
<body class="login-page">

  <div class="login-container">
    <div class="logo">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cpu" viewBox="0 0 16 16">
        <path d="M5 0a.5.5 0 0 1 .5.5V1H6a.5.5 0 0 1 0 1h-.5v.5a.5.5 0 0 1-1 0V2H4a.5.5 0 0 1 0-1h.5V.5A.5.5 0 0 1 5 0zm6 0a.5.5 0 0 1 .5.5V1H12a.5.5 0 0 1 0 1h-.5v.5a.5.5 0 0 1-1 0V2H10a.5.5 0 0 1 0-1h.5V.5A.5.5 0 0 1 11 0zM5 14a.5.5 0 0 1 .5.5V15H6a.5.5 0 0 1 0 1h-.5v.5a.5.5 0 0 1-1 0V16H4a.5.5 0 0 1 0-1h.5v-.5A.5.5 0 0 1 5 14zm6 0a.5.5 0 0 1 .5.5V15H12a.5.5 0 0 1 0 1h-.5v.5a.5.5 0 0 1-1 0V16H10a.5.5 0 0 1 0-1h.5v-.5a.5.5 0 0 1 .5-.5zM3 5a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5zm2-1a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5z"/>
      </svg>
    </div>
    <h2>Iniciar Sesión</h2>
    <form action="login.proc.php" method="post">
      <div class="mb-3">
        <input type="text" class="form-control" name="us_nom" placeholder="Usuario" required />
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" name="us_contrasenya" placeholder="Contraseña" required />
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-login">Entrar</button>
      </div>
      <div class="form-text text-center mt-3">
        ¿No tienes cuenta? <a href="registro.php">Regístrate</a>
      </div>
    </form>
  </div>

</body>
</html>