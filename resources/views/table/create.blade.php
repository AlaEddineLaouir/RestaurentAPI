@extends('layouts.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Ajouter une table
        </div>
        <div class="card-body">
            <form action="{{route('table.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="placement">Placement :</label>
                    <input type="text" class="form-control" name="placement" id="placement">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
@endsection