<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contactos = Contact::all();

        return view('contacts.index', compact('contactos'));
    }
}
