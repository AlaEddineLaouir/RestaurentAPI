@extends('layout.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            List plat Disponible
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Name</th>
                    <th>Disponibiliter</th>
                </thead>
                <tbody>
                    <tr>
                        <td>french fries</td>
                        <td> <a href="" class="btn btn-secondary btn-sm">Non Disponible</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection