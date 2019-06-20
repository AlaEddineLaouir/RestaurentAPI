@extends('layouts.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Liste Des Nouvelles  Commandes a traiter
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Commande</th>
                    <th>Lancer Traitement</th>
                </thead>
                <tbody>
                    @foreach ($commands as $command)
                    <tr>
                        <td>{{$command->command}}</td>
                        <td>
                            <form action="{{route('command.lance',['command'=>$command->id])}}" method="post">
                                {{ csrf_field() }}
                                @method('PUT')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection