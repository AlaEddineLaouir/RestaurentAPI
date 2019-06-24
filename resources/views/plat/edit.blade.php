@extends('layouts.employeeLayout')

@section('content')
    <div class="card">
        <div class="card-header">
            Modifier Plat
        </div>
        <div class="card-body">
            <form action="{{route('plat.update',['plat'=>$plat->id])}}" method="post">
                @method('PUT')
                {{ csrf_field() }}


                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$plat->name}}">
                </div>
                <div class="form-group">
                    <label for="category"> Category :</label>
                    <select class="custom-select" name="category_id" >
                        @foreach ($categories as $category)
                            @if ($category->id == $plat->category->id)
                                <option selected value="{{$category->id}}">{{$category->title}}</option>
                            @else
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="frorm-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$plat->price}}" >
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">
                        {{$plat->description}}
                    </textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Ajouter</button>
                </div>

            </form>
        </div>
    </div>
@endsection