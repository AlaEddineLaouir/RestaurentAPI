@extends('layout.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Liste des table
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Numero</th>
                    <th>Emplacement</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <tr>
                        <td>11</td>
                        <td>dexieume etage 3eme table a droite</td>
                        <td> <a href="" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                        <td> <a href="" class="btn btn-secondary btn-sm">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection