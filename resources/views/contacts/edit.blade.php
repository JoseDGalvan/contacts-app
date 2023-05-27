<!DOCTYPE html>
<html>
<head>
    <title>Editar Contacto</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
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
        <!-- Otros campos del formulario -->
    </div>
</form>
</body>
</html>
