<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tema</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('RegistroLoginCss/RegistroLoginCss.css') }}" rel="stylesheet">

  
</head>
<body>
  <div class="card">
    <h2 class="text-center mb-4">Crear tema nuevo</h2>
    <form action="/tema" method="POST">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre tema</label>
        <input type="Text" id="email" name="nombre" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="codigo" class="form-label">Codigo color hexadecimal</label>
        <input type="text" id="password" name="color" class="form-control">
      </div>

      <form action="/tema.store" method="POST">
        @csrf
        <div class="mb-3">
          <button  type="submit" class="btn btn-primary btn-block">Crear tema</button>
        </div>
      </form>
        
    </form>
    <div class="text-center">
      <a href="/biblioteca" class="text-decoration-none">volver</a>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html>
