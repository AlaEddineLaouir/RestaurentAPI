@extends('layout.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Liste Des Employee
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Name</th>
                    <th>Phone & Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Mehdi</td>
                        <td>0541-86-35-92 mehdi@gmail.com</td>
                        <td>123456</td>
                        <td>Adminstrateur</td>
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