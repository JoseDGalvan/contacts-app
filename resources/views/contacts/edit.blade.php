<!DOCTYPE html>
<html>
<head>
    <title>Editar Contacto</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="container">
    <h1>Editar Contacto</h1>
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="identification">Identificación:</label>
            <input type="text" id="identification" name="identification" value="{{ $contact->identification }}" required>
        </div>

        <div class="form-group">
            <label for="names">Nombres:</label>
            <input type="text" id="names" name="names" value="{{ $contact->names }}" required>
        </div>

        <div class="form-group">
            <label for="last_names">Apellidos:</label>
            <input type="text" id="last_names" name="last_names" value="{{ $contact->last_names }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Teléfono:</label>
            <input type="text" id="phone" name="phone" value="{{ $contact->phone }}" required>
        </div>

        <div class="button-container">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </form>
</div>
</body>
</html>














