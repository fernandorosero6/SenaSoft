<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login con Bootstrap</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('RegistroLoginCss/RegistroLoginCss.css') }}" rel="stylesheet">

  
</head>
<body>
  <div class="card">
    <h2 class="text-center mb-4">Iniciar Sesión</h2>
    <form action="/login" method="POST">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" id="email" name="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="cpmtraseña" class="form-label">Contraseña</label>
        <input type="password" id="password" name="contraseña" class="form-control" required>
      </div>
      <form action="/login.store" href="/biblioteca" method="POST">
        @csrf
        <div class="mb-3">
          <button  type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
        </div>
      </form>
        
    </form>
    <div class="text-center">
      <a href="/forgot-password" class="text-decoration-none">¿Olvidaste tu contraseña?</a><br>
      <a href="/registro" class="text-decoration-none">Crear una cuenta</a>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html>
