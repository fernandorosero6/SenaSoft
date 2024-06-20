<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Copia de Libro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('RegistroLoginCss/RegistroLoginCss.css') }}" rel="stylesheet">
</head>
<body>
    <div class="card">
        <h2 class="text-center mb-4">Crear Copia de Libro {{$estanteria->nombre}}</h2>
        <form action="{{ route('copiaLibro.store') }}" method="POST">
            @csrf
            <input type="hidden" name="estanteria_id" value="{{ $estanteria->id }}">

            <div class="mb-3">
                <label for="numero_copia" class="form-label">Nombre del libro original</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="numero_copia" class="form-label">Número de Copia</label>
                <input type="text" id="numero_copia" name="numeroCopia" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" id="autor" name="autor" class="form-control" required>
            </div>
            <form action="/copiaLibro.store" method="POST">
                <button type="submit" class="btn btn-primary btn-block">Crear Copia</button>
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
