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
        <h1 class="mb-4">Libros</h1>
        <div class="row">
            @foreach ($libros as $libro)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $libro->nombre }}</h5>
                            <a href="{{ route('libro.show', ['libro' => $libro->id]) }}" class="btn btn-primary">Ver libro</a>
                            <a href="{{ route('biblioteca.index')}}" class="btn btn-primary">volver</a>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    
    <div class="container mt-5">
        <h1 class="mb-4">Copia Libros</h1>
        <div class="row">
            @foreach ($copiaLibros as $copiaLibro)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $copiaLibro->nombre }}</h5>
                            <a href="{{ route('copiaLibro.show', ['copiaLibro' => $copiaLibro->id]) }}" class="btn btn-primary">ver libro</a>
                            <a href="{{ route('libro.index')}}" class="btn btn-primary">volver</a>
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
