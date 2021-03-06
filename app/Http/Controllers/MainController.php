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
            'commandes' => Auth::user() ? Commande::where('user_id', Auth::user()->id)->get() : Commande::all()
        ]);
    }

    public function ajCommande(Menu $menu) {
        Commande::create([
            'menu_id' => $menu->id,
            'user_id' => Auth::user()->id
        ]);
        return redirect()->route('smaker')->with('statut', 'Votre commande a bien été passé avec succes !');
    }

    public function delCommande(Commande $commande){
        $commande->delete();
        return redirect()->route('smaker')->with('statut', 'La commande <b>'.$commande->menu->titre.'</b> a été annulée !');
    }

}
