<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

}
