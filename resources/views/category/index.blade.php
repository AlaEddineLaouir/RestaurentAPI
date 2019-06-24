@extends('layouts.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Liste Des Category
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Title</th>
                    <th>Plats</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                         <tr>
                            <td>{{$category->title}}</td>
                            <td> <a href="{{route('category.show',['category'=>$category->id])}}" class="btn btn-success btn-sm">Plats</a>
                            </td>
                            <td> <a href="{{route('category.edit',['category'=>$category->id])}}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                                <td> 
                                    <form action="{{route('category.destroy',['category'=>$category->id])}}" method="post">
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