<!DOCTYPE html>
<html>
<head>
    <title>Contactos</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<h1>Contactos</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Identificación</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Fecha de Nacimiento</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($contactos as $contacto)
        <tr>
            <td>{{ $contacto->id }}</td>
            <td>{{ $contacto->identification }}</td>
            <td>{{ $contacto->names }}</td>
            <td>{{ $contacto->last_names }}</td>
            <td>{{ $contacto->date_birth }}</td>
            <td>{{ $contacto->phone }}</td>
            <td>{{ $contacto->address }}</td>
            <td>
                <a href="{{ route('contacts.edit', $contacto->id) }}">Editar</a>
                <form action="{{ route('contacts.destroy', $contacto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{ route('contacts.create') }}">Crear Contacto</a>
</body>
</html>



