<?php

namespace App\Http\Controllers;

use App\Command;
use App\Table;
use Illuminate\Http\Request;

class CommandController extends Controller
{

    protected $commandTypes=['table','emporter','livrer'];


   
   

    public function create()
    {
        return view('commande.create')->with('tables',Table::where('occupied','is','false')->get());
    }

   

    public function store(Request $request)
    {
        $this->validate($request,[
            'type'=>'required',
            'command'=>'required',
            'etat'=>'required'
        ]);

       
        $command=Command::create([
            'type'=>$this->commandTypes[$request->type],
            'valide'=>true,
            'command'=>$request->command,
            'etat'=>$request->etat,
        ]);

        if($request->table)
        {
            $command->table_id=$request->table;
            $command->save();
        }


        return redirect()->back();
    }

    public function valider($command)
    {
        $commandObj=Command::find($command);

        $commandObj->etat='valide';

        $commandObj->update();

        return redirect()->back();
    }

    public function lance($command)
    {
        $commandObj=Command::find($command);

        $commandObj->etat='traitement';
         $commandObj->update();

        return redirect()->back();
    }

    public function livrer($command)
    {
        $commandObj=Command::find($command);

        $commandObj->etat='livrer';
         $commandObj->update();

        return redirect()->back();
    }

    public function serve($command)
    {
        $commandObj=Command::find($command);

        $commandObj->etat='servis';


        $commandObj->update();

        return redirect()->back();
    }

    public function prete($command)
    {
        $commandObj=Command::find($command);

        $commandObj->etat='prete';
        $commandObj->update();

        return redirect()->back();
    }

    public function regler($command)
    {
        $commandObj=Command::find($command);

        $commandObj->etat='regler';


        $commandObj->update();

        return redirect()->back();
    }


    
    

    public function edit($command)
    {
        $commandObj = Command::find($command);

        return view('commande.edit');
    }
    public function update(Request $request, $command)
    {
        $this->validate($request,[
            'type'=>'required',
            'command'=>'required',
            'etat'=>'required'
        ]);

        $commandObj = Command::find($command);

        $commandObj->type=$this->commandTypes[$request->type];
        $commandObj->etat=$request->etat;
        $commandObj->command=$request->command;

        $commandObj->update();

        return redirect()->back();
    }

    public function destroy($command)
    {
        dd($command);
        $commandObj = Command::find($command);

        $commandObj->destroy();

        return redirect()->back();
    }
}
