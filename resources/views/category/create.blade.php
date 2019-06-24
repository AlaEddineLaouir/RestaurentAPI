@extends('layouts.employeeLayout')

@section('content')
    <div class="card">
        <div class="card-header">
            Ajouter Category
        </div>
        <div class="card-body">
            <form action="{{route('category.store')}}" method="post">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input type="text" class="form-control" id="name" name="title">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Ajouter</button>
                </div>

            </form>
        </div>
    </div>
@endsection