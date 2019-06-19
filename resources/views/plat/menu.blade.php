@extends('layout.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Menu
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Desctiption</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <tr>
                        <td>french fries</td>
                        <td>Chaque jour</td>
                        <td>batata makliya b la3dame</td>
                        <td>150,00</td>
                        <td> <a href="" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                        <td> <a href="" class="btn btn-secondary btn-sm">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection