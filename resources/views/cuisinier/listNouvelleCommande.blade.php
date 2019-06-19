@extends('layout.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Liste Des Nouvelles Commandes
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Commande</th>
                    <th>Lancer Traitement</th>
                </thead>
                <tbody>
                    <tr>
                        <td>2 frite</td>
                        <td> <a href="" class="btn btn-primary btn-sm">Valide</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection