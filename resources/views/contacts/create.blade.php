<!DOCTYPE html>
<html>
<head>
    <title>Crear Contacto</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<h1>Crear Contacto</h1>

<form action="{{ route('contacts.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="identification">Identificación:</label>
        <input type="text" id="identification" name="identification" required>
    </div>

    <div class="form-group">
        <label for="names">Nombres:</label>
        <input type="text" id="names" name="names" required>
    </div>

    <div class="form-group">
        <label for="last_names">Apellidos:</label>
        <input type="text" id="last_names" name="last_names" required>
    </div>

    <div class="form-group">
        <label for="date_birth">Fecha de Nacimiento:</label>
        <input type="date" id="date_birth" name="date_birth" required>
    </div>

    <div class="form-group">
        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" required>
    </div>

    <div class="form-group">
        <label for="address">Dirección:</label>
        <input type="text" id="address" name="address" required>
    </div>

    <div class="form-group">
        <button type="submit">Guardar</button>
    </div>
</form>
</body>
</html>
