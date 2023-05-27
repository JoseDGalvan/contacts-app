<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class UpdateController extends Controller
{

    public function update(Request $request, Contact $contact)
    {
        $validatedData = $request->validate([
            'identification' => 'required|string|max:20',
            'names' => 'required|string|max:40',
            'last_names' => 'required|string|max:40',
            'date_birth' => 'required|date',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        $contact->update($validatedData);

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully');
    }
}
