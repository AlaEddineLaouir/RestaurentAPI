<?php

namespace App\Http\Controllers;

use App\Command;
use Illuminate\Http\Request;

class CommandViewController extends Controller
{
    //
    public function commandOnline(){
        $commandOnline = Command::where('etat','=','nonValide')->get();
        return view('gestionnaire.listCommandeOnline')
                    ->with('commands',$commandOnline);
    }
    public function commandOnTable()
    {
        $commandOnTable=Command::where('type','=','table')->where('etat','=','servis')->get();
        return view('serveur.listCommandeTable')->with('commands',$commandOnTable);
    }
    public function commandToServe()
    {
        $commandPrete=Command::where('type','=','table')->where('etat','=','prete')->get();
        return view('serveur.listCommandPreteServir')->with('commands',$commandPrete);
    }
}
