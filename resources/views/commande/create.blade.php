@extends('layout.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Ajouter Commande
        </div>
        <div class="card-body">
            <form action="" method="post">
                
                <div class="form-groupe">
                    <label for="type">Type :</label>
                    <select class="custom-select" name="type">
                        <option selected value="1">A Table</option>
                        <option value="2">Empotrer</option>
                        <option value="3">Livrer A domicile</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="table">Numero Table :</label>
                    <input type="text" class="form-control" name="table" id="table">
                </div>
                <div class="form-group">
                    <label for="commande">Commande :</label>
                    <textarea name="commande" id="commande" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
@endsection