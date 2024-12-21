

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Listado de Registros</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>

    <h1>Listado de Registros</h1>

    @if ($dams->isEmpty())
        <!-- Mensaje en caso de que no haya registros -->
        <p>No hay registros disponibles.</p>
    @else
        <!-- Tabla para listar los registros -->
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr>
                    <th style="border: 1px solid #ddd; padding: 8px;">ID</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Descripción</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Profesor</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Año</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Creado</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Promedio</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Nombre</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Curso</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Actualizado</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dams as $dam)
                <tr>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $dam->id }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $dam->description }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $dam->has_professor }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $dam->year }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $dam->created_at }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $dam->avg_mark }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $dam->name }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $dam->course }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $dam->updated_at }}</td>
                    <!-- Botón para editar y eliminar registro -->
                    <td style="border: 1px solid #ddd; padding: 8px;">
                        <a href="{{ route('dam.edit', $dam->id) }}" style="padding: 5px 10px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px; margin-right: 5px;">
                            Editar
                        </a>
                        <form action="{{ route('dam.destroy', $dam->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="padding: 5px 10px; background-color: #dc3545; color: white; border: none; border-radius: 5px; cursor: pointer;" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    @endif
      <!-- Botón para crear un nuevo registro -->
      <a href="{{ route('dam.create') }}" style="display: inline-block; padding: 10px 15px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px; margin-bottom: 20px;">
        Crear Nuevo Registro
    </a>
</body>
</html>


