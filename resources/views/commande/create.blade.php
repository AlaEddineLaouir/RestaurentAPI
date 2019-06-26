@extends('layouts.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Ajouter Commande
        </div>
        <div class="card-body">
            <form action="{{route('command.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-groupe">
                    <label for="type">Type :</label>
                    <select class="custom-select" name="type">
                        <option selected value="0">A Table</option>
                        <option value="1">Empotrer</option>
                        <option value="2">Livrer A domicile</option>
                    </select>
                </div>
                <div class="form-groupe">
                    <label for="etat">Etat :</label>
                    <select class="custom-select" name="etat">
                        <option selected value="valide">Valide</option>
                        <option value="nonValide">Non Valide</option>
                        <option value="traitement">En Traitement</option>
                        <option value="prete">Prete</option>
                        <option value="servis">Servis</option>
                        <option value="livrer">En Livraison</option>
                        <option value="regler">Regler</option>   
                    </select>
                </div>
                <div class="form-groupe">
                    <label for="etat">Table :</label>
                    <select class="custom-select" name="table">
                       @foreach ($tables as $table)
                            <option value="{{$table->id}}">{{$table->id}} : {{$table->placement}}</option>
                       @endforeach   
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="commande">Commande :</label>
                    <textarea name="command" id="commande" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
@endsection