<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandViewController extends Controller
{
    //
    public function commandOnline(){
        $commandOnline = Command::where('etat','=','nonValide')->all();
        return view('gestionnaire.listCommandeOnline')
                    ->with('commands',$commandOnline);
    }
    
}
