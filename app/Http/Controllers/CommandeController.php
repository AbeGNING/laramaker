<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use App\Notifications\TestMail;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
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
        $a = Auth::user();
        // $a->notify(new TestMail);
        // return view('pages.backoffice.commande.create');
    }

    public function store(Request $request)
    {
        //
    }

     public function show(Commande $commande)
    {
        //
    }

    public function edit(Commande $commande)
    {
        //
    }

     public function update(Request $request, Commande $commande)
    {
        //
    }

   public function destroy(Commande $commande)
    {
        //
    }
}
