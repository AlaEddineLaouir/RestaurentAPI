@extends('layouts.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Liste Des Employee
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                         <tr>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->phone}}</td>
                            <td>{{$employee->role}}</td>
                            <td> <a href="{{route('employee.edit',['employee'=>$employee->id])}}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                            @if (Auth::guard('employee')->id() !== $employee->id)
                                <td> 
                                    <form action="{{route('employee.destroy',['employee'=>$employee->id])}}" method="post">
                                        @method('DELETE')
                                        <button class="btn btn-secondary btn-sm">Delete</button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection