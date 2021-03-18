<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class BordController extends Controller
{
    public function accueil()
    {
        return view('pages.backoffice.accueil',
            [
                'menus' => Menu::paginate(5),   
                'choixdujour' => Menu::inRandomOrder()->first()   
            ]
        );
    }


}
