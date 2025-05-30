<!DOCTYPE html>
<html>
<head>
    <title>Dragon Ball Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card bg-secondary text-light shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <h1 class="text-center mb-4">Dragon Ball Quiz</h1>
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