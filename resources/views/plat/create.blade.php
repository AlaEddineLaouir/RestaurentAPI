@extends('layout.employeeLayout')

@section('content')
    <div class="card">
        <div class="card-header">
            Ajouter Plat
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="from-group">
                    <label for="name">Name:</label>
                    <input type="text" class="from-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="category"> Category :</label>
                    <select class="custom-select">
                        <option selected value="1">Boisson</option>
                        <option value="2">Entere</option>
                        <option value="3">Salade</option>
                    </select>
                </div>
                <div class="from-group">
                    <label for="price">Price:</label>
                    <input type="text" class="from-control" id="price" name="price">
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