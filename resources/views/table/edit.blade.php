@extends('layouts.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Modifier table
        </div>
        <div class="card-body">
            <form action="{{route('table.update',['table'=>$table->id])}}" method="post">
                @method('PUT')
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="placement">Placement :</label>
                    <input type="text" class="form-control" name="placement" id="placement" value="{{$table->placement}}">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Modifier</button>
                </div>
            </form>
        </div>
    </div>
@endsection