@extends('layout.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Liste Des Commande Servis a table
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Numero Table</th>
                    <th>Emplacement Table</th>
                    <th>Commande</th>
                    <th>Regler</th>
                </thead>
                <tbody>
                    <tr>
                        <td>12</td>
                        <td>etage 1 salle 2 , 3m table gauche</td>
                        <td>2 frite</td>
                        <td> <a href="" class="btn btn-primary btn-sm">Valide</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection