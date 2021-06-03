<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
    }

    public function create()
    {
        return view('pages/backoffice/menu/create', [
          'menu'        => new Menu,
          'required'    => 'required',
          'titrePage'   => 'Nouveau Menu',
          'descPage'    => 'Ajouter un nouveau menu commandable depuis la plateforme c\'est simple et pas compliqué',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre'       => 'required|string|min:2',
            'description' => 'required|string|min:2',
            'ingredients' => 'required|string|min:2',
            'prix'        => 'required|string|min:2',
            'image'       => 'required|mimes:jpg,jpeg,gif,png'
        ]);

        $menu = Menu::create([
            'titre'       => $request->titre,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'prix'        => $request->prix,
            'image'       => $request->file('image')->store('menus')
        ]);
        
        return redirect()->route('menu.show', ['menu' => $menu])->with('statut', 'Votre enregistrement a bien été pris en compte !');
    }

      public function show(Menu $menu)
    {
        return view('pages.backoffice.menu.info', ['menu' => $menu]);
    }

    public function edit(Menu $menu)
    {
        return view('pages.backoffice.menu.create', [
            'menu'          => $menu,
            'required'      => '',
            'titrePage'     => $menu->titre,
           'descPage'       => 'Veuillez mettre a jour les informations de ce enregistrement',
        ]);
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'titre'       => 'required|string|min:2',
            'description' => 'required|string|min:2',
            'ingredients' => 'required|string|min:2',
            'prix'        => 'required|string|min:2',
        ]);
        
        $menu->titre        = $request->titre;
        $menu->description  = $request->description;
        $menu->ingredients  = $request->ingredients;
        $menu->prix         = $request->prix;
        $menu->image        = $request->hasFile('image') ? $request->file('image')->store('menus') : $menu->image ;
        $menu->save();
        return redirect()->route('menu.show', ['menu' => $menu])->with('statut', 'Votre modification a été bien prise en compte !');
    }

    public function destroy(Menu $menu)
    {
        if (Commande::where('menu_id', $menu->id)->get()->count() > 0) {
            return redirect()->route('menu.show', $menu)->with('statut', 'Impossible de supprimer ce menu ! Des commandes déja actives y    dépendent !');    
        } else {
            $menu->delete();
            return redirect()->route('dashboard')->with('statut', 'Le menu a été supprimé avec succès !');    
        }
    }
}
