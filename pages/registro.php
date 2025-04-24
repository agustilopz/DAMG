<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro - DAMG</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="estilo.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background: linear-gradient(135deg, #0e0e0e 0%, #1a1a1a 100%);
      font-family: 'Orbitron', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <div class="logo">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cpu" viewBox="0 0 16 16">
        <path d="M5 0a.5.5 0 0 1 .5.5V1H6a.5.5 0 0 1 0 1h-.5v.5a.5.5 0 0 1-1 0V2H4a.5.5 0 0 1 0-1h.5V.5A.5.5 0 0 1 5 0zm6 0a.5.5 0 0 1 .5.5V1H12a.5.5 0 0 1 0 1h-.5v.5a.5.5 0 0 1-1 0V2H10a.5.5 0 0 1 0-1h.5V.5A.5.5 0 0 1 11 0zM5 14a.5.5 0 0 1 .5.5V15H6a.5.5 0 0 1 0 1h-.5v.5a.5.5 0 0 1-1 0V16H4a.5.5 0 0 1 0-1h.5v-.5A.5.5 0 0 1 5 14zm6 0a.5.5 0 0 1 .5.5V15H12a.5.5 0 0 1 0 1h-.5v.5a.5.5 0 0 1-1 0V16H10a.5.5 0 0 1 0-1h.5v-.5a.5.5 0 0 1 .5-.5zM3 5a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5zm2-1a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5z"/>
      </svg>
    </div>
    <h2>Registrarse</h2>
    <form action="registro.proc.php" method="post">
      <div class="mb-3">
        <input type="text" class="form-control" name="us_nom" placeholder="Nombre completo" required />
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" name="us_contrasenya" placeholder="Contraseña" required />
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" name="us_contrasenya2" placeholder="Confirmar Contraseña" required />
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-login">Registrarse</button>
      </div>
      <div class="form-text text-center mt-3">
        ¿Ya tienes cuenta? <a href="login.php">Inicia Sesión</a>
      </div>
    </form>
  </div>

</body>
</html>
