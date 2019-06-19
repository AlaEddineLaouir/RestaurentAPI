@extends('layout.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Liste Des Commande Prete a livrer
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    
                    
                    <th>Numero Commande</th>
                    <th>Commande</th>
                    <th>Regler</th>
                </thead>
                <tbody>
                    <tr>
                        <td>12</td>
                        <td>etage 1 salle 2 , 3m table gauche</td>
                        <td> <a href="" class="btn btn-primary btn-sm">Regler</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection