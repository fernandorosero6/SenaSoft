<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Estantería</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('RegistroLoginCss/RegistroLoginCss.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="card mt-5">
      <h2 class="card-header text-center">Crear estantería</h2>
      <div class="card-body">
        <form action="{{ route('estanteria.store') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la Estantería</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="tema_id" class="form-label">Selecciona el Tema</label>
            <select name="tema_id" id="tema_id" class="form-control" required>
              <option value="">Selecciona un tema</option>
              @foreach ($temas as $tema)
                <option value="{{ $tema->id }}">{{ $tema->nombre }}</option>
              @endforeach
            </select>
          </div>

          <input type="hidden" name="biblioteca_id" value="{{ $biblioteca->id }}">

          <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" id="codigo" name="codigo" class="form-control" required>
          </div>

          <button type="submit" class="btn btn-primary btn-block">Crear Estantería</button>
        </form>
      </div>
      <div class="card-footer text-center mt-3">
        <a href="/biblioteca" class="text-decoration-none">Volver</a>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html>
