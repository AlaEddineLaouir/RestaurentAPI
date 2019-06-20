<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/login/employee','Auth\LoginController@showEmployeeLogin');
Route::post('/login/employee','Auth\LoginController@employeeLogin');
Route::post('/logout/employee',[
    'uses'=>'Auth\LoginController@employeeLogout',
    'as' => 'employee.logout'
]);

Route::view('/Employee', 'employee');
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth:employee']], function () {
    
    
    Route::get('command/onlineCommand', [
        'uses'=>'CommandViewController@commandOnline',
        'as'=>'command.onlineCommand',
    ]);

    Route::put('command/{command}/lanceTraitement',[
        'uses'=>'CommandController@lance',
        'as'=>'command.lance',
    ]);


    Route::put('command/{command}/lanceTraitement',[
        'uses'=>'CommandController@lance',
        'as'=>'command.lance',
    ]);

    Route::get('command/{command}/prete',[
        'uses'=>'CommandController@prete',
        'as'=>'command.prete',
    ]);
    Route::get('command/EnTraiter',[
        'uses'=>'CommandViewController@commandEnTraitement',
        'as'=>'command.Entraitement',
    ]);
    
    Route::get('command/{command}/valider', [
        'uses'=>'CommandController@valider',
        'as'=>'command.valider',
    ]);

    

    Route::resource('employee', 'EmployeeController');
    Route::resource('command', 'CommandController');
    
    
    
});
