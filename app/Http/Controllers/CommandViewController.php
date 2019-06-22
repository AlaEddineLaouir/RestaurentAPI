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
        $commandPrete=Command::where('type','!=','livrer')->where('etat','=','prete')->get();
        return view('serveur.listCommandPreteServir')->with('commands',$commandPrete);
    }

    public function Alivrer()
    {
        $commandPrete=Command::where('type','=','livrer')->where('etat','=','prete')->get();
        return view('livreur.listCommandALivrer')->with('commands',$commandPrete);
    
    }
    public function Enlivraison()
    {
        $commandPrete=Command::where('type','=','livrer')->where('etat','=','livrer')->get();
        return view('livreur.listCommandEnLivraison')->with('commands',$commandPrete);
    }

    public function caisse()
    {
        $commandAPayer=Command::where('etat','=','servis')->get();
        return view('caissier.listCommandeServis')->with('commands',$commandAPayer);   
    }
}
