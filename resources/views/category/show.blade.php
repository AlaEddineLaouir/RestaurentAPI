@extends('layouts.employeeLayout')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <h2>Category  :  <strong>{{$category->title}}</strong></h2>
        </div>
        <div class="card-body">
                <div class="card-header">
                        <h3>List plat <a href="{{route('plat.create')}}" class="btn btn-primary float-right">Ajouter Plat</a></h3>   
                </div>
                <br>
                <table class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Desctiption</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach ($category->plats as $plat)
                            <tr>
                                    <td>{{$plat->name}}</td>
                                    <td>{{$plat->description}}</td>
                                    <td>{{$plat->price}}</td>

                                    <td> <a href="{{route('plat.edit',['plat'=>$plat->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    
                                    <td> 
                                        <form action="{{route('plat.destroy',['plat'=>$plat->id])}}" method="post">
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