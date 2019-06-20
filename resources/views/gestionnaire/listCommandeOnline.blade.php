@extends('layout.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Liste Des Commande On Ligne
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Client</th>
                    <th>Adress Livraison</th>
                    <th>Commande</th>
                    <th>Valide</th>
                    <th>Invalide</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Mehdi 0541-86-35-92 mehdi@gmail.com</td>
                        <td>El Khroube Constantine</td>
                        <td>2 frite</td>
                        <td> <a href="" class="btn btn-primary btn-sm">Valide</a>
                        </td>
                        <td> <a href="" class="btn btn-secondary btn-sm">Invalide</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection