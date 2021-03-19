<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function accueil()
    {
        return  view('pages.frontoffice.accueil');
    }

    public function smaker()
    {
        return  view('pages.frontoffice.smaker');
    }
}
