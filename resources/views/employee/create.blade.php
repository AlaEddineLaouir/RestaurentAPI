@extends('layouts.employeeLayout')
@section('content')
    <div class="card">
        <div class="card-header">
            Ajouter Employee
        </div>
        <div class="card-body">
            <form action="{{route('employee.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name :</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone :</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="role">
                        <option selected value="1">Serveur</option>
                        <option value="5">Livreur</option>
                        <option value="4">Caissier</option>
                        <option value="2">Chef cuisineir</option>
                        <option value="3">Gestionnaire de commande</option>
                        <option value="0">Adminstrateur</option>
                    </select>        
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="text" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection