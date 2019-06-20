@extends('layout.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Liste Des Commandes en traitemnt
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Commande</th>
                    <th>Prete</th>
                </thead>
                <tbody>
                    @foreach ($commands as $command)
                    <tr>
                        <td>{{$command->command}}</td>
                        <td>
                            <form action="{{route('command.prete',['command'=>$command->id])}}" method="post">
                                @method('PUT')
                                {{ csrf_field() }}
                                
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection