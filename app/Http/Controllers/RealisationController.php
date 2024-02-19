<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;

class RealisationController extends Controller
{

    // recupere tout les image des realisations
    public function index()
    {

        return view("realisations.index", [
            "realisations" => Realisation::all()
        ]);
    }



    // Affiche l'information d'une réalisation
    public function show($id)
    {
        $realisation = Realisation::findOrFail($id);
        // // Chemin du fichier JSON dans le dossier public
        $jsonFilePath = public_path('fichier_json/fret_des_bois.json');

        // Lire le contenu du fichier JSON
        $jsonContent = file_get_contents($jsonFilePath);

        // Convertir le contenu JSON en tableau PHP
        $jsonArray = json_decode($jsonContent, true);

        // // dd($jsonArray);

        return view("realisations.show", [
            "realisation" => $realisation,
            "realisations" => Realisation::all(),
            "jsonArray" => $jsonArray,
        ]);
    }
}
