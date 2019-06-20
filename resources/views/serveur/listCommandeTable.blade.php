@extends('layout.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Liste Des Commande Servis a table
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Commande</th>
                    <th>Regler</th>
                </thead>
                <tbody>
                    @foreach ($commands as $command)
                        <tr>
                            <td>{{$command->command}}</td>
                            <td> <a href="/command/{{$command->id}}/regler" class="btn btn-success btn-sm">Regler</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection