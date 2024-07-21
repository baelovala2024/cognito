<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Contenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Ingresar Contenido</h1>
    <form action="{{ route('content.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="type" class="form-label">Tipo de Contenido</label>
            <select class="form-select" id="type" name="type" required>
                <option value="marketing">Marketing</option>
                <option value="discurso">Discurso</option>
                <option value="presentacion">Presentación</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Mensaje, Discurso o Presentación</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Subir Imagen</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Subir</button>
    </form>
</div>
</body>
</html>
