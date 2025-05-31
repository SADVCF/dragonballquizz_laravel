<!DOCTYPE html>
<html>
<head>
    <title>Dragon Ball Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Importante para móviles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center px-2">
        <div class="card bg-secondary text-light shadow-lg p-4 w-100" style="max-width: 400px;">
            <h1 class="text-center mb-4 fs-2">Dragon Ball Quiz</h1>
            <form action="{{ route('start') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nickname" class="form-label">Tu apodo</label>
                    <input type="text" class="form-control" id="nickname" name="nickname" maxlength="255" required autofocus>
                </div>
                <button type="submit" class="btn btn-primary w-100">¡Comenzar!</button>
            </form>
        </div>
    </div>
</body>
</html>