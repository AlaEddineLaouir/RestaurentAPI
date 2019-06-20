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
    public function commandOnTable()
    {
        $commandOnTable=Command::where('type','=','table')->wehre('etat','!=','servis')->get();
        return view('serveur.listCommandeTable')->with('commands',$commandOnTable);
    }
}
