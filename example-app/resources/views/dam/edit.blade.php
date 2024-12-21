<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <h1>Editar Registro</h1>
    <form action="{{ route('dam.update', $dam->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="description">Descripción:</label><br>
        <input type="text" id="description" name="description" value="{{ $dam->description }}" required><br><br>

        <label for="has_professor">Profesor (1 = Sí, 0 = No):</label><br>
        <input type="number" id="has_professor" name="has_professor" value="{{ $dam->has_professor }}" required><br><br>

        <label for="year">Año:</label><br>
        <input type="number" id="year" name="year" value="{{ $dam->year }}" required><br><br>

        <label for="avg_mark">Promedio:</label><br>
        <input type="number" id="avg_mark" name="avg_mark" value="{{ $dam->avg_mark }}" step="0.01"><br><br>

        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" value="{{ $dam->name }}" required><br><br>

        <label for="course">Curso:</label><br>
        <input type="text" id="course" name="course" value="{{ $dam->course }}" required><br><br>

        <button type="submit" style="padding: 10px 15px; background-color: #007BFF; color: white; border: none; border-radius: 5px;">
            Guardar Cambios
        </button>
    </form>
</body>
</html>
