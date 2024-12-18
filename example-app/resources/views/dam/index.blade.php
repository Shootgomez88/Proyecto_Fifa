

 <!DOCTYPE html>
 <html>
 <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>INDEX</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
 </head>
 <body>
 <a href="{{ route('dam.create') }}" style="display: inline-block; padding: 10px 15px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px; margin-bottom: 10px;">
    Volver al Formulario
</a>
    <h1>INDEX</h1>
    <table>
        <tr>
            <th>id</th>
            <th>description</th>
            <th>has_professor</th>
            <th>year</th>
            <th>created_at</th>
            <th>avg_mark</th>
            <th>name</th>
            <th>course</th>
            <th>updated_at</th>
        </tr>
        @foreach ($dams as $dam)
        <tr>
            <td>{{$dam->id}}</td>
            <td>{{$dam->description}}</td>
            <td>{{$dam->has_professor}}</td>
            <td>{{$dam->year}}</td>
            <td>{{$dam->created_at}}</td>
            <td>{{$dam->avg_mark}}</td>
            <td>{{$dam->name}}</td>
            <td>{{$dam->course}}</td>
            <td>{{$dam->updated_at}}</td>
        </tr>
        @endforeach
    </table>
    
 </body>
 </html>
