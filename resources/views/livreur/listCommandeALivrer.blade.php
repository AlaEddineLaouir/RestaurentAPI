@extends('layout.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Liste Des Commande Prete a livrer
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    
                    <th>Command</th>
                    <th>Prend En charge</th>
                </thead>
                <tbody>
                    @foreach ($commands as $command)
                    <tr>
                        <td>{{$command->command}}</td>
                        <td>
                            <form action="{{route('command.livrer',['command'=>$command->id])}}" method="post">
                                {{ csrf_field() }}
                                @method('PUT')
                                <button class="btn btn-success btn-sm">
                                    Livrer
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