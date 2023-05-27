<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        // Redirigir a la página de lista de contactos u otra página apropiada
        return redirect()->route('contacts.index')->with('success', 'Contacto eliminado exitosamente.');
    }

}
