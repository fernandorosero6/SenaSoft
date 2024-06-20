<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estanterias</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('RegistroLoginCss/RegistroLoginCss.css') }}" rel="stylesheet">

</head>
<body>

  <div class="card">
    <h2 class="text-center mb-4">Crear Libro {{ $estanteria->nombre}}</h2>
    <form action="/libro" method="POST">
      @csrf
      <div class="mb-3">
        <label for="biblioteca" class="form-label">Nombre</label>
        <input type="Text" id="email" name="nombre" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="autor_id" class="form-label">Selecciona el autor</label>
        <select name="autor_id" id="autor_id" class="form-control" required>
          <option value="">Selecciona un autor</option>
          @foreach ($autors as $autor)
            <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
          @endforeach
        </select>
      </div>

      <input type="hidden" name="estanteria_id" value="{{ $estanteria->id }}">

      <div class="mb-3">
        <label for="codigo" class="form-label">Fecha Publicacion</label>
        <input type="text" id="password" name="fechaPubli" class="form-control" required>
      </div>

      <form action="/libro.store" method="POST">
        @csrf
        <div class="mb-3">
          <button  type="submit" class="btn btn-primary btn-block">Crear libro</button>
        </div>
      </form>
        
    </form>
    <div class="text-center">
      <a href="/biblioteca" class="text-decoration-none">Ver bibliotecas</a>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ppxlZ7UKWWSXaS/wLib42uhzjt3j8jYjGKCQS91Xt658nLqW++9uYfAiq55yYQAX" crossorigin="anonymous"></script>
</body>
</html>
