<?php

namespace App\Http\Controllers;

use App\Mail\FormSoumission;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view("contact", []);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "nom" => "required",
            "email" => "required|email",
            "message" => "required"

        ], [
            "nom.required" => "Le champs Nom est requis pour soumettre le formulaire",
            "email.required" => "Le courriel est requis",
            "email.email" => "Le courriel doit avoir un format valide",
            "message.required" => "Un message est oubligatoire pour soumettre le formulaire"
        ]);

        // Envoyer le courriel
        Mail::to('yanik_lemieux@hotmail.com')->send(new FormSoumission($request->all()));

        // $infolettreSubscriber = new Contact();
        // $infolettreSubscriber->email = $validated["email"];
        // $infolettreSubscriber->save();

        return redirect()->route('contact')
            ->with('success', "Message envoyé !");
    }
}
