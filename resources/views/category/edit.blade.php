@extends('layouts.employeeLayout')

@section('content')
    <div class="card">
        <div class="card-header">
            Modifier Category
        </div>
        <div class="card-body">
            <form action="{{route('category.update',['category'=>$category->id])}}" method="post">
                
                @method('PUT')
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input type="text" class="form-control" id="name" name="title" value="{{$category->title}}">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Modifier</button>
                </div>

            </form>
        </div>
    </div>
@endsection