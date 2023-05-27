<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ValidateController extends Controller
{

        public function store(Request $request)
    {
        $validatedData = $request->validate([
            'identification' => 'required|string|max:20',
            'names' => 'nullable|string|max:40',
            'last_names' => 'required|string|max:40',
            'date_birth' => 'required|date',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);


        Contact::create($validatedData);

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully');
    }

}
