@extends('layouts.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Liste Des Commande On Ligne
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                   
                    <th>Commande</th>
                    <th>Valide</th>
                    <th>Invalide</th>
                </thead>
                <tbody>
                    @foreach ($commands as $command)
                    <tr>
                        <td>{{$command->command}}</td>
                        <td> <a href="/command/{{$command->id}}/valider" class="btn btn-primary btn-sm">Valide</a>
                        </td>
                        <td> 
                            <form action="{{route('command.destroy',['command',$command->id])}}" method="post">
                                @method('DELETE')
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-secondary btn-sm">Delete</button>
                                
                            </form>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection