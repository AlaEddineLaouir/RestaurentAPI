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
    return view('welcome')->with('categories',App\Category::all());
});

Auth::routes();


Route::get('/login/employee','Auth\LoginController@showEmployeeLogin');
Route::post('/login/employee','Auth\LoginController@employeeLogin');
Route::post('/logout/employee',[
    'uses'=>'Auth\LoginController@employeeLogout',
    'as' => 'employee.logout'
]);

Route::view('/Employee', 'employee')->middleware('auth:employee');
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth:employee']], function () {
    
    
    Route::get('command/onlineCommand', [
        'uses'=>'CommandViewController@commandOnline',
        'as'=>'command.onlineCommand',
    ]);

    
    Route::get('command/Atraiter', [
        'uses'=>'CommandViewController@commandTraiter',
        'as'=>'command.Atraiter'
    ]);


    Route::put('command/{command}/lanceTraitement',[
        'uses'=>'CommandController@lance',
        'as'=>'command.lance',
    ]);



    Route::put('command/{command}/lanceTraitement',[
        'uses'=>'CommandController@lance',
        'as'=>'command.lance',
    ]);


    Route::put('command/{command}/prete',[
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

    Route::get('command/commandOnTable',[
        'uses'=>'CommandViewController@commandOnTable',
        'as'=>'command.table',
    ]);
    Route::get('command/commandServir',[
        'uses'=>'CommandViewController@commandToServe',
        'as'=>'command.servi',
    ]);
    Route::put('command/{command}/regler', [
        'uses'=>'CommandController@regler',
        'as'=>'command.regler',
    ]);
    Route::put('command/{command}/servis', [
        'uses'=>'CommandController@serve',
        'as'=>'command.servis',
    ]);


    Route::get('command/Alivrer',[
        'uses'=>'CommandViewController@Alivrer',
        'as'=>'command.Alivrer',
    ]);

    Route::get('command/Enlivraison', [
        'uses'=>'CommandViewController@Enlivraison',
        'as'=>'command.Enlivraison',
    ]);
    Route::put('command/{command}/livrer',[
        'uses'=>'CommandController@livrer',
        'as'=>'command.livrer',
    ]);

    Route::get('command/caisse',[
        'uses'=>'CommandViewController@caisse',
        'as'=>'command.caisse'
    ]);
    
    Route::resource('employee', 'EmployeeController');
    Route::resource('command', 'CommandController');
    Route::resource('plat', 'PlatController');
    Route::resource('table', 'TableController');
    Route::resource('category', 'CategoryController');
    
    
    
});
