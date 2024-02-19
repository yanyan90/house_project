<?php

namespace App\Http\Controllers;

use App\Models\Exterieur;
use App\Models\Interieur;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {

        return view("services", [
            "prduitsInterieurs" => Interieur::all(),
            "prduitsExterieurs" => Exterieur::all(),
        ]);
    }
}
