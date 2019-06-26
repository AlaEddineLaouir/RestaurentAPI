@extends('layouts.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Liste Des Commande Servis a table
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Commande</th>
                    <th>Table</th>
                    <th>Servis</th>
                </thead>
                <tbody>
                    @foreach ($commands as $command)
                        <tr>
                            <td>{{$command->command}}</td>
                            <td>{{$command->table->placement}}</td>
                            <td>
                                <form action="{{route('command.servis',['command'=>$command->id])}}" method="post">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <button class="btn btn-success btn-sm">
                                        Servis
                                    </button>
                            
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection