@extends('layouts.employeeLayout')

@section('content')
    <div class="card">
        <div class="card-header">
            Ajouter Plat
        </div>
        <div class="card-body">
            <form action="{{route('plat.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="category"> Category :</label>
                    <select class="custom-select" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Ajouter</button>
                </div>

            </form>
        </div>
    </div>
@endsection