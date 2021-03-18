<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        return view('pages/backoffice/menu/create', [
          'menu'        => new Menu,
          'required'    => 'required'
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
        
        return view('pages.backoffice.menu.info', ['menu' => $menu]);
    }

      public function show(Menu $menu)
    {
        return view('pages.backoffice.menu.info', ['menu' => $menu]);
    }

    public function edit(Menu $menu)
    {
        return view('pages.backoffice.menu.create', [
            'menu'      => $menu,
            'required'  => ''
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

        $menu = Menu::create([
            'titre'       => $request->titre,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'prix'        => $request->prix,
            // 'image'       => $request->file('image')->store('menus')
        ]);
        
    }

    public function destroy(Menu $menu)
    {
        //
    }
}
