<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'email' => 'bail|required|email',
            'message' => 'bail|required|max:500',
        ]);

        // Enregistrer les données dans la base de données
        $contact = new Contact;
        $contact->email = $validatedData['email'];
        $contact->message = $validatedData['message'];
        $contact->save();  // Sauvegarder dans la base de données

        // Retourner une vue de confirmation
        return view('confirm');
    }
}
