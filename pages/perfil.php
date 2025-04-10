<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil - DAMG</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/perfil.css">
</head>
<body>
    <?php include("../includes/nav.html") ?>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="profile-pic">
      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        <path fill-rule="evenodd" d="M8 9a5 5 0 0 0-5 5v.5h10V14a5 5 0 0 0-5-5z"/>
      </svg>
    </div>
    <h4>Nombre usuario</h4>
    <a href="#" class="active">Mi perfil</a>
    <a href="#">Ajustes</a>
    <a href="#">Privacidad</a>
    <a href="#">Notificaciones</a>
    <a href="#">Cerrar sesión</a>
  </div>

  <!-- Main content -->
  <div class="main">
    <h2>Mi perfil</h2>
    <div class="card-profile">
      <form>
        <div class="row">
          <div class="col-md-6">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" class="form-control" placeholder="Tu nombre">
          </div>
          <div class="col-md-6">
            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" class="form-control" placeholder="Tus apellidos">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" class="form-control" placeholder="correo@ejemplo.com">
          </div>
          <div class="col-md-6">
            <label for="password">Contraseña</label>
            <input type="password" id="password" class="form-control" placeholder="********">
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <label for="about">Sobre mí</label>
            <textarea id="about" class="form-control" rows="4" placeholder="Cuéntanos algo sobre ti..."></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-save">Guardar cambios</button>
      </form>
    </div>
  </div>

</body>
</html>