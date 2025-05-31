<!DOCTYPE html>
<html>
<head>
    <title>Resultado - Dragon Ball Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Importante para móviles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-secondary text-light shadow-lg mb-4">
                    <div class="card-body text-center">
                        <h2 class="mb-3">¡Quiz finalizado!</h2>
                        <h4 class="mb-4">Tu puntuación: <span class="text-warning">{{ $score }}</span></h4>
                        <a href="{{ route('index') }}" class="btn btn-primary w-100">Volver al inicio</a>
                    </div>
                </div>
                <div class="card bg-dark text-light shadow">
                    <div class="card-header text-center">
                        <h5 class="mb-0">Ranking Top 10</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach($ranking as $i => $result)
                            <li class="list-group-item bg-dark text-light d-flex justify-content-between align-items-center flex-wrap">
                                <span>
                                    <strong>#{{ $i+1 }}</strong>
                                    {{ $result->user->nickname }}
                                </span>
                                <span class="badge bg-warning text-dark fs-6 mt-2 mt-md-0">{{ $result->score }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>