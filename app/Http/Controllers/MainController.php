<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function accueil()
    {
        return  view('pages.frontoffice.accueil');
    }

    public function smaker()
    {
        return  view('pages.frontoffice.smaker', [
            'menus'     => Menu::paginate(10),
            'commandes' => Commande::where('user_id', Auth::user()->id)->get()
        ]);
    }

    public function ajCommande(Menu $menu) {
        Commande::create([
            'menu_id' => $menu->id,
            'user_id' => Auth::user()->id
        ]);
        return redirect()->route('smaker')->with('statut', 'Votre commande a bien été passé avec succes !');
    }
}
