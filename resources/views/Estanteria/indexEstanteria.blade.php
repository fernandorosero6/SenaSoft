<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bibliotecas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <x-plantilla></x-plantilla>

    <div class="container mt-5">
        <h1 class="mb-4">Estanterías de {{$biblioteca->nombre}} </h1>
        <div class="row">
            @foreach ($estanterias as $estanteria)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $estanteria->nombre }}</h5>
                            <a href="{{ route('libro.create', ['estanteria' => $estanteria->id]) }}" class="btn btn-primary">Crear libro</a>
                            <a href="{{ route('copiaLibro.create', ['estanteria' => $estanteria->id]) }}" class="btn btn-primary">Crear copia</a>
                            <a href="{{ route('libro.index', ['estanteria' => $estanteria->id]) }}" class="btn btn-primary">Ver libros</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html>
