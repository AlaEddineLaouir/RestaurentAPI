@extends('layouts.employeeLayout')
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
                    <th>Etat</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    @foreach ($tables as $table)
                        <tr>
                            <td>{{$table->id}}</td>
                            <td>{{$table->placement}}</td>
                            <td> 
                                @if ($table->occupied)
                                    Occuper
                                @else
                                    Libbre
                                @endif
                            </td>
                            <td> <a href="{{route('table.edit',['table'=>$table->id])}}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                            <td> 
                                <form action="{{route('table.destroy',['table'=>$table->id])}}" method="post">
                                    @method('DELETE')
                                    {{ csrf_field() }}
                                    <button class="btn btn-secondary btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection