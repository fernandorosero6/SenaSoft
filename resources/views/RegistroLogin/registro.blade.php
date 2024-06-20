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
        <h2 class="text-center mb-4">Crear una cuenta</h2>
        <form action="/registro" method="POST">
         
          <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" id="name" name="nombre" class="form-control" required>
          </div>
         
          <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" id="email" name="email" class="form-control" required>
          </div>
         
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" id="password" name="contraseña" class="form-control" required>
          </div>
          
          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
            <input type="password" id="password_confirmation" name="confirmacionContraseña" class="form-control" required>
          </div>
          
          <form action="registro.store" method="POST">
            @csrf
            <div class="mb-3">
              <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
            </div>
          </form>
            
        </form>

        <div class="text-center">
          <a href="/login" class="text-decoration-none">¿Ya tienes una cuenta? Inicia sesión aquí</a>
        </div>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html>
