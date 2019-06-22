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

    public function commandTraiter()
    {
        $commandTraiter = Command::where('etat','=','valide')->get();
        return view('cuisinier.listNouvelleCommande')
             ->with('commands',$commandTraiter); 
    }
    public function commandEnTraitement()
    {
        $commandTraiter = Command::where('etat','=','traitement')->get();
        return view('cuisinier.listCommandeEnTraitement')
             ->with('commands',$commandTraiter); 
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
